# Deployment Guide

Production host: Hostinger shared hosting  
Domain: plazmasoft.com  
Stack: PHP 8.2, MySQL, Laravel 11

---

## First-time setup

### 1. Production .env

On Hostinger, create the `.env` file in the project root using `.env.deploy.example` as the template:

```
cp .env.deploy.example .env
```

Fill in: `APP_KEY`, `DB_PASSWORD`, `MAIL_PASSWORD`, `DEPLOY_SECRET`.  
Generate APP_KEY locally: `php artisan key:generate --show`

### 2. FTP deploy config

```
cp deploy.config.example.ps1 deploy.config.ps1
```

Fill in FTP credentials from Hostinger hPanel > Files > FTP Accounts.  
Add your `DEPLOY_SECRET` (must match the value in production `.env`).

### 3. Database

Create the database in Hostinger hPanel > Databases. The credentials go in `.env`.

Run migrations and seeders on first deploy via post-deploy.php (see below).

---

## Deploying

```powershell
.\deploy.ps1
```

This will:
1. Run `composer install --no-dev`
2. Run `npm run build`
3. Diff against the last deployed commit and upload only changed files
4. Upload `post-deploy.php` to trigger server-side artisan commands

After the script finishes, visit:

```
https://plazmasoft.com/post-deploy.php?key=YOUR_DEPLOY_SECRET
```

This runs:
- `php artisan migrate --force`
- `php artisan config:cache`
- `php artisan route:cache`
- `php artisan view:cache`
- `php artisan sitemap:generate`

**Important:** The post-deploy endpoint is protected by the `DEPLOY_SECRET` key. Keep this secret.

---

## First deploy (seeding)

After the first deploy, connect to the production database via SSH or phpMyAdmin and run:

```
php artisan db:seed --class=SettingSeeder
```

Do NOT run `RealDataSeeder` on production -- it creates test data and overwrites the admin password.  
Instead, create the admin user manually:

```
php artisan tinker
App\Models\User::create(['name'=>'Rajnandan Kushwaha','email'=>'rajnandanweb@gmail.com','password'=>bcrypt('your-secure-password'),'role'=>'admin']);
```

---

## Sitemap

The sitemap is generated automatically on each deploy via `post-deploy.php`.  
You can also regenerate manually:

```
php artisan sitemap:generate
```

Submit to Google Search Console: `https://plazmasoft.com/sitemap.xml`

---

## File permissions (Hostinger)

Storage and bootstrap/cache must be writable:

```
chmod -R 775 storage bootstrap/cache
```

Hostinger usually sets this correctly. If you get permission errors, set via hPanel > File Manager.

---

## Skipped files on deploy

These are never uploaded by `deploy.ps1`:

- `.git/`, `.github/`
- `node_modules/`, `vendor/`
- `.env`, `deploy.config.ps1`
- `tests/`
- `storage/logs/`, `storage/framework/cache|sessions|views`
- Markdown planning files
