# Plazmasoft deploy script -- Hostinger FTP (smart deploy)
# Usage: .\deploy.ps1
# Prerequisites: deploy.config.ps1 in the same directory (gitignored)
#
# First deploy:      set $UPLOAD_VENDOR = $true in deploy.config.ps1
# Subsequent deploys: set $UPLOAD_VENDOR = $false

$ErrorActionPreference = "Continue"
$DEPLOY_MARKER = ".last-deploy-commit"

if (-not (Test-Path "deploy.config.ps1")) {
    Write-Host "ERROR: deploy.config.ps1 not found. Copy deploy.config.example.ps1 and fill in credentials." -ForegroundColor Red
    exit 1
}
. .\deploy.config.ps1

$FTP_SERVER = $FTP_SERVER -replace "^ftp://", ""

# Default to $false if not set in config
if (-not (Get-Variable -Name UPLOAD_VENDOR -ErrorAction SilentlyContinue)) {
    $UPLOAD_VENDOR = $false
}

Write-Host ""
Write-Host "=== Plazmasoft Deploy ===" -ForegroundColor Cyan
Write-Host "Target      : ftp://$FTP_SERVER$REMOTE_DIR" -ForegroundColor Gray
Write-Host "Upload vendor: $UPLOAD_VENDOR" -ForegroundColor Gray
Write-Host ""

# Step 1: Composer install (production, no dev)
Write-Host "[1/6] Composer install (no-dev)..." -ForegroundColor Yellow
composer install --no-dev --optimize-autoloader --no-interaction --quiet
if ($LASTEXITCODE -ne 0) { Write-Host "Composer failed." -ForegroundColor Red; exit 1 }
Write-Host "      Done." -ForegroundColor Green

# Step 2: NPM build
Write-Host "[2/6] NPM build..." -ForegroundColor Yellow
npm ci --silent
if ($LASTEXITCODE -ne 0) { Write-Host "npm ci failed." -ForegroundColor Red; exit 1 }
npm run build
if ($LASTEXITCODE -ne 0) { Write-Host "npm run build failed." -ForegroundColor Red; exit 1 }
Write-Host "      Done." -ForegroundColor Green

# Step 3: Determine changed files
Write-Host "[3/6] Calculating diff..." -ForegroundColor Yellow

$currentCommit = git rev-parse HEAD
$fullDeploy = $false
$changedFiles = @()

if (Test-Path $DEPLOY_MARKER) {
    $lastCommit = (Get-Content $DEPLOY_MARKER -Raw).Trim()
    Write-Host "      Last deployed : $lastCommit" -ForegroundColor Gray
    Write-Host "      Current commit: $currentCommit" -ForegroundColor Gray

    if ($lastCommit -eq $currentCommit -and -not $UPLOAD_VENDOR) {
        Write-Host "      Nothing new to deploy." -ForegroundColor Yellow
        exit 0
    }

    $changedFiles = @(git diff --name-only $lastCommit $currentCommit 2>&1) | Where-Object { $_ -is [string] -and $_.Trim() -ne "" }
    Write-Host "      $($changedFiles.Count) git-tracked files changed." -ForegroundColor Cyan
} else {
    Write-Host "      No marker found -- full deploy." -ForegroundColor Yellow
    $fullDeploy = $true
}

# Files that are NEVER uploaded (sensitive, local-only, or generated on server)
$alwaysSkip = @(
    ".git",
    ".github",
    ".claude",
    "node_modules",
    "deploy.ps1",
    "deploy.config.ps1",
    "deploy.config.example.ps1",
    ".env",
    ".env.example",
    ".env.deploy.example",
    ".last-deploy-commit",
    "phpunit.xml",
    "README.md",
    "DEPLOYMENT.md",
    "tests",
    "Plazmasoft complete rebuild prompt.md",
    "plazmasoft-fix-prompt.md",
    "storage\logs",
    "storage\framework\cache",
    "storage\framework\sessions",
    "storage\framework\views",
    "storage\framework\testing",
    "public\build"     # uploaded separately in step 5
)

