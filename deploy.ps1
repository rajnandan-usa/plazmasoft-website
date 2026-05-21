# Laravel Deploy Script - Hostinger FTP (Smart Deploy)
# Usage: .\deploy.ps1

$ErrorActionPreference = "Continue"
$DEPLOY_MARKER = ".last-deploy-commit"

if (-not (Test-Path "deploy.config.ps1")) {
    Write-Host "ERROR: deploy.config.ps1 nahi mila." -ForegroundColor Red
    exit 1
}
. .\deploy.config.ps1

$FTP_SERVER = $FTP_SERVER -replace "^ftp://", ""

Write-Host "=== Laravel Smart Deploy ===" -ForegroundColor Cyan

Write-Host "[1/4] Composer install..." -ForegroundColor Yellow
composer install --no-dev --optimize-autoloader --no-interaction
if ($LASTEXITCODE -ne 0) { Write-Host "Composer fail." -ForegroundColor Red; exit 1 }

Write-Host "[2/4] NPM build..." -ForegroundColor Yellow
npm ci
npm run build
if ($LASTEXITCODE -ne 0) { Write-Host "NPM build fail." -ForegroundColor Red; exit 1 }

Write-Host "[3/4] Changed files check..." -ForegroundColor Yellow

$currentCommit = git rev-parse HEAD
$fullDeploy = $false
$changedFiles = @()

if (Test-Path $DEPLOY_MARKER) {
    $lastCommit = (Get-Content $DEPLOY_MARKER -Raw).Trim()
    Write-Host "Last: $lastCommit" -ForegroundColor Gray
    Write-Host "Now : $currentCommit" -ForegroundColor Gray

    if ($lastCommit -eq $currentCommit) {
        Write-Host "Koi naya commit nahi. Deploy cancel." -ForegroundColor Yellow
        exit 0
    }

    $changedFiles = @(git diff --name-only $lastCommit $currentCommit 2>&1) | Where-Object { $_ -is [string] -and $_.Trim() -ne "" }
    Write-Host ("Changed: " + $changedFiles.Count + " files") -ForegroundColor Cyan
} else {
    Write-Host "Pehla deploy - saari files upload hongi." -ForegroundColor Yellow
    $fullDeploy = $true
}

$skipPatterns = @(
    ".git", ".github", "node_modules", "vendor", "deploy.ps1",
    "deploy.config.ps1", ".env", ".env.example", ".last-deploy-commit",
    "phpunit.xml", "README.md", "tests",
    "storage\logs", "storage\framework\cache",
    "storage\framework\sessions", "storage\framework\views"
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

Write-Host "[4/4] FTP Upload..." -ForegroundColor Yellow
$uploaded = 0
$skipped = 0
$failed = 0
$localRoot = (Get-Location).Path

if ($fullDeploy) {
    $allFiles = Get-ChildItem -Path $localRoot -Recurse -File
    foreach ($file in $allFiles) {
        $rel = $file.FullName.Substring($localRoot.Length + 1)
        if (Should-Skip $rel) { $skipped++; continue }
        if (Upload-File $rel) { Write-Host ("  OK   " + $rel) -ForegroundColor Green; $uploaded++ }
        else { Write-Host ("  FAIL " + $rel) -ForegroundColor Red; $failed++ }
    }
} else {
    foreach ($f in $changedFiles) {
        $rel = $f.Trim().Replace("/", "\")
        if (-not $rel) { continue }
        if (Should-Skip $rel) { $skipped++; continue }
        if (-not (Test-Path $rel)) { Write-Host ("  SKIP " + $rel + " (deleted)") -ForegroundColor Gray; $skipped++; continue }
        if (Upload-File $rel) { Write-Host ("  OK   " + $rel) -ForegroundColor Green; $uploaded++ }
        else { Write-Host ("  FAIL " + $rel) -ForegroundColor Red; $failed++ }
    }
}

$currentCommit | Out-File -FilePath $DEPLOY_MARKER -Encoding utf8 -NoNewline

Write-Host "=== Deploy Complete ===" -ForegroundColor Cyan
Write-Host ("Uploaded : " + $uploaded) -ForegroundColor Green
Write-Host ("Skipped  : " + $skipped) -ForegroundColor Gray
Write-Host ("Failed   : " + $failed) -ForegroundColor Red
