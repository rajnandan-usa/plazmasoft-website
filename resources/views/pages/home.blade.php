@extends('layouts.app')

@section('title', ($settings['default_meta_title'] ?? 'Plazmasoft') . ' | Web and Mobile App Development Studio')
@section('meta_description', $settings['default_meta_description'] ?? '')

@section('content')

{{-- ══════════════════════════════════════════════════════
     HERO  Dark mesh hero with gradient headline
══════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-mesh-hero bg-dot-grid min-h-screen flex items-center">

    {{-- Ambient glow blobs --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -top-40 left-1/4 h-[500px] w-[500px] rounded-full bg-brand-500/10 blur-[120px]"></div>
        <div class="absolute bottom-10 right-1/5 h-72 w-72 rounded-full bg-brand-600/8 blur-[80px]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-96 w-96 rounded-full bg-brand-400/6 blur-[100px]"></div>
    </div>

    <div class="container-site relative z-10 py-28 md:py-36">
        <div class="mx-auto max-w-4xl text-center">

            {{-- Animated badge --}}
            <div class="mb-8 inline-flex" data-reveal>
                <span class="glass rounded-full px-5 py-1.5 text-xs font-semibold uppercase tracking-widest text-brand-300 ring-1 ring-brand-400/25">
                    Founder-led studio since {{ $settings['founded_year'] ?? '2022' }}
                </span>
            </div>

            {{-- Headline --}}
            <h1 class="font-display text-5xl font-extrabold leading-[1.1] tracking-tight text-white md:text-7xl text-balance" data-reveal>
                We build apps<br class="hidden sm:block">
                that <span class="text-gradient">actually ship.</span>
            </h1>

            {{-- Subtext --}}
            <p class="mt-7 text-lg leading-relaxed text-gray-400 md:text-xl max-w-2xl mx-auto" data-reveal>
                {{ $settings['site_tagline'] ?? 'Production-grade web and mobile apps for startups and growing businesses.' }}
                From idea to live product, without the fluff.
            </p>

            {{-- CTAs --}}
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4" data-reveal>
                <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4 animate-pulse-glow">
                    {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ url('/portfolio') }}" class="btn-dark-outline text-base px-8 py-4">
                    {{ $settings['hero_cta_secondary_label'] ?? 'View Our Work' }}
                </a>
            </div>

            {{-- Trust pills --}}
            <div class="mt-14 flex flex-wrap items-center justify-center gap-3" data-stagger>
                <span class="glass rounded-full px-4 py-2 text-sm text-gray-300 flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-green-400 shadow-[0_0_6px_rgba(74,222,128,0.8)]"></span>
                    {{ $settings['projects_delivered'] ?? '18' }}+ projects shipped
                </span>
                <span class="glass rounded-full px-4 py-2 text-sm text-gray-300 flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-400 shadow-[0_0_6px_rgba(251,146,60,0.8)]"></span>
                    {{ $settings['happy_clients'] ?? '15' }}+ happy clients
                </span>
                <span class="glass rounded-full px-4 py-2 text-sm text-gray-300 flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-400 shadow-[0_0_6px_rgba(96,165,250,0.8)]"></span>
                    {{ $settings['industries_served'] ?? '7' }}+ industries
                </span>
                <span class="glass rounded-full px-4 py-2 text-sm text-gray-300 flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-purple-400 shadow-[0_0_6px_rgba(196,181,253,0.8)]"></span>
                    India-based, global delivery
                </span>
            </div>
        </div>
    </div>

    {{-- Bottom transition --}}
    <div class="pointer-events-none absolute bottom-0 left-0 right-0 h-28 bg-gradient-to-b from-transparent to-white" aria-hidden="true"></div>
</section>


{{-- ══════════════════════════════════════════════════════
     TECH MARQUEE  Infinite scrolling tech logos
══════════════════════════════════════════════════════ --}}
@php
$techNames = $techStackItems->count()
    ? $techStackItems->pluck('name')->toArray()
    : ['Laravel','Flutter','React','Node.js','MySQL','PostgreSQL','Firebase','GPT-4','Gemini','Figma','Docker','AWS','Tailwind CSS','TypeScript','Redis','Vue.js'];
@endphp
<div class="border-y border-gray-100 bg-white py-6 overflow-hidden">
    <p class="text-center text-[10px] font-semibold uppercase tracking-widest text-gray-400 mb-5">Technologies we build with</p>
    <div class="relative overflow-hidden">
        <div class="marquee-track">
            @foreach($techNames as $name)
            <span class="mx-4 inline-flex items-center gap-2 rounded-full border border-gray-100 bg-gray-50 px-5 py-2 text-sm font-medium text-gray-600 whitespace-nowrap hover:border-brand-200 hover:text-brand-600 transition-colors cursor-default">
                <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                {{ $name }}
            </span>
            @endforeach
            {{-- Duplicate for seamless loop --}}
            @foreach($techNames as $name)
            <span class="mx-4 inline-flex items-center gap-2 rounded-full border border-gray-100 bg-gray-50 px-5 py-2 text-sm font-medium text-gray-600 whitespace-nowrap hover:border-brand-200 hover:text-brand-600 transition-colors cursor-default">
                <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                {{ $name }}
            </span>
            @endforeach
        </div>
        <div class="pointer-events-none absolute inset-y-0 left-0 w-20 bg-gradient-to-r from-white to-transparent" aria-hidden="true"></div>
        <div class="pointer-events-none absolute inset-y-0 right-0 w-20 bg-gradient-to-l from-white to-transparent" aria-hidden="true"></div>
    </div>
</div>


{{-- ══════════════════════════════════════════════════════
     SERVICES  Premium cards with SVG icons
══════════════════════════════════════════════════════ --}}
<section class="section bg-mesh-light">
    <div class="container-site">
        <div class="text-center" data-reveal>
            <p class="section-label">What We Do</p>
            <h2 class="section-title mt-2">Services built for scale</h2>
            <p class="section-subtitle mx-auto max-w-2xl">From MVP to production, we cover the full stack of digital product development.</p>
        </div>

        @php
        $services = [
            [
                'title' => 'Web App Development',
                'desc'  => 'Laravel and React applications built to handle real traffic and real data. Scalable from day one.',
                'href'  => '/services/web-app-development',
                'icon'  => '<svg class="h-7 w-7 text-brand-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>',
            ],
            [
                'title' => 'Mobile App Development',
                'desc'  => 'Cross-platform Flutter apps for iOS and Android that users keep coming back to. One codebase, full performance.',
                'href'  => '/services/mobile-app-development',
                'icon'  => '<svg class="h-7 w-7 text-brand-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 15.75h3"/></svg>',
            ],
            [
                'title' => 'AI Integration',
                'desc'  => 'GPT-4, Gemini, Stable Diffusion, and custom LLM pipelines wired into your product. Real AI, not just a chatbot.',
                'href'  => '/services/ai-integration',
                'icon'  => '<svg class="h-7 w-7 text-brand-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>',
            ],
            [
                'title' => 'UI / UX Development',
                'desc'  => 'Figma-to-code that looks premium and performs fast on every device. Design systems included.',
                'href'  => '/services/ui-ux-development',
                'icon'  => '<svg class="h-7 w-7 text-brand-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 17.25h.008v.008H6.75v-.008z"/></svg>',
            ],
            [
                'title' => 'MVP Development',
                'desc'  => 'Launch your idea in 6 to 8 weeks with a production-ready MVP, not a clickable prototype gathering dust.',
                'href'  => '/services/mvp-development',
                'icon'  => '<svg class="h-7 w-7 text-brand-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>',
            ],
            [
                'title' => 'Ongoing Support',
                'desc'  => 'Retainer-based maintenance and feature work so your product keeps improving long after launch.',
                'href'  => '/contact',
                'icon'  => '<svg class="h-7 w-7 text-brand-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg>',
            ],
        ];
        @endphp

        <div class="mt-14 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3" data-stagger>
            @foreach($services as $svc)
            <a href="{{ url($svc['href']) }}" class="card-premium group">
                <div class="icon-box">
                    {!! $svc['icon'] !!}
                </div>
                <h3 class="mt-5 font-display text-lg font-semibold text-gray-900 group-hover:text-brand-500 transition-colors duration-200">{{ $svc['title'] }}</h3>
                <p class="mt-2.5 text-sm leading-relaxed text-gray-500">{{ $svc['desc'] }}</p>
                <span class="mt-5 inline-flex items-center text-sm font-semibold text-brand-500">
                    Learn more
                    <svg class="ml-1.5 h-4 w-4 transition-transform duration-200 group-hover:translate-x-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     FEATURED WORK  Dark section so images pop
══════════════════════════════════════════════════════ --}}
@if($featuredProjects->count())
<section class="section bg-gray-950">
    <div class="container-site">
        <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end sm:justify-between" data-reveal>
            <div>
                <p class="section-label text-brand-400">Portfolio</p>
                <h2 class="mt-2 font-display text-3xl font-bold text-white md:text-4xl">Selected work</h2>
            </div>
            <a href="{{ url('/portfolio') }}" class="btn-dark-outline text-sm shrink-0">View all projects</a>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3" data-stagger>
            @foreach($featuredProjects as $project)
            <a href="{{ url('/portfolio/' . $project->slug) }}" class="group block overflow-hidden rounded-2xl bg-gray-900 border border-gray-800 transition-all duration-300 hover:border-brand-500/30 hover:shadow-glow-sm">
                @if($project->banner_image_path)
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset('storage/' . $project->banner_image_path) }}" alt="{{ $project->title }}"
                         class="h-full w-full object-cover opacity-80 transition-all duration-500 group-hover:scale-105 group-hover:opacity-100">
                </div>
                @else
                <div class="aspect-video flex items-center justify-center bg-gradient-to-br from-gray-800 to-gray-900">
                    <span class="font-display text-5xl font-extrabold text-gray-700">{{ substr($project->title, 0, 2) }}</span>
                </div>
                @endif
                <div class="p-5">
                    @if($project->category)
                    <span class="inline-flex items-center rounded-full bg-brand-500/10 px-2.5 py-0.5 text-xs font-medium text-brand-400">
                        {{ $project->category->name }}
                    </span>
                    @endif
                    <h3 class="mt-2.5 font-display text-base font-semibold text-white group-hover:text-brand-300 transition-colors">{{ $project->title }}</h3>
                    @if($project->tagline)
                    <p class="mt-1 text-sm text-gray-500">{{ $project->tagline }}</p>
                    @endif
                    <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-brand-400 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                        View case study
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif


