<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

/**
 * Adds all real portfolio projects from rajnandanweb.com.
 * Safe to run multiple times (uses updateOrCreate by slug).
 *
 * Run via: php artisan db:seed --class=PortfolioSeeder --force
 * Or via:  https://plazmasoft.com/post-deploy.php?key=SECRET&seed=1
 */
class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $webCat    = ProjectCategory::firstOrCreate(
            ['slug' => 'web-app'],
            ['name' => 'Web App', 'color' => '#6366f1', 'sort_order' => 1]
        );
        $mobileCat = ProjectCategory::firstOrCreate(
            ['slug' => 'mobile-app'],
            ['name' => 'Mobile App', 'color' => '#0ea5e9', 'sort_order' => 2]
        );
        $aiCat = ProjectCategory::firstOrCreate(
            ['slug' => 'ai-project'],
            ['name' => 'AI Project', 'color' => '#f59e0b', 'sort_order' => 3]
        );
        $fsCat = ProjectCategory::firstOrCreate(
            ['slug' => 'full-stack'],
            ['name' => 'Full Stack', 'color' => '#10b981', 'sort_order' => 4]
        );
        $mvpCat = ProjectCategory::firstOrCreate(
            ['slug' => 'mvp'],
            ['name' => 'MVP', 'color' => '#fb923c', 'sort_order' => 5]
        );

        $projects = [

            // ── Already seeded (kept here so this seeder is self-contained) ──

            [
                'project_category_id' => $fsCat->id,
                'title'       => 'Ongofix',
                'slug'        => 'ongofix',
                'client_name' => 'Ongofix',
                'tagline'     => 'Device repair booking platform for doorstep repair services across India.',
                'summary'     => 'Ongofix is a device care platform that connects customers with nearby repair technicians for doorstep smartphone and laptop repair. Customers book appointments, track technician location, and pay through the app.',
                'problem'     => 'Getting a phone repaired meant visiting an unreliable local shop with no visibility on wait time, parts availability, or pricing. Customers had no way to trust the technician.',
                'solution'    => 'Two-sided platform with technician vetting, real-time tracking, upfront pricing, and digital invoices. Built on Laravel with a Livewire admin panel and MySQL database.',
                'outcome'     => 'Platform live at ongofix.com. Serving customers across Mumbai and Pune with verified repair partners.',
                'tech_stack'  => json_encode(['Laravel', 'Livewire', 'MySQL', 'Tailwind CSS']),
                'live_url'    => 'https://ongofix.com/',
                'region'      => 'India',
                'industry'    => 'On-demand Services',
                'team_size'   => 2,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 1,
            ],
            [
                'project_category_id' => $webCat->id,
                'title'       => 'TradeGuardian',
                'slug'        => 'tradeguardian',
                'client_name' => 'TradeGuardian',
                'tagline'     => 'Real-time market analysis platform with AI-powered trading signals.',
                'summary'     => 'TradeGuardian is a trading platform that delivers real-time market analysis and AI-powered signals to help traders make informed decisions. The platform aggregates market data, processes it through custom algorithms, and presents actionable insights on a clean dashboard.',
                'problem'     => 'Retail traders were drowning in raw market data with no structured way to identify high-probability setups. Existing tools were either too complex or too simplistic.',
                'solution'    => 'A Laravel-based web application with real-time data feeds, signal generation, custom watchlists, and portfolio tracking. Blade templates with Alpine.js for interactive UI.',
                'outcome'     => 'Live at tradeguardian.tech. Active user base with daily signal alerts and market reports.',
                'tech_stack'  => json_encode(['Laravel', 'Blade Template', 'MySQL', 'Alpine.js']),
                'live_url'    => 'https://tradeguardian.tech/',
                'region'      => 'India',
                'industry'    => 'Fintech',
                'team_size'   => 2,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 2,
            ],
            [
                'project_category_id' => $fsCat->id,
                'title'       => 'WasherBee Dubai',
                'slug'        => 'washerbee-dubai',
                'client_name' => 'WasherBee',
                'tagline'     => 'On-demand laundry and dry cleaning platform for the Dubai market.',
                'summary'     => 'WasherBee is a laundry service platform built for the Dubai market. Customers schedule pickup slots, track order status, and pay online. The operations team manages routes, driver assignments, and order processing through a web dashboard.',
                'problem'     => 'Laundry services in Dubai were managed by phone and WhatsApp. Customers had no visibility on order status and operators had no structured system for dispatch.',
                'solution'    => 'Laravel backend with Blade frontend, MySQL database, and an integrated booking and dispatch workflow. Clean, mobile-responsive interface designed for UAE customers.',
                'outcome'     => 'Live at washerbeedubai.com. Fully operational with active customer bookings and driver dispatch.',
                'tech_stack'  => json_encode(['Laravel', 'Blade Template', 'MySQL', 'Tailwind CSS']),
                'live_url'    => 'https://washerbeedubai.com/',
                'region'      => 'UAE',
                'industry'    => 'On-demand Services',
                'team_size'   => 2,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 3,
            ],
            [
                'project_category_id' => $webCat->id,
                'title'       => 'Canvas of Celebrations',
                'slug'        => 'canvas-of-celebrations',
                'client_name' => 'Canvas of Celebrations',
                'tagline'     => 'Event planning and celebration booking platform for weddings and corporate events.',
                'summary'     => 'Canvas of Celebrations is a full-service event planning website where clients can browse curated event packages for weddings, corporate gatherings, and birthday celebrations. The platform lets prospective clients explore service offerings, view gallery work, and submit booking inquiries directly online.',
                'problem'     => 'The event planning company was relying on Instagram DMs and phone calls for all client inquiries. There was no central place to showcase their portfolio or collect structured booking requests.',
                'solution'    => 'A Laravel-based marketing and inquiry management website with a package showcase, photo gallery, testimonials, and a structured booking request form that routes leads to the team.',
                'outcome'     => 'Live at canvasofcelebrations.com. Client inquiry volume increased significantly after launch with structured lead management replacing ad-hoc messaging.',
                'tech_stack'  => json_encode(['Laravel', 'Blade Template', 'MySQL', 'Tailwind CSS']),
                'live_url'    => 'https://canvasofcelebrations.com/',
                'region'      => 'India',
                'industry'    => 'Events',
                'team_size'   => 1,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 4,
            ],
            [
                'project_category_id' => $aiCat->id,
                'title'       => 'Proptifi',
                'slug'        => 'proptifi',
                'client_name' => 'Proptifi',
                'tagline'     => 'AI interior design platform using Stable Diffusion and ControlNet for virtual staging.',
                'summary'     => 'Proptifi allows real estate agents and property owners to upload room photos and generate AI-staged interior design variations using Stable Diffusion with ControlNet. The platform handles bulk image processing, style selection, and result management through a clean web interface.',
                'problem'     => 'Physical property staging costs lakhs per property and takes days to arrange. Agents needed a way to show buyers transformation potential at a fraction of the cost.',
                'solution'    => 'Angular frontend, .NET API, and Python-based Stable Diffusion pipeline with ControlNet for structure-aware image generation. AWS S3 for processed image storage.',
                'outcome'     => 'Live at proptifi.com. Serving real estate agencies with AI-generated staging at a fraction of traditional staging costs.',
                'tech_stack'  => json_encode(['Angular', '.NET', 'Python', 'Stable Diffusion', 'ControlNet', 'AWS']),
                'live_url'    => 'https://proptifi.com/',
                'region'      => 'India, UAE',
                'industry'    => 'Real Estate, AI',
                'team_size'   => 3,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 5,
            ],
            [
                'project_category_id' => $fsCat->id,
                'title'       => 'Fleeta2z',
                'slug'        => 'fleeta2z',
                'client_name' => 'Fleeta2z',
                'tagline'     => 'Fleet management platform for tracking vehicles, drivers, and maintenance schedules.',
                'summary'     => 'Fleeta2z is a complete fleet management system that gives transport operators full visibility over their vehicle fleet. The platform tracks real-time vehicle locations via GPS integration, manages driver assignments, monitors fuel consumption, and schedules preventive maintenance with automated alerts.',
                'problem'     => 'The client managed their fleet through phone calls and manual spreadsheets. Dispatchers had no live visibility into vehicle locations, leading to delays and missed deliveries.',
                'solution'    => 'Laravel-based web dashboard with GPS protocol integration for live tracking, a Blade frontend with map views, MySQL for historical trip data, and driver mobile app integration via REST API.',
                'outcome'     => 'Live at fleeta2z.online. Fleet operators now have real-time visibility across all vehicles with automated maintenance reminders and digital trip logs.',
                'tech_stack'  => json_encode(['Laravel', 'MySQL', 'Blade Template', 'GPS Integration', 'REST API']),
                'live_url'    => 'https://fleeta2z.online/',
                'region'      => 'India',
                'industry'    => 'Logistics',
                'team_size'   => 2,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 6,
            ],
            [
                'project_category_id' => $mobileCat->id,
                'title'       => 'EVA2Z Connect',
                'slug'        => 'eva2z-connect',
                'client_name' => 'Fleeta2z',
                'tagline'     => 'Android GPS tracking app for drivers in the Fleeta2z fleet management system.',
                'summary'     => 'EVA2Z Connect is the Android companion app for the Fleeta2z fleet platform. Drivers use it to share their real-time location, receive dispatch instructions, log trip start and end events, and submit digital proof of delivery. The app communicates with the fleet backend via GPS protocol over a persistent connection.',
                'problem'     => 'Drivers were reporting their location manually by phone, leading to inaccurate data and delayed dispatch responses. The fleet web dashboard had no live feeds from vehicles.',
                'solution'    => 'A Kotlin-based Android app with background GPS location broadcasting, trip event logging, and push notifications for dispatch updates. Backend API built in Laravel handles all driver data streams.',
                'outcome'     => 'Available on Google Play. Integrated with the Fleeta2z dashboard for live fleet visibility across all active drivers.',
                'tech_stack'  => json_encode(['Kotlin', 'Android', 'GPS Protocol', 'Laravel API']),
                'region'      => 'India',
                'industry'    => 'Logistics',
                'team_size'   => 1,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 7,
            ],
            [
                'project_category_id' => $mobileCat->id,
                'title'       => 'Flare HD Wallpaper',
                'slug'        => 'flare-hd-wallpaper',
                'client_name' => 'Flare App',
                'tagline'     => 'High-definition wallpaper Android app with curated collections and offline caching.',
                'summary'     => 'Flare HD Wallpaper is a consumer Android application that delivers a curated library of high-definition wallpapers across categories including nature, abstract, architecture, and minimalism. Users can browse, preview, download, and set wallpapers directly from the app with offline access to previously viewed collections.',
                'problem'     => 'Existing wallpaper apps were cluttered with ads, low-quality images, and slow loading. Users wanted a clean, fast experience with genuinely premium wallpaper quality.',
                'solution'    => 'A Kotlin-based Android app with Firebase Realtime Database for content management, Firebase Storage for image delivery, and local caching for offline access. Clean Material You design system.',
                'outcome'     => 'Published on Google Play. Strong user ratings with regular content updates managed through the Firebase console.',
                'tech_stack'  => json_encode(['Kotlin', 'Android', 'Firebase', 'Material Design']),
                'region'      => 'Global',
                'industry'    => 'Consumer Apps',
                'team_size'   => 1,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 8,
            ],
            [
                'project_category_id' => $mobileCat->id,
                'title'       => 'Quiz Markets',
                'slug'        => 'quiz-markets',
                'client_name' => 'Quiz Markets',
                'tagline'     => 'Interactive quiz and trivia challenge Android app across multiple knowledge categories.',
                'summary'     => 'Quiz Markets is a mobile quiz game for Android featuring hundreds of questions across categories like general knowledge, sports, science, and pop culture. Players compete against leaderboards, track their progress, and earn badges for streaks. The app uses Firebase for real-time score updates and user authentication.',
                'problem'     => 'Educational quiz apps either felt too academic or too trivial. The client wanted something genuinely engaging that combined entertainment with knowledge building.',
                'solution'    => 'A Java-based Android application with Firebase Authentication, Realtime Database for live leaderboards, and Firestore for the question bank. Smooth animations and a competitive scoring system keep users engaged.',
                'outcome'     => 'Published on Google Play with an active player base competing on daily and weekly leaderboards.',
                'tech_stack'  => json_encode(['Java', 'Android', 'Firebase', 'Firestore']),
                'region'      => 'India',
                'industry'    => 'EdTech, Gaming',
                'team_size'   => 1,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 9,
            ],
            [
                'project_category_id' => $fsCat->id,
                'title'       => 'FasalVision',
                'slug'        => 'fasalvision',
                'client_name' => 'FasalVision',
                'tagline'     => 'Agricultural advisory app in Hindi for Indian farmers with offline-first support.',
                'summary'     => 'FasalVision is an agritech mobile app that delivers crop disease identification, mandi price alerts, weather advisories, and government scheme information to farmers in rural India. The app is fully functional offline and syncs data in the background when connectivity is available.',
                'problem'     => 'Agricultural advisories reached farmers days or weeks late through pamphlets. Farmers in low-connectivity areas had no access to timely, actionable crop information.',
                'solution'    => 'Flutter app with SQLite offline database, background sync via WorkManager equivalent, Firebase push notifications for critical alerts, and full Hindi language support throughout the UI.',
                'outcome'     => 'Available on Google Play. Deployed to farmers across Bihar and Uttar Pradesh with strong weekly active usage.',
                'tech_stack'  => json_encode(['Flutter', 'Firebase', 'SQLite', 'Laravel API']),
                'region'      => 'India',
                'industry'    => 'Agritech',
                'team_size'   => 2,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 10,
            ],
            [
                'project_category_id' => $fsCat->id,
                'title'       => 'LegalLease LMS',
                'slug'        => 'legallease-lms',
                'client_name' => 'LegalLease',
                'tagline'     => 'Learning management system with web admin for instructors and Flutter app for students.',
                'summary'     => 'LegalLease LMS is a full learning management platform built for a professional education provider. Instructors manage course content, student enrollments, and assessments through a CodeIgniter web admin panel. Students access and complete coursework through a Flutter mobile app with offline video support.',
                'problem'     => 'The client delivered professional courses through WhatsApp groups and Google Drive folders. There was no structured tracking of student progress, certificates, or payment collection.',
                'solution'    => 'CodeIgniter backend with MySQL for the web admin panel, REST API for the mobile app, and a Flutter student app with video streaming, quizzes, progress tracking, and certificate generation.',
                'outcome'     => 'Platform operational with active course cohorts running and automated certificate issuance on course completion.',
                'tech_stack'  => json_encode(['CodeIgniter', 'MySQL', 'Flutter', 'REST API']),
                'region'      => 'India',
                'industry'    => 'EdTech',
                'team_size'   => 2,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 11,
            ],
            [
                'project_category_id' => $webCat->id,
                'title'       => 'CA and Legal Services Platform',
                'slug'        => 'ca-legal-services',
                'client_name' => 'LegalLease',
                'tagline'     => 'Complete management platform for CA firms and legal professionals handling franchise networks.',
                'summary'     => 'This platform provides CA firms and legal service providers with a complete practice management solution. It covers franchise network management, client onboarding, document collection, compliance tracking, billing, and staff management through a unified Laravel web application.',
                'problem'     => 'CA firms managing franchise networks struggled with fragmented tools for tracking client documents, billing different franchise locations, and maintaining compliance deadlines across multiple offices.',
                'solution'    => 'A Laravel application with role-based access for HQ administrators, franchise managers, and field staff. MySQL database with structured workflows for client intake, document management, and compliance calendar.',
                'outcome'     => 'Deployed and operational. Franchise network now manages all client interactions, billing, and compliance tracking through a single platform.',
                'tech_stack'  => json_encode(['Laravel', 'MySQL', 'Blade Template', 'Tailwind CSS']),
                'region'      => 'India',
                'industry'    => 'Professional Services',
                'team_size'   => 2,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 12,
            ],
            [
                'project_category_id' => $webCat->id,
                'title'       => 'FireSafe Pro',
                'slug'        => 'firesafe-pro',
                'client_name' => 'FireSafe Pro',
                'tagline'     => 'B2B website for fire safety equipment supply, installation, and AMC services.',
                'summary'     => 'FireSafe Pro is a premium B2B marketing website for a fire safety equipment company offering supply, installation, and annual maintenance contracts for fire suppression and detection systems. The site showcases product categories, certifications, past projects, and service coverage areas with a structured inquiry management system.',
                'problem'     => 'The client was winning business purely through referrals with no online presence. Procurement teams at large facilities needed a professional website to evaluate and shortlist vendors.',
                'solution'    => 'A Laravel-based website with a product catalog, service pages, compliance certificate showcases, project gallery, and a lead capture form that routes inquiries to the sales team via email.',
                'outcome'     => 'Website live and driving inbound inquiries from corporate and industrial facility managers searching for certified fire safety vendors.',
                'tech_stack'  => json_encode(['Laravel', 'MySQL', 'Blade Template', 'Tailwind CSS']),
                'region'      => 'India',
                'industry'    => 'Safety, B2B',
                'team_size'   => 1,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 13,
            ],
        ];

        foreach ($projects as $data) {
            Project::updateOrCreate(
                ['slug' => $data['slug']],
                array_merge($data, ['published_at' => now()])
            );
        }

        $this->command->info('Portfolio seeded: ' . count($projects) . ' projects updated or created.');
    }
}
