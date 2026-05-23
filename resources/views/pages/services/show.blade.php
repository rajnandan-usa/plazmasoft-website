@extends('layouts.app')

@php
$slug = $slug ?? '';

$staticContent = [
    'web-app-development' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path stroke-linecap="round" d="M3 9h18M9 21V9"/></svg>',
        'title' => 'Web App Development',
        'tag'   => 'Laravel and React applications built for real traffic, real data, and real business logic.',
        'desc'  => 'From SaaS platforms to internal tools, we architect and build web applications that are fast, secure, and maintainable. Our stack centers on Laravel for the backend and Tailwind CSS, Alpine.js, or React for the frontend. We take full ownership from database design and API contracts to deployment pipelines and monitoring. Every project we deliver is production-ready from day one — not a prototype dressed up as a finished product.',
        'approach' => [
            'We start every web application with a structured discovery week. We map your business logic, define the database schema, agree on API contracts, and review Figma wireframes before writing a single line of application code. This is not overhead — it is the work that separates projects that launch cleanly from ones that stall in rework. The week ends with a scope document, a milestone plan, and no ambiguity about what we are building or why.',
            'Development runs in two-week sprints, and you see working code in a staging environment from the end of week one. We do not disappear for two months and surface with a big reveal. Every sprint has a demo call, a test link you can share with your team, and a written summary of what was completed and what comes next. If priorities shift, you know immediately.',
            'Security and performance are not a final checklist — they are baked into architecture decisions from day one. We use proper role-based access control, encrypted secrets management, Redis-backed queues for background jobs, and query optimization before launch. The apps we deliver hold up under real traffic without expensive last-minute scaling fixes. Full documentation and deployment access are handed over at launch so you are never dependent on us to operate your own product.',
        ],
        'feats' => ['Laravel 11 + React / Next.js','REST and GraphQL APIs','Multi-tenant SaaS architecture','Admin dashboards with Filament','E-commerce and payment integrations','Real-time features with WebSockets','CI/CD and cloud deployment','Performance and security hardening'],
        'process' => [
            ['n'=>'01','t'=>'Discovery and scoping','d'=>'We map your requirements, define user flows, and set a fixed scope with milestones. This week ends with a scope document, a Figma wireframe review, and a clear milestone plan — usually 3 to 5 business days.'],
            ['n'=>'02','t'=>'Architecture and design','d'=>'Database schema, API design, and Figma wireframes reviewed and agreed together before a single line of code is written. Architecture decisions made here drive the entire build.'],
            ['n'=>'03','t'=>'Development sprints','d'=>'Two-week sprints with demo calls and a staging environment you can access throughout. You see progress continuously — not in a big reveal at the end.'],
            ['n'=>'04','t'=>'Launch and handover','d'=>'QA, performance optimization, production deployment, and full documentation handover. You receive all repository access, credentials, and deployment pipeline ownership.'],
        ],
        'tech'  => ['Laravel 11','React','Next.js','Tailwind CSS','Alpine.js','PostgreSQL','Redis','AWS / DigitalOcean','Filament v3','Laravel Horizon'],
        'who'   => [
            ['t'=>'SaaS founders','d'=>'Building your first or second product and need a team that ships, not one that burns months on planning before writing a line of code.'],
            ['t'=>'Operations-heavy businesses','d'=>'Replacing spreadsheets and manual processes with software that actually fits how your team works — built to your process, not a generic tool you bend to fit.'],
            ['t'=>'Companies with a client portal need','d'=>'Your clients need a login, a dashboard, or a workflow — and off-the-shelf tools cannot deliver it without painful workarounds.'],
        ],
        'why' => [
            ['t'=>'Full stack, single team','d'=>'From database schema to CDN configuration, one team owns the entire project. No coordination overhead between a design studio, a dev shop, and a DevOps freelancer — and no gaps between them where things fall through.'],
            ['t'=>'Laravel depth, not breadth','d'=>'We have shipped Laravel applications across dozens of production projects and know its strengths, performance edge cases, and when a different approach is the right call. Our work reflects real production experience, not tutorial knowledge.'],
            ['t'=>'You own everything from day one','d'=>'Repository access, staging environment, and deployment pipeline are set up on your infrastructure from week one. Full code and IP ownership transfers at launch. There is no proprietary tooling or vendor lock-in of any kind.'],
        ],
        'outcomes' => [
            ['m'=>'10-16 wks','l'=>'Typical delivery timeline','d'=>'Spec to production launch for a standard SaaS or internal tool.'],
            ['m'=>'99.5%+','l'=>'Uptime on delivered apps','d'=>'Laravel apps with proper caching and queue management hold up under real traffic.'],
            ['m'=>'Week 2','l'=>'First staging deploy','d'=>'You see a working, deployed version within the first two weeks of development.'],
        ],
        'faqs'  => [
            ['q'=>'What is your typical timeline for a web application?','a'=>'A standard SaaS or internal tool takes 8 to 16 weeks depending on complexity. MVPs can be done in 6 to 8 weeks with a fixed, scoped feature set. We give you a precise estimate after the discovery week, not before.'],
            ['q'=>'Do you use Laravel for all web projects?','a'=>'Laravel is our primary backend framework. For statically-generated or API-heavy frontends we use Next.js. We do not use WordPress for application work — it is the wrong tool for anything with real business logic.'],
            ['q'=>'Can you integrate with third-party APIs?','a'=>'Yes — payment gateways, CRMs, ERPs, SMS, email, analytics, and custom APIs. API integration is routine for us. We have integrated with everything from Razorpay and Stripe to custom government APIs.'],
            ['q'=>'Do you provide hosting and deployment setup?','a'=>'We set up deployment pipelines on your preferred infrastructure — AWS, DigitalOcean, Hostinger, or Laravel Forge — and hand over all access at launch. The infrastructure runs on your account, not ours.'],
            ['q'=>'Can you work with our existing Laravel or React codebase?','a'=>'Yes. We do codebase audits before quoting — a 2 to 3 day assessment that identifies technical debt and architecture issues. If the codebase is not salvageable, we tell you upfront rather than charging you to fix something that should be rewritten.'],
            ['q'=>'Do you provide maintenance and support after launch?','a'=>'Yes. We offer monthly support retainers starting from 10 hours per month, covering bug fixes, dependency updates, minor features, and server monitoring. Most clients move to a retainer after launch.'],
            ['q'=>'How do you handle database design and migrations?','a'=>'Database schema design is part of the discovery week, not an afterthought. We design normalized schemas with clear indexing strategies, use Laravel migrations for all schema changes, and review the data model with you before development begins. This prevents the painful schema refactors that happen mid-build.'],
            ['q'=>'Do you build multi-tenant SaaS applications?','a'=>'Yes. Multi-tenancy — whether database-per-tenant, schema-per-tenant, or row-level with tenant scoping — is architected from the start. We have built multi-tenant SaaS products and understand the access control, data isolation, and billing complexity that comes with it.'],
        ],
    ],
    'mobile-app-development' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><rect x="7" y="2" width="10" height="20" rx="3"/><circle cx="12" cy="18" r="1" fill="currentColor"/></svg>',
        'title' => 'Mobile App Development',
        'tag'   => 'Cross-platform Flutter apps for iOS and Android that users actually keep on their phones.',
        'desc'  => 'We build Flutter applications that deliver a native feel across iOS and Android from a single codebase. From consumer apps to enterprise tools, we handle the full cycle — Figma to App Store. Our mobile apps ship with clean architecture, offline-first data handling, and performance that holds up on real devices throughout India and internationally. We include backend API development, store submission, and post-launch monitoring as standard.',
        'approach' => [
            'We do not start building until the screen flows and designs are signed off in an interactive Figma prototype. This is the step that prevents rebuilding core screens three weeks into development because the app flow did not work as expected on a real device. Every mobile project begins with wireframes reviewed in a prototype, API contracts agreed, and architecture decisions locked before a single Flutter widget is written.',
            'Testing on real devices runs from week one — not as a final QA step, but as a continuous part of development. We test on a range of actual Android and iOS hardware throughout the build. Performance on a low-end Android device matters as much as on a flagship — often more — and we design and test for lower-end hardware first because that is where most Indian users are.',
            'App Store and Play Store submission is part of our delivery scope, not a hand-off point. We manage metadata, screenshots, review responses, and post-launch monitoring. App rejections are typically for metadata or minor guideline issues that we catch before submission. When a rejection does happen, we handle it — it is not your problem to manage.',
        ],
        'feats' => ['Flutter (iOS + Android)','Push notifications and deep links','Offline-first architecture','Stripe and Razorpay payments','Play Store and App Store submission','OTA updates with Shorebird','Background sync','Biometric authentication'],
        'process' => [
            ['n'=>'01','t'=>'Discovery and scoping','d'=>'User story mapping, screen flow definition, and API contract design before building begins. This is where architecture decisions that affect the entire project are made — it is worth doing properly.'],
            ['n'=>'02','t'=>'UI design and prototype','d'=>'High-fidelity Figma screens with interactive prototypes reviewed and approved before development starts. We do not build from low-fidelity wireframes — the prototype is close to the final product.'],
            ['n'=>'03','t'=>'Development and testing','d'=>'Feature builds with real-device testing on iOS and Android throughout the sprint. TestFlight and Firebase App Distribution for client review and early user feedback.'],
            ['n'=>'04','t'=>'Store submission and launch','d'=>'App Store and Play Store submission, review management, and post-launch monitoring. We handle all metadata, screenshots, and review communications on your behalf.'],
        ],
        'tech'  => ['Flutter 3.x','Dart','Firebase','Riverpod','Supabase','REST / GraphQL','Razorpay / Stripe','TestFlight','Fastlane'],
        'who'   => [
            ['t'=>'Consumer app founders','d'=>'Launching a B2C app and need iOS and Android coverage without the cost of two separate native teams — and a single team that owns the full product.'],
            ['t'=>'Businesses adding a mobile layer','d'=>'You have a web product and your users want a mobile app. We add it without rebuilding the backend or asking you to coordinate two separate teams.'],
            ['t'=>'Field-facing companies','d'=>'Your sales team, drivers, or field agents need a mobile tool that works offline and syncs when connectivity returns — a real constraint in Indian field operations.'],
        ],
        'why' => [
            ['t'=>'Flutter expertise, not Flutter experiments','d'=>'We have shipped multiple Flutter apps across App Store and Play Store. We know the performance patterns that break under real usage, the state management approaches that scale, and the submission requirements that catch teams off guard — because we have been through them.'],
            ['t'=>'Backend API is not a separate engagement','d'=>'Most mobile apps need a server. We build the Laravel or Firebase backend alongside the Flutter app, so you are not left coordinating two teams building separate pieces of the same product with mismatched assumptions.'],
            ['t'=>'We handle the stores entirely','d'=>'App Store Connect, Play Console, TestFlight, Firebase App Distribution, metadata, screenshots, and review management are all handled by us. You provide requirements; we handle everything through to a live app in both stores.'],
        ],
        'outcomes' => [
            ['m'=>'12-18 wks','l'=>'Spec to both stores live','d'=>'From design sign-off to App Store and Play Store submission, including review time.'],
            ['m'=>'1 codebase','l'=>'iOS and Android','d'=>'Flutter delivers a native feel on both platforms from one shared codebase — no doubling the budget.'],
            ['m'=>'< 3 days','l'=>'App Store review','d'=>'We handle submission and metadata to minimize review time and manage any review responses.'],
        ],
        'faqs'  => [
            ['q'=>'Why Flutter instead of native iOS or Android?','a'=>'Flutter gives you a near-native experience from one codebase, cutting build time and ongoing maintenance cost significantly. For 90% of requirements it is the right call. We will tell you the 10% of exceptions upfront — things like deep platform-specific hardware integration where native is genuinely better.'],
            ['q'=>'How long does App Store review take?','a'=>'Apple reviews typically take 1 to 3 business days. Google Play is usually under 24 hours. We handle the submission and any review responses for you — rejection communication is our responsibility, not yours.'],
            ['q'=>'Can you update an existing Flutter app?','a'=>'Yes, provided the existing codebase is reasonably structured. We will assess it first and give you an honest evaluation before quoting. If it is better to rewrite, we will say so and explain why.'],
            ['q'=>'Do you handle the backend API for mobile apps?','a'=>'Yes. Most mobile projects need an API backend. We build Laravel REST APIs or use Firebase and Supabase depending on project scope and your team\'s ability to maintain it after launch.'],
            ['q'=>'Can you publish the app under our developer account?','a'=>'Yes. We set up and manage App Store Connect and Google Play Console accounts under your company name, or use your existing accounts. All credentials are yours — we never hold app ownership.'],
            ['q'=>'What happens if Apple or Google rejects the app?','a'=>'We handle review feedback and resubmit. App rejections are usually for metadata or minor guideline issues that are caught and addressed quickly. Systemic issues are caught and fixed during development before submission reaches that point.'],
            ['q'=>'Do you build for iOS and Android simultaneously?','a'=>'Yes. Flutter\'s single codebase means both platforms are developed in parallel, not sequentially. We test on both platforms throughout every sprint, not just at the end. You receive two published apps in the same timeline as one.'],
            ['q'=>'Can you integrate push notifications and crash analytics?','a'=>'Yes. Firebase Cloud Messaging for push notifications, deep linking, in-app analytics, crash reporting with Crashlytics, and remote config are standard integrations we include in most mobile app builds.'],
        ],
    ],
    'ai-integration' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .946.384 1.803 1.06 2.385M15 3.104v5.714c0 .946.384 1.803 1.06 2.385M5 14.5l-.175 1.131A3 3 0 008.808 19H15.2a3 3 0 002.983-3.371L18 14.5M5 14.5h13"/></svg>',
        'title' => 'AI Integration',
        'tag'   => 'Gemini, GPT-4o, Stable Diffusion, and custom LLM features wired directly into your product.',
        'desc'  => 'We integrate AI APIs into existing products and build AI-native features from the ground up. We have shipped AI-powered search, document analysis, image generation, RAG pipelines, and conversational interfaces. We treat AI as a feature that must be reliable, cost-efficient, and explainable — not a demo that breaks under real production load. Our approach starts with whether AI is actually the right tool, not with which model to use.',
        'approach' => [
            'The first question we ask on any AI project is whether AI is actually the right solution. It is a question most clients do not expect — and one that saves significant time and budget. We have had discovery calls where a well-structured search index or a smart filter solved the problem faster and cheaper than a full LLM integration. When AI is genuinely the right answer, we build it to production standards.',
            'We build production AI integrations, not demos. Every AI feature we ship includes cost monitoring, rate limiting, error handling, fallback logic, and latency tracking from day one. AI APIs fail unexpectedly, return inconsistent outputs, and charge by the token — all of which must be handled in the application layer before you go live with real users under real load.',
            'For RAG implementations, the quality of output is almost entirely determined by how well documents are chunked, embedded, and indexed before retrieval. We treat this as a separate engineering discipline from the LLM integration itself. The result is a system that answers accurately from your knowledge base rather than hallucinating plausible-sounding responses that erode user trust over time.',
        ],
        'feats' => ['OpenAI GPT-4o integration','Gemini 1.5 Pro integration','RAG (retrieval-augmented generation)','AI-powered search and recommendations','Document processing and analysis','Stable Diffusion image generation','Custom fine-tuning pipelines','AI cost monitoring and optimization'],
        'process' => [
            ['n'=>'01','t'=>'Use-case discovery','d'=>'We assess whether AI genuinely solves your problem or whether a simpler approach is faster and cheaper. If AI is right, we define the exact use case, expected inputs, and success criteria before any code is written.'],
            ['n'=>'02','t'=>'Proof of concept','d'=>'A working prototype in 1 to 2 weeks that validates the AI approach on your actual data. You see real output quality before committing to full development.'],
            ['n'=>'03','t'=>'Production integration','d'=>'Clean API integration with error handling, rate limiting, cost tracking, fallback logic, and latency monitoring built in from the start — not added after the first production incident.'],
            ['n'=>'04','t'=>'Monitoring and iteration','d'=>'Post-launch monitoring of accuracy, latency, and cost with iteration cycles based on real usage patterns. AI features improve with tuning — we build for that from the beginning.'],
        ],
        'tech'  => ['OpenAI GPT-4o','Gemini 1.5 Pro','LangChain','Pinecone / PGVector','Stable Diffusion','Whisper','Python','FastAPI','Laravel'],
        'who'   => [
            ['t'=>'Product teams with repetitive manual work','d'=>'You have staff doing tasks that follow a predictable pattern — document review, classification, data extraction — that AI can handle reliably at a fraction of the manual cost.'],
            ['t'=>'SaaS products wanting AI features','d'=>'Your competitors are adding AI. You want to do it properly — a feature that works under real usage — not a demo that impresses in a pitch and fails in production.'],
            ['t'=>'Businesses with large knowledge bases','d'=>'Thousands of documents, policies, or FAQs and you want users to get instant, accurate answers without calling support or digging through files.'],
        ],
        'why' => [
            ['t'=>'Production, not playground','d'=>'AI demos are easy to build. An AI feature that handles thousands of requests per day with correct error handling, cost controls, graceful degradation, and audit logging is what we actually deliver — because that is what real products require.'],
            ['t'=>'Model-agnostic, use-case driven','d'=>'We work across OpenAI, Gemini, Anthropic, and open-source models. We choose the model that fits the requirement and budget — not the one currently trending. Sometimes a smaller, faster model costs ten times less and performs just as well for the task.'],
            ['t'=>'RAG built on production experience','d'=>'Retrieval-augmented generation done well requires careful document processing, embedding strategy, vector index design, and retrieval tuning. We have built RAG systems on production knowledge bases and know where the failure modes are.'],
        ],
        'outcomes' => [
            ['m'=>'1-2 wks','l'=>'Proof of concept','d'=>'You see a working AI prototype on your own data before committing to full development.'],
            ['m'=>'80-95%','l'=>'RAG pipeline accuracy','d'=>'Retrieval-augmented generation on well-structured knowledge bases typically hits this range.'],
            ['m'=>'60%+','l'=>'Support query reduction','d'=>'Common outcome when AI handles first-line FAQ and document lookup reliably.'],
        ],
        'faqs'  => [
            ['q'=>'How do I know if AI is the right solution for my product?','a'=>'We start with a discovery session to assess whether AI adds clear user value or is just novelty. We will tell you honestly if a simpler approach solves the problem better — we would rather lose the AI integration work than build something that does not genuinely help your users.'],
            ['q'=>'How do you handle data privacy with third-party AI APIs?','a'=>'We avoid sending personally identifiable information to third-party APIs unless necessary, use data processing agreements, and can implement on-premise or self-hosted models for products where data residency or sensitivity is a hard requirement.'],
            ['q'=>'What is RAG and when do you use it?','a'=>'Retrieval-Augmented Generation lets an LLM answer questions using your own documents or database instead of just its training data. It is the right approach when you need accurate, source-grounded answers rather than general AI knowledge.'],
            ['q'=>'How much does running AI APIs cost on an ongoing basis?','a'=>'Highly dependent on usage volume and model choice. We build cost monitoring into every AI integration and optimize prompts and model selection. A typical product with moderate AI usage runs between $20 and $200 per month on API costs.'],
            ['q'=>'Can you build a chatbot for our website or app?','a'=>'Yes. AI chatbots are one of the most common integrations we build — from simple FAQ bots using RAG to complex multi-turn assistants with tool calling. We integrate with your existing knowledge base, CRM, or database as the source of truth.'],
            ['q'=>'How do you keep AI inference costs predictable?','a'=>'We add cost monitoring from day one — token tracking, per-request logging, model-level budgets — and choose models matched to the complexity of the task. GPT-4o-mini for simple classification, GPT-4o for complex reasoning. Hard rate limits and budget alerts on API keys prevent surprises.'],
            ['q'=>'Can you build AI features on top of our existing product without rewriting it?','a'=>'Yes. Most of our AI integrations are additive — an AI search layer, a document summarizer, a classification model added to an existing workflow. We integrate into your existing Laravel or Node.js backend via clean service classes without disrupting the rest of the product.'],
            ['q'=>'How do you handle hallucinations in LLM-powered features?','a'=>'We design to minimize hallucination risk through grounding: RAG constraints answers to your documents, source citations let users verify answers, and confidence filtering rejects low-certainty outputs. For high-stakes outputs we add human review steps. Hallucinations can be managed to acceptable levels for most use cases with proper system design.'],
        ],
    ],
    'ui-ux-development' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>',
        'title' => 'UI / UX Development',
        'tag'   => 'Figma-to-code that looks great, loads fast, and works on every device.',
        'desc'  => 'We take your Figma designs and build pixel-perfect, responsive frontends using Tailwind CSS and modern JavaScript. We also do the design work from scratch when needed — from wireframes to a full Figma component library. Every interface we build is tested for accessibility, cross-browser compatibility, and Core Web Vitals performance before delivery. The result is a frontend that looks exactly as designed and performs well under real conditions.',
        'approach' => [
            'We work from Figma Dev Mode, not the design viewer. Exact spacing values, typography scales, and color tokens determine the implementation — not what the design looks like at a glance. If the Figma file has inconsistencies, misaligned spacing, or undefined component states, we flag them before the build starts rather than discovering them two weeks into implementation and silently approximating.',
            'Performance is part of every frontend we deliver. A visually impressive interface that loads in four seconds or causes layout shifts on scroll fails users regardless of how good it looks in a browser tab. We audit Core Web Vitals throughout development — LCP, CLS, INP — and target a Lighthouse performance score above 90 before delivery. This includes image optimization, font loading strategy, and JavaScript bundle management.',
            'Accessibility is built in, not added at the end. WCAG 2.1 AA compliance — keyboard navigation, proper focus states, color contrast ratios, and ARIA labels — is part of every component from the first build. Accessible interfaces are also better for SEO, work for a wider range of users and devices, and reduce legal exposure in markets where accessibility is a regulatory requirement.',
        ],
        'feats' => ['Figma-to-Tailwind implementation','Design system creation','Responsive layouts (mobile-first)','Animation and micro-interactions','Accessibility (WCAG AA)','Performance optimization','Component library setup','Cross-browser and device QA'],
        'process' => [
            ['n'=>'01','t'=>'Design audit','d'=>'We review your existing designs or brief, identify gaps and inconsistencies, and agree on component scope and priorities before any build work begins. Problems found here are far cheaper to fix than after implementation.'],
            ['n'=>'02','t'=>'Design system creation','d'=>'A shared Figma component library with tokens, states, and responsive variants established before the build starts. This is the foundation that makes the implementation consistent and the final product maintainable.'],
            ['n'=>'03','t'=>'Frontend development','d'=>'Pixel-perfect Tailwind CSS implementation with responsive breakpoints, transitions, and accessibility baked in throughout. We implement from the spec with Dev Mode precision — not from how it looks at a glance.'],
            ['n'=>'04','t'=>'QA and delivery','d'=>'Cross-browser and cross-device QA, Lighthouse performance audit, WCAG accessibility check, and clean codebase handover with documentation. No approximations in the final delivery.'],
        ],
        'tech'  => ['Figma','Tailwind CSS','Alpine.js','React','Framer Motion','CSS Animations','Storybook','WCAG AA'],
        'who'   => [
            ['t'=>'Teams with designs but no frontend','d'=>'You have Figma files but need someone who can turn them into responsive, performant code — not close approximations that look fine on a 1440px monitor and break at 375px.'],
            ['t'=>'Products with conversion problems','d'=>'Your app works technically but users drop off. The issue is often UX — we diagnose and fix it at the interface level, informed by real user data where you have it.'],
            ['t'=>'Rebrands and design refreshes','d'=>'Your product has grown but the UI has not kept up. We do systematic design system upgrades — replacing tokens and layout components first — without breaking what currently works.'],
        ],
        'why' => [
            ['t'=>'Design system thinking, not screen matching','d'=>'We do not just implement screens — we build reusable component libraries with design tokens that make future changes faster and more consistent. A well-built design system is an asset; a pile of implemented screens is technical debt.'],
            ['t'=>'Cross-stack capability','d'=>'We implement into Laravel Blade, React, Next.js, or standalone HTML. Whatever your backend or framework, we integrate the frontend cleanly without friction at the boundary between layers.'],
            ['t'=>'We flag problems before they cost you','d'=>'If a design decision will create performance issues, accessibility failures, or implementation difficulty, we raise it before implementing. We would rather have a short conversation early than deliver something we know is wrong.'],
        ],
        'outcomes' => [
            ['m'=>'95+','l'=>'Lighthouse score','d'=>'We optimize Core Web Vitals (LCP, CLS, INP) on every frontend we deliver.'],
            ['m'=>'WCAG AA','l'=>'Accessibility standard','d'=>'All interfaces are tested for WCAG 2.1 AA compliance before delivery.'],
            ['m'=>'100%','l'=>'Design fidelity','d'=>'We implement from Figma with Dev Mode precision — no approximations.'],
        ],
        'faqs'  => [
            ['q'=>'Do you do the Figma designs or just implement existing ones?','a'=>'Both. We implement your existing Figma files with Dev Mode precision, or do the design work ourselves from wireframes or a brief. If you have a rough brief but no Figma, we start from scratch and deliver the designs before implementation.'],
            ['q'=>'How do you ensure the implementation matches the design exactly?','a'=>'We use Figma Dev Mode for exact spacing, typography, and color values. We do visual QA against the design at each sprint and flag discrepancies before they are buried under further work.'],
            ['q'=>'Do you support dark mode?','a'=>'Yes. We implement dark mode with system preference detection using Tailwind CSS dark mode utilities or a custom toggle, with proper color token management so both modes are consistent.'],
            ['q'=>'What browsers and devices do you test on?','a'=>'Chrome, Firefox, Safari, and Edge on desktop. iOS Safari and Android Chrome on mobile. We test at 375px, 768px, and 1440px breakpoints at minimum, with additional breakpoints for layouts that need them.'],
            ['q'=>'Can you audit our existing UI and recommend improvements?','a'=>'Yes. We offer design audits as standalone engagements — heuristic review, user flow analysis, Lighthouse audit, and WCAG check. The deliverable is a prioritized issue list with specific fix recommendations.'],
            ['q'=>'Do you build Figma design tokens and variable systems?','a'=>'Yes. We set up Figma variables (color, typography, spacing) that map directly to Tailwind CSS config. Changes in Figma propagate to code cleanly, making design-to-code updates systematic rather than manual.'],
            ['q'=>'Do you deliver a component library or just implemented pages?','a'=>'We deliver a component library — reusable Blade or React components with consistent token usage and documented props. You receive something you can extend and maintain, not a collection of one-off implementations that are difficult to update.'],
            ['q'=>'Can you redesign an existing product UI without disrupting the codebase?','a'=>'Yes. We approach UI redesigns incrementally — replacing design system tokens and layout components first, then updating screens section by section. This lets you ship improvements continuously without a big-bang rewrite that disrupts existing functionality.'],
        ],
    ],
    'mvp-development' => [
        'icon'  => '<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.82m5.84-2.56a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.82m2.56-5.84a14.98 14.98 0 00-2.58 5.841m2.58-5.841A6.002 6.002 0 0115.59 8.41m0 5.96"/></svg>',
        'title' => 'MVP Development',
        'tag'   => 'Launch your idea in 6 to 8 weeks with a production-ready MVP, not a prototype.',
        'desc'  => 'We specialize in taking ideas from zero to live product quickly. Our MVP process is structured: one week of scoping, five to six weeks of development, one week of QA and launch prep. The result is a production-grade application with real auth, real payments, and a real admin panel — not a hackathon demo. Every MVP we ship has been used by real users from day one rather than sitting in a staging environment waiting for a rebuild.',
        'approach' => [
            'The defining discipline of a good MVP is knowing what to cut. Most founders arrive with a feature list that represents six months of work. Our job in scoping week is to identify the twelve to fifteen features that prove the core hypothesis and defer everything else. This is sometimes uncomfortable — founders often love features they should not build yet. But it is the discipline that gets you live in seven weeks rather than six months, with real user data to guide what comes next.',
            'We scope-lock on week one. This is not a contractual formality — it is the mechanism that protects your launch date. Scope creep is the most common reason MVPs overrun. New ideas that arrive during the build go into a post-launch list, reviewed after you have real user data to guide prioritization rather than adding based on enthusiasm without evidence.',
            'Production-ready does not mean over-engineered. An MVP includes real authentication, payment processing, an admin panel for your team, and a deployment pipeline that does not break when the first real user signs up. It does not include microservices, complex analytics, or edge-case handling that only matters at scale. We build exactly what the first version needs — and nothing more — so you launch with confidence and a clear foundation to iterate from.',
        ],
        'feats' => ['Fixed scope and timeline','Production-ready from day one','Authentication and user management','Payment integration (Stripe / Razorpay)','Admin panel with Filament','Deployment on your infrastructure','Documentation and handover','30-day post-launch support'],
        'process' => [
            ['n'=>'01','t'=>'Week 1 — Scope lock','d'=>'Feature list, user flows, and tech stack finalized. Scope lock protects your timeline — features discovered mid-build go into the post-launch list, not into the current sprint.'],
            ['n'=>'02','t'=>'Weeks 2 to 5 — Core build','d'=>'Auth, core features, database, and integrations built in two-week sprints. Deployed to staging from day one so you can see progress continuously and share it with stakeholders.'],
            ['n'=>'03','t'=>'Week 6 — Polish and QA','d'=>'Bug fixes, edge cases, performance, and UI polish. Nothing at launch should surprise you — this week is about removing risk, not adding features.'],
            ['n'=>'04','t'=>'Week 7 — Launch','d'=>'Production deployment, DNS cutover, monitoring setup, and final handover documentation. You receive all access, credentials, and a working product in real users\' hands.'],
        ],
        'tech'  => ['Laravel 11','Flutter / React','Stripe / Razorpay','Filament v3','PostgreSQL','AWS S3','Docker','CI / CD'],
        'who'   => [
            ['t'=>'First-time founders','d'=>'You have a validated idea and need a production-ready product to show investors or acquire your first paying users — not a prototype that needs rebuilding before it can scale.'],
            ['t'=>'Enterprises validating new products','d'=>'Your company wants to test a new product line or internal tool without committing a full internal engineering team to a six-month project with uncertain ROI.'],
            ['t'=>'Businesses replacing legacy systems','d'=>'Your current system is painful and too rigid to extend. An MVP of the replacement lets you validate the new approach with real users before committing to a full migration.'],
        ],
        'why' => [
            ['t'=>'Fixed scope, fixed timeline — every time','d'=>'Week 7 is always launch week. We have delivered every MVP on this structure. The scope lock on week one is what makes this possible — and it is the step most studios skip because the conversation is difficult.'],
            ['t'=>'Opinionated stack for speed','d'=>'Laravel, Filament, and Alpine.js is a stack we have optimized specifically for fast, production-ready MVP delivery. No architecture debates, no framework selection meetings — we know what works and build with it.'],
            ['t'=>'Post-MVP continuity built in','d'=>'Most clients continue working with us after launch. We build MVPs with handover in mind from day one — clean code, documented APIs, and an admin panel you can use without us. The foundation is designed to iterate from, not rebuild.'],
        ],
        'outcomes' => [
            ['m'=>'7 wks','l'=>'Zero to live product','d'=>'Scope lock on week 1 means launch week is always week 7 — no slippage built into the model.'],
            ['m'=>'100%','l'=>'Production-ready at launch','d'=>'Auth, payments, admin, and deployment — a real product with real users from day one.'],
            ['m'=>'70%+','l'=>'Clients continue post-MVP','d'=>'Most clients move to a monthly retainer once the MVP is validated by real users.'],
        ],
        'faqs'  => [
            ['q'=>'What is and is not included in an MVP?','a'=>'An MVP includes the core user flows, authentication, payments if needed, an admin panel, and deployment. It does not include edge-case polish, marketing pages, complex reporting, or features that serve users who do not yet exist. Those come after you have validated the core.'],
            ['q'=>'What happens if we need more features during the build?','a'=>'New features go into a post-launch list. Scope lock at the start is the mechanism that protects your timeline — it is not a rigid contract, it is a shared discipline that benefits you by keeping the launch date real.'],
            ['q'=>'Can we continue working together after the MVP launches?','a'=>'Yes, and most clients do. We offer monthly retainers for ongoing development once the MVP is live and you have real user data to guide what to build next.'],
            ['q'=>'Do we own all the code at the end?','a'=>'Always. You own 100% of the code, assets, and IP. We transfer all repository access, deployment credentials, and documentation at handover. There is no proprietary tooling or dependency on us to run your product.'],
            ['q'=>'What if we discover the MVP needs changes after launch?','a'=>'Expected. Post-MVP iteration based on real user feedback is what retainers are for. Scope lock during the build protects the launch date — iteration based on evidence happens after, when you have data rather than assumptions.'],
            ['q'=>'How much does a typical MVP cost?','a'=>'Most of our MVPs fall between $12,000 and $30,000 depending on complexity. A focused tool with auth, core features, and admin is at the lower end. A two-sided marketplace or app with complex integrations is at the higher end. We give a precise quote after scoping, not before.'],
            ['q'=>'How do you handle user authentication and security in an MVP?','a'=>'Authentication is never a cut-for-MVP feature. Every MVP we build includes proper session management, role-based access control, password reset flows, and email verification. Security decisions made at the MVP stage are foundational — getting them wrong creates expensive rework when you try to scale.'],
            ['q'=>'Do you help with product strategy or just build what we specify?','a'=>'Both. During scoping week we actively help prioritize features based on what proves the hypothesis fastest. We push back on features that add complexity without validation value. After launch, we help interpret user behavior and translate it into a post-MVP roadmap.'],
        ],
    ],
];