function Should-Skip($p) {
    # Always skip vendor unless UPLOAD_VENDOR is set
    if (-not $UPLOAD_VENDOR) {
        if ($p -eq "vendor" -or $p.StartsWith("vendor\")) { return $true }
    }
    foreach ($pat in $alwaysSkip) {
        $n = $pat.Replace("/", "\")
        if ($p -eq $n) { return $true }
        if ($p.StartsWith($n + "\")) { return $true }
    }
    return $false
}

function Upload-File($rel) {
    $parts   = $rel.Replace("\", "/") -split "/"
    $encoded = $parts | ForEach-Object { [Uri]::EscapeDataString($_) }
    $ftpUrl  = "ftp://" + $FTP_SERVER + $REMOTE_DIR + "/" + ($encoded -join "/")
    curl.exe -s -S --ftp-create-dirs -T $rel $ftpUrl --user ($FTP_USER + ":" + $FTP_PASS) 2>&1 | Out-Null
    return $LASTEXITCODE -eq 0
}

function Upload-Dir($dir) {
    $files = Get-ChildItem -Path $dir -Recurse -File
    $u = 0; $f = 0
    foreach ($file in $files) {
        $rel = $file.FullName.Substring((Get-Location).Path.Length + 1)
        if (Upload-File $rel) { Write-Host "      OK   $rel" -ForegroundColor Green; $u++ }
        else                  { Write-Host "      FAIL $rel" -ForegroundColor Red;   $f++ }
    }
    return @($u, $f)
}

# Step 4: Upload git-tracked changed files (or all on full deploy)
Write-Host "[4/6] FTP upload (git-tracked files)..." -ForegroundColor Yellow
$uploaded = 0
$skipped  = 0
$failed   = 0
$localRoot = (Get-Location).Path

if ($fullDeploy) {
    $allFiles = Get-ChildItem -Path $localRoot -Recurse -File
    foreach ($file in $allFiles) {
        $rel = $file.FullName.Substring($localRoot.Length + 1)
        if (Should-Skip $rel) { $skipped++; continue }
        if (Upload-File $rel) { Write-Host "      OK   $rel" -ForegroundColor Green; $uploaded++ }
        else                  { Write-Host "      FAIL $rel" -ForegroundColor Red;   $failed++ }
    }
} else {
    foreach ($f in $changedFiles) {
        $rel = $f.Trim().Replace("/", "\")
        if (-not $rel) { continue }
        if (Should-Skip $rel) { $skipped++; continue }
        if (-not (Test-Path $rel)) {
            Write-Host "      SKIP $rel (deleted)" -ForegroundColor Gray
            $skipped++
            continue
        }
        if (Upload-File $rel) { Write-Host "      OK   $rel" -ForegroundColor Green; $uploaded++ }
        else                  { Write-Host "      FAIL $rel" -ForegroundColor Red;   $failed++ }
    }
}

# Step 5: Always upload public/build/ (Vite output -- gitignored but must be on server)
Write-Host "[5/6] Uploading public\build\ (Vite assets)..." -ForegroundColor Yellow
if (Test-Path "public\build") {
    $r = Upload-Dir "public\build"
    $uploaded += $r[0]; $failed += $r[1]
    Write-Host "      Done ($($r[0]) files)." -ForegroundColor Green
} else {
    Write-Host "      public\build not found -- run npm run build first." -ForegroundColor Red
}

# Step 6: Upload post-deploy.php trigger
Write-Host "[6/6] Uploading post-deploy runner..." -ForegroundColor Yellow
if (Test-Path "post-deploy.php") {
    if (Upload-File "post-deploy.php") {
        Write-Host "" -ForegroundColor Green
        if ($UPLOAD_VENDOR) {
            Write-Host "      FIRST DEPLOY -- visit:" -ForegroundColor Cyan
            Write-Host "      https://plazmasoft.com/post-deploy.php?key=$DEPLOY_SECRET&fresh=1" -ForegroundColor White
            Write-Host "      (drops old tables, migrates fresh, seeds settings)" -ForegroundColor Gray
        } else {
            Write-Host "      Run migrations at:" -ForegroundColor Cyan
            Write-Host "      https://plazmasoft.com/post-deploy.php?key=$DEPLOY_SECRET" -ForegroundColor White
        }
    }
}

# Save current commit as last deployed
$currentCommit | Out-File -FilePath $DEPLOY_MARKER -Encoding utf8 -NoNewline

Write-Host ""
Write-Host "=== Deploy Complete ===" -ForegroundColor Cyan
Write-Host "Uploaded : $uploaded" -ForegroundColor Green
Write-Host "Skipped  : $skipped"  -ForegroundColor Gray
if ($failed -gt 0) {
    Write-Host "Failed   : $failed -- re-run script or upload manually" -ForegroundColor Red
}
if ($UPLOAD_VENDOR) {
    Write-Host ""
    Write-Host "NEXT: Set `$UPLOAD_VENDOR = `$false in deploy.config.ps1 for future deploys." -ForegroundColor Yellow
}
Write-Host ""
