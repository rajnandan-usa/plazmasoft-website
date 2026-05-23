@php
$staticContent = [
    'fintech-development' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>',
        'title' => 'Fintech Development',
        'tag'   => 'Trading platforms, wallets, KYC flows, and payment integrations built for compliance and scale.',
        'desc'  => 'We have built fintech products for trade finance, investment tracking, digital wallets, and B2B payment platforms. We understand the compliance requirements, the API integrations, and the security architecture that fintech demands — KYC flows, AML logic, and real-time transaction systems included. Our fintech builds are designed for the regulatory environment from the start, not retrofitted for compliance after the product exists.',
        'approach' => [
            'We treat compliance as an architecture concern, not a feature to add later. Before the first sprint, we map the regulatory surface area of your fintech product — KYC flow requirements, AML logic, data residency obligations, and audit trail needs — and make architecture decisions with these requirements built in. This prevents the expensive compliance retrofits that happen when a product approaching a license or investor due diligence discovers its infrastructure was never designed for it.',
            'Security architecture for financial products is a design discipline, not a deployment checklist. Role-based access, encryption at rest and in transit, and immutable audit logging are designed at the database layer, not added as middleware after the core product exists. Payment flow atomicity, reconciliation logic, and idempotency keys are engineering concerns we have solved in production fintech systems — not concepts we are applying for the first time on your project.',
        ],
        'feats' => ['Digital wallets and UPI integrations','KYC and AML verification flows','Trade finance and investment dashboards','Stripe, Razorpay, and PayU integrations','Real-time market data feeds','Portfolio and fund tracking','Reconciliation and reporting tools','Regulatory compliance architecture'],
        'challenges' => [
            ['n'=>'01','t'=>'Regulatory complexity','d'=>'Fintech products must navigate KYC, AML, and data residency rules. We build compliance flows that are thorough without destroying the user experience — and that hold up when your product is audited.'],
            ['n'=>'02','t'=>'Real-time reliability','d'=>'Trading and payment systems need sub-second responses and bulletproof consistency. We design the real-time layer — queuing, concurrency, idempotency — for exactly this from day one.'],
            ['n'=>'03','t'=>'Security at every layer','d'=>'Financial data requires encryption at rest and in transit, strict access controls, and regular security audits. We engineer for this throughout the build, not as a final checklist item before launch.'],
        ],
        'tech'  => ['Laravel 11','Flutter','PostgreSQL','Redis','Stripe API','Razorpay','PayU','WebSockets','KYC/AML APIs','AWS'],
        'stats' => [
            ['n'=>'$7T+','l'=>'India digital payments volume','d'=>'projected by 2027 — infrastructure decisions made at MVP stage determine whether you can handle this scale'],
            ['n'=>'500M+','l'=>'UPI users in India','d'=>'the transaction volume that modern fintech products must be architected to handle without falling over'],
            ['n'=>'60%','l'=>'fintech products fail at scale','d'=>'due to weak architecture choices made early — compliance retrofits and security gaps are the leading causes'],
        ],
        'who' => [
            ['role'=>'Fintech Startup Founders','desc'=>'You have a regulated product idea — a wallet, lending platform, or investment tool — and need a team that understands both the technical implementation and the compliance layer simultaneously.'],
            ['role'=>'Product Managers at Banks and NBFCs','desc'=>'Your internal team is not built for fast digital product delivery. You need a specialist studio to build the customer-facing layer without the overhead of a large internal project.'],
            ['role'=>'B2B Payments and SaaS Founders','desc'=>'You need payment infrastructure, reconciliation logic, or financial reporting built into a broader SaaS product — and you want it done correctly the first time, not refactored six months later.'],
        ],
        'why' => [
            ['t'=>'Compliance-aware architecture from day one','d'=>'KYC, AML, and data residency requirements are built into the system design from the start. This saves significant rework when your product approaches licensing, investor due diligence, or a regulatory audit.'],
            ['t'=>'Production gateway experience','d'=>'Razorpay, Stripe, PayU, and open banking APIs are standard for us. We have navigated webhook edge cases, payment failure recovery flows, and reconciliation discrepancies that only surface under real transaction volume.'],
            ['t'=>'Financial data integrity as engineering','d'=>'Double-entry logic, transaction atomicity, balance reconciliation, and idempotency key management are problems we have solved in production fintech systems — not implementation details to figure out mid-build.'],
        ],
        'faqs'  => [
            ['q'=>'Do you have experience with RBI-regulated products?','a'=>'Yes. We have built payment and lending products that are architecturally aligned with RBI guidelines, including data localization requirements, audit trail design, and API security standards. We scope the regulatory requirements as part of the discovery phase.'],
            ['q'=>'Can you integrate with specific banking APIs?','a'=>'Yes. We have integrated with open banking APIs, payment gateways, and banking data aggregators. We assess feasibility early in the project based on the specific API documentation and sandbox access available.'],
            ['q'=>'How do you handle KYC in mobile apps?','a'=>'We integrate with KYC providers such as Digio or Signzy that handle Aadhaar-based or document-based verification. The KYC flow is built natively into the Flutter app with proper state handling for the verification steps.'],
            ['q'=>'What is your approach to financial data security?','a'=>'AES-256 encryption at rest, TLS in transit, strict role-based access, no PII in application logs, HTTPS everywhere, and regular dependency audits. We follow OWASP guidelines throughout development and design with least-privilege access principles.'],
            ['q'=>'How long does a fintech MVP take to build?','a'=>'A focused fintech MVP — a wallet or payment dashboard — typically takes 10 to 16 weeks depending on the number of gateway integrations and compliance requirements. We scope this precisely after a discovery session, not from a generic estimate.'],
            ['q'=>'Can you support multi-currency or cross-border payments?','a'=>'Yes. We have experience integrating with providers that support multi-currency wallets and cross-border payment rails. We assess the best provider based on your target corridors, settlement requirements, and regulatory constraints.'],
            ['q'=>'How do you handle PCI DSS compliance for payment data?','a'=>'We do not store raw card data. All payment flows use tokenized payment methods via compliant gateways — Stripe or Razorpay — that handle PCI scope. For products that require PCI DSS certification, we design the architecture to minimize scope and document the controls required for your certification.'],
            ['q'=>'Can you build a credit scoring or lending product?','a'=>'Yes. We have experience building credit assessment flows that integrate with credit bureaus, bureau data parsing, and lending decision engines. Regulatory compliance for NBFC-facing operations is scoped as part of every lending product engagement.'],
        ],
    ],
    'fleet-management' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l2 2m8-10h3l3 4v4h-2m-4 0H9"/></svg>',
        'title' => 'Fleet Management',
        'tag'   => 'Real-time GPS tracking, driver apps, and dispatch dashboards that reduce operational costs.',
        'desc'  => 'Our fleet management software covers the full logistics stack: driver mobile apps with GPS, dispatcher dashboards with live maps, route optimization, fuel and maintenance tracking, and customer-facing tracking links. We have shipped fleet platforms for logistics companies, last-mile delivery operations, and field service businesses. The systems we build handle real operational load — not demo conditions with three vehicles on a map.',
        'approach' => [
            'Fleet management software lives or dies on its real-time reliability and mobile performance in low-connectivity environments. We design the real-time layer first — WebSocket versus polling tradeoffs, location update frequency, data compression for mobile connections, and server-side message queuing — before building any user-facing features. Getting these architecture decisions wrong creates systems that look impressive in demos and fail consistently when drivers are operating in areas with patchy coverage.',
            'The dispatcher dashboard is where fleet operations actually happen under time pressure, and it is consistently the most underdesigned part of fleet software. We treat dispatcher UX as a primary design concern, not an afterthought behind the mobile app. This means understanding the decisions dispatchers make in a busy operation, the information hierarchy that matters most when multiple jobs are running simultaneously, and designing the interface around real workflows rather than generic CRUD screens.',
        ],
        'feats' => ['Real-time GPS and live map tracking','Driver mobile app (Flutter, iOS + Android)','Dispatch and booking management dashboard','Route optimization and ETA calculation','Fuel and maintenance cost tracking','Customer-facing live tracking link','Driver performance and analytics','Geofencing and alert notifications'],
        'challenges' => [
            ['n'=>'01','t'=>'Real-time at scale','d'=>'Tracking hundreds of vehicles simultaneously requires efficient WebSocket or polling infrastructure. We design the architecture to handle real fleet sizes without burning cloud costs on a system that was not designed for load.'],
            ['n'=>'02','t'=>'Poor connectivity environments','d'=>'Drivers often operate in areas with patchy 2G or 3G coverage. Our mobile apps handle offline gracefully — location logging, job updates, and forms queue locally and sync when connection returns.'],
            ['n'=>'03','t'=>'Dispatcher UX complexity','d'=>'Dispatch dashboards need to surface the right information fast under pressure. We design for dispatcher workflows and decision-making patterns, not for generic admin interfaces that require training to use effectively.'],
        ],
        'tech'  => ['Flutter (iOS + Android)','Laravel 11','Google Maps API','Firebase Realtime DB','WebSockets','PostgreSQL','Redis','AWS','Pusher'],
        'stats' => [
            ['n'=>'15-20%','l'=>'average fuel savings','d'=>'reported by logistics companies after deploying route optimization and live GPS tracking for their fleet operations'],
            ['n'=>'200+','l'=>'vehicles tracked simultaneously','d'=>'the scale our architecture is designed to handle with sub-5-second update frequency on a standard infrastructure setup'],
            ['n'=>'30%','l'=>'reduction in idle time','d'=>'typical outcome from dispatcher dashboards with real-time visibility, geofencing alerts, and job assignment tools'],
        ],
        'who' => [
            ['role'=>'Logistics Company Owners','desc'=>'You run a fleet of 20 to 500 vehicles and are still managing dispatch on WhatsApp and spreadsheets. You need a purpose-built system that is reliable, affordable to operate, and does not require a technology team to maintain.'],
            ['role'=>'Last-Mile Delivery Startups','desc'=>'You are scaling fast and need a technology stack that grows with you — driver apps, customer tracking, and dispatch all under one roof, without enterprise software pricing.'],
            ['role'=>'Field Service Operations','desc'=>'You have mobile teams — technicians, delivery agents, or inspectors — and need to track, assign, and report on jobs in real time without paying for an enterprise platform built for someone else.'],
        ],
        'why' => [
            ['t'=>'Offline-first is the default, not an upgrade','d'=>'We build Flutter driver apps where offline operation is architected in from day one — not retrofitted after complaints from drivers in areas with poor coverage. Job queuing, location logging, and form submissions all work without a connection and sync when coverage returns.'],
            ['t'=>'Full stack in one team','d'=>'Driver app, dispatcher dashboard, customer tracking link, and server infrastructure are all built by one team with shared architecture decisions. No gaps between separately-built pieces and no integration problems that surface after delivery.'],
            ['t'=>'Scales with your fleet','d'=>'The architecture we deliver handles 5 vehicles or 500. We design the real-time layer for the scale you are heading toward, not just the scale you are at today — so adding vehicles does not require a platform rebuild.'],
        ],
        'faqs'  => [
            ['q'=>'Can the driver app work offline?','a'=>'Yes. We build Flutter apps with offline-first architecture as a core requirement. Location logs, job updates, proof-of-delivery photos, and form submissions all queue locally and sync automatically when connectivity returns.'],
            ['q'=>'How many vehicles can the system track simultaneously?','a'=>'The architecture scales horizontally. We have built systems tracking 200 or more vehicles with sub-5-second update frequency. We size the infrastructure to your fleet and anticipated growth at the start of the project.'],
            ['q'=>'Can you integrate with existing ERP or accounting software?','a'=>'Yes. We build REST or webhook integrations with ERP systems, TMS platforms, and accounting software. Share what you currently use during discovery and we will scope the integration requirements accurately.'],
            ['q'=>'Does the system support multiple depots or regions?','a'=>'Yes. Multi-depot, multi-region, and multi-tenant setups are all supported. We scope the organizational structure during discovery so the data model and access control reflect your actual operations from day one.'],
            ['q'=>'How does pricing work for the software we build?','a'=>'Most clients license the platform we build outright — you own the code and run it on your infrastructure. We can also help you design a SaaS pricing model if you intend to offer fleet management as a product to your own customers.'],
            ['q'=>'Can you build driver rating and performance reports?','a'=>'Yes. Driver scorecards, trip history, harsh braking or speeding flags, on-time delivery rates, and performance dashboards are standard features we include in fleet builds. These are configurable based on what your operations team actually needs to see.'],
            ['q'=>'How do you handle driver communication and job assignments?','a'=>'We build in-app job assignment notifications, push alerts for new or changed jobs, and dispatcher-to-driver messaging within the driver app. WhatsApp notification integration for critical alerts is also available as a supplementary channel.'],
            ['q'=>'Can you build customer-facing order tracking for deliveries?','a'=>'Yes. A shareable customer tracking link with live map and estimated arrival time is a standard feature in last-mile delivery fleet builds. It is white-labelled with your branding and can be sent automatically via SMS or WhatsApp when a delivery is dispatched.'],
        ],
    ],
    'ai-property-visualization' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 22V12h6v10"/></svg>',
        'title' => 'AI Property Visualization',
        'tag'   => 'Stable Diffusion-powered virtual staging and property visualization for real estate platforms.',
        'desc'  => 'We build AI-powered visualization tools for real estate: virtual staging that turns empty rooms into furnished spaces, facade redesign previews, interior renovation simulations, and neighbourhood renders. These tools help property developers, agents, and platforms sell faster by showing buyers what a property could look like — not just what it currently looks like. Every system we build is designed for production use, not demo conditions.',
        'approach' => [
            'AI image quality for property visualization depends almost entirely on the pipeline architecture: image preprocessing, inpainting mask generation, prompt engineering, and style control parameters. We treat pipeline design as a separate engineering discipline from model selection. A well-built pipeline consistently produces output that meets professional sales material standards; a poorly built one produces results that vary too widely for reliable commercial use regardless of which model sits underneath.',
            'We validate output quality on your actual property images before designing the production pipeline. What performs cleanly on staged interiors with controlled lighting may behave inconsistently on the mixed photography a real estate portfolio contains. Our proof-of-concept phase exists specifically to surface these gaps early, so the full production build is designed around what actually works on your images — not what worked in a controlled experiment with ideal inputs.',
        ],
        'feats' => ['Virtual staging with Stable Diffusion','Before and after interior renders','Facade redesign and exterior preview','360-degree virtual tour integration','Bulk image processing pipeline','CRM and listing platform integration','Style selection UI for buyers','Cloud render queue with fast turnaround'],
        'challenges' => [
            ['n'=>'01','t'=>'Quality and consistency','d'=>'AI-generated images must look professional enough to use in sales material without manual review of every output. We fine-tune models and build quality filters to ensure output meets the standard consistently, not only on ideal inputs.'],
            ['n'=>'02','t'=>'Processing speed','d'=>'Buyers and agents need results in seconds, not minutes. We build optimized inference pipelines with GPU-backed infrastructure and smart queuing so that turnaround meets the expectation of a real product.'],
            ['n'=>'03','t'=>'Integration with existing platforms','d'=>'Real estate platforms have existing listing databases, CRMs, and agent workflows. We build clean integration layers so AI visualization works inside your existing tools rather than requiring a separate system.'],
        ],
        'tech'  => ['Stable Diffusion','ComfyUI','Python','FastAPI','Laravel','AWS S3','React','GPU Cloud (RunPod / Lambda Labs)','Celery'],
        'stats' => [
            ['n'=>'73%','l'=>'faster listing sell-through','d'=>'reported by agents using virtual staging versus empty room photography in comparable market conditions'],
            ['n'=>'10-30s','l'=>'per image render time','d'=>'on GPU-backed infrastructure — fast enough to generate results while the agent or buyer is still on the page'],
            ['n'=>'90%','l'=>'lower cost than physical staging','d'=>'AI virtual staging costs a fraction of physical furniture staging for a comparable visual result in marketing material'],
        ],
        'who' => [
            ['role'=>'Real Estate Developers','desc'=>'You are launching a new project and want to show buyers finished interiors before construction is complete. AI renders make your sales office and website significantly more compelling than floor plans and construction photos.'],
            ['role'=>'Proptech Startups','desc'=>'You are building a listing or property management platform and want AI visualization as a differentiator — a feature your competitors do not yet have that increases the value of every listing on your platform.'],
            ['role'=>'Property Agencies and Portals','desc'=>'You manage a high volume of listings and want to offer professional virtual staging to your agents as a value-added service — without hiring a staging team or asking agents to use a separate tool.'],
        ],
        'why' => [
            ['t'=>'Production AI pipelines, not experiments','d'=>'Stable Diffusion with custom ComfyUI workflows, GPU infrastructure management, and quality filtering on real estate images are things we have built and deployed. We are not learning the technology on your project.'],
            ['t'=>'Platform integration is part of the build','d'=>'AI visualization as a standalone tool is far less valuable than one embedded in your listing workflow or CRM. We design and build the integration layer as a core part of the project scope, not an afterthought.'],
            ['t'=>'Quality-gated output by design','d'=>'We build automated quality scoring that filters out renders below an acceptable threshold before they reach agents or buyers. Consistent output quality is an engineering problem we solve in the pipeline — not something left to prompt writing.'],
        ],
        'faqs'  => [
            ['q'=>'How realistic is the AI-generated staging?','a'=>'Modern Stable Diffusion models with proper fine-tuning and pipeline design produce results that are professional enough for marketing material. We show you sample outputs on your actual property images during the proof-of-concept phase before committing to the full build.'],
            ['q'=>'How long does each render take?','a'=>'On GPU-backed infrastructure, a single image typically takes 10 to 30 seconds. Bulk processing pipelines handle large batches of images overnight. We design the queue and infrastructure to match your expected volume and turnaround requirements.'],
            ['q'=>'Do you handle the AI infrastructure or do we?','a'=>'Both options are available. We can set up self-hosted GPU infrastructure on your cloud account for maximum control, or integrate with managed GPU services such as RunPod or Modal for lower upfront cost and simpler operations.'],
            ['q'=>'Can buyers choose different furniture styles?','a'=>'Yes. We build style-selection interfaces that let users choose between modern, minimal, traditional, or custom presets and regenerate the staged image accordingly. The style options are configurable based on your target market preferences.'],
            ['q'=>'Can the model be trained on our brand or style preferences?','a'=>'Yes. We can fine-tune the model on your design references using LoRA or DreamBooth techniques so that outputs consistently align with your brand aesthetic across all properties, rather than using generic style presets.'],
            ['q'=>'How do you handle 360-degree or virtual tour integration?','a'=>'We integrate AI-staged images into virtual tour platforms such as Matterport or Kuula, or build a custom tour viewer depending on your platform and buyer experience requirements.'],
            ['q'=>'What image resolution and quality does the output support?','a'=>'We target a minimum of 1024 x 1024 pixels, typically higher for landscape property photography. Resolution depends on the model and GPU infrastructure configuration. Output is automatically optimized for web delivery as part of the pipeline.'],
            ['q'=>'Can this be built as a SaaS product that agents subscribe to?','a'=>'Yes. We have built multi-tenant AI tooling where agencies or individual agents have their own accounts, upload allowances, and style preferences. We handle the full stack — GPU inference, subscription billing, and the agent-facing web interface.'],
        ],
    ],
    'agritech-development' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>',
        'title' => 'Agritech Development',
        'tag'   => 'Crop monitoring, farmer marketplace apps, and advisory platforms built for Indian agriculture.',
        'desc'  => 'We have built agritech products for crop advisory, farm-to-market commerce, government scheme tracking, and field agent management. We understand the constraints of rural connectivity, low-end Android devices, and multilingual users — and we design for them as the primary case, not an edge case to handle later. Our agritech builds are offline-first, icon-driven, and tested on the hardware and connections that farmers actually use.',
        'approach' => [
            'Agritech products built in urban offices for rural users frequently fail at the field level because of unstated assumptions about connectivity, device quality, and literacy. We design agritech products with low-connectivity, low-literacy users as the primary target. This means icon-first interfaces, voice guidance in regional languages, app sizes under 20MB for easy download on limited data plans, and offline-first data handling as a hard architectural requirement — not a feature to add if time allows.',
            'Building genuine adoption among farming communities is a product design challenge, not just a marketing one. The onboarding flow, the language and tone of advisory content, and the first five interactions a farmer has with the app determine whether it becomes a daily habit or a one-time download. We work with clients to design these flows thoughtfully — sometimes with input from field agents or FPO representatives who understand the target users far better than either of us sitting in an office.',
        ],
        'feats' => ['Farmer advisory and crop monitoring apps','Farm-to-market commerce platform','SMS and WhatsApp notification systems','Offline-first Flutter apps for rural users','Government scheme integration and tracking','Field agent management and reporting','Multilingual support (Hindi and regional languages)','IoT sensor data ingestion'],
        'challenges' => [
            ['n'=>'01','t'=>'Low connectivity and low-end devices','d'=>'Rural users often have 2G connections and entry-level Android phones with limited storage. We build offline-first apps with minimal data usage and small APK sizes as first-class requirements, not afterthoughts.'],
            ['n'=>'02','t'=>'Multilingual and low-literacy UX','d'=>'Farmers may not be comfortable navigating text-heavy interfaces. We design icon-first layouts with voice guidance, illustrated step-by-step instructions, and regional language support for the communities the product serves.'],
            ['n'=>'03','t'=>'Trust and adoption','d'=>'Agritech products fail when farmers do not trust or regularly use them. We work with clients to design onboarding flows and advisory content that builds genuine trust through demonstrated usefulness from the first session.'],
        ],
        'tech'  => ['Flutter (Android-first)','Laravel 11','PostgreSQL','WhatsApp Business API','SMS Gateway','Firebase','Offline SQLite','GPS / Location','Hindi / Regional i18n'],
        'stats' => [
            ['n'=>'150M+','l'=>'smartphone users in rural India','d'=>'the primary distribution channel for agritech products — Android-first, low-end device support is non-negotiable for meaningful reach'],
            ['n'=>'58%','l'=>'of India GDP linked to agriculture','d'=>'yet agritech digital infrastructure remains deeply underdeveloped — the opportunity gap for well-designed products is significant'],
            ['n'=>'2G / 3G','l'=>'dominant connectivity in Tier 3+','d'=>'which is why offline-first architecture is a hard engineering requirement, not an optional feature for rural-facing agritech'],
        ],
        'who' => [
            ['role'=>'Agritech Startup Founders','desc'=>'You are building a product for farmers, FPOs, or agri-input companies and need a development team that understands rural UX, WhatsApp-first communication patterns, and offline-first mobile architecture from prior real projects.'],
            ['role'=>'NGOs and Government Program Teams','desc'=>'You are running a scheme, advisory program, or data collection initiative for farmers and need a mobile platform that field agents and farmers can genuinely use under real conditions — not a polished demo that fails in the field.'],
            ['role'=>'Agri-Fintech and Input Companies','desc'=>'You are building credit, insurance, or marketplace products for the agricultural supply chain and need a team with both fintech and agritech domain experience in the same project.'],
        ],
        'why' => [
            ['t'=>'Rural-first engineering as a practice','d'=>'Offline-first Flutter apps, WhatsApp-based notifications, SMS fallback, small APK sizes, and low-end Android device testing are standard parts of our agritech delivery. We build for the connectivity and hardware that farmers actually have — not the ideal conditions in a product brief.'],
            ['t'=>'Government API experience','d'=>'We have integrated with government data APIs in the agri sector and understand the documentation gaps, inconsistent availability, and access processes involved. We set realistic expectations and build resilient integrations that degrade gracefully when APIs are unavailable.'],
            ['t'=>'Multilingual from the architecture up','d'=>'Hindi and regional language support is built into the application architecture from the start — translations, font rendering for Devanagari and other scripts, and content management. This makes ongoing content updates in regional languages straightforward rather than a manual re-engineering task each time.'],
        ],
        'faqs'  => [
            ['q'=>'Can the app work without internet?','a'=>'Yes. Offline-first architecture is a core requirement for every agritech product we build. We design Flutter apps that store data locally in SQLite and sync automatically when connectivity is available — including crop logs, advisory responses, and field agent reports.'],
            ['q'=>'Do you support Hindi and other regional languages?','a'=>'Yes. We support full multilingual UI with proper text rendering for Devanagari and other scripts. Regional language support is scoped based on your target states and the farming communities the product serves.'],
            ['q'=>'Can you integrate with government AGMARKNET or e-NAM APIs?','a'=>'We have experience with government API integrations in the agri sector. Feasibility depends on the specific API documentation and access credentials provided. We assess this during discovery and set honest expectations about availability and reliability.'],
            ['q'=>'What kind of devices should the app support?','a'=>'We target Android 8.0 and above by default, with testing on entry-level devices — 2GB RAM, low-end chipsets, and limited storage. We discuss and agree on minimum hardware specs with you during scoping based on your target user profile.'],
            ['q'=>'Can you integrate WhatsApp for farmer notifications and advisory?','a'=>'Yes. We integrate WhatsApp Business API to send crop alerts, market price updates, weather advisories, and government scheme notifications. Messages are delivered in the farmer preferred language and designed to be actionable without requiring the user to open the app.'],
            ['q'=>'Do you have experience with IoT sensor data from farms?','a'=>'Yes. We have built data ingestion pipelines for soil moisture, temperature, and humidity sensors that feed advisory logic and dashboards for agronomists and field agents. We scope the sensor hardware compatibility and data model as part of the discovery phase.'],
            ['q'=>'Can you build a marketplace connecting farmers directly to buyers?','a'=>'Yes. Farm-to-market commerce platforms — where farmers list produce and buyers or FPOs purchase directly — are one of the core agritech product types we build. Standard features include inventory management, price discovery, order tracking, and UPI or wallet-based payment integration.'],
            ['q'=>'How do you design for farmers with low digital literacy?','a'=>'We use icon-first navigation, voice playback for advisory content, illustrated step-by-step guides, and short video clips rather than text-heavy screens. Content is designed for the actual reading level of the target community and reviewed by field agents familiar with the users before release.'],
        ],
    ],
];
$content = $staticContent[$slug] ?? [
    'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>',
    'title' => ucwords(str_replace('-', ' ', $slug)),
    'tag'   => '','desc'  => '','approach' => [],'feats' => [],'challenges' => [],'tech'  => [],'stats' => [],'who' => [],'why' => [],'faqs'  => [],
];
// DB title/tag override static; all rich sections (approach, why, stats, challenges) always come from static
if (isset($solution)) {
    if (!empty($solution->title)) $content['title'] = $solution->title;
    if (!empty($solution->tagline)) $content['tag'] = $solution->tagline;
}
@endphp