$def     = ['icon'=>'<svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>','title'=>ucwords(str_replace('-',' ',$slug)),'tag'=>'','desc'=>'','approach'=>[],'feats'=>[],'process'=>[],'tech'=>[],'who'=>[],'why'=>[],'outcomes'=>[],'faqs'=>[]];
$content = $staticContent[$slug] ?? $def;
// DB title/tag override static; all rich sections (approach, why, process, outcomes) always come from static
if (isset($service)) {
    if (!empty($service->title)) $content['title'] = $service->title;
    if (!empty($service->tagline)) $content['tag'] = $service->tagline;
}
@endphp

@section('title', isset($service) ? ($service->meta_title ?: $service->title . ' | Plazmasoft') : $content['title'] . ' | Plazmasoft Software Development')
@section('meta_description', isset($service) ? ($service->meta_description ?: $service->excerpt) : 'Plazmasoft ' . $content['title'] . ' — ' . $content['tag'])
@section('canonical', url('/services/' . $slug))

@section('jsonld')
@php $faqSource = $content['faqs']; @endphp
@if(count($faqSource))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqSource as $faq)
        @php
        $q = is_array($faq) ? ($faq['question'] ?? $faq['q'] ?? '') : $faq;
        $a = is_array($faq) ? ($faq['answer'] ?? $faq['a'] ?? '') : '';
        @endphp
        {
            "@type": "Question",
            "name": "{{ e($q) }}",
            "acceptedAnswer": { "@type": "Answer", "text": "{{ e($a) }}" }
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endif
@if(count($content['process']))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "HowTo",
    "name": "How Plazmasoft delivers {{ e($content['title']) }}",
    "description": "{{ e($content['tag']) }}",
    "step": [
        @foreach($content['process'] as $step)
        {
            "@type": "HowToStep",
            "position": {{ $loop->iteration }},
            "name": "{{ e($step['t']) }}",
            "text": "{{ e($step['d']) }}"
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endif
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "{{ e(isset($service) ? $service->title : $content['title']) }}",
    "name": "{{ e(isset($service) ? $service->title : $content['title']) }}",
    "description": "{{ e(isset($service) ? ($service->meta_description ?: $service->excerpt) : $content['tag']) }}",
    "provider": { "@type": "Organization", "name": "Plazmasoft", "url": "{{ url('/') }}" },
    "url": "{{ url('/services/' . $slug) }}",
    "areaServed": ["India","United States","United Kingdom","Australia","UAE"]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/services') }}" },
        { "@type": "ListItem", "position": 3, "name": "{{ e(isset($service) ? $service->title : $content['title']) }}", "item": "{{ url('/services/' . $slug) }}" }
    ]
}
</script>
@endsection

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
.approach-body{display:flex;flex-direction:column;gap:1.5rem}
.approach-p{font-size:.95rem;color:var(--t2);line-height:1.88}
.who-grid{display:grid;grid-template-columns:1fr;gap:1rem}
@media(min-width:768px){.who-grid{grid-template-columns:repeat(3,1fr)}}
.who-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.5rem;border-top:2px solid rgba(249,115,22,.3)}
.who-t{font-size:.9rem;font-weight:700;color:var(--t1);margin-bottom:.4rem}
.who-d{font-size:.82rem;color:var(--t2);line-height:1.65}
.why-grid{display:grid;grid-template-columns:1fr;gap:1rem}
@media(min-width:768px){.why-grid{grid-template-columns:repeat(3,1fr)}}
.why-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.75rem;border-left:3px solid rgba(249,115,22,.35)}
.why-t{font-size:.9rem;font-weight:700;color:var(--t1);margin-bottom:.5rem}
.why-d{font-size:.82rem;color:var(--t2);line-height:1.68}
.outcome-grid{display:grid;grid-template-columns:1fr;gap:1rem}
@media(min-width:768px){.outcome-grid{grid-template-columns:repeat(3,1fr)}}
.outcome-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.75rem;text-align:center}
.outcome-m{font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;background:linear-gradient(135deg,var(--orange-l),var(--orange-d));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1;margin-bottom:.4rem}
.outcome-l{font-size:.8rem;font-weight:700;color:var(--t1);margin-bottom:.3rem}
.outcome-d{font-size:.75rem;color:var(--t3);line-height:1.5}
.proc-list{display:flex;flex-direction:column;gap:0}
.proc-item{display:grid;grid-template-columns:3rem 1fr;gap:1.5rem;position:relative;padding-bottom:2.5rem}
.proc-item:last-child{padding-bottom:0}
.proc-item:not(:last-child) .proc-line{position:absolute;left:1.35rem;top:2.5rem;bottom:0;width:1px;background:linear-gradient(to bottom,rgba(249,115,22,.3),transparent)}
.proc-num-wrap{display:flex;flex-direction:column;align-items:center;z-index:1}
.proc-num{width:2.5rem;height:2.5rem;border-radius:50%;background:rgba(249,115,22,.1);border:1px solid rgba(249,115,22,.25);display:flex;align-items:center;justify-content:center;font-size:.68rem;font-weight:800;color:var(--orange);flex-shrink:0}
.proc-content{padding-top:.35rem}
.proc-title{font-size:1rem;font-weight:700;color:var(--t1);margin-bottom:.4rem}
.proc-desc{font-size:.85rem;color:var(--t2);line-height:1.7}
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