{{-- ══════════════════════════════════════════════════════
     STATS  Animated counters on dark-warm section
══════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden py-20">
    <div class="absolute inset-0 gradient-brand opacity-95"></div>
    <div class="pointer-events-none absolute inset-0 bg-dot-grid opacity-20" aria-hidden="true"></div>

    <div class="container-site relative z-10">
        <div class="grid grid-cols-2 gap-10 text-center md:grid-cols-4" data-stagger>
            <div>
                <p class="font-display text-5xl font-extrabold text-white"
                   data-counter="{{ preg_replace('/\D/', '', $settings['projects_delivered'] ?? '18') }}"
                   data-suffix="+">0+</p>
                <p class="mt-2 text-sm font-medium text-orange-100">Projects delivered</p>
            </div>
            <div>
                <p class="font-display text-5xl font-extrabold text-white"
                   data-counter="{{ preg_replace('/\D/', '', $settings['happy_clients'] ?? '15') }}"
                   data-suffix="+">0+</p>
                <p class="mt-2 text-sm font-medium text-orange-100">Happy clients</p>
            </div>
            <div>
                <p class="font-display text-5xl font-extrabold text-white"
                   data-counter="{{ preg_replace('/\D/', '', $settings['years_experience'] ?? '5') }}"
                   data-suffix="+">0+</p>
                <p class="mt-2 text-sm font-medium text-orange-100">Years of experience</p>
            </div>
            <div>
                <p class="font-display text-5xl font-extrabold text-white"
                   data-counter="{{ preg_replace('/\D/', '', $settings['industries_served'] ?? '7') }}"
                   data-suffix="+">0+</p>
                <p class="mt-2 text-sm font-medium text-orange-100">Industries served</p>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     PROCESS  Connected horizontal timeline
══════════════════════════════════════════════════════ --}}
@if($processSteps->count())
<section class="section bg-white">
    <div class="container-site">
        <div class="text-center" data-reveal>
            <p class="section-label">How It Works</p>
            <h2 class="section-title mt-2">Our process</h2>
            <p class="section-subtitle mx-auto max-w-2xl">Transparent and structured. You always know what happens next.</p>
        </div>

        <div class="mt-16 relative" data-stagger>
            {{-- Connecting line (desktop) --}}
            <div class="absolute top-7 left-[12.5%] right-[12.5%] hidden h-px lg:block" aria-hidden="true">
                <div class="h-full bg-gradient-to-r from-transparent via-brand-200 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($processSteps as $step)
                <div class="relative flex flex-col items-center text-center">
                    <div class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-white shadow-glow-sm ring-2 ring-brand-100">
                        <span class="font-display text-xl font-extrabold text-brand-500">{{ $step->step_number }}</span>
                    </div>
                    <h3 class="mt-5 font-display text-base font-semibold text-gray-900">{{ $step->title }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-gray-500">{{ $step->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif


{{-- ══════════════════════════════════════════════════════
     TESTIMONIALS  Premium quote cards
══════════════════════════════════════════════════════ --}}
@if($testimonials->count())
<section class="section bg-gray-50">
    <div class="container-site">
        <div class="text-center" data-reveal>
            <p class="section-label">Client Stories</p>
            <h2 class="section-title mt-2">What clients say</h2>
            <p class="section-subtitle mx-auto max-w-xl">We let results speak. Here's what founders and product teams say about working with us.</p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3" data-stagger>
            @foreach($testimonials as $testimonial)
            <div class="relative overflow-hidden rounded-2xl bg-white p-8 shadow-card transition-all duration-300 hover:shadow-card-hover hover:-translate-y-1">
                {{-- Large decorative quote mark --}}
                <svg class="absolute right-5 top-5 h-16 w-16 text-brand-50" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M10 8c-3.314 0-6 2.686-6 6v10h10V14H6c0-2.21 1.79-4 4-4V8zm14 0c-3.314 0-6 2.686-6 6v10h10V14h-8c0-2.21 1.79-4 4-4V8z"/>
                </svg>

                {{-- Stars --}}
                <div class="flex gap-0.5">
                    @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                    <svg class="h-4 w-4 text-brand-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>

                <blockquote class="relative mt-4 text-sm leading-relaxed text-gray-600">
                    "{{ $testimonial->quote }}"
                </blockquote>

                <div class="mt-6 flex items-center gap-3">
                    @if($testimonial->author_avatar_path)
                    <img src="{{ asset('storage/' . $testimonial->author_avatar_path) }}"
                         alt="{{ $testimonial->author_name }}"
                         class="h-11 w-11 rounded-full object-cover ring-2 ring-brand-100">
                    @else
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-brand-400 to-brand-600 text-sm font-bold text-white ring-2 ring-brand-100">
                        {{ substr($testimonial->author_name, 0, 1) }}
                    </div>
                    @endif
                    <div>
                        <p class="text-sm font-semibold text-gray-900">{{ $testimonial->author_name }}</p>
                        <p class="text-xs text-gray-500">
                            {{ $testimonial->author_role }}{{ $testimonial->author_company ? ', ' . $testimonial->author_company : '' }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif


{{-- ══════════════════════════════════════════════════════
     BLOG  Latest articles
══════════════════════════════════════════════════════ --}}
@if($latestPosts->count())
<section class="section bg-white">
    <div class="container-site">
        <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end sm:justify-between" data-reveal>
            <div>
                <p class="section-label">Insights</p>
                <h2 class="section-title mt-2">From the blog</h2>
            </div>
            <a href="{{ url('/blog') }}" class="btn-outline text-sm shrink-0">All articles</a>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-3" data-stagger>
            @foreach($latestPosts as $post)
            <a href="{{ url('/blog/' . $post->slug) }}" class="group block">
                <div class="overflow-hidden rounded-2xl">
                    @if($post->cover_image_path)
                    <div class="aspect-video overflow-hidden bg-gray-100">
                        <img src="{{ asset('storage/' . $post->cover_image_path) }}" alt="{{ $post->title }}"
                             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    @else
                    <div class="aspect-video bg-gradient-to-br from-brand-50 via-orange-50 to-amber-50 flex items-center justify-center">
                        <svg class="h-12 w-12 text-brand-200" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    @endif
                </div>
                <div class="mt-4">
                    @if($post->category)
                    <span class="text-xs font-semibold uppercase tracking-wide text-brand-500">{{ $post->category->name }}</span>
                    @endif
                    <h3 class="mt-1.5 font-display text-base font-semibold text-gray-900 group-hover:text-brand-500 transition-colors leading-snug">
                        {{ $post->title }}
                    </h3>
                    <div class="mt-2 flex items-center gap-3 text-xs text-gray-400">
                        @if($post->published_at)
                        <span>{{ $post->published_at->format('M j, Y') }}</span>
                        <span>&middot;</span>
                        @endif
                        <span>{{ $post->reading_time ?? 5 }} min read</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
