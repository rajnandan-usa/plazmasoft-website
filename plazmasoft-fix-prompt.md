# Plazmasoft.com Full Cleanup & Production Hardening — Claude Code Master Prompt

## CONTEXT
You are working on the **Plazmasoft** Laravel codebase (operated by Kushwaha Webformat Pvt Ltd). The live site is at https://plazmasoft.com. The current site has serious credibility, content, and SEO problems caused by an old cloned template ("TechnoYuga"). Your job is to do a **full top-to-bottom cleanup, content overhaul, and SEO hardening** in a single session.

**Founder identity (CRITICAL):** The real founder is **Rajnandan Kushwaha** (East Champaran, Bihar, India — Director of Kushwaha Webformat Pvt Ltd / Plazmasoft). The site currently shows a fake founder "Krishna K Dewda" and 25 fake team members — all must be removed.

**Brand voice:** Honest, technical, founder-led boutique agency. No fake claims. No fluff. Industries: web apps (Laravel), mobile apps (Flutter), AI integrations (Gemini, Stable Diffusion, ControlNet), MVPs for startups.

---

## STEP 0 — SAFETY FIRST
1. Create a new git branch: `git checkout -b cleanup/2026-honest-rebrand`
2. Database dump backup: `php artisan db:dump` (or `mysqldump`) and commit a `backups/` folder copy.
3. List all blade views and routes — give me an inventory before editing so I can confirm scope:
   ```bash
   php artisan route:list > inventory-routes.txt
   find resources/views -name "*.blade.php" > inventory-views.txt
   ```

---

## STEP 1 — DELETE THE FAKE TEAM PAGE & ALL "TechnoYuga" REFERENCES