@section('content')
<div id="cursorGlow2"></div>

<section style="background:var(--bg);padding:8rem 0 5rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-8rem;right:5%;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.055) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;max-width:800px;margin:0 auto;text-align:center">
        <nav class="bc">
            <a href="{{ url('/') }}">Home</a><span class="bc-sep">/</span>
            <a href="{{ url('/services') }}">Services</a><span class="bc-sep">/</span>
            <span style="color:var(--t2)">{{ $content['title'] }}</span>
        </nav>
        <div style="width:72px;height:72px;border-radius:20px;background:rgba(249,115,22,.1);display:flex;align-items:center;justify-content:center;margin:0 auto 1.5rem;color:var(--orange)">{!! $content['icon'] !!}</div>
        <span class="eyebrow sr">Service</span>
        <h1 class="dh2 sr" style="margin-top:.75rem">{{ $content['title'] }}</h1>
        @if($content['tag'])
        <p class="dlead sr" style="margin-top:1rem;max-width:600px;margin-left:auto;margin-right:auto">{{ $content['tag'] }}</p>
        @endif
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2.25rem" class="sr">
            <a href="{{ url('/contact') }}" class="bsolid">Start Your Project</a>
            <a href="{{ url('/services') }}" class="bghost">All Services</a>
        </div>
    </div>