@extends('layouts.app')

@section('title', isset($solution) && $solution->meta_title ? $solution->meta_title : $content['title'] . ' | Plazmasoft')
@section('meta_description', isset($solution) && $solution->meta_description ? $solution->meta_description : $content['tag'])
@section('canonical', url('/solutions/' . $slug))

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.bc{display:flex;align-items:center;gap:.5rem;font-size:.75rem;color:var(--t3);margin-bottom:2rem;justify-content:center}
.bc a{color:var(--t3);text-decoration:none;transition:color .2s}.bc a:hover{color:var(--t1)}
.bc-sep{opacity:.4}
.feat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:1rem}
.feat-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.25rem 1.5rem;display:flex;align-items:flex-start;gap:.75rem}
.feat-check{width:20px;height:20px;border-radius:50%;background:rgba(249,115,22,.12);display:flex;align-items:center;justify-content:center;color:var(--orange);flex-shrink:0;margin-top:.1rem}
.feat-text{font-size:.875rem;font-weight:500;color:var(--t1);line-height:1.4}
.chal-grid{display:grid;grid-template-columns:1fr;gap:1rem}
@media(min-width:768px){.chal-grid{grid-template-columns:repeat(3,1fr)}}
.chal-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:1.75rem}
.chal-num{font-size:.65rem;font-weight:800;letter-spacing:.12em;color:var(--orange);margin-bottom:.75rem}
.chal-title{font-size:.95rem;font-weight:700;color:var(--t1);margin-bottom:.5rem}
.chal-desc{font-size:.82rem;color:var(--t2);line-height:1.65}
.stats-strip{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1.5rem;text-align:center}
.stat-item{padding:2rem 1.5rem;background:var(--surface);border:1px solid var(--border);border-radius:18px}
.stat-n{font-size:2.6rem;font-weight:800;background:linear-gradient(135deg,var(--orange),var(--orange-l));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1;margin-bottom:.4rem}
.stat-l{font-size:.78rem;font-weight:700;color:var(--t1);text-transform:uppercase;letter-spacing:.08em;margin-bottom:.5rem}
.stat-d{font-size:.8rem;color:var(--t2);line-height:1.5}
.approach-body{display:flex;flex-direction:column;gap:1.5rem}
.approach-p{font-size:.95rem;color:var(--t2);line-height:1.88}
.who-grid{display:grid;grid-template-columns:1fr;gap:1rem}
@media(min-width:640px){.who-grid{grid-template-columns:repeat(3,1fr)}}
.who-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:1.75rem;transition:border-color .2s}
.who-card:hover{border-color:rgba(249,115,22,.25)}
.who-role{font-size:.8rem;font-weight:700;color:var(--orange);letter-spacing:.06em;text-transform:uppercase;margin-bottom:.6rem}
.who-desc{font-size:.845rem;color:var(--t2);line-height:1.7}
.why-grid{display:grid;grid-template-columns:1fr;gap:1rem}
@media(min-width:768px){.why-grid{grid-template-columns:repeat(3,1fr)}}
.why-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.75rem;border-left:3px solid rgba(249,115,22,.35)}
.why-t{font-size:.9rem;font-weight:700;color:var(--t1);margin-bottom:.5rem}
.why-d{font-size:.82rem;color:var(--t2);line-height:1.68}
.tech-wrap{display:flex;flex-wrap:wrap;gap:.6rem;justify-content:center}
.tech-pill{display:inline-flex;align-items:center;padding:.4rem .9rem;background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:999px;font-size:.78rem;font-weight:500;color:var(--t2);transition:all .2s}
.tech-pill:hover{border-color:rgba(249,115,22,.3);color:var(--t1)}
.faq-list{display:flex;flex-direction:column;gap:.6rem;max-width:800px;margin:0 auto}
.faq-item{background:var(--surface);border:1px solid var(--border);border-radius:12px;overflow:hidden}
.faq-q{width:100%;display:flex;align-items:center;justify-content:space-between;padding:1.1rem 1.5rem;text-align:left;cursor:pointer;background:none;border:none;font-size:.875rem;font-weight:600;color:var(--t1);gap:.75rem}
.faq-q svg{flex-shrink:0;color:var(--orange);transition:transform .2s}
.faq-a{padding:0 1.5rem 1.2rem;font-size:.845rem;color:var(--t2);line-height:1.72}
.cta-band{background:linear-gradient(135deg,rgba(249,115,22,.08),rgba(249,115,22,.03));border:1px solid rgba(249,115,22,.15);border-radius:24px;padding:3.5rem 2.5rem;text-align:center}
</style>
@endsection