### 1A. Find and remove every "TechnoYuga" string in the codebase:
```bash
grep -rn "TechnoYuga\|Technoyuga\|technoyuga" resources/ app/ database/ public/
```
Replace **every occurrence** with "Plazmasoft" (or remove the sentence if it doesn't fit). Show me the diff before applying.

### 1B. Team page (`/team`):
- **Option A (preferred):** Delete the route, controller method, and view entirely. Remove "Our Team" from main navigation and footer.
- **Option B:** If you must keep it, replace the entire team list with just the real founder:
  - **Rajnandan Kushwaha** — Founder & Full Stack Developer (Laravel, Flutter, Python, AI integrations)
  - Plus a single line: "Plazmasoft is a founder-led boutique studio. We work with a trusted network of freelance specialists for design, QA, and platform-specific mobile work — selected per project."
  - Delete the 6 duplicate FAQ entries (all currently have the same Flutter answer). Replace with 4 real FAQs (see Step 6).

### 1C. Remove the "Hire Developers" mega-menu entirely:
Routes to delete (controller + view + migration if any):
- `/team/flutter-developer`
- `/team/reactjs-developer`
- `/team/fullstack-developer`
- `/team/mernstack-developer`
- `/team/reactnative-developer`
- `/team/dedicated-developer`

Reason: solo founder; "hire dedicated developer" framing is misleading. Remove from nav, footer, sitemap, and any internal linking.

---

## STEP 2 — FIX THE BLANK FOUNDED YEAR (visible bug)

In Home and About pages, the text currently reads:
> "plazmasoft is a rising web and mobile app development company founded in , dedicated to..."

Find the blade variable or hardcoded sentence. **Replace with: "founded in 2021"** (Kushwaha Webformat Pvt Ltd was incorporated around that time — adjust if Rajnandan gives a different year before commit).

Same fix on About page: `"Fueled by a vision... plazmasoft was founded in to provide..."` → `"founded in 2021"`.

Search:
```bash
grep -rn "founded in" resources/views/
```

---

## STEP 3 — STATS / NUMBERS — make them consistent and honest

Currently the homepage and about page contradict each other. Standardize across **all pages** to these honest numbers (Rajnandan can adjust before commit):

| Metric | Value |
|---|---|
| Years of experience | 5+ |
| Projects delivered | 18+ |
| Happy clients | 15+ |
| Industries served | 7+ |

**REMOVE these unverifiable/false claims completely:**
- "10k+ Hours worked on Upwork" — only re-add if linked to a real public Upwork profile
- "Top Rated Plus on Upwork" — same
- "served… the European Union" — delete this sentence entirely
- "100% success rate" — delete
- "5-star feedback" with no source — delete or replace with a single linked Clutch/Google review

---

## STEP 4 — AWARDS SECTION

Currently shows 4 award badges (Clutch, Upwork, SoftwareWorld, AppDevelopment) with no links.

**Decision logic:**
- If Rajnandan has real profile pages on Clutch / SoftwareWorld / AppDevelopment.com, link the badges to those profiles AND add `rel="noopener"`.
- If those profiles don't exist, **delete the entire "Awards & Recognitions" section** from the homepage. Fake badges are worse than no badges.

Ask Rajnandan before deleting — but default to delete if unverified.

---

## STEP 5 — FIX ALL BROKEN LINKS

### 5A. Footer (`resources/views/layouts/footer.blade.php` or similar):
Every link is currently `href=""` or `href="<>"`. Fix all of these:

```
Sales Inquiry:
- info@plazmasoft.com → mailto:info@plazmasoft.com (REMOVE the tel:info@plazmasoft.com line — it's broken)
- Phone: ADD +91 7903292066 with tel:+917903292066
- Address: Use the REAL registered office. Rajnandan: confirm — either East Champaran, Bihar OR a real Delhi address. Delete the Nepal/Birgunj address if it's not a real office.

Services column:
- Mobile Development → /services/mobile-app-development
- Web App Development → /services/web-app-development
- UI/UX Design → /services/ui-ux-development
- AI Integration → /services/ai-integration (new — see Step 7)

Help & Advice column:
- Portfolio → /portfolio-projects
- Story → /about#our_story
- Contact us → /contact
- Blog → /post
- DELETE "Careers" link (unless careers page actually exists)
- DELETE the entire "Hire Developers" column

Social icons:
- Replace empty hrefs with real URLs OR delete the icon entirely. Use Rajnandan's verified accounts:
  - LinkedIn: https://www.linkedin.com/company/plazmasoft/ (verify it exists; if not, link to Rajnandan's personal: https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/)
  - GitHub: https://github.com/rajnandan-usa
  - Instagram / Facebook: only if Plazmasoft accounts exist
```

### 5B. Service card inner links (homepage):
All currently `href="<>"` — point them to the corresponding service detail page or remove the `<a>` wrapper if no page exists.

### 5C. "Book Your Consultation" button (currently `javascript:void(0)`):
Wire it to actually open the contact modal. If a modal component exists, attach the click handler. If not, change `href` to `/contact#form` and remove the `void(0)`.

---

## STEP 6 — SOLUTIONS PAGES CLEANUP

Currently there are **15 thin `/solutions/*` pages** (fintech, food-ordering, healthcare, qr-code-based-food-ordering, on-demand, fitness, fantasy, transport, taxi-booking, dating, grocery, social-media, sports-betting, stock-trading, video-streaming). Most are boilerplate.

**Keep only the 4 solutions Rajnandan has REAL portfolio work in:**
1. `/solutions/fintech-development` (real: TradeGuardian)
2. `/solutions/fleet-management` (real: Fleeta2z) — **rename from `/solutions/transport-app`**
3. `/solutions/ai-property-visualization` (real: Proptifi) — **new**
4. `/solutions/agritech-development` (real: FasalVision) — **new**

**Delete all the other 11 solution routes, controllers, views, and any DB rows.** Add 301 redirects from the deleted slugs to `/portfolio-projects` in `routes/web.php`:

```php
Route::redirect('/solutions/food-ordering-development', '/portfolio-projects', 301);
// ...and so on for each deleted slug
```

Rewrite the 4 kept solution pages with real content: project case study, tech stack used, problem solved, link to portfolio item. ~600-800 words each, no Lorem-ipsum filler.

---

## STEP 7 — SERVICES PAGES CLEANUP

### Keep these 5 services:
1. `/services/web-app-development` — Laravel, Node.js focused
2. `/services/mobile-app-development` — Flutter primary, native secondary
3. `/services/ai-integration` — **NEW page** — Gemini API, Stable Diffusion, ControlNet, LLM integrations, RAG systems. This is Rajnandan's USP.
4. `/services/ui-ux-development` — keep
5. `/services/mvp-development` — keep, target startups

### Delete these services:
- `/services/chatgpt-development` — outdated naming, merge content into new `/services/ai-integration`
- `/services/iot-development` — no real IoT portfolio; delete entirely
- `/services/ios-app-development` — merge into mobile
- `/services/android-app-development` — merge into mobile
- `/services/flutter-app-development` — merge into mobile (it's the primary stack, mention prominently)
- `/services/react-native-app-development` — merge into mobile
- `/services/app-maintenance` — merge into mobile

Add 301 redirects for all deleted service URLs → their parent.

Each kept service page should be a real ~1000-word landing page with: problem framing, our approach, tech stack, 2-3 portfolio items linked, FAQ block, CTA.

---

## STEP 8 — PORTFOLIO CONSOLIDATION

The portfolio is currently DB-driven (Laravel `projects` table with `storage/projects/banner/*` and `storage/projects/logo/*` paths). Good — keep the CMS.

### 8A. Verify existing 7 portfolio entries are accurate:
- qsinfinity.com — All-in-one IT Solutions
- goddacredit.co.in — Godda Credit Co-op Society
- fleeta2z.com — Fleet Management
- eva2z.in — EV company website
- ewiisolutions.com — Business suite
- creetnet.com — Domain/business marketplace
- vediccode.online — LMS

### 8B. ADD these 11 missing real projects from rajnandanweb.com (Rajnandan will upload banner/logo images):

For each, create a seeder entry OR provide an admin upload checklist:

```
1. Ongofix (https://ongofix.com/) — Device Care Platform — Laravel + Livewire + MySQL — India — 2024
2. TradeGuardian (https://tradeguardian.tech/) — AI Trading Platform — Laravel + Blade + AI signals — India — 2024-2025
3. WasherBee Dubai (https://washerbeedubai.com/) — Laundry Service Platform — Laravel + Blade — UAE — 2024 (INTERNATIONAL CLIENT — feature this)
4. Canvas of Celebrations (https://canvasofcelebrations.com/) — Event Planning — Laravel — India — 2024
5. Proptifi (https://proptifi.com/) — AI Property Visualization — Angular + Python + Stable Diffusion + ControlNet — 2024-2025 (FLAGSHIP AI PROJECT)
6. EVA2Z Connect (Play Store: com.developer.ev2z) — GPS Mobile App — Kotlin + Laravel API + GPS Protocol — 2024
7. Flare HD Wallpaper (Play Store: com.webformat.flarehdwallpaper) — Firebase + Kotlin
8. Quiz Markets (Play Store: com.webformat.quizmarkets) — Firebase + Java
9. FasalVision (Play Store: com.fasalvision.app) — AI Farming Assistant — Flutter + Firebase + Gemini AI — multilingual (9 languages), live in multiple countries (FLAGSHIP AI PROJECT)
10. LegalLease (https://legallease.rajnandanweb.com/) — CA & Advocate SaaS — Laravel + MySQL — 2025
11. FireSafe Pro (https://firesafety.rajnandanweb.com/) — Fire Safety B2B — Laravel + MySQL — 2025
```

Total after addition: **18 portfolio items**. Add filter chips: `All / Web App / Mobile App / AI / Live on Play Store / International Client`.

### 8C. Portfolio detail pages: ensure each clickable card opens a full case study page (`/portfolio/{slug}`) with problem, solution, tech, screenshots, outcomes, live link.

---

## STEP 9 — BLOG REPOPULATION

The `/post` page has only 1 stale post from "1 year ago". Repopulate.

### 9A. Port these 3 posts from rajnandanweb.com (rewrite to be Plazmasoft / agency voice, not personal):
1. "5 Signs Your Business Needs a Custom Web Application (Not Just a Template)" — agency angle
2. "How We Build a Production-Ready Laravel Application in 4 Weeks" — agency process
3. "Why Your Website's Slow Load Speed Is Costing You Customers" — keep close to original

### 9B. Add 3 more agency-focused posts (Rajnandan will write or AI-draft, you scaffold the DB entries + blade templates):
4. "Building FasalVision: Lessons from Shipping AI Multilingual Apps in India"
5. "Inside Proptifi: How We Used Stable Diffusion + ControlNet for AI Interior Design"
6. "Why We Pick Laravel + Flutter for 80% of Our Client Projects"

Each post: 1200-1800 words, real screenshots from the projects, code snippets where relevant, internal links to portfolio + services pages.

---

## STEP 10 — SEO HARDENING (HIGH IMPACT)

### 10A. PER-PAGE CANONICAL URLs
Currently EVERY page has `<link rel="canonical" href="https://plazmasoft.com/">` — telling Google all inner pages are duplicates of the homepage. **This is killing inner-page indexing.**

Fix: In `layouts/app.blade.php` (or wherever the master layout is), make canonical dynamic:
```blade
<link rel="canonical" href="{{ url()->current() }}">
```
Then per-page `@section('canonical')` overrides where needed.

### 10B. PER-PAGE META DESCRIPTIONS & OG TAGS
Currently every page has the same homepage meta description. Each page needs unique:
- `<title>` (50-60 chars)
- `<meta name="description">` (140-155 chars)
- `<meta property="og:title">`
- `<meta property="og:description">`
- `<meta property="og:url">` (dynamic, current page)
- `<meta property="og:image">` (per-page if possible; fallback to a proper 1200x630 brand image — NOT the small logo)

Add yield blocks in the master layout and define them per blade file. Audit every page route.

### 10C. JSON-LD STRUCTURED DATA
Add `<script type="application/ld+json">` blocks. Inject via partials.

**On every page — Organization schema:**
```json
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Plazmasoft",
  "legalName": "Kushwaha Webformat Private Limited",
  "url": "https://plazmasoft.com",
  "logo": "https://plazmasoft.com/web-assets/images/logo1.png",
  "founder": {
    "@type": "Person",
    "name": "Rajnandan Kushwaha",
    "jobTitle": "Founder & Full Stack Developer",
    "sameAs": [
      "https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/",
      "https://github.com/rajnandan-usa"
    ]
  },
  "foundingDate": "2021",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "East Champaran",
    "addressRegion": "Bihar",
    "postalCode": "845433",
    "addressCountry": "IN"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-7903292066",
    "contactType": "sales",
    "email": "hello@plazmasoft.com",
    "availableLanguage": ["en", "hi"]
  },
  "sameAs": [
    "https://www.linkedin.com/company/plazmasoft/"
  ]
}
```

**On `/`, `/services/*`, `/solutions/*` — also add Service / Product schema.**

**On `/portfolio/*` detail pages — CreativeWork schema** with name, creator, dateCreated, keywords, url.

**On `/post/*` blog posts — Article schema** with headline, datePublished, dateModified, author, image, mainEntityOfPage.

**On contact/FAQ pages — FAQPage schema.**

**Sitewide — BreadcrumbList schema** in the breadcrumb partial.

### 10D. Remove harmful/useless meta tags
Delete these from the layout:
- `<meta name="rating" content="Safe For Kids">` (irrelevant for B2B)
- `<meta name="googlebot" content="noodp">` (deprecated since 2017)
- `<meta name="document-type" content="Public">` (not a standard tag)

### 10E. sitemap.xml & robots.txt
Generate a fresh `sitemap.xml` with only the CLEANED URL list (no deleted solutions/team-developer pages). Use `spatie/laravel-sitemap` if not already installed:
```bash
composer require spatie/laravel-sitemap
```
Create a scheduled command to regenerate sitemap on every deploy. Submit the new sitemap to Google Search Console after deploy.

`robots.txt` should be:
```
User-agent: *
Allow: /
Disallow: /admin
Disallow: /storage/projects/banner-raw/
Sitemap: https://plazmasoft.com/sitemap.xml
```

### 10F. Image alt text audit
```bash
grep -rn 'alt=""' resources/views/
```
Every image (especially tech stack logos, portfolio banners, team images) must have descriptive alt text. Fix all empty alts.

### 10G. Twitter card
- `meta-twitter:creator: @PlazmaSoft` — verify this handle exists. If not, remove or change to Rajnandan's handle.

---

## STEP 11 — TESTIMONIALS (replace silence with 3 real ones)

Currently no testimonial section on the homepage. Add a "What Clients Say" section using the 3 real testimonials from rajnandanweb.com:

```
1. Pravin Sharma — Founder, Ongofix (Mumbai):
   "Rajnandan built our entire doorstep repair booking platform from scratch.
   His technical expertise and attention to detail made Ongofix exactly what we envisioned."

2. Dipesh Kushwaha — Founder, TradeGuardian:
   "Working with Rajnandan on TradeGuardian was seamless. He understood
   the complexity of real-time trading data and delivered a robust, reliable platform."

3. Aditya — Founder, WasherBee (Dubai):
   "Rajnandan delivered our WasherBee platform on time with great quality.
   Professional, responsive, and truly understood our laundry service business needs."
```

Add a fourth slot for a future testimonial. Layout: 2x2 grid on desktop, carousel on mobile.

---

## STEP 12 — CONTACT FORM HARDENING

### 12A. Backend
- Confirm the form actually POSTs to a working controller. Check `app/Http/Controllers/ContactController.php` (or similar).
- Ensure emails are sent via the configured mailer (SendGrid based on Rajnandan's setup — use `hello@plazmasoft.com` as sender).
- Add reCAPTCHA v3 or hCaptcha (spam protection).
- Honeypot field.
- Server-side validation (required, email format, max length).
- Save submissions to DB (`contact_submissions` table) AND email.
- Send auto-reply to the inquirer.

### 12B. Form UX
- Change minimum budget option: REMOVE "$100 - $1000". Start at "$1,000 - $5,000". Add "Not sure / Need consultation" as default.
- Add a "Project Type" dropdown: Web App / Mobile App / AI Integration / MVP / Maintenance / Other.
- Add an optional file upload (PDF/image, 5MB max).
- Success state: redirect to `/thank-you` page with calendar booking link (Calendly/Cal.com if Rajnandan has one).

---

## STEP 13 — PERFORMANCE QUICK WINS

Run a quick perf pass before commit:

1. **Lazy-load all below-the-fold images** — add `loading="lazy"` to `<img>` tags except hero/above-fold.
2. **Compress portfolio banners** — many are PNGs at the original `/storage/projects/banner/` path. Add a Laravel job that converts to WebP on upload and serves WebP with PNG fallback.
3. **Minify CSS/JS** — confirm Laravel Mix / Vite is producing minified output in production.
4. **Defer non-critical JS** (GTM is fine to keep; everything else `defer`).
5. **Self-host the Google Fonts** if used (privacy + speed).

Run Lighthouse before/after; target Performance 85+, SEO 95+, Accessibility 90+.

---

## STEP 14 — ADMIN PANEL CHECK

The site has a Laravel admin (CSRF tokens visible, dynamic storage paths). Don't break it.

1. List all admin routes: `php artisan route:list | grep admin`
2. Confirm admin login still works after route cleanups in Steps 6-7.
3. Make sure the `projects` table CRUD in admin still works — important for Rajnandan to add new portfolio items later.
4. Add an admin section for managing testimonials (currently hardcoded — make them DB-driven).
5. Add admin section for blog CRUD if not already present.

---

## STEP 15 — FINAL CHECKLIST BEFORE DEPLOY

Tick each before pushing:

- [ ] No "TechnoYuga" string anywhere in the codebase
- [ ] No fake team member names anywhere (Krishna K Dewda, Mrugesh, Bhavesh, etc.)
- [ ] "founded in" has a year filled in
- [ ] All footer links work
- [ ] All social icons either link to real profiles or are removed
- [ ] All 15 useless solution pages deleted with 301 redirects
- [ ] All 6 "/team/*-developer" pages deleted with 301 redirects
- [ ] Per-page canonical URLs are dynamic
- [ ] Per-page unique meta descriptions
- [ ] JSON-LD Organization schema on every page
- [ ] Article schema on blog posts
- [ ] sitemap.xml regenerated with the cleaned URL list
- [ ] robots.txt updated
- [ ] All `alt=""` filled in
- [ ] Awards section either linked to real profiles or removed
- [ ] Stats consistent across all pages
- [ ] Contact form works end-to-end (with auto-reply)
- [ ] At least 3 real testimonials live
- [ ] At least 4 real blog posts live (1 existing + 3 ported)
- [ ] Portfolio has all 18 projects with banners and case studies
- [ ] No broken `<>` or `href=""` anywhere
- [ ] Lighthouse SEO score ≥ 95
- [ ] Mobile responsive check on all changed pages
- [ ] Git commits in logical chunks with clear messages
- [ ] Submit new sitemap to Google Search Console
- [ ] Submit URL inspection requests for the cleaned key pages

---

## DELIVERABLES

After completion, produce:
1. A `CHANGELOG.md` summarizing every change
2. A list of 301 redirects added (for SEO migration tracking)
3. A list of any open items where you need Rajnandan's input (e.g., confirming the founding year, confirming office address, providing missing portfolio banner images)
4. Screenshots of the before/after homepage and team page

Work systematically — one step at a time. Show me the plan before destructive deletes. Commit logically.
