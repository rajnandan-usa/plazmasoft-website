# Plazmasoft deploy script -- Hostinger FTP (smart deploy)
# Usage: .\deploy.ps1
# Prerequisites: deploy.config.ps1 in the same directory (gitignored)

$ErrorActionPreference = "Continue"
$DEPLOY_MARKER = ".last-deploy-commit"

if (-not (Test-Path "deploy.config.ps1")) {
    Write-Host "ERROR: deploy.config.ps1 not found. Copy deploy.config.example.ps1 and fill in credentials." -ForegroundColor Red
    exit 1
}
. .\deploy.config.ps1

$FTP_SERVER = $FTP_SERVER -replace "^ftp://", ""

Write-Host ""
Write-Host "=== Plazmasoft Deploy ===" -ForegroundColor Cyan
Write-Host "Target: ftp://$FTP_SERVER$REMOTE_DIR" -ForegroundColor Gray
Write-Host ""

# Step 1: Composer install (production, no dev)
Write-Host "[1/5] Composer install (no-dev)..." -ForegroundColor Yellow
composer install --no-dev --optimize-autoloader --no-interaction --quiet
if ($LASTEXITCODE -ne 0) { Write-Host "Composer failed." -ForegroundColor Red; exit 1 }
Write-Host "      Done." -ForegroundColor Green

# Step 2: NPM build
Write-Host "[2/5] NPM build..." -ForegroundColor Yellow
npm ci --silent
if ($LASTEXITCODE -ne 0) { Write-Host "npm ci failed." -ForegroundColor Red; exit 1 }
npm run build
if ($LASTEXITCODE -ne 0) { Write-Host "npm run build failed." -ForegroundColor Red; exit 1 }
Write-Host "      Done." -ForegroundColor Green

# Step 3: Determine changed files
Write-Host "[3/5] Calculating diff..." -ForegroundColor Yellow

$currentCommit = git rev-parse HEAD
$fullDeploy = $false
$changedFiles = @()

if (Test-Path $DEPLOY_MARKER) {
    $lastCommit = (Get-Content $DEPLOY_MARKER -Raw).Trim()
    Write-Host "      Last deployed: $lastCommit" -ForegroundColor Gray
    Write-Host "      Current commit: $currentCommit" -ForegroundColor Gray

    if ($lastCommit -eq $currentCommit) {
        Write-Host "      Nothing new to deploy." -ForegroundColor Yellow
        exit 0
    }

    $changedFiles = @(git diff --name-only $lastCommit $currentCommit 2>&1) | Where-Object { $_ -is [string] -and $_.Trim() -ne "" }
    Write-Host "      $($changedFiles.Count) files changed." -ForegroundColor Cyan
} else {
    Write-Host "      No marker found -- full deploy." -ForegroundColor Yellow
    $fullDeploy = $true
}

$skipPatterns = @(
    ".git",
    ".github",
    "node_modules",
    "vendor",
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
    "storage\framework\testing"
)

function Should-Skip($p) {
    foreach ($pat in $skipPatterns) {
        $n = $pat.Replace("/", "\")
        if ($p -eq $n) { return $true }
        if ($p.StartsWith($n + "\")) { return $true }
    }
    return $false
}

function Upload-File($rel) {
    $encoded = ($rel.Replace("\", "/") -split "/") | ForEach-Object { [Uri]::EscapeDataString($_) }
    $ftpUrl = "ftp://" + $FTP_SERVER + $REMOTE_DIR + "/" + ($encoded -join "/")
    curl.exe -s -S --ftp-create-dirs -T $rel $ftpUrl --user ($FTP_USER + ":" + $FTP_PASS) 2>&1 | Out-Null
    return $LASTEXITCODE -eq 0
}

# Step 4: Upload files
Write-Host "[4/5] FTP upload..." -ForegroundColor Yellow
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
            Write-Host "      SKIP $rel (deleted on remote -- remove manually if needed)" -ForegroundColor Gray
            $skipped++
            continue
        }
        if (Upload-File $rel) { Write-Host "      OK   $rel" -ForegroundColor Green; $uploaded++ }
        else                  { Write-Host "      FAIL $rel" -ForegroundColor Red;   $failed++ }
    }
}

# Step 5: Upload post-deploy trigger file
Write-Host "[5/5] Triggering post-deploy script..." -ForegroundColor Yellow
if (Test-Path "post-deploy.php") {
    if (Upload-File "post-deploy.php") {
        Write-Host "      post-deploy.php uploaded -- visit https://plazmasoft.com/post-deploy.php?key=$DEPLOY_SECRET to run migrations." -ForegroundColor Cyan
    }
}

# Save current commit as last deployed
$currentCommit | Out-File -FilePath $DEPLOY_MARKER -Encoding utf8 -NoNewline

Write-Host ""
Write-Host "=== Deploy Complete ===" -ForegroundColor Cyan
Write-Host "Uploaded : $uploaded" -ForegroundColor Green
Write-Host "Skipped  : $skipped"  -ForegroundColor Gray
if ($failed -gt 0) {
    Write-Host "Failed   : $failed" -ForegroundColor Red
    Write-Host "Re-run the script or upload failed files manually." -ForegroundColor Yellow
}
Write-Host ""