@section('jsonld')
@php
$faqItems = $content['faqs'] ?? [];
@endphp
@if(count($faqItems))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqItems as $i => $faq)
        {
            "@type": "Question",
            "name": "{{ addslashes($faq['q']) }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ addslashes($faq['a']) }}"
            }
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endif
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
        {"@type":"ListItem","position":2,"name":"Solutions","item":"{{ url('/solutions') }}"},
        {"@type":"ListItem","position":3,"name":"{{ $content['title'] }}","item":"{{ url('/solutions/' . $slug) }}"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $content['title'] }}",
    "description": "{{ $content['tag'] }}",
    "provider": {
        "@type": "Organization",
        "name": "Plazmasoft",
        "url": "{{ url('/') }}"
    },
    "areaServed": ["IN","US","GB","AU","AE"],
    "url": "{{ url('/solutions/' . $slug) }}"
}
</script>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:8rem 0 5rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-8rem;right:5%;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.055) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;max-width:800px;margin:0 auto;text-align:center">
        <nav class="bc">
            <a href="{{ url('/') }}">Home</a><span class="bc-sep">/</span>
            <a href="{{ url('/solutions') }}">Solutions</a><span class="bc-sep">/</span>
            <span style="color:var(--t2)">{{ $content['title'] }}</span>
        </nav>
        <div style="width:72px;height:72px;border-radius:20px;background:rgba(249,115,22,.1);display:flex;align-items:center;justify-content:center;margin:0 auto 1.5rem;color:var(--orange)">{!! $content['icon'] !!}</div>
        <span class="eyebrow sr">Industry Solution</span>
        <h1 class="dh2 sr" style="margin-top:.75rem">{{ $content['title'] }}</h1>
        @if($content['tag'])
        <p class="dlead sr" style="margin-top:1rem;max-width:600px;margin-left:auto;margin-right:auto">{{ $content['tag'] }}</p>
        @endif
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2.25rem" class="sr">
            <a href="{{ url('/contact') }}" class="bsolid">Start Your Project</a>
            <a href="{{ url('/solutions') }}" class="bghost">All Solutions</a>
        </div>
    </div>
