# Plazmasoft Complete Rebuild Master Prompt for Claude Code

## CONTEXT

You are rebuilding the entire Plazmasoft website (plazmasoft.com) on the existing Laravel project. The current site has a cloned template feel, fake team data, broken links, and weak design. We are doing a full ground up redesign with a modern, premium feel.

**Founder and identity:**
- Real founder: Rajnandan Kushwaha (Director, Kushwaha Webformat Private Limited)
- Registered entity: Kushwaha Webformat Private Limited
- Founded year shown on site: 2022
- Office presence: Mumbai and Patna (both addresses are admin editable from settings)
- The site represents a boutique studio with team presence across two cities, founded by Rajnandan

**Brand color (use everywhere as primary accent):** `#fb923c` (this is Tailwind orange-400, build a full shade ramp around it)

**Logo:** Keep the existing logo file at `public/web-assets/images/logo1.png`. Do not redesign the logo.

## NON NEGOTIABLE CONTENT RULE

Do not use em dashes (the long dash character) anywhere in:
- Website copy
- Admin UI labels
- Code comments
- Documentation

Use commas, periods, parentheses, colons, or rephrase the sentence. This includes copy you write, content you seed into the database, and any code comments. If you find yourself reaching for a long dash, rewrite the sentence. Hyphens in compound words like "full-stack" are fine. The forbidden character is the em dash.

