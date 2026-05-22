@extends('layouts.app')

@section('title', ($settings['default_meta_title'] ?? 'Plazmasoft') . ' | Web and Mobile App Development Studio')
@section('meta_description', $settings['default_meta_description'] ?? '')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden gradient-hero py-20 md:py-28">
    <div class="container-site">
        <div class="mx-auto max-w-4xl text-center">
            <div class="badge-brand mb-6 inline-flex">
                <span>Founder-led studio since {{ $settings['founded_year'] ?? '2022' }}</span>
            </div>
            <h1 class="font-display text-4xl font-bold text-gray-900 md:text-6xl text-balance">
                We build web and mobile apps that actually ship.
            </h1>
            <p class="mt-6 text-xl text-gray-500 md:text-2xl text-balance">
                {{ $settings['site_tagline'] ?? 'Production-grade apps for startups and growing businesses.' }}
            </p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">
                    {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                </a>
                <a href="{{ url('/portfolio') }}" class="btn-outline text-base px-8 py-4">
                    {{ $settings['hero_cta_secondary_label'] ?? 'View Our Work' }}
                </a>
            </div>
            {{-- Trust signals --}}
            <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-sm text-gray-400">
                <span class="flex items-center gap-2">
                    <svg class="h-4 w-4 text-brand-400" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                    {{ $settings['projects_delivered'] ?? '18' }}+ projects delivered
                </span>
                <span class="flex items-center gap-2">
                    <svg class="h-4 w-4 text-brand-400" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                    {{ $settings['happy_clients'] ?? '15' }}+ happy clients
                </span>
                <span class="flex items-center gap-2">
                    <svg class="h-4 w-4 text-brand-400" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                    {{ $settings['industries_served'] ?? '7' }}+ industries
                </span>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES GRID --}}
<section class="section bg-white">
    <div class="container-site">
        <div class="text-center">
            <p class="section-label">What We Do</p>
            <h2 class="section-title mt-2">Services built for scale</h2>
            <p class="section-subtitle mx-auto max-w-2xl">From MVP to production, we cover the full stack of digital product development.</p>
        </div>
        <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @php
            $services = [
                ['icon' => '🌐', 'title' => 'Web App Development', 'desc' => 'Laravel and React applications built to handle real traffic and real data.', 'href' => '/services/web-app-development'],
                ['icon' => '📱', 'title' => 'Mobile App Development', 'desc' => 'Cross-platform Flutter apps for iOS and Android that users keep coming back to.', 'href' => '/services/mobile-app-development'],
                ['icon' => '🤖', 'title' => 'AI Integration', 'desc' => 'Gemini, GPT-4, Stable Diffusion, and custom LLM integrations wired into your product.', 'href' => '/services/ai-integration'],
                ['icon' => '🎨', 'title' => 'UI / UX Development', 'desc' => 'Figma-to-code that looks great and works fast on every device.', 'href' => '/services/ui-ux-development'],
                ['icon' => '🚀', 'title' => 'MVP Development', 'desc' => 'Launch your idea in 6-8 weeks with a production-ready MVP, not a prototype.', 'href' => '/services/mvp-development'],
                ['icon' => '🔧', 'title' => 'Ongoing Support', 'desc' => 'Retainer-based maintenance so your product keeps running smoothly after launch.', 'href' => '/contact'],
            ];
            @endphp
            @foreach($services as $svc)
            <a href="{{ $svc['href'] }}" class="card-bordered group">
                <span class="text-3xl">{{ $svc['icon'] }}</span>
                <h3 class="mt-4 font-display text-lg font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $svc['title'] }}</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $svc['desc'] }}</p>
                <span class="mt-4 inline-flex items-center text-sm font-medium text-brand-500">
                    Learn more
                    <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- FEATURED WORK --}}
@if($featuredProjects->count())
<section class="section bg-gray-50">
    <div class="container-site">
        <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="section-label">Portfolio</p>
                <h2 class="section-title mt-2">Selected work</h2>
            </div>
            <a href="{{ url('/portfolio') }}" class="btn-outline text-sm shrink-0">View all projects</a>
        </div>
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($featuredProjects as $project)
            <a href="{{ url('/portfolio/' . $project->slug) }}" class="group block overflow-hidden rounded-2xl bg-white shadow-card hover:shadow-card-hover transition-shadow">
                @if($project->banner_image_path)
                <div class="aspect-video overflow-hidden bg-gray-100">
                    <img src="{{ asset('storage/' . $project->banner_image_path) }}" alt="{{ $project->title }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                </div>
                @else
                <div class="aspect-video bg-gradient-to-br from-brand-50 to-brand-100 flex items-center justify-center">
                    <span class="font-display text-4xl font-bold text-brand-300">{{ substr($project->title, 0, 2) }}</span>
                </div>
                @endif
                <div class="p-5">
                    @if($project->category)
                    <span class="badge-brand text-xs">{{ $project->category->name }}</span>
                    @endif
                    <h3 class="mt-2 font-display text-lg font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $project->title }}</h3>
                    @if($project->tagline)
                    <p class="mt-1 text-sm text-gray-500">{{ $project->tagline }}</p>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- PROCESS --}}