</section>

{{-- OVERVIEW --}}
@if($content['desc'])
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w"><div style="max-width:760px;margin:0 auto" class="sr">
        <span class="eyebrow">Overview</span>
        <h2 class="dh2" style="margin-top:.75rem;font-size:clamp(1.4rem,3vw,2rem)">What this service covers</h2>
        <div class="divx" style="margin:.9rem 0 1.5rem"></div>
        <p style="font-size:.95rem;color:var(--t2);line-height:1.88">{{ $content['desc'] }}</p>
    </div></div>
</section>
@endif

{{-- OUR APPROACH --}}
@if(count($content['approach']))
<section class="ps" style="background:var(--bg)">
    <div class="w" style="max-width:800px;margin:0 auto">
        <div style="margin-bottom:2.5rem" class="sr">
            <span class="eyebrow">How we work</span>
            <h2 class="dh2" style="margin-top:.75rem">Our approach to {{ strtolower($content['title']) }}</h2>
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

{{-- WHO THIS IS FOR --}}
@if(count($content['who']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Right Fit</span>
            <h2 class="dh2" style="margin-top:.75rem">Who this is for</h2>
            <div class="divx cx"></div>
        </div>
        <div class="who-grid sg">
            @foreach($content['who'] as $w)
            <div class="who-card">
                <p class="who-t">{{ $w['t'] }}</p>
                <p class="who-d">{{ $w['d'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- DELIVERABLES --}}
@if(count($content['feats']))
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Deliverables</span>
            <h2 class="dh2" style="margin-top:.75rem">What we deliver</h2>
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

{{-- PROCESS --}}
@if(count($content['process']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w" style="max-width:760px;margin:0 auto">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Our Process</span>
            <h2 class="dh2" style="margin-top:.75rem">How we work</h2>
            <div class="divx cx"></div>
        </div>
        <div class="proc-list">
            @foreach($content['process'] as $step)
            <div class="proc-item sr">
                <div class="proc-num-wrap">
                    <div class="proc-num">{{ $step['n'] }}</div>
                    <div class="proc-line"></div>
                </div>
                <div class="proc-content">
                    <p class="proc-title">{{ $step['t'] }}</p>
                    <p class="proc-desc">{{ $step['d'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- WHY PLAZMASOFT --}}
@if(count($content['why']))
<section class="ps" style="background:var(--bg)">
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

{{-- OUTCOMES --}}
@if(count($content['outcomes']))
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Results</span>
            <h2 class="dh2" style="margin-top:.75rem">What success looks like</h2>
            <div class="divx cx"></div>
        </div>
        <div class="outcome-grid sg">
            @foreach($content['outcomes'] as $o)
            <div class="outcome-card">
                <p class="outcome-m">{{ $o['m'] }}</p>
                <p class="outcome-l">{{ $o['l'] }}</p>
                <p class="outcome-d">{{ $o['d'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- TECH STACK --}}
@if(count($content['tech']))
<section class="ps" style="background:var(--bg)">
    <div class="w" style="max-width:900px;margin:0 auto;text-align:center">
        <div style="margin-bottom:2.5rem" class="sr">
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
            <span class="eyebrow" style="justify-content:center">Ready to start?</span>
            <h2 class="dh2" style="margin-top:.75rem">Let us build it together.</h2>
            <p class="dlead" style="margin-top:.75rem;max-width:480px;margin-left:auto;margin-right:auto">Tell us about your project. We reply within one business day with a clear plan and honest pricing.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start Your Project</a>
                <a href="{{ url('/portfolio') }}" class="bghost">See Our Work</a>
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
