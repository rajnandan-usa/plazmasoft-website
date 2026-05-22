# Copy this to deploy.config.ps1 and fill in your Hostinger FTP credentials.
# deploy.config.ps1 is gitignored -- never commit the real file.
# Find credentials: Hostinger hPanel > Files > FTP Accounts

$FTP_SERVER    = "ftp://your-server-ip-or-hostname"   # e.g. ftp://147.93.109.175
$FTP_USER      = "your-ftp-username"                   # e.g. u411863014.plazmasoft.com
$FTP_PASS      = "your-ftp-password"
$REMOTE_DIR    = ""                                    # Leave empty -- Hostinger FTP root = public_html
$DEPLOY_SECRET = "change-this-to-a-random-secret"     # Used to protect the post-deploy.php endpoint