</section>

{{-- OVERVIEW --}}
@if($content['desc'])
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w"><div style="max-width:760px;margin:0 auto" class="sr">
        <span class="eyebrow">Overview</span>
        <h2 class="dh2" style="margin-top:.75rem;font-size:clamp(1.4rem,3vw,2rem)">About this solution</h2>
        <div class="divx" style="margin:.9rem 0 1.5rem"></div>
        <p style="font-size:.95rem;color:var(--t2);line-height:1.88">{{ $content['desc'] }}</p>
    </div></div>
</section>
@endif

{{-- INDUSTRY STATS --}}
@if(count($content['stats']))
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">By the numbers</span>
            <h2 class="dh2" style="margin-top:.75rem">The market context</h2>
            <div class="divx cx"></div>
        </div>
        <div class="stats-strip sg">
            @foreach($content['stats'] as $stat)
            <div class="stat-item">
                <div class="stat-n">{{ $stat['n'] }}</div>
                <div class="stat-l">{{ $stat['l'] }}</div>
                <div class="stat-d">{{ $stat['d'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- DELIVERABLES --}}
@if(count($content['feats']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Deliverables</span>
            <h2 class="dh2" style="margin-top:.75rem">What we build</h2>
            <div class="divx cx"></div>
        </div>
        <div class="feat-grid sg">
            @foreach($content['feats'] as $feat)
            <div class="feat-card">
                <div class="feat-check"><svg width="11" height="11" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg></div>
                <span class="feat-text">{{ $feat }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- CHALLENGES --}}
@if(count($content['challenges']))
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Domain Knowledge</span>
            <h2 class="dh2" style="margin-top:.75rem">Challenges we solve</h2>
            <div class="divx cx"></div>
        </div>
        <div class="chal-grid sg">
            @foreach($content['challenges'] as $chal)
            <div class="chal-card">
                <p class="chal-num">{{ $chal['n'] }}</p>
                <p class="chal-title">{{ $chal['t'] }}</p>
                <p class="chal-desc">{{ $chal['d'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- OUR APPROACH --}}
@if(count($content['approach']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w" style="max-width:800px;margin:0 auto">
        <div style="margin-bottom:2.5rem" class="sr">
            <span class="eyebrow">How we work</span>
            <h2 class="dh2" style="margin-top:.75rem">Our expertise in {{ strtolower($content['title']) }}</h2>
            <div class="divx" style="margin:.9rem 0 0"></div>
        </div>
        <div class="approach-body sr">
            @foreach($content['approach'] as $para)
            <p class="approach-p">{{ $para }}</p>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- WHO HIRES US --}}
@if(count($content['who']))
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Who we work with</span>
            <h2 class="dh2" style="margin-top:.75rem">Who hires us for this</h2>
            <div class="divx cx"></div>
        </div>
        <div class="who-grid sg">
            @foreach($content['who'] as $w)
            <div class="who-card">
                <div class="who-role">{{ $w['role'] }}</div>
                <div class="who-desc">{{ $w['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- WHY PLAZMASOFT --}}
@if(count($content['why']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Why us</span>
            <h2 class="dh2" style="margin-top:.75rem">Why Plazmasoft for {{ strtolower($content['title']) }}</h2>
            <div class="divx cx"></div>
        </div>
        <div class="why-grid sg">
            @foreach($content['why'] as $w)
            <div class="why-card">
                <p class="why-t">{{ $w['t'] }}</p>
                <p class="why-d">{{ $w['d'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- TECH STACK --}}
@if(count($content['tech']))
<section class="ps" style="background:var(--bg)">
    <div class="w" style="max-width:900px;margin:0 auto">
        <div style="text-align:center;margin-bottom:2.5rem" class="sr">
            <span class="eyebrow">Tech Stack</span>
            <h2 class="dh2" style="margin-top:.75rem">Tools and technologies</h2>
            <div class="divx cx"></div>
        </div>
        <div class="tech-wrap sr">
            @foreach($content['tech'] as $t)
            <span class="tech-pill">{{ $t }}</span>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- FAQ --}}
@if(count($content['faqs']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">FAQ</span>
            <h2 class="dh2" style="margin-top:.75rem">Common questions</h2>
            <div class="divx cx"></div>
        </div>
        <div class="faq-list sg">
            @foreach($content['faqs'] as $faq)
            <div class="faq-item" x-data="{ open: false }">
                <button @click="open = !open" class="faq-q">
                    <span>{{ $faq['q'] }}</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" :style="open ? 'transform:rotate(180deg)' : ''"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="faq-a">{{ $faq['a'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- CTA --}}
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div class="cta-band sr">
            <span class="eyebrow" style="justify-content:center">Have a project in this space?</span>
            <h2 class="dh2" style="margin-top:.75rem">Let us build it together.</h2>
            <p class="dlead" style="margin-top:.75rem;max-width:480px;margin-left:auto;margin-right:auto">Tell us about your project. We reply within one business day with a clear plan and honest pricing.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start a Conversation</a>
                <a href="{{ url('/portfolio') }}" class="bghost">See Related Work</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const g = document.getElementById('cursorGlow2');
    if (g) document.addEventListener('mousemove', e => { g.style.left = e.clientX + 'px'; g.style.top = e.clientY + 'px'; });
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: .1 });
    document.querySelectorAll('.sr, .sg').forEach(el => io.observe(el));
});
</script>
@endsection