@if($processSteps->count())
<section class="section bg-white">
    <div class="container-site">
        <div class="text-center">
            <p class="section-label">How It Works</p>
            <h2 class="section-title mt-2">Our process</h2>
            <p class="section-subtitle mx-auto max-w-2xl">Transparent, structured, and designed to keep you in the loop at every stage.</p>
        </div>
        <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            @foreach($processSteps as $step)
            <div class="relative text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-brand-50 text-2xl font-bold text-brand-500 ring-4 ring-white shadow-card">
                    {{ $step->step_number }}
                </div>
                <h3 class="mt-4 font-display text-base font-semibold text-gray-900">{{ $step->title }}</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $step->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- TECH STACK --}}
@if($techStackItems->count())
<section class="section-sm bg-gray-50">
    <div class="container-site">
        <p class="text-center text-xs font-semibold uppercase tracking-widest text-gray-400">Technologies we work with</p>
        <div class="mt-6 flex flex-wrap items-center justify-center gap-4">
            @foreach($techStackItems as $tech)
            <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-sm font-medium text-gray-600 shadow-card">
                @if($tech->logo_path)
                <img src="{{ asset('storage/' . $tech->logo_path) }}" alt="{{ $tech->name }}" class="h-5 w-5 object-contain">
                @endif
                {{ $tech->name }}
            </span>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- TESTIMONIALS --}}
@if($testimonials->count())
<section class="section bg-white">
    <div class="container-site">
        <div class="text-center">
            <p class="section-label">Client Stories</p>
            <h2 class="section-title mt-2">What clients say</h2>
        </div>
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach($testimonials as $testimonial)
            <div class="card">
                <div class="flex gap-1">
                    @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                    <svg class="h-4 w-4 text-brand-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <blockquote class="mt-4 text-sm text-gray-600 leading-relaxed italic">
                    "{{ $testimonial->quote }}"
                </blockquote>
                <div class="mt-4 flex items-center gap-3">
                    @if($testimonial->author_avatar_path)
                    <img src="{{ asset('storage/' . $testimonial->author_avatar_path) }}" alt="{{ $testimonial->author_name }}" class="h-10 w-10 rounded-full object-cover">
                    @else
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-brand-100 text-sm font-semibold text-brand-600">
                        {{ substr($testimonial->author_name, 0, 1) }}
                    </div>
                    @endif
                    <div>
                        <p class="text-sm font-semibold text-gray-900">{{ $testimonial->author_name }}</p>
                        <p class="text-xs text-gray-500">{{ $testimonial->author_role }}{{ $testimonial->author_company ? ', ' . $testimonial->author_company : '' }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- STATS BAR --}}
<section class="section-sm gradient-brand">
    <div class="container-site">
        <div class="grid grid-cols-2 gap-8 text-center md:grid-cols-4">
            <div>
                <p class="font-display text-4xl font-bold text-white">{{ $settings['projects_delivered'] ?? '18' }}+</p>
                <p class="mt-1 text-sm text-orange-100">Projects delivered</p>
            </div>
            <div>
                <p class="font-display text-4xl font-bold text-white">{{ $settings['happy_clients'] ?? '15' }}+</p>
                <p class="mt-1 text-sm text-orange-100">Happy clients</p>
            </div>
            <div>
                <p class="font-display text-4xl font-bold text-white">{{ $settings['years_experience'] ?? '5' }}+</p>
                <p class="mt-1 text-sm text-orange-100">Years experience</p>
            </div>
            <div>
                <p class="font-display text-4xl font-bold text-white">{{ $settings['industries_served'] ?? '7' }}+</p>
                <p class="mt-1 text-sm text-orange-100">Industries served</p>
            </div>
        </div>
    </div>
</section>

{{-- LATEST BLOG POSTS --}}
@if($latestPosts->count())
<section class="section bg-white">
    <div class="container-site">
        <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="section-label">Insights</p>
                <h2 class="section-title mt-2">From the blog</h2>
            </div>
            <a href="{{ url('/blog') }}" class="btn-outline text-sm shrink-0">All articles</a>
        </div>
        <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach($latestPosts as $post)
            <a href="{{ url('/blog/' . $post->slug) }}" class="group block">
                @if($post->cover_image_path)
                <div class="aspect-video overflow-hidden rounded-xl bg-gray-100">
                    <img src="{{ asset('storage/' . $post->cover_image_path) }}" alt="{{ $post->title }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                </div>
                @else
                <div class="aspect-video rounded-xl bg-gradient-to-br from-brand-50 to-orange-100"></div>
                @endif
                <div class="mt-4">
                    @if($post->category)
                    <span class="text-xs font-medium text-brand-500">{{ $post->category->name }}</span>
                    @endif
                    <h3 class="mt-1 font-display text-base font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $post->title }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $post->reading_time ?? 5 }} min read</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
