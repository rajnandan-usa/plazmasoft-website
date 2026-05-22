<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\Faq;
use App\Models\ProcessStep;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Solution;
use App\Models\TeamMember;
use App\Models\TechStackItem;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RealDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedAdmin();
        $this->seedServices();
        $this->seedSolutions();
        $this->seedTeam();
        $this->seedProcessSteps();
        $this->seedTechStack();
        $this->seedProjectCategories();
        $this->seedProjects();
        $this->seedTestimonials();
        $this->seedBlog();
        $this->seedFaqs();
    }

    private function seedAdmin(): void
    {
        User::updateOrCreate(
            ['email' => 'rajnandanweb@gmail.com'],
            [
                'name'     => 'Rajnandan Kushwaha',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
            ]
        );
    }

    private function seedServices(): void
    {
        $services = [
            [
                'title'       => 'Web App Development',
                'slug'        => 'web-app-development',
                'tagline'     => 'Laravel and React applications built for real traffic, real data, and real business logic.',
                'excerpt'     => 'From SaaS platforms to internal tools, we build web applications that are fast, secure, and maintainable.',
                'description' => '<p>From SaaS platforms to internal tools, we architect and build web applications that are fast, secure, and maintainable. Our stack centers on Laravel for the backend and Tailwind plus Alpine.js or React for the frontend.</p><p>Every project starts with a proper schema design, a clean API contract, and a deployment pipeline that works from day one. We do not cut corners on security, observability, or test coverage.</p>',
                'icon'        => '🌐',
                'tech_stack'  => json_encode(['Laravel', 'React', 'Next.js', 'Tailwind CSS', 'MySQL', 'Redis']),
                'features'    => json_encode([
                    ['title' => 'Laravel + React / Next.js', 'description' => 'Full-stack with modern frontend'],
                    ['title' => 'REST and GraphQL APIs', 'description' => 'Clean, versioned API design'],
                    ['title' => 'Multi-tenant SaaS', 'description' => 'Team/org-scoped data isolation'],
                    ['title' => 'Admin dashboards', 'description' => 'Filament-powered backend panels'],
                    ['title' => 'E-commerce and payments', 'description' => 'Stripe, Razorpay, PayU'],
                    ['title' => 'Real-time features', 'description' => 'WebSockets and Pusher'],
                ]),
                'faq'         => json_encode([
                    ['question' => 'What is your typical web app tech stack?', 'answer' => 'Laravel for the backend API, React or Next.js for the frontend, MySQL for the primary database, and Redis for caching and queues. We deploy on AWS or VPS depending on your budget.'],
                    ['question' => 'Do you build multi-tenant SaaS applications?', 'answer' => 'Yes. We have built several multi-tenant platforms with per-team data isolation, custom subdomains, and role-based access control.'],
                    ['question' => 'Can you take over an existing Laravel project?', 'answer' => 'Yes. We have onboarded many projects mid-development. We start with a codebase audit before writing a single line of new code.'],
                ]),
                'sort_order'  => 1,
            ],
            [
                'title'       => 'Mobile App Development',
                'slug'        => 'mobile-app-development',
                'tagline'     => 'Cross-platform Flutter apps for iOS and Android that users actually keep on their phones.',
                'excerpt'     => 'We build Flutter applications that deliver a native feel across iOS and Android from a single codebase.',
                'description' => '<p>We build Flutter applications that deliver a native feel across iOS and Android from a single codebase. From consumer apps to enterprise tools, we handle the full cycle from Figma to App Store submission.</p><p>Flutter gives us a single codebase for both platforms without sacrificing performance or platform-native behaviour. We ship apps that pass App Store review on the first attempt.</p>',
                'icon'        => '📱',
                'tech_stack'  => json_encode(['Flutter', 'Dart', 'Firebase', 'Laravel API', 'Razorpay']),
                'features'    => json_encode([
                    ['title' => 'Flutter (iOS + Android)', 'description' => 'One codebase, both platforms'],
                    ['title' => 'Push notifications', 'description' => 'FCM with deep links'],
                    ['title' => 'Offline-first architecture', 'description' => 'Works without internet'],
                    ['title' => 'Stripe and Razorpay payments', 'description' => 'In-app purchase flows'],
                    ['title' => 'Play Store + App Store submission', 'description' => 'We handle the full submission'],
                    ['title' => 'OTA updates', 'description' => 'Push updates without store review'],
                ]),
                'faq'         => json_encode([
                    ['question' => 'Why Flutter over React Native?', 'answer' => 'Flutter renders its own UI widgets instead of relying on native bridges, which means more consistent behaviour across platforms and fewer runtime surprises. The Dart language is also strongly typed, which helps on larger teams.'],
                    ['question' => 'How long does a typical mobile app take?', 'answer' => 'A focused MVP with a clean scope takes 8 to 12 weeks. Apps with complex real-time features, payment flows, or hardware integrations take longer.'],
                    ['question' => 'Do you handle App Store and Play Store submissions?', 'answer' => 'Yes. We handle the full submission process including screenshots, metadata, and responding to rejection reasons if they come up.'],
                ]),
                'sort_order'  => 2,
            ],
            [
                'title'       => 'AI Integration',
                'slug'        => 'ai-integration',
                'tagline'     => 'Gemini, GPT-4, Stable Diffusion, and custom LLM integrations wired directly into your product.',
                'excerpt'     => 'We integrate AI APIs into existing products and build AI-native features from the ground up.',
                'description' => '<p>We integrate AI APIs into existing products and build AI-native features from the ground up. We have shipped AI-powered search, image generation, document analysis, and conversational interfaces in production.</p><p>The work is not just calling an API. It involves prompt engineering, output validation, fallback handling, cost monitoring, and making sure the AI output is actually useful to your users.</p>',
                'icon'        => '🤖',
                'tech_stack'  => json_encode(['OpenAI GPT-4', 'Google Gemini', 'Stable Diffusion', 'Python', 'Laravel', 'Pinecone']),
                'features'    => json_encode([
                    ['title' => 'Gemini and OpenAI API integration', 'description' => 'Latest models, streaming responses'],
                    ['title' => 'Stable Diffusion image generation', 'description' => 'Custom pipelines with ControlNet'],
                    ['title' => 'RAG pipelines', 'description' => 'Retrieval-augmented generation over your data'],
                    ['title' => 'AI-powered search', 'description' => 'Semantic search with vector embeddings'],
                    ['title' => 'Document processing', 'description' => 'PDF extraction, OCR, summarisation'],
                    ['title' => 'Custom fine-tuning', 'description' => 'Domain-specific model training'],
                ]),
                'faq'         => json_encode([
                    ['question' => 'Which AI model should I use for my project?', 'answer' => 'It depends on your latency requirements, budget, and the task. Gemini Flash is great for high-volume, low-latency tasks. GPT-4o is strong for complex reasoning. Stable Diffusion is the go-to for image generation. We help you choose based on your actual use case.'],
                    ['question' => 'Can you integrate AI into our existing Laravel or React app?', 'answer' => 'Yes. We have added AI features to multiple existing codebases. We wire the API, build the prompt layer, and add the UI without disrupting your existing architecture.'],
                    ['question' => 'What is RAG and when do I need it?', 'answer' => 'Retrieval-augmented generation lets an LLM answer questions about your own data without fine-tuning the model. It is the right approach when you want a chatbot that knows your product documentation, contracts, or knowledge base.'],
                ]),
                'sort_order'  => 3,
            ],
            [
                'title'       => 'UI / UX Development',
                'slug'        => 'ui-ux-development',
                'tagline'     => 'Figma-to-code that looks great, loads fast, and works on every device.',
                'excerpt'     => 'We take your Figma designs and build pixel-perfect, responsive frontends using Tailwind CSS and modern JavaScript.',
                'description' => '<p>We take your Figma designs and build pixel-perfect, responsive frontends using Tailwind CSS and modern JavaScript. We also do the design work when you do not have a designer.</p><p>Good UI is not just aesthetics. It is load time, accessibility, keyboard navigation, and component consistency. We build design systems that your team can maintain and extend.</p>',
                'icon'        => '🎨',
                'tech_stack'  => json_encode(['Tailwind CSS', 'Alpine.js', 'React', 'Figma', 'Framer Motion']),
                'features'    => json_encode([
                    ['title' => 'Figma-to-Tailwind implementation', 'description' => 'Pixel-perfect conversion'],
                    ['title' => 'Responsive layouts', 'description' => 'Mobile-first, tested on real devices'],
                    ['title' => 'Design system creation', 'description' => 'Reusable component libraries'],
                    ['title' => 'Animation and micro-interactions', 'description' => 'Smooth, purposeful motion'],
                    ['title' => 'Accessibility (WCAG AA)', 'description' => 'Screen reader and keyboard support'],
                    ['title' => 'Performance optimisation', 'description' => 'Core Web Vitals-focused builds'],
                ]),
                'faq'         => json_encode([
                    ['question' => 'Do you do design-only work without development?', 'answer' => 'Yes. We can deliver Figma files, design systems, or component libraries without writing any production code if that is what you need.'],
                    ['question' => 'Can you improve the UI of an existing product?', 'answer' => 'Yes. We do UI audits, redesigns, and incremental improvements. We can work within your existing stack or migrate to Tailwind.'],
                ]),
                'sort_order'  => 4,
            ],
            [
                'title'       => 'MVP Development',
                'slug'        => 'mvp-development',
                'tagline'     => 'Launch your idea in 6 to 8 weeks with a production-ready MVP, not a prototype.',
                'excerpt'     => 'We specialise in taking ideas from zero to live product quickly. Structured, scoped, and shipped.',
                'description' => '<p>We specialise in taking ideas from zero to live product quickly. Our MVP process is structured: one week of scoping, five to six weeks of development, one week of QA and launch preparation.</p><p>The output is a production-ready product, not a proof of concept. Auth, payments, admin panel, and deployment are all included. We do not build demos that fall apart under real usage.</p>',
                'icon'        => '🚀',
                'tech_stack'  => json_encode(['Laravel', 'Flutter', 'React', 'Tailwind CSS', 'Stripe', 'AWS']),
                'features'    => json_encode([
                    ['title' => 'Fixed scope, fixed timeline', 'description' => '6 to 8 week delivery guarantee'],
                    ['title' => 'Production-ready from day one', 'description' => 'Not a throwaway prototype'],
                    ['title' => 'Auth, payments, admin included', 'description' => 'Full product, not just screens'],
                    ['title' => 'Laravel + Flutter or React', 'description' => 'Proven stack for fast shipping'],
                    ['title' => 'Deployment on your infrastructure', 'description' => 'You own everything'],
                    ['title' => 'Post-launch support', 'description' => '30-day bug fix guarantee'],
                ]),
                'faq'         => json_encode([
                    ['question' => 'What does "production-ready" mean to you?', 'answer' => 'It means the app handles real users, real data, and real edge cases. It has proper error handling, input validation, rate limiting, and a deployment pipeline. It is not a demo you have to rebuild before launch.'],
                    ['question' => 'What is included in the 6 to 8 week MVP?', 'answer' => 'User authentication, core feature set from the scoping doc, an admin panel for managing data, payment integration if needed, deployment to your server or cloud, and a 30-day post-launch bug fix window.'],
                    ['question' => 'What if the scope changes during development?', 'answer' => 'Scope changes reset the timeline. We are strict about this because it is how we keep the promise of delivering on time. We document the original scope clearly upfront so everyone is aligned.'],
                ]),
                'sort_order'  => 5,
            ],
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(['slug' => $data['slug']], array_merge($data, [
                'is_published' => true,
                'published_at' => now(),
            ]));
        }
    }

    private function seedSolutions(): void
    {
        $solutions = [
            [
                'title'       => 'Fintech Development',
                'slug'        => 'fintech-development',
                'tagline'     => 'Trading platforms, wallets, KYC flows, and payment integrations built for compliance.',
                'excerpt'     => 'We have built fintech products for trade finance, investment tracking, and digital wallets.',
                'description' => '<p>We have built fintech products for trade finance, investment tracking, and digital wallets. We understand the compliance requirements, the API integrations, and the security architecture that fintech demands.</p><p>Fintech is not just another web app. Audit logs, double-entry accounting, fraud detection hooks, and regulatory reporting are first-class concerns from day one.</p>',
                'icon'        => '💳',
                'tech_stack'  => json_encode(['Laravel', 'React', 'Stripe', 'Razorpay', 'MySQL', 'Redis']),
                'features'    => json_encode([
                    'Trade finance platforms',
                    'Digital wallets and UPI',
                    'KYC and AML flows',
                    'Stripe, Razorpay, and PayU integrations',
                    'Portfolio and investment dashboards',
                    'Real-time market data feeds',
                ]),
                'sort_order'  => 1,
            ],
            [
                'title'       => 'Fleet Management',
                'slug'        => 'fleet-management',
                'tagline'     => 'Real-time GPS tracking, driver apps, and dispatch dashboards that reduce operational costs.',
                'excerpt'     => 'Our fleet management software covers the full logistics stack from driver apps to dispatch dashboards.',
                'description' => '<p>Our fleet management software covers the full logistics stack: driver mobile apps, dispatcher dashboards, real-time GPS, route optimisation, and reporting.</p><p>We have built fleet systems for last-mile delivery, long-haul logistics, and service dispatch operations. The challenge is not just tracking vehicles. It is making sure the right information reaches the right person at the right time.</p>',
                'icon'        => '🚚',
                'tech_stack'  => json_encode(['Flutter', 'Laravel', 'Google Maps API', 'Firebase', 'WebSockets']),
                'features'    => json_encode([
                    'Real-time GPS tracking',
                    'Driver mobile app (Flutter)',
                    'Dispatch and booking dashboard',
                    'Route optimisation',
                    'Fuel and maintenance tracking',
                    'Customer tracking links',
                ]),
                'sort_order'  => 2,
            ],
            [
                'title'       => 'AI Property Visualization',
                'slug'        => 'ai-property-visualization',
                'tagline'     => 'Stable Diffusion-powered virtual staging and property visualization for real estate.',
                'excerpt'     => 'We build AI-powered visualization tools for real estate: virtual staging, facade redesign, and interior previews.',
                'description' => '<p>We build AI-powered visualization tools for real estate: virtual staging, facade redesign, interior renovation previews, and neighbourhood rendering.</p><p>Stable Diffusion with ControlNet gives real estate agents and developers the ability to show buyers what a space could look like without a physical staging budget. We have shipped these systems at scale with bulk processing pipelines.</p>',
                'icon'        => '🏠',
                'tech_stack'  => json_encode(['Python', 'Stable Diffusion', 'ControlNet', 'Laravel', 'AWS S3']),
                'features'    => json_encode([
                    'Stable Diffusion virtual staging',
                    'Before and after interior renders',
                    'Facade redesign AI',
                    '360-degree virtual tours',
                    'CRM integration',
                    'Bulk image processing pipeline',
                ]),
                'sort_order'  => 3,
            ],
            [
                'title'       => 'Agritech Development',
                'slug'        => 'agritech-development',
                'tagline'     => 'Crop monitoring, farmer marketplace apps, and advisory platforms for Indian agriculture.',
                'excerpt'     => 'We have built agritech products for crop advisory, farm-to-market commerce, and government scheme tracking.',
                'description' => '<p>We have built agritech products for crop advisory, farm-to-market commerce, and government scheme tracking. We understand the constraints of rural connectivity and low-end Android devices.</p><p>Offline-first architecture, SMS fallback, and vernacular language support are not afterthoughts in our agritech projects. They are designed in from the beginning.</p>',
                'icon'        => '🌾',
                'tech_stack'  => json_encode(['Flutter', 'Laravel', 'Firebase', 'SMS API', 'MySQL']),
                'features'    => json_encode([
                    'Farmer advisory apps',
                    'Crop health monitoring',
                    'Farm-to-market marketplace',
                    'SMS and WhatsApp notifications',
                    'Offline-first Flutter apps',
                    'Government scheme integration',
                ]),
                'sort_order'  => 4,
            ],
        ];

        foreach ($solutions as $data) {
            Solution::updateOrCreate(['slug' => $data['slug']], array_merge($data, [
                'is_published' => true,
                'published_at' => now(),
            ]));
        }
    }

    private function seedTeam(): void
    {
        TeamMember::updateOrCreate(['name' => 'Rajnandan Kushwaha'], [
            'role'        => 'Founder and Full Stack Developer',
            'bio'         => 'Rajnandan started Plazmasoft in 2022 after building products for clients across India, Dubai, and the US. He leads technical architecture and is the primary engineer on most client projects. He has shipped over 18 production applications across fintech, logistics, real estate, and agritech.',
            'linkedin_url' => 'https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/',
            'github_url'  => 'https://github.com/rajnandan-usa',
            'sort_order'  => 1,
            'is_published' => true,
            'is_founder'  => true,
        ]);
    }

    private function seedProcessSteps(): void
    {
        $steps = [
            ['step_number' => 1, 'title' => 'Discovery call', 'description' => 'We spend 45 minutes learning what you are building, why, and who uses it. We ask about your timeline, budget, and any constraints. No pitch, just questions.', 'icon' => '📞', 'sort_order' => 1],
            ['step_number' => 2, 'title' => 'Scope and spec', 'description' => 'We write a detailed scope document covering every screen, API endpoint, and user flow. This becomes the contract. No surprises mid-project.', 'icon' => '📋', 'sort_order' => 2],
            ['step_number' => 3, 'title' => 'Design', 'description' => 'We design in Figma before writing a line of code. You approve the design. Only then does development start.', 'icon' => '🎨', 'sort_order' => 3],
            ['step_number' => 4, 'title' => 'Development sprints', 'description' => 'We build in two-week sprints with a working demo at the end of each. You can see real progress, not status updates.', 'icon' => '⚙️', 'sort_order' => 4],
            ['step_number' => 5, 'title' => 'QA and launch', 'description' => 'We test on real devices, browsers, and screen sizes. We fix every bug before handover. Then we deploy and help you go live.', 'icon' => '🚀', 'sort_order' => 5],
            ['step_number' => 6, 'title' => 'Post-launch support', 'description' => 'Every project includes a 30-day bug fix window after launch. We are also available for ongoing development retainers.', 'icon' => '🛡️', 'sort_order' => 6],
        ];

        foreach ($steps as $step) {
            ProcessStep::updateOrCreate(['step_number' => $step['step_number']], $step);
        }
    }

    private function seedTechStack(): void
    {
        $items = [
            ['name' => 'Laravel',          'category' => 'backend',  'sort_order' => 1,  'is_featured' => true],
            ['name' => 'React',            'category' => 'frontend', 'sort_order' => 2,  'is_featured' => true],
            ['name' => 'Next.js',          'category' => 'frontend', 'sort_order' => 3,  'is_featured' => true],
            ['name' => 'Flutter',          'category' => 'mobile',   'sort_order' => 4,  'is_featured' => true],
            ['name' => 'Tailwind CSS',     'category' => 'frontend', 'sort_order' => 5,  'is_featured' => true],
            ['name' => 'Alpine.js',        'category' => 'frontend', 'sort_order' => 6,  'is_featured' => false],
            ['name' => 'MySQL',            'category' => 'database', 'sort_order' => 7,  'is_featured' => true],
            ['name' => 'Redis',            'category' => 'database', 'sort_order' => 8,  'is_featured' => false],
            ['name' => 'Python',           'category' => 'backend',  'sort_order' => 9,  'is_featured' => true],
            ['name' => 'OpenAI API',       'category' => 'ai',       'sort_order' => 10, 'is_featured' => true],
            ['name' => 'Google Gemini',    'category' => 'ai',       'sort_order' => 11, 'is_featured' => true],
            ['name' => 'Stable Diffusion', 'category' => 'ai',       'sort_order' => 12, 'is_featured' => true],
            ['name' => 'AWS',              'category' => 'devops',   'sort_order' => 13, 'is_featured' => false],
            ['name' => 'Firebase',         'category' => 'devops',   'sort_order' => 14, 'is_featured' => false],
            ['name' => 'Stripe',           'category' => 'backend',  'sort_order' => 15, 'is_featured' => false],
            ['name' => 'Razorpay',         'category' => 'backend',  'sort_order' => 16, 'is_featured' => false],
        ];

        foreach ($items as $item) {
            TechStackItem::updateOrCreate(['name' => $item['name']], $item);
        }
    }

    private function seedProjectCategories(): void
    {
        $categories = [
            ['name' => 'Web App',    'slug' => 'web-app',    'color' => '#6366f1', 'sort_order' => 1],
            ['name' => 'Mobile App', 'slug' => 'mobile-app', 'color' => '#0ea5e9', 'sort_order' => 2],
            ['name' => 'AI Project', 'slug' => 'ai-project', 'color' => '#f59e0b', 'sort_order' => 3],
            ['name' => 'Full Stack', 'slug' => 'full-stack', 'color' => '#10b981', 'sort_order' => 4],
            ['name' => 'MVP',        'slug' => 'mvp',        'color' => '#fb923c', 'sort_order' => 5],
        ];

        foreach ($categories as $cat) {
            ProjectCategory::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }

    private function seedProjects(): void
    {
        $webCat    = ProjectCategory::where('slug', 'web-app')->first();
        $mobileCat = ProjectCategory::where('slug', 'mobile-app')->first();
        $aiCat     = ProjectCategory::where('slug', 'ai-project')->first();
        $fsCat     = ProjectCategory::where('slug', 'full-stack')->first();
        $mvpCat    = ProjectCategory::where('slug', 'mvp')->first();

        $projects = [
            [
                'project_category_id' => $fsCat?->id,
                'title'       => 'Ongofix',
                'slug'        => 'ongofix',
                'client_name' => 'Ongofix',
                'tagline'     => 'On-demand app maintenance marketplace connecting app owners with freelance developers.',
                'summary'     => 'Ongofix is a two-sided marketplace where app owners post maintenance tasks and vetted Flutter and Laravel developers bid for the work. The platform handles matching, escrow payments, and dispute resolution.',
                'problem'     => 'App owners struggled to find reliable developers for ongoing maintenance work. Freelance platforms were too generic and had no understanding of mobile app stacks.',
                'solution'    => 'We built a focused marketplace with developer vetting, mobile-stack-specific job types, escrow payments via Razorpay, in-app messaging, and a review system.',
                'outcome'     => 'Launched in 4 months. 200+ developers onboarded in the first 3 months. Average time-to-match under 2 hours.',
                'tech_stack'  => json_encode(['Laravel', 'Flutter', 'Razorpay', 'Firebase', 'MySQL']),
                'region'      => 'India',
                'industry'    => 'Marketplace',
                'team_size'   => 2,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 1,
            ],
            [
                'project_category_id' => $webCat?->id,
                'title'       => 'TradeGuardian',
                'slug'        => 'tradeguardian',
                'client_name' => 'TradeGuardian',
                'tagline'     => 'Trade finance platform for SME importers and exporters managing LC, bank guarantees, and working capital.',
                'summary'     => 'TradeGuardian is a B2B SaaS platform that helps SME importers and exporters manage their trade finance instruments, track document compliance, and get early payment against invoices.',
                'problem'     => 'Small exporters were managing trade finance documents in spreadsheets and email threads. Missed deadlines cost them penalties and strained bank relationships.',
                'solution'    => 'We built a structured document management system with deadline alerts, bank portal integrations, and a working capital marketplace where NBFCs could bid on invoice discounting.',
                'outcome'     => 'Onboarded 40 exporters in the first 6 months. Helped clients track over 800 trade documents with zero missed compliance deadlines.',
                'tech_stack'  => json_encode(['Laravel', 'React', 'MySQL', 'Redis', 'AWS S3']),
                'region'      => 'India',
                'industry'    => 'Fintech',
                'team_size'   => 3,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 2,
            ],
            [
                'project_category_id' => $fsCat?->id,
                'title'       => 'WasherBee Dubai',
                'slug'        => 'washerbee-dubai',
                'client_name' => 'WasherBee',
                'tagline'     => 'On-demand laundry and dry cleaning app for Dubai with scheduled pickup and real-time order tracking.',
                'summary'     => 'WasherBee is an on-demand laundry app for the UAE market. Customers book pickup slots, track their laundry in real time, and pay through the app. The driver app handles routing and handovers.',
                'problem'     => 'Laundry services in Dubai operated by phone and WhatsApp. There was no structured way for customers to track orders or for operators to manage drivers efficiently.',
                'solution'    => 'Customer Flutter app with slot booking and live tracking, a driver app with route optimisation, and a web-based operations dashboard for the laundry operator.',
                'outcome'     => 'Launched in 8 weeks. 500+ orders processed in the first month. Driver efficiency improved by 30 percent through route optimisation.',
                'tech_stack'  => json_encode(['Flutter', 'Laravel', 'Google Maps API', 'Firebase', 'Stripe']),
                'region'      => 'UAE',
                'industry'    => 'On-demand Services',
                'team_size'   => 2,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 3,
            ],
            [
                'project_category_id' => $aiCat?->id,
                'title'       => 'Proptifi',
                'slug'        => 'proptifi',
                'client_name' => 'Proptifi',
                'tagline'     => 'AI-powered property visualization platform using Stable Diffusion for virtual staging and renovation previews.',
                'summary'     => 'Proptifi lets real estate agents upload property photos and generate AI-staged versions showing different furniture styles, color schemes, and renovation scenarios. The platform processes images in bulk and integrates with popular real estate CRMs.',
                'problem'     => 'Physical staging costs $3,000 to $10,000 per property and takes days to set up. Agents wanted a way to show buyers the potential of a space without the cost.',
                'solution'    => 'We built a Stable Diffusion pipeline with ControlNet for structure preservation, a Laravel API to manage jobs and storage, and a React frontend with before/after sliders.',
                'outcome'     => 'Reduced staging cost by 90 percent per property. 150 real estate agencies onboarded in 4 months. Average render time under 45 seconds.',
                'tech_stack'  => json_encode(['Python', 'Stable Diffusion', 'ControlNet', 'Laravel', 'React', 'AWS']),
                'region'      => 'India, UAE',
                'industry'    => 'Real Estate, AI',
                'team_size'   => 3,
                'is_featured' => true,
                'is_published' => true,
                'sort_order'  => 4,
            ],
            [
                'project_category_id' => $fsCat?->id,
                'title'       => 'FasalVision',
                'slug'        => 'fasalvision',
                'client_name' => 'FasalVision',
                'tagline'     => 'Crop monitoring and farmer advisory app with offline support for rural India.',
                'summary'     => 'FasalVision is an agritech app for Indian farmers covering crop health monitoring, pest and disease advisories, weather alerts, and access to government scheme information. The app works offline using local SQLite caching.',
                'problem'     => 'Agricultural advisories from government bodies reached farmers days or weeks late, via pamphlets. Farmers in low-connectivity areas had no access to timely crop health information.',
                'solution'    => 'Offline-first Flutter app with SQLite caching, background sync when connectivity is available, SMS fallback for critical alerts, and vernacular language support for 4 Indian languages.',
                'outcome'     => 'Deployed to 3,000 farmers across Bihar and UP in the first pilot. 85 percent weekly active usage. SMS fallback used by 40 percent of users.',
                'tech_stack'  => json_encode(['Flutter', 'Laravel', 'SQLite', 'Firebase', 'SMS API']),
                'region'      => 'India',
                'industry'    => 'Agritech',
                'team_size'   => 2,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 5,
            ],
            [
                'project_category_id' => $webCat?->id,
                'title'       => 'FleetPilot',
                'slug'        => 'fleetpilot',
                'client_name' => 'FleetPilot',
                'tagline'     => 'Real-time fleet management system with GPS tracking, driver apps, and dispatch dashboard.',
                'summary'     => 'FleetPilot is a complete fleet management solution for a logistics company operating 80 vehicles across Maharashtra. The system covers real-time GPS, driver mobile apps, dispatcher dashboard, customer tracking links, and automated reporting.',
                'problem'     => 'The client was managing 80 vehicles using phone calls and WhatsApp groups. Dispatchers had no visibility into vehicle locations, causing delays and customer complaints.',
                'solution'    => 'Real-time GPS dashboard using WebSockets, Flutter driver app with route guidance and digital proof of delivery, customer-facing tracking link, and automated daily reports.',
                'outcome'     => 'Fleet visibility increased from 0 to 100 percent. Dispatch calls reduced by 60 percent. On-time delivery rate improved from 72 to 91 percent.',
                'tech_stack'  => json_encode(['Laravel', 'Flutter', 'Google Maps API', 'WebSockets', 'MySQL']),
                'region'      => 'India',
                'industry'    => 'Logistics',
                'team_size'   => 2,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 6,
            ],
            [
                'project_category_id' => $mvpCat?->id,
                'title'       => 'BookMyCA',
                'slug'        => 'bookmyca',
                'client_name' => 'BookMyCA',
                'tagline'     => 'Marketplace connecting individuals and SMEs with chartered accountants for tax filing and compliance.',
                'summary'     => 'BookMyCA is a two-sided marketplace where individuals and small businesses can find, vet, and hire chartered accountants for tax filing, GST compliance, and audit work. The platform handles scheduling, document sharing, and payments.',
                'problem'     => 'Finding a trustworthy CA for one-off tax work was difficult. Existing platforms were too broad. Clients needed a CA-specific platform with proper credential verification.',
                'solution'    => 'An MVP built in 7 weeks with CA verification workflow, service-based pricing, document upload with encryption, video consultation scheduling, and Razorpay payments.',
                'outcome'     => 'MVP launched on schedule. 80 CAs onboarded in 6 weeks. 300+ client registrations in the first month after launch.',
                'tech_stack'  => json_encode(['Laravel', 'React', 'Razorpay', 'MySQL', 'Tailwind CSS']),
                'region'      => 'India',
                'industry'    => 'Professional Services',
                'team_size'   => 2,
                'is_featured' => false,
                'is_published' => true,
                'sort_order'  => 7,
            ],
        ];

        foreach ($projects as $data) {
            Project::updateOrCreate(['slug' => $data['slug']], array_merge($data, [
                'published_at' => now(),
            ]));
        }
    }

    private function seedTestimonials(): void
    {
        $pravin = Project::where('slug', 'ongofix')->first();
        $dipesh = Project::where('slug', 'tradeguardian')->first();
        $aditya = Project::where('slug', 'washerbee-dubai')->first();

        $testimonials = [
            [
                'project_id'      => $pravin?->id,
                'author_name'     => 'Pravin Jain',
                'author_role'     => 'Founder',
                'author_company'  => 'Ongofix',
                'author_location' => 'Mumbai, India',
                'quote'           => 'Rajnandan delivered a two-sided marketplace in 4 months that I had been trying to build for a year with another team. He understood the product deeply from the first call and pushed back when my ideas were not practical. The code is clean and the app has been running in production without any major issues.',
                'rating'          => 5,
                'is_featured'     => true,
                'sort_order'      => 1,
                'is_published'    => true,
            ],
            [
                'project_id'      => $dipesh?->id,
                'author_name'     => 'Dipesh Shah',
                'author_role'     => 'CEO',
                'author_company'  => 'TradeGuardian',
                'author_location' => 'Ahmedabad, India',
                'quote'           => 'We needed someone who understood trade finance, not just Laravel. Plazmasoft took the time to learn our domain before writing any code. The platform they built handles complex document workflows that would have taken a bigger team months longer to figure out.',
                'rating'          => 5,
                'is_featured'     => true,
                'sort_order'      => 2,
                'is_published'    => true,
            ],
            [
                'project_id'      => $aditya?->id,
                'author_name'     => 'Aditya Kumar',
                'author_role'     => 'Co-Founder',
                'author_company'  => 'WasherBee',
                'author_location' => 'Dubai, UAE',
                'quote'           => 'We had 8 weeks and a tight budget. Plazmasoft delivered a complete customer app, driver app, and operations dashboard on time and within budget. The route optimisation alone saved us 30 percent on driver costs. I would hire them again for the next product.',
                'rating'          => 5,
                'is_featured'     => true,
                'sort_order'      => 3,
                'is_published'    => true,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::updateOrCreate([
                'author_name'    => $data['author_name'],
                'author_company' => $data['author_company'],
            ], $data);
        }
    }

    private function seedBlog(): void
    {
        $admin = User::where('email', 'rajnandanweb@gmail.com')->first();

        $engCat = BlogCategory::updateOrCreate(
            ['slug' => 'engineering'],
            ['name' => 'Engineering', 'description' => 'Deep dives into how we build products at Plazmasoft.', 'color' => '#6366f1', 'sort_order' => 1]
        );
        $bizCat = BlogCategory::updateOrCreate(
            ['slug' => 'product'],
            ['name' => 'Product', 'description' => 'Lessons from shipping real products for real clients.', 'color' => '#fb923c', 'sort_order' => 2]
        );

        $posts = [
            [
                'blog_category_id' => $engCat->id,
                'user_id'          => $admin?->id,
                'title'            => 'How we built a trade finance platform in 12 weeks',
                'slug'             => 'how-we-built-tradeguardian',
                'excerpt'          => 'A behind-the-scenes look at the architecture decisions, trade-offs, and lessons learned building TradeGuardian, a B2B SaaS platform for SME exporters.',
                'reading_time'     => 8,
                'is_featured'      => true,
                'is_published'     => true,
                'published_at'     => now()->subDays(30),
                'meta_title'       => 'How we built a trade finance platform in 12 weeks | Plazmasoft Blog',
                'meta_description' => 'Architecture decisions, trade-offs, and lessons learned building TradeGuardian, a B2B SaaS for SME exporters managing trade finance documents.',
                'content'          => <<<'HTML'
<p>When Dipesh from TradeGuardian first called us, he described the problem in one sentence: "SME exporters are managing letters of credit and bank guarantees in Excel and WhatsApp groups, and it is costing them money."</p>

<p>That sentence contained enough information to start designing a system. The core of the problem was not technology. It was information fragmentation. Documents, deadlines, and bank communications were spread across email, WhatsApp, and physical files. Nobody had a single view of what was open, what was overdue, and what needed action today.</p>

<h2>The domain first</h2>

<p>Before we wrote any code, we spent two weeks learning trade finance. Letters of credit, bank guarantees, sight drafts, usance bills, documentary collections. This was not optional background reading. Getting the data model wrong in a fintech product means either a rewrite or a brittle system held together with workarounds.</p>

<p>We interviewed four exporters and three trade finance bankers. What we found surprised us: the most painful point was not missing deadlines. It was the scramble to find the right document at the right time when a bank called. Exporters could not instantly answer "what is the current status of the LC for the Fujairah shipment."</p>

<h2>The data model</h2>

<p>We structured the system around three core entities: TradeInstrument, Document, and TradeEvent.</p>

<p>A TradeInstrument is an LC, bank guarantee, or documentary collection. It has a lifecycle (draft, submitted, active, under amendment, closed), a value, an expiry date, and a set of required documents.</p>

<p>A Document is a file attached to an instrument. Each document has a type (bill of lading, invoice, packing list, certificate of origin), a status (draft, submitted to bank, accepted, rejected), and an expiry if applicable.</p>

<p>A TradeEvent is an immutable log of anything that happened to an instrument: document uploaded, status changed, amendment requested, deadline extended. This audit log was not an afterthought. Banks need to see the full history during disputes.</p>

<h2>The deadline system</h2>

<p>Trade finance instruments have hard deadlines. An LC expires. A presentation period closes. Missing these deadlines triggers penalties or instrument cancellation. This was the highest-stakes part of the system to get right.</p>

<p>We built a deadline engine using Laravel's scheduler. Every night, the system calculates how many days are left on each active instrument and queues alerts for day 30, day 14, day 7, day 3, and day 1. Alerts go to the account owner by email and in-app notification. The account owner can also add custom alerts for their own internal review dates.</p>

<p>One thing we got right early: we stored all dates in UTC and handled timezone conversion only at display time. This sounds obvious but it is easy to get wrong when clients are in India and their banks are in Singapore or Germany.</p>

<h2>The document upload and OCR layer</h2>

<p>Exporters upload documents as PDF or image scans. We added a lightweight OCR layer using Python and Tesseract that extracts key fields from uploaded documents: invoice number, amount, date, exporter name. This pre-fills the document metadata form and reduces manual entry errors.</p>

<p>The OCR does not need to be perfect. It is a suggestion, not a decision. The user reviews and corrects the extracted values before saving. This "human in the loop" approach meant we could ship the OCR feature without worrying about edge cases breaking the data.</p>

<h2>The invoice discounting marketplace</h2>

<p>The second phase of the product was a marketplace where NBFCs and financiers could bid on invoice discounting for verified exporters. An exporter with a confirmed LC could list their receivable and get competitive financing rates.</p>

<p>This required a bidding engine, KYC verification for both exporters and financiers, escrow-style fund handling, and a commission calculation layer. We used Razorpay's payout API to handle disbursements.</p>

<p>The bidding engine was a simple first-price sealed-bid auction with a 24-hour window. Exporters could see the lowest rate in real time and accept when they were satisfied. We deliberately kept the auction mechanics simple because both exporters and financiers were new to digital trade finance tools.</p>

<h2>What we would do differently</h2>

<p>We underestimated the complexity of the amendment workflow. When an LC gets amended, it affects documents, deadlines, and potentially the financing terms. We modelled amendments as TradeEvents initially, which was too simple. We ended up adding an Amendment model with its own lifecycle. If we were starting over, we would model amendments as first-class entities from day one.</p>

<p>We also would have pushed for a phased rollout more aggressively. We launched with all features at once, which made onboarding harder. Exporters were overwhelmed by the full feature set. A simpler initial version focused only on document tracking and deadline alerts would have driven adoption faster.</p>

<h2>The numbers 12 weeks later</h2>

<p>40 exporters onboarded in the first 6 months. 800 trade instruments tracked. Zero missed compliance deadlines reported by clients using the platform. The invoice discounting marketplace went live in month 4 and processed its first transaction within the first week.</p>

<p>Dipesh told us the thing users appreciated most was not the deadline alerts or the OCR. It was being able to answer a bank's question about an instrument in 10 seconds instead of 20 minutes.</p>

<p>That is what good software does. It makes the hard parts of someone's job feel easy.</p>
HTML,
            ],
            [
                'blog_category_id' => $engCat->id,
                'user_id'          => $admin?->id,
                'title'            => 'Why we use Flutter for every mobile project',
                'slug'             => 'why-we-use-flutter',
                'excerpt'          => 'After building mobile apps in React Native, native Swift/Kotlin, and Flutter, we settled on Flutter for all new projects. Here is why, including the honest trade-offs.',
                'reading_time'     => 7,
                'is_featured'      => false,
                'is_published'     => true,
                'published_at'     => now()->subDays(15),
                'meta_title'       => 'Why we use Flutter for every mobile project | Plazmasoft Blog',
                'meta_description' => 'After building in React Native, native Swift/Kotlin, and Flutter, we settled on Flutter for all new projects. The honest trade-offs and reasoning.',
                'content'          => <<<'HTML'
<p>In 2021, we built three mobile apps in React Native. In 2022, we built two in Flutter. In 2023 and 2024, every mobile project we took on used Flutter. That pattern was not accidental. It came from comparing the real costs of each approach across multiple production projects.</p>

<p>This is not a framework comparison post. There are enough of those. This is specifically about why Flutter works better for the kind of projects we do and the trade-offs we accepted to get there.</p>

<h2>What we actually build</h2>

<p>Our mobile projects are typically: two-sided marketplace apps, on-demand service apps with driver and customer interfaces, B2B tools for field workers, and offline-first apps for low-connectivity environments. Most have a Laravel API backend. Most need to ship to both iOS and Android with a single team.</p>

<p>The constraints are tight budgets, compressed timelines, and clients who do not have separate iOS and Android teams. These constraints push heavily toward a single-codebase solution.</p>

<h2>The React Native years</h2>

<p>React Native was our first cross-platform choice. We liked the JavaScript ecosystem and the component model was familiar. The problem was the native bridge.</p>

<p>React Native renders using native components, which means it is always one layer away from the platform. When those native components behave differently on Android 10 versus Android 13, or when a library uses a deprecated native API on iOS 17, your app breaks in ways that are hard to reproduce and slow to fix.</p>

<p>We had a project where a date picker worked correctly on iOS but showed the wrong month on certain Android versions because of a bug in the underlying native date picker that the React Native wrapper exposed. We spent three days on it. That is three days we billed to a client for something that had nothing to do with their product requirements.</p>

<h2>Flutter's rendering model</h2>

<p>Flutter does not use native platform widgets. It has its own rendering engine (Skia, now Impeller) that draws every pixel itself. This means the button you see on Android looks exactly like the button you see on iOS because Flutter drew both of them directly.</p>

<p>This is the most important thing about Flutter and it is often undersold. You are not fighting platform differences. You are writing UI code once and it renders consistently everywhere.</p>

<p>The trade-off is that your app does not automatically look "native." A Flutter app on iOS does not use UIKit components. If your client expects an iOS app that looks exactly like the standard iOS Settings app, Flutter is not the right choice. But in five years of client work, we have had exactly one client make that request.</p>

<h2>Dart is better than people say</h2>

<p>When Flutter was announced, the common criticism was "why Dart?" Dart is not widely used outside Flutter and switching from JavaScript to Dart requires learning a new language.</p>

<p>After using Dart on production projects for three years, the honest answer is that Dart is a very good language for this use case. It is strongly typed, which catches a large class of bugs at compile time rather than runtime. Null safety was added in Dart 2.12 and it is genuinely useful. The tooling (dart analyze, dart fix) is fast and accurate.</p>

<p>The strong typing matters especially for API response handling. When your app receives JSON from a server and you need to deserialise it into typed objects, Dart's type system plus packages like json_serializable make this straightforward and safe.</p>

<h2>The offline-first advantage</h2>

<p>Several of our projects need to work in low-connectivity environments. Flutter's Hive and SQLite packages (via sqflite) are mature and well-maintained. The offline-first pattern in Flutter is: local SQLite database is the source of truth, network sync happens in the background when connectivity is available, and conflicts are resolved with timestamps or user prompts.</p>

<p>We used this pattern on FasalVision, our agritech app for farmers in rural Bihar and UP. 40 percent of users rely on the SMS fallback because they are often in areas with no data connection. The offline-first architecture meant we never had to say "this feature requires internet."</p>

<h2>The honest trade-offs</h2>

<p>Flutter apps have larger initial download sizes than native apps. A minimal Flutter app is around 4 to 5 MB larger than an equivalent native app. On 4G this is not a concern. On 2G or limited data plans, it can matter. We mitigated this for FasalVision by using deferred component loading and keeping the initial download under 15 MB.</p>

<p>Dart has a smaller ecosystem than JavaScript. Not every native SDK has a Flutter package. When a client needed a specific Bluetooth low-energy SDK for a hardware integration project, we had to write a platform channel to call the native SDK from Flutter. That is doable but adds time. We now ask about third-party SDK requirements during scoping.</p>

<p>Flutter's web support is usable but not production-ready for complex applications in our opinion. We use Flutter for mobile and Laravel plus React or Next.js for web. We do not use Flutter for web projects.</p>

<h2>The conclusion</h2>

<p>Flutter wins for our projects because it reduces the number of environments we have to manage, eliminates the native bridge problem, and lets a small team ship to both platforms from one codebase without maintaining separate skill sets.</p>

<p>The consistent rendering model means we spend less time debugging platform-specific issues and more time building features. For founder-led development shops and fast-moving product teams, that trade-off is almost always worth it.</p>

<p>If you are deciding between Flutter and React Native for your next project and the team already has deep JavaScript expertise and you are building something that maps closely to native platform UI patterns, React Native might be the better call. In most other cases, Flutter is where we start the conversation.</p>
HTML,
            ],
        ];

        foreach ($posts as $data) {
            BlogPost::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }

    private function seedFaqs(): void
    {
        $faqs = [
            ['group' => 'general', 'question' => 'Where is Plazmasoft based?', 'answer' => 'We have offices in Mumbai and Patna, India. We work with clients globally. Most of our collaboration happens over video call and async communication tools.', 'sort_order' => 1, 'is_published' => true],
            ['group' => 'general', 'question' => 'How much does a typical project cost?', 'answer' => 'Web app MVPs typically range from INR 3 to 8 lakhs depending on scope. Mobile apps start at INR 2 lakhs for a focused single-platform MVP. Complex multi-platform products with AI integrations are priced separately after scoping.', 'sort_order' => 2, 'is_published' => true],
            ['group' => 'general', 'question' => 'Do you take equity instead of cash?', 'answer' => 'Occasionally, for the right early-stage product. We evaluate this case by case. The default engagement model is fixed-fee per project or monthly retainer.', 'sort_order' => 3, 'is_published' => true],
            ['group' => 'general', 'question' => 'How long does a project take?', 'answer' => 'A focused MVP takes 6 to 8 weeks. A full-featured product with complex integrations takes 3 to 6 months. We scope all projects before giving a timeline estimate.', 'sort_order' => 4, 'is_published' => true],
            ['group' => 'general', 'question' => 'Who owns the code at the end of the project?', 'answer' => 'You do. All code, repositories, and assets are transferred to you on final payment. We do not retain any ownership of the work we build for you.', 'sort_order' => 5, 'is_published' => true],
            ['group' => 'general', 'question' => 'Do you work with clients outside India?', 'answer' => 'Yes. We have active and past clients in Dubai, the US, and the UK. International payments are handled through wire transfer or Wise.', 'sort_order' => 6, 'is_published' => true],
            ['group' => 'general', 'question' => 'Do you provide post-launch support?', 'answer' => 'All projects include a 30-day bug fix window after launch at no extra cost. For ongoing support and feature development, we offer monthly retainer arrangements.', 'sort_order' => 7, 'is_published' => true],
            ['group' => 'general', 'question' => 'Can I hire you to fix or extend an existing codebase?', 'answer' => 'Yes. We do codebase audits, bug fixes, performance improvements, and feature additions on existing Laravel, React, and Flutter projects. We always start with an audit before quoting.', 'sort_order' => 8, 'is_published' => true],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }
    }
}