The site copy should read like a real human wrote it, not like AI generated marketing fluff. Use contractions (we're, you'll, it's), short sentences, concrete examples. Avoid words like "leverage", "synergy", "revolutionary", "cutting-edge", "world-class". Replace them with what you actually mean.

---

## STEP 0: SAFETY AND PROJECT SETUP

1. Create a new git branch:
   ```bash
   git checkout -b rebuild/2026-premium
   ```

2. Take a full database dump and back it up to a `backups/` folder. Do not commit this folder to git, but keep it locally and on a separate machine.

3. List current state for reference (do not delete anything yet):
   ```bash
   php artisan route:list > _pre-rebuild/routes.txt
   find resources/views -name "*.blade.php" > _pre-rebuild/views.txt
   find database/migrations -name "*.php" > _pre-rebuild/migrations.txt
   ```

4. Verify Laravel version. Upgrade to Laravel 11 if not already on it. Verify PHP 8.2 or higher.

5. Confirm the following packages are installed (install if missing):
   ```bash
   composer require filament/filament:"^3.2"
   composer require spatie/laravel-sitemap
   composer require spatie/laravel-medialibrary
   composer require intervention/image
   composer require spatie/laravel-honeypot
   ```

6. Install Tailwind CSS, Alpine.js, Vite if not already configured:
   ```bash
   npm install -D tailwindcss postcss autoprefixer @tailwindcss/typography @tailwindcss/forms
   npm install alpinejs
   ```

---

## STEP 1: NUKE OLD MIGRATIONS AND BUILD FRESH SCHEMA

### 1.1 Delete all existing migration files

```bash
rm -f database/migrations/*.php
```

Keep the `database/migrations` folder itself, just empty it.

### 1.2 Drop all tables and start clean

Run:
```bash
php artisan db:wipe --force
```

### 1.3 Create the new migration set

Generate migrations in this order (so foreign keys resolve correctly):

```bash
php artisan make:migration create_users_table
php artisan make:migration create_password_reset_tokens_table
php artisan make:migration create_sessions_table
php artisan make:migration create_settings_table
php artisan make:migration create_clients_table
php artisan make:migration create_service_categories_table
php artisan make:migration create_services_table
php artisan make:migration create_solutions_table
php artisan make:migration create_project_categories_table
php artisan make:migration create_projects_table
php artisan make:migration create_project_images_table
php artisan make:migration create_testimonials_table
php artisan make:migration create_team_members_table
php artisan make:migration create_blog_categories_table
php artisan make:migration create_blog_tags_table
php artisan make:migration create_blog_posts_table
php artisan make:migration create_blog_post_tag_table
php artisan make:migration create_contact_submissions_table
php artisan make:migration create_newsletter_subscribers_table
php artisan make:migration create_faqs_table
php artisan make:migration create_process_steps_table
php artisan make:migration create_tech_stack_items_table
php artisan make:migration create_pages_table
php artisan make:migration create_media_table
```

### 1.4 Schema definitions

Use these schemas. Add `timestamps()` and `softDeletes()` where applicable.

**users:** standard Laravel users plus `role` enum (admin, editor), `phone`, `avatar_path`.

**settings:** flat key value store.
```
id, key (unique, string), value (text, nullable), type (enum: text, textarea, image, boolean, integer, json, email, phone, url), group (string, e.g. 'general', 'contact', 'social', 'seo', 'stats'), label (string), helper (text, nullable), sort_order (integer), is_public (boolean default true)
```

**clients:** for the trust bar (client logos).
```
id, name, logo_path, website_url (nullable), is_featured (boolean), sort_order
```

**service_categories:** `id, name, slug, sort_order`

**services:**
```
id, service_category_id (nullable FK), title, slug (unique), tagline (string, 200 chars), excerpt (text), description (longtext, rich), icon (string, lucide icon name), hero_image_path, tech_stack (json, array of strings), features (json, array of {title, description}), process_blurb (text), faq (json, array of {q, a}), meta_title, meta_description, og_image_path, is_published (boolean), sort_order, published_at (timestamp nullable)
```

**solutions:** Industry verticals (FinTech, Fleet, AI, AgriTech). Same shape as services. Keep this table even if only 4 entries exist.

**project_categories:** `id, name, slug, color (hex, for badge), sort_order`

**projects:**
```
id, project_category_id (FK), title, slug (unique), client_name (nullable), tagline (string), summary (text), problem (longtext), solution (longtext), outcome (longtext), tech_stack (json, array of strings), banner_image_path, logo_image_path (nullable), live_url (nullable, url), playstore_url (nullable, url), appstore_url (nullable, url), github_url (nullable, url), region (string, e.g. "India", "UAE"), industry (string), duration_from (date), duration_to (date, nullable), team_size (integer, nullable), is_featured (boolean), is_published (boolean), sort_order, meta_title, meta_description, published_at
```

**project_images:** Gallery images for project detail pages.
```
id, project_id (FK, cascade), image_path, caption (nullable), sort_order
```

**testimonials:**
```
id, project_id (FK, nullable), author_name, author_role, author_company, author_location (nullable), author_avatar_path (nullable), quote (text), rating (integer, 1 to 5, nullable), is_featured (boolean), sort_order, is_published
```

**team_members:**
```
id, name, role, bio (text), avatar_path, email (nullable), linkedin_url (nullable), github_url (nullable), twitter_url (nullable), sort_order, is_published, is_founder (boolean)
```
Seed only one row for now: Rajnandan as founder.

**blog_categories:** `id, name, slug (unique), description (nullable), color (hex), sort_order`

**blog_tags:** `id, name, slug (unique)`

**blog_posts:**
```
id, blog_category_id (FK), user_id (FK to users, author), title, slug (unique), excerpt (text, 280 chars max), content (longtext, rich), cover_image_path, og_image_path (nullable), reading_time (integer, minutes), meta_title, meta_description, meta_keywords (nullable), is_featured (boolean), is_published (boolean), view_count (integer default 0), published_at (timestamp, nullable)
```

**blog_post_tag:** pivot, `blog_post_id`, `blog_tag_id`.

**contact_submissions:** All lead form data lands here.
```
id, name, email, phone (nullable), company (nullable), project_type (enum: web_app, mobile_app, ai_integration, mvp, maintenance, ui_ux, other), budget_range (enum: under_5k, 5k_15k, 15k_30k, 30k_plus, not_sure), message (text), attachment_path (nullable), source (string, e.g. 'home_hero_cta', 'contact_page', 'service_page', 'blog_sidebar'), source_url (nullable), ip_address, user_agent, status (enum: new, contacted, qualified, won, lost, spam), admin_notes (text, nullable), created_at, updated_at
```

**newsletter_subscribers:**
```
id, email (unique), source (string), is_confirmed (boolean), confirmed_at (timestamp, nullable), unsubscribed_at (nullable), created_at
```

**faqs:** Site wide FAQs grouped by page.
```
id, question, answer (text), group (string, e.g. 'home', 'services', 'pricing', 'general'), sort_order, is_published
```

**process_steps:** Editable from admin.
```
id, step_number (integer), title, description (text), icon (lucide name), sort_order
```

**tech_stack_items:** The logos shown in "Our Tech Stack" section.
```
id, name, category (enum: frontend, backend, mobile, language, framework, database, devops, ai), logo_path, sort_order, is_featured
```

**pages:** For static pages like Privacy Policy, Terms, About sections that need editing without code changes.
```
id, title, slug (unique), content (longtext, rich), meta_title, meta_description, og_image_path, is_published, updated_at
```

**media:** Spatie media library handles this automatically. Run the package install migration.

### 1.5 Run all migrations fresh

```bash
php artisan migrate:fresh
```

---

## STEP 2: SETTINGS SYSTEM (admin driven)

All site wide content that changes occasionally (phone, email, address, social URLs, hero stats, default SEO) lives in the `settings` table and is editable from admin.

### 2.1 Create a Setting model with helper accessor

```php
// app/Models/Setting.php
class Setting extends Model {
    protected $fillable = ['key', 'value', 'type', 'group', 'label', 'helper', 'sort_order', 'is_public'];

    public static function get(string $key, $default = null) {
        return Cache::rememberForever("setting.$key", function () use ($key, $default) {
            return self::where('key', $key)->value('value') ?? $default;
        });
    }

    public static function set(string $key, $value): void {
        self::where('key', $key)->update(['value' => $value]);
        Cache::forget("setting.$key");
    }
}
```

### 2.2 Global helper function

Add to `app/helpers.php` (autoload via composer.json):
```php
if (! function_exists('setting')) {
    function setting(string $key, $default = null) {
        return App\Models\Setting::get($key, $default);
    }
}
```

### 2.3 Seed initial settings

Create `database/seeders/SettingSeeder.php` with these keys (group, key, type, label, default value):

```
general / site_name / text / "Site Name" / "Plazmasoft"
general / site_tagline / text / "Tagline" / "We ship web and mobile apps that work."
general / legal_name / text / "Legal Name" / "Kushwaha Webformat Private Limited"
general / founded_year / text / "Founded Year" / "2022"
general / team_size / text / "Team Size Display (e.g., 8+)" / "8+"
general / hq_office / text / "Headquarters (mumbai or patna)" / "mumbai"

contact / phone_primary / phone / "Primary Phone" / "+91 7903292066"
contact / phone_secondary / phone / "Secondary Phone (optional)" / ""
contact / whatsapp_number / phone / "WhatsApp Number" / "917903292066"
contact / email_sales / email / "Sales Email" / "hello@plazmasoft.com"
contact / email_support / email / "Support Email" / "support@plazmasoft.com"
contact / office_mumbai_label / text / "Mumbai Office Label" / "Mumbai Office"
contact / office_mumbai_address / textarea / "Mumbai Office Address" / "Andheri West, Mumbai 400053, Maharashtra, India"
contact / office_mumbai_phone / phone / "Mumbai Office Phone" / "+91 7903292066"
contact / office_mumbai_map_embed / url / "Mumbai Office Map Embed URL" / ""
contact / office_mumbai_is_active / boolean / "Show Mumbai Office on site" / "1"

contact / office_patna_label / text / "Patna Office Label" / "Patna Office"
contact / office_patna_address / textarea / "Patna Office Address" / "Boring Road, Patna 800001, Bihar, India"
contact / office_patna_phone / phone / "Patna Office Phone" / "+91 7903292066"
contact / office_patna_map_embed / url / "Patna Office Map Embed URL" / ""
contact / office_patna_is_active / boolean / "Show Patna Office on site" / "1"

contact / working_hours / text / "Working Hours" / "Mon to Sat, 9 AM to 7 PM IST"

social / linkedin_url / url / "LinkedIn" / "https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/"
social / github_url / url / "GitHub" / "https://github.com/rajnandan-usa"
social / instagram_url / url / "Instagram" / ""
social / facebook_url / url / "Facebook" / ""
social / twitter_url / url / "Twitter / X" / ""
social / youtube_url / url / "YouTube" / ""

stats / years_experience / integer / "Years Experience" / "5"
stats / projects_delivered / integer / "Projects Delivered" / "18"
stats / happy_clients / integer / "Happy Clients" / "15"
stats / industries_served / integer / "Industries Served" / "7"

seo / default_meta_title / text / "Default Meta Title" / "Plazmasoft, Web and Mobile App Development Studio"
seo / default_meta_description / textarea / "Default Meta Description" / "Founder led studio shipping production grade web apps, mobile apps, and AI integrations for startups and growing businesses."
seo / default_og_image / image / "Default OG Image (1200x630)" / ""
seo / google_analytics_id / text / "Google Analytics 4 ID" / ""
seo / google_tag_manager_id / text / "Google Tag Manager ID" / "GTM-5968Z9LS"
seo / facebook_pixel_id / text / "Facebook Pixel ID" / ""

cta / hero_cta_primary_label / text / "Hero Primary CTA Text" / "Start Your Project"
cta / hero_cta_secondary_label / text / "Hero Secondary CTA Text" / "View Our Work"
cta / footer_cta_heading / text / "Footer CTA Heading" / "Have an idea? Let's build it."
cta / footer_cta_subtext / text / "Footer CTA Subtext" / "Tell us what you're working on. We reply within one business day."
```

Run:
```bash
php artisan db:seed --class=SettingSeeder
```

### 2.4 Inject settings into every Blade view via a View Composer

Create `app/Providers/ViewServiceProvider.php`:
```php
View::composer('*', function ($view) {
    $view->with('settings', Cache::rememberForever('all_public_settings', function () {
        return Setting::where('is_public', true)->pluck('value', 'key');
    }));
});
```

Now in any Blade you can do:
```blade
{{ $settings['phone_primary'] ?? '' }}
{{ setting('site_name') }}
```

---

## STEP 3: FILAMENT ADMIN PANEL SETUP

Filament v3 gives us a premium admin out of the box. Set it up at `/admin`.

### 3.1 Install and create the admin panel

```bash
php artisan filament:install --panels
php artisan make:filament-user
```

Follow prompts. Create the founder user (Rajnandan).

### 3.2 Brand the admin with our orange theme

In `app/Providers/Filament/AdminPanelProvider.php`:
```php
->colors([
    'primary' => Color::hex('#fb923c'),
])
->favicon(asset('web-assets/images/logo1.png'))
->brandLogo(asset('web-assets/images/logo1.png'))
->brandName('Plazmasoft Admin')
```

### 3.3 Generate Filament resources

Run these to scaffold admin pages for every model:
```bash
php artisan make:filament-resource Setting --generate
php artisan make:filament-resource Service --generate
php artisan make:filament-resource Solution --generate
php artisan make:filament-resource Project --generate
php artisan make:filament-resource ProjectCategory --generate
php artisan make:filament-resource Testimonial --generate
php artisan make:filament-resource TeamMember --generate
php artisan make:filament-resource BlogPost --generate
php artisan make:filament-resource BlogCategory --generate
php artisan make:filament-resource BlogTag --generate
php artisan make:filament-resource ContactSubmission --generate
php artisan make:filament-resource NewsletterSubscriber --generate
php artisan make:filament-resource Faq --generate
php artisan make:filament-resource ProcessStep --generate
php artisan make:filament-resource TechStackItem --generate
php artisan make:filament-resource Client --generate
php artisan make:filament-resource Page --generate
```

### 3.4 Customize each Resource

For each resource, manually polish:
- The form layout (use `Section`, `Grid`, `Tabs` for clean organization)
- The table columns (show the most important fields first, with badges for status)
- Filters (by published state, category, date range)
- Bulk actions (publish, unpublish, delete)
- Image uploads (use `FileUpload` with image preview, image editor enabled, max 5MB)
- Rich editor for description fields (use `RichEditor` for blog and `MarkdownEditor` for project case studies, your call but stay consistent)

### 3.5 Settings page (special treatment)

Settings should not be a normal table. Make it a single page with grouped fields. Create a custom Filament page:
```bash
php artisan make:filament-page ManageSettings
```

In that page, group fields by `group` column (General, Contact, Social, Stats, SEO, CTA) using Tabs, and save back to the settings table. After save, clear the settings cache.

### 3.6 Dashboard widgets

On the Filament dashboard, add widgets showing:
- New contact submissions this week (stat card)
- Total published projects (stat card)
- Total published blog posts (stat card)
- Latest 5 contact submissions (table)
- Newsletter subscribers count (stat card)

Use:
```bash
php artisan make:filament-widget LatestSubmissions --resource=ContactSubmissionResource --table
php artisan make:filament-widget StatsOverview --stats-overview
```

### 3.7 Contact submission detail view

When admin clicks a submission, show:
- All form fields
- Source (which form, which page URL)
- IP and user agent
- A status dropdown (new, contacted, qualified, won, lost, spam)
- An admin notes textarea
- A "Reply via Email" button that opens the user's mail client with prefilled `mailto:`
- A "Mark as Spam" action

### 3.8 Notifications

When a new contact submission lands:
- Email notification to `setting('email_sales')`
- In app Filament notification badge in the sidebar

Use `app/Notifications/NewContactSubmission.php`.

---

## STEP 4: PUBLIC SITE DESIGN SYSTEM

### 4.1 Tailwind config

In `tailwind.config.js` set up the brand palette:
```js
theme: {
  extend: {
    colors: {
      brand: {
        50:  '#fff7ed',
        100: '#ffedd5',
        200: '#fed7aa',
        300: '#fdba74',
        400: '#fb923c',  // primary
        500: '#f97316',
        600: '#ea580c',
        700: '#c2410c',
        800: '#9a3412',
        900: '#7c2d12',
        950: '#431407',
      },
      ink: {
        50:  '#f8fafc',
        900: '#0f172a',
        950: '#020617',
      }
    },
    fontFamily: {
      display: ['Space Grotesk', 'sans-serif'],
      sans: ['Inter', 'system-ui', 'sans-serif'],
      mono: ['JetBrains Mono', 'monospace'],
    },
    boxShadow: {
      'brand': '0 10px 40px -10px rgba(251, 146, 60, 0.4)',
      'soft': '0 4px 20px -2px rgba(15, 23, 42, 0.08)',
    },
    animation: {
      'fade-up': 'fadeUp 0.6s ease-out',
      'gradient': 'gradient 8s ease infinite',
    },
  },
},
plugins: [
  require('@tailwindcss/typography'),
  require('@tailwindcss/forms'),
],
```

### 4.2 Fonts

Self host the fonts. Download Space Grotesk (700, 600, 500) and Inter (400, 500, 600, 700) WOFF2 files into `public/web-assets/fonts/`. Define `@font-face` in `resources/css/app.css`. Do not load fonts from Google CDN (privacy and speed).

### 4.3 Master layout

`resources/views/layouts/app.blade.php` is the master public layout. Includes:
- `<head>` with dynamic title, meta description, canonical, OG tags, GTM, JSON LD slot
- Navbar partial
- `@yield('content')`
- Footer partial
- Floating WhatsApp button (uses `setting('whatsapp_number')`)
- Cookie consent banner (simple, no third party script)

### 4.4 Navbar

Sticky on scroll, transparent at top transitioning to white with shadow on scroll. Uses Alpine.js for the mobile menu and dropdown.

Menu structure:
- Home
- Services (dropdown: Web Apps, Mobile Apps, AI Integration, UI UX, MVP)
- Work (link to /portfolio)
- About
- Blog
- Contact (styled as a CTA button in orange)

Active link gets an orange underline. Logo on the left.

### 4.5 Footer

4 column grid on desktop, stacked on mobile:
1. Brand column: logo, tagline from settings, social icons (only render an icon if the URL is set in settings, hide otherwise)
2. Services links (pulled from `services` table where `is_published`)
3. Company links (About, Blog, Portfolio, Contact, Privacy, Terms)
4. Contact column: phone, sales email, working hours, two compact office address blocks (Mumbai and Patna), each from settings, only shown if active

Bottom bar: copyright with `setting('legal_name')` and current year, plus a small "Built with care across Mumbai and Patna" line.

### 4.6 Design tokens checklist

- Border radius: `rounded-2xl` for cards, `rounded-xl` for buttons, `rounded-full` for pills
- Buttons: solid orange primary, outlined ghost secondary, both with subtle scale on hover (transform: scale(1.02))
- Cards: white background, `shadow-soft`, hover lift effect (translate-y-1)
- Section padding: `py-20 md:py-28` standard
- Container: `max-w-7xl mx-auto px-6 md:px-10`
- Headings: `font-display`, tight line height, generous letter spacing on small headings
- Body: `font-sans`, line-height 1.7 for paragraphs

---

## STEP 5: PAGE BY PAGE BUILD

### 5.1 Homepage `/`

**Section 1: Hero**
- Full bleed, light cream background (`bg-brand-50`)
- Left side (60%): badge pill at top ("Open for new projects, Mon to Sat"), big H1 headline (3 lines max, 60 to 72px on desktop), supporting paragraph (2 lines max), two CTAs side by side (primary orange "Start Your Project", outlined "View Our Work"), trust row below showing "5 plus years, 18 plus projects, 15 plus clients"
- Right side (40%): a stylized device mockup or abstract illustration. Use SVG, not raster. Subtle floating animation. Include a small "live demo" tag that links to a featured portfolio item.
- Background: subtle radial gradient using brand-100 fading to white, plus a few decorative blurred orange blobs (very low opacity, large blur, positioned absolutely).

Headline copy (no em dashes, human voice, edit as needed):
> "We build web and mobile apps that real businesses use."

Subheading:
> "Plazmasoft is a boutique studio with team presence in Mumbai and Patna. We ship Laravel web apps, Flutter mobile apps, and AI integrations. No fluff, no fake teams, just clean code and clear communication."

**Section 2: Trust bar**
- Horizontal scrolling marquee of client logos pulled from `clients` table
- Grayscale by default, color on hover
- Above logos: small uppercase eyebrow text "Trusted by founders and operators"

**Section 3: Services grid**
- 6 cards in 3x2 grid on desktop, 2x3 on tablet, single column on mobile
- Each card: lucide icon in orange, service title, one line excerpt, "Learn more" link
- Data pulled from `services` table where `is_published`, ordered by `sort_order`
- Cards lift on hover, icon background gets a subtle orange tint

**Section 4: Featured Work**
- Heading: "Recent work"
- Subheading: "A few projects we shipped that we're proud of."
- 3 large project cards (where `is_featured = true` in `projects`), each with:
  - Banner image (object cover, aspect ratio 16:10)
  - Project category badge (color from `project_categories.color`)
  - Project title
  - One line tagline
  - Tech stack chips (max 4 visible)
  - "View case study" link
- Bottom CTA: "See all 18 projects" linking to `/portfolio`

**Section 5: Process**
- Heading: "How we work"
- 5 steps in a horizontal layout (numbered 01 to 05), each with icon, title, description
- Data pulled from `process_steps` table
- Connect steps with a dotted line between them on desktop

**Section 6: Tech Stack**
- Heading: "What we work with"
- Grouped tabs: Frontend, Backend, Mobile, AI, Database, DevOps
- Logo grid for each tab, pulled from `tech_stack_items`
- Subtle hover effects

**Section 7: Testimonials**
- 3 column grid of testimonial cards (featured ones)
- Each card: quote, author name, role and company, avatar (or initials in orange circle if no avatar)
- One large pulled quote at the top from the strongest testimonial

**Section 8: Stats bar**
- Dark background (ink-950) with orange numerals
- Pulled from `settings` stats group
- Format: "5+ Years", "18+ Projects", "15+ Clients", "7+ Industries"
- Counts animate up when scrolled into view (use Alpine.js with Intersection Observer)

**Section 9: CTA strip**
- Big heading, short subhead, single primary CTA
- Heading and subhead from settings (`cta.footer_cta_heading`, `cta.footer_cta_subtext`)
- Background: full bleed orange gradient (brand-500 to brand-400)

### 5.2 Services pages

`/services` (index): Lists all services as cards.

`/services/{slug}`: Detail page per service. Pull from `services` table. Layout:
- Hero: title, tagline, 2 CTAs
- "What you get" features list (from `features` JSON column)
- "Our process for this service" (from `process_blurb` plus shared process steps)
- "Tech we use for this" (subset of tech_stack_items based on the service's `tech_stack` JSON)
- Featured projects in this category (3 projects from same category)
- FAQ accordion (from service's own `faq` JSON column)
- CTA strip at bottom

Build only these 5 service slugs initially:
- `web-app-development`
- `mobile-app-development`
- `ai-integration`
- `ui-ux-development`
- `mvp-development`

### 5.3 Solutions pages (industries)

`/solutions/{slug}`: Same shape as services but framed around the industry vertical.

Build 4:
- `/solutions/fintech-development` (case study: TradeGuardian)
- `/solutions/fleet-management` (case study: Fleeta2z, EVA2Z)
- `/solutions/ai-property-visualization` (case study: Proptifi)
- `/solutions/agritech-development` (case study: FasalVision)

### 5.4 Portfolio `/portfolio`

- Filter chips at top: All, Web App, Mobile App, AI, Live on Play Store, International
- Grid of project cards (3 columns desktop, 2 tablet, 1 mobile)
- Each card hover: image zoom slightly, overlay with "View case study" button
- Pagination if more than 12 projects
- URL filters use query strings (`?category=ai`) for shareable filtered views

### 5.5 Portfolio detail `/portfolio/{slug}`

- Hero with banner image as background, project title and tagline overlaid
- Quick info bar: client, region, duration, industry, tech stack chips
- Three column section: Problem, Solution, Outcome (from project fields)
- Image gallery (from `project_images` table) using a simple lightbox
- Live links: website, Play Store, App Store, GitHub (only show if the URL exists)
- Related projects (3 cards from same category)
- Testimonial (if `project_id` exists in `testimonials` table for this project)
- CTA strip

### 5.6 About `/about`

- Hero: heading "Built by people who actually code."
- Subhead: "Plazmasoft started in 2022. We work out of Mumbai and Patna, and ship for clients across India and overseas."
- Founder section: photo of Rajnandan, story in first person, education and background, mention of Kushwaha Webformat Private Limited as the registered entity
- "Where we work from" section: two cards side by side showing Mumbai office and Patna office (image, address, phone, map link, all from settings). Only show a card if `office_*_is_active` is true.
- Values section: 3 to 4 values with icons (Honesty, Ownership, Quality, Speed)
- Timeline of company milestones (pulled from a `milestones` JSON in settings or a dedicated table if needed)
- Why work with us (different from "Why You Should Choose Us" template fluff)
- CTA strip

### 5.7 Blog `/blog`

- Hero with category filter pills at top
- Featured post: large card with cover image, category, title, excerpt, date, reading time
- Grid of other posts (3 columns)
- Sidebar (on desktop) or below grid (mobile): newsletter subscribe form, popular tags
- Pagination

### 5.8 Blog detail `/blog/{slug}`

- Cover image full width
- Article meta: category badge, date, reading time, author (Rajnandan with avatar)
- Article content with proper Tailwind typography styles (`prose-lg` with brand color customization)
- Table of contents on the right (sticky) for posts longer than 1500 words. Generate from H2 and H3.
- Tags at the bottom
- Author card at the end (Rajnandan, with link to about and social)
- Related posts (3 cards)
- Inline CTA boxes within long articles (these are reusable Blade components)
- Comments: skip for now, link to LinkedIn post instead if needed

### 5.9 Contact `/contact`

- Two column layout on desktop, stacked on mobile
- Left column (Contact info):
  - Phone (primary) with click to call
  - Sales email
  - Support email
  - WhatsApp button (uses `whatsapp_number` setting)
  - Working hours
  - Social icons row (only show icons where the URL setting is set)
- Right column: The contact form (see Step 6 below for form spec)
- Below both columns, full width: "Visit our offices" section with two cards side by side:
  - Mumbai Office card: label, address, phone, embedded Google map iframe (`office_mumbai_map_embed`), "Get Directions" link
  - Patna Office card: label, address, phone, embedded Google map iframe (`office_patna_map_embed`), "Get Directions" link
  - Each card only renders if its `office_*_is_active` setting is true
- All data pulled from settings, nothing hardcoded

### 5.10 Static pages

`/privacy-policy` and `/terms-of-service` pulled from `pages` table by slug. Render with prose styles.

### 5.11 404 and 500 pages

Custom error pages in `resources/views/errors/`. Match the brand style. Include a search link and a "back to home" button.

---

## STEP 6: FORMS AND LEAD CAPTURE

All forms POST to controllers that save into `contact_submissions` table and trigger notifications.

### 6.1 Contact form fields

- Full name (required)
- Email (required, validated)
- Phone (optional)
- Company (optional)
- Project type (dropdown, required, enum values from migration)
- Budget range (dropdown, required, enum values)
- Message (required, 30 char minimum, 5000 char max)
- File attachment (optional, PDF or image, 5MB max)
- Hidden field: `source` (set per form location, e.g. "contact_page", "home_hero_cta", "service_web_app")
- Hidden field: `source_url` (set to current page URL via Alpine)
- Honeypot field (using `spatie/laravel-honeypot`)
- CSRF token

### 6.2 Form submission flow

1. Validate input server side
2. Save to `contact_submissions`
3. Dispatch `NewContactSubmission` notification (email to admin)
4. Send auto reply email to inquirer (use Mailable + Markdown template)
5. Redirect to `/thank-you` page
6. Track conversion event in GTM (push to dataLayer)

### 6.3 Thank you page `/thank-you`

- Heading: "Thanks, we got your message."
- Subtext: "We reply within one business day. If it's urgent, ping us on WhatsApp."
- WhatsApp link button (uses settings)
- Calendly link if available (add a setting for it)
- "While you wait, check out our recent work" with 3 featured projects

### 6.4 Newsletter subscribe

Simple email only form in footer and on blog pages. Saves to `newsletter_subscribers`. Send a confirmation email (double opt in). Provide `/newsletter/unsubscribe/{token}` route.

### 6.5 Floating WhatsApp button

Bottom right corner, fixed. Opens `https://wa.me/{setting('whatsapp_number')}` with a prefilled message. Only renders if the setting has a value.

---

## STEP 7: SEO HARDENING

### 7.1 Per page meta

Every page Blade `@yields` for `title`, `meta_description`, `canonical`, `og_image`. The master layout falls back to settings defaults if a page doesn't define them.

### 7.2 JSON LD schema

Create reusable Blade partials in `resources/views/partials/schema/`:
- `organization.blade.php` (rendered on every page, includes `founder` info, `foundingDate`, and `location` array with both Mumbai and Patna offices)
- `breadcrumb.blade.php` (rendered on every non home page)
- `service.blade.php` (rendered on service detail pages)
- `creative-work.blade.php` (rendered on project detail pages)
- `article.blade.php` (rendered on blog post pages)
- `faq.blade.php` (rendered on any page with an FAQ section)
- `local-business.blade.php` (rendered on contact page, outputs TWO LocalBusiness entries: one for Mumbai office, one for Patna office, each with its own `address`, `telephone`, and `geo` if available)

All use proper Schema.org types. Include real founder info (Rajnandan Kushwaha), real addresses (Mumbai and Patna from settings), real phone, all pulled from settings. Do not hardcode any of these.

The Organization schema should look like this (rendered from settings):
```json
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Plazmasoft",
  "legalName": "Kushwaha Webformat Private Limited",
  "url": "https://plazmasoft.com",
  "logo": "https://plazmasoft.com/web-assets/images/logo1.png",
  "foundingDate": "2022",
  "founder": {
    "@type": "Person",
    "name": "Rajnandan Kushwaha",
    "jobTitle": "Founder",
    "sameAs": ["LinkedIn URL from settings", "GitHub URL from settings"]
  },
  "location": [
    { "@type": "Place", "name": "Mumbai Office", "address": { "@type": "PostalAddress", "addressLocality": "Mumbai", "addressRegion": "Maharashtra", "addressCountry": "IN" } },
    { "@type": "Place", "name": "Patna Office", "address": { "@type": "PostalAddress", "addressLocality": "Patna", "addressRegion": "Bihar", "addressCountry": "IN" } }
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "from settings",
    "contactType": "sales",
    "email": "from settings",
    "availableLanguage": ["en", "hi"]
  }
}
```

### 7.3 Sitemap

Use `spatie/laravel-sitemap`. Create a console command:
```bash
php artisan make:command GenerateSitemap
```

The command crawls and generates `public/sitemap.xml` with all published projects, services, solutions, blog posts, and static pages. Schedule it daily in `app/Console/Kernel.php`.

### 7.4 robots.txt

`public/robots.txt`:
```
User-agent: *
Allow: /
Disallow: /admin
Disallow: /thank-you
Sitemap: https://plazmasoft.com/sitemap.xml
```

### 7.5 Image optimization

- All uploaded images go through Spatie Media Library with conversions: thumb (300x300), medium (800w), large (1600w), and an additional WebP version of each.
- `<img>` tags use `loading="lazy"` except hero images.
- Use `srcset` with multiple sizes for responsive images.
- Alt text is a required field in admin forms for all image uploads (Filament FileUpload with a paired text field).

### 7.6 Performance

- Vite production build with code splitting
- Critical CSS inlined for above the fold
- Defer non critical JS
- Enable HTTP/2 push hints in the response headers for fonts
- Cache settings in memory with `Cache::rememberForever`
- Add `Cache-Control` headers for static assets (one year)
- Use `php artisan optimize` and `route:cache`, `view:cache`, `config:cache` on deploy

---

## STEP 8: CONTENT WRITING GUIDELINES (apply to all seeded content)

Every piece of copy you generate or seed into the database must follow these rules.

### 8.1 No em dashes

The em dash character (long dash) is banned. Use commas, periods, parentheses, colons, or "and" / "but" / "which" to connect clauses. Examples:

Bad: "We build apps that work, fast, reliable, and clean."
Good: "We build apps that work. Fast, reliable, and clean."

Bad: "Founded in 2022, Plazmasoft, a studio in Mumbai and Patna, ships software."
Good: "Founded in 2022, Plazmasoft is a studio in Mumbai and Patna that ships software."

Bad: "Our process, simple and predictable, gives you weekly updates."
Good: "Our process is simple and predictable. You get weekly updates."

### 8.2 Banned filler words

Avoid these unless you have a concrete reason: leverage, synergy, cutting edge, world class, revolutionary, paradigm, ecosystem (when overused), seamlessly, robust (when overused), best in class, holistic, ideate, unlock value.

Replace with concrete language. Instead of "leverage cutting edge AI", say "use Gemini and Stable Diffusion".

### 8.3 Voice

- First person plural ("we") on company pages
- First person singular ("I") on the founder section of about
- Contractions are fine and encouraged (we're, you'll, don't, it's)
- Short sentences. If a sentence runs past 25 words, break it up.
- Direct address: "you" when talking to the reader

### 8.4 Concrete over abstract

Bad: "We deliver value through innovative solutions."
Good: "We built FasalVision, an AI farming app that runs in 9 Indian languages and is live in 4 countries."

### 8.5 No fake claims

If a stat is not verified, do not write it. No "served the European Union" unless we actually did. No "10,000 plus hours on Upwork" unless the profile shows it.

---

## STEP 9: SEED REAL DATA

Create seeders for the following with REAL data (not Lorem ipsum):

### 9.1 ProjectSeeder

Seed all 18 projects (7 already in admin plus 11 from rajnandanweb.com):

Existing 7 (verify and keep):
1. qsinfinity.com (All in one IT Solutions, Laravel, India, 2024)
2. goddacredit.co.in (Banking solution, Core PHP, India, 2023)
3. fleeta2z.com (Fleet Management, Laravel, India, 2024)
4. eva2z.in (EV company website, Laravel, India, 2025)
5. ewiisolutions.com (Business suite ERP CRM, Laravel, India, 2024)
6. creetnet.com (Domain marketplace, Laravel, India, 2024)
7. vediccode.online (LMS, Laravel, India, 2023)

Add these 11:
8. Ongofix (https://ongofix.com/, Device Care, Laravel Livewire, India, 2024)
9. TradeGuardian (https://tradeguardian.tech/, Trading platform with AI signals, Laravel, India, 2024 to 2025)
10. WasherBee Dubai (https://washerbeedubai.com/, Laundry service, Laravel, UAE, 2024, FEATURED)
11. Canvas of Celebrations (https://canvasofcelebrations.com/, Event planning, Laravel, India, 2024)
12. Proptifi (https://proptifi.com/, AI property visualization, Angular and Python and Stable Diffusion and ControlNet, India, 2024 to 2025, FEATURED)
13. EVA2Z Connect (Play Store: com.developer.ev2z, GPS mobile app, Kotlin and Laravel API, India, 2024)
14. Flare HD Wallpaper (Play Store: com.webformat.flarehdwallpaper, Firebase and Kotlin)
15. Quiz Markets (Play Store: com.webformat.quizmarkets, Firebase and Java)
16. FasalVision (Play Store: com.fasalvision.app, AI farming assistant, Flutter and Firebase and Gemini AI, 9 languages, multi country, FEATURED)
17. LegalLease (CA and Advocate SaaS, Laravel, India, 2025)
18. FireSafe Pro (Fire safety B2B, Laravel, India, 2025)

For each, write a real 3 paragraph problem / solution / outcome description. Do not use Lorem ipsum. If you do not have details, use a clearly marked placeholder for Rajnandan to fill in.

### 9.2 TestimonialSeeder

Seed the 3 real testimonials from rajnandanweb.com:
1. Pravin Sharma, Founder Ongofix, Mumbai
2. Dipesh Kushwaha, Founder TradeGuardian
3. Aditya, Founder WasherBee, Dubai

### 9.3 TeamMemberSeeder

Seed one row for now: Rajnandan Kushwaha, Founder, with bio and social links. `is_founder = true`. 

Rajnandan will add real team members from Mumbai and Patna offices over time via the Filament admin. The About page and any team listing should gracefully render with one member visible and the section heading worded as "Meet the team" (not "Meet our 25 people"). Do not pad with fake names.

### 9.4 ServiceSeeder

The 5 services from Step 5.2 with full content for each.

### 9.5 BlogPostSeeder

Seed 4 starter posts (port from rajnandanweb.com plus one new):
1. "5 Signs Your Business Needs a Custom Web Application (Not a Template)"
2. "How We Ship a Production Ready Laravel Application in 4 Weeks"
3. "Why Your Website's Slow Load Speed Costs You Real Customers"
4. "Inside FasalVision: Lessons from Shipping an AI Multilingual App in India"

Each post should be 1200 to 1800 words, real content (no Lorem ipsum), proper headings, code snippets where relevant. Apply the no em dash rule strictly.

### 9.6 ClientSeeder

Logos for trust bar. Seed placeholder entries for the real clients we have (Ongofix, WasherBee, TradeGuardian, FasalVision users, Proptifi, etc.). Rajnandan will upload actual logos via admin.

### 9.7 TechStackSeeder

Seed the tech logos: Laravel, Flutter, React, Vue, Python, Node.js, Angular, Tailwind, MySQL, PostgreSQL, MongoDB, Firebase, AWS, Docker, Git, Figma, Gemini AI, OpenAI, Stable Diffusion. Use SVG logos in `public/web-assets/images/tech/`.

### 9.8 ProcessStepSeeder

5 steps:
1. Discovery (we listen, ask questions, write down what you actually need)
2. Design (we sketch screens, you review, we refine)
3. Build (we ship in weekly sprints, you see progress every Friday)
4. Test (we test on real devices, fix bugs before you see them)
5. Launch and support (we deploy, watch it, fix things for 90 days at no cost)

### 9.9 FaqSeeder

8 to 10 real FAQs for the homepage / general group:
- How long does a project take?
- What's your typical pricing?
- Do you sign NDAs?
- Who owns the code?
- Do you work outside India?
- Do you do maintenance after launch?
- Can you take over a project another agency started?
- What stack do you prefer and why?
- Do you work with non technical founders?
- How do payments work?

Write real answers, not template fluff.

---

## STEP 10: FTP DEPLOYMENT SCRIPT

The goal: from local terminal, run one command, code pushes to the production FTP server.

### 10.1 Create `deploy.sh` in project root

```bash
#!/bin/bash
set -e

# ============================
# Plazmasoft Deploy Script
# Usage: ./deploy.sh
# Requires: lftp installed locally
# ============================

# Color output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

# Load credentials from .env.deploy (not committed)
if [ ! -f .env.deploy ]; then
    echo -e "${RED}Error: .env.deploy not found. Copy .env.deploy.example and fill in credentials.${NC}"
    exit 1
fi

source .env.deploy

# Required variables check
if [ -z "$FTP_HOST" ] || [ -z "$FTP_USERNAME" ] || [ -z "$FTP_PASSWORD" ] || [ -z "$FTP_REMOTE_PATH" ]; then
    echo -e "${RED}Error: Missing FTP credentials in .env.deploy${NC}"
    exit 1
fi

echo -e "${YELLOW}Step 1: Installing production dependencies${NC}"
composer install --no-dev --optimize-autoloader --no-interaction

echo -e "${YELLOW}Step 2: Building frontend assets${NC}"
npm install
npm run build

echo -e "${YELLOW}Step 3: Caching Laravel config and routes${NC}"
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo -e "${YELLOW}Step 4: Uploading to server via FTP${NC}"
lftp -e "
set ftp:ssl-allow no;
set ssl:verify-certificate no;
set net:timeout 30;
set net:max-retries 3;
set net:reconnect-interval-base 5;
set mirror:use-pget-n 4;
open -u $FTP_USERNAME,$FTP_PASSWORD $FTP_HOST;
mirror -R --parallel=4 --delete --verbose --exclude-glob-from=.deployignore ./ $FTP_REMOTE_PATH;
bye
"

echo -e "${YELLOW}Step 5: Running remote migrations (if SSH access configured)${NC}"
if [ ! -z "$SSH_HOST" ] && [ ! -z "$SSH_USER" ]; then
    ssh "$SSH_USER@$SSH_HOST" "cd $FTP_REMOTE_PATH && php artisan migrate --force && php artisan optimize"
else
    echo -e "${YELLOW}Skipping remote migrations (no SSH configured). Run migrations manually on server.${NC}"
fi

echo -e "${YELLOW}Step 6: Reverting local config cache (for development)${NC}"
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo -e "${GREEN}Deployment complete!${NC}"
echo -e "${GREEN}Visit https://plazmasoft.com to verify.${NC}"
```

Make it executable:
```bash
chmod +x deploy.sh
```

### 10.2 Create `.env.deploy.example`

```
# Copy this to .env.deploy and fill in real credentials
# .env.deploy is gitignored

FTP_HOST="ftp.plazmasoft.com"
FTP_USERNAME="your-ftp-username"
FTP_PASSWORD="your-ftp-password"
FTP_REMOTE_PATH="/public_html"

# Optional, if you have SSH access for running migrations
SSH_HOST="plazmasoft.com"
SSH_USER="your-ssh-user"
```

### 10.3 Create `.deployignore`

Files and folders that should NOT be uploaded to production:
```
.git/
.github/
node_modules/
tests/
.env
.env.example
.env.deploy
.env.deploy.example
deploy.sh
.deployignore
.gitignore
.editorconfig
README.md
phpunit.xml
package-lock.json
yarn.lock
storage/logs/*
storage/framework/cache/data/*
storage/framework/sessions/*
storage/framework/views/*
.DS_Store
*.log
_pre-rebuild/
backups/
```

### 10.4 Update `.gitignore`

Append:
```
.env.deploy
backups/
_pre-rebuild/
```

### 10.5 First time server setup checklist

Document in `DEPLOYMENT.md`:
- Set up `.env` on the server (production database, mail driver, app URL)
- Make sure `storage/` and `bootstrap/cache/` are writable (chmod 775)
- Point document root to `public/`
- Set up cron for Laravel scheduler:
  ```
  * * * * * cd /home/user/public_html && php artisan schedule:run >> /dev/null 2>&1
  ```
- Configure SSL (Let's Encrypt or hosting provider's option)
- Set up queue worker if using queued jobs (supervisor)

### 10.6 Alternative: GitHub Actions (recommended for the future)

Add `.github/workflows/deploy.yml` for automated CI deploy. Mention this in DEPLOYMENT.md but keep the manual `deploy.sh` as the primary tool the user asked for.

---

## STEP 11: ADMIN ACCESS NOTES (for Rajnandan)

After everything is set up:

1. Visit `/admin` and log in with the Filament user created in Step 3.1.
2. First task: visit Settings page, fill in all real values (phone, email, address, social URLs, OG image upload).
3. Second task: upload real logo images for clients in the Clients section.
4. Third task: verify portfolio projects, upload banner images for ones that need them.
5. Fourth task: customize the default blog posts seeded in Step 9.5.

---

## STEP 12: FINAL CHECKLIST BEFORE GO LIVE

- [ ] All old migrations deleted, fresh migrations ran cleanly
- [ ] Filament admin accessible at /admin with founder login
- [ ] All settings populated with real data (no placeholders)
- [ ] 18 portfolio projects seeded with real data and banner images
- [ ] Founder profile (Rajnandan) is the only team member, marked as founder
- [ ] 3 real testimonials live, linked to projects
- [ ] 4 real blog posts live (no Lorem ipsum)
- [ ] 5 services pages live with real content
- [ ] 4 solutions pages live with real case studies
- [ ] Contact form tested end to end, submission lands in admin and email
- [ ] WhatsApp floating button works
- [ ] Newsletter subscribe works with double opt in
- [ ] Auto reply email on contact form submission
- [ ] No em dashes anywhere in seeded content or copy (run a final grep to verify)
- [ ] All settings (phone, social, address, stats) pull from admin, not hardcoded
- [ ] All public Blade views render with no missing settings
- [ ] Sitemap generated and submitted to Google Search Console
- [ ] robots.txt updated
- [ ] JSON LD schemas present on every page type
- [ ] Per page canonical URLs are unique and correct
- [ ] Per page meta titles and descriptions are unique
- [ ] All images have alt text
- [ ] Lighthouse scores: Performance 85 plus, SEO 95 plus, Accessibility 90 plus
- [ ] Mobile responsive check on all pages
- [ ] 404 and 500 pages render with branding
- [ ] deploy.sh tested with staging FTP credentials first
- [ ] `.env.deploy` is gitignored
- [ ] DEPLOYMENT.md committed
- [ ] Database backup script tested
- [ ] Cache cleared on first deploy
- [ ] Storage symlink created on server (`php artisan storage:link`)

---

## DELIVERABLES

After completion, hand over:
1. `CHANGELOG.md` listing every change
2. `DEPLOYMENT.md` with server setup steps
3. `ADMIN_GUIDE.md` for Rajnandan with screenshots of how to add a project, blog post, edit settings
4. Verification log: grep result showing zero em dashes in `resources/views/` and `database/seeders/`
5. List of any placeholders that Rajnandan needs to fill in (missing banner images, missing client logos, founder year confirmation if needed)

---

## EXECUTION ORDER

Work through the steps in order. Do not skip ahead. After each step, commit with a clear message:
```bash
git commit -m "Step X: brief description of what was done"
```

Show me a plan before any destructive action (migration delete, table drop). When in doubt, ask before deleting or overwriting.

Start with Step 0 now.