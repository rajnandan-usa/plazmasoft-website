@extends('layouts.app')

@section('title', isset($service) ? ($service->meta_title ?: $service->title . ' | Plazmasoft') : ucwords(str_replace('-', ' ', $slug)) . ' | Plazmasoft')
@section('meta_description', isset($service) ? ($service->meta_description ?: $service->excerpt) : '')
@section('canonical', url('/services/' . $slug))

@section('jsonld')
@php
$serviceTitle = isset($service) ? $service->title : ucwords(str_replace('-', ' ', $slug));
$serviceDesc  = isset($service) ? ($service->meta_description ?: $service->excerpt) : '';
@endphp
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "{{ e($serviceTitle) }}",
    "name": "{{ e($serviceTitle) }}",
    "description": "{{ e($serviceDesc) }}",
    "provider": {
        "@type": "Organization",
        "name": "Plazmasoft",
        "url": "{{ url('/') }}"
    },
    "url": "{{ url('/services/' . $slug) }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/services') }}" },
        { "@type": "ListItem", "position": 3, "name": "{{ e($serviceTitle) }}", "item": "{{ url('/services/' . $slug) }}" }
    ]
}
</script>
@endsection

@section('content')

@if(isset($service))

{{-- DB-driven page --}}
<section class="section gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-3xl text-center">
            @if($service->icon)<span class="text-5xl">{{ $service->icon }}</span>@endif
            <h1 class="mt-4 section-title text-balance">{{ $service->title }}</h1>
            @if($service->tagline)
            <p class="section-subtitle mx-auto max-w-2xl">{{ $service->tagline }}</p>
            @endif
            <div class="mt-8">
                <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start Your Project</a>
            </div>
        </div>
    </div>
</section>

@if($service->description)
<section class="section bg-white">
    <div class="container-site">
        <div class="mx-auto max-w-3xl prose prose-lg prose-gray">
            {!! $service->description !!}
        </div>
    </div>
</section>
@endif

@if(is_array($service->features) && count($service->features))
<section class="section bg-gray-50">
    <div class="container-site">
        <h2 class="section-title text-center">What we deliver</h2>
        <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($service->features as $feat)
            <div class="card-bordered">
                <p class="font-display font-semibold text-gray-900">{{ is_array($feat) ? ($feat['title'] ?? $feat) : $feat }}</p>
                @if(is_array($feat) && isset($feat['description']))
                <p class="mt-1 text-sm text-gray-500">{{ $feat['description'] }}</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if(is_array($service->faq) && count($service->faq))
<section class="section bg-white" x-data="{ open: null }">
    <div class="container-site">
        <h2 class="section-title text-center">FAQs</h2>
        <div class="mt-10 mx-auto max-w-2xl space-y-3">
            @foreach($service->faq as $i => $faq)
            <div class="rounded-xl border border-gray-100 bg-white">
                <button @click="open = open === {{ $i }} ? null : {{ $i }}" class="flex w-full items-center justify-between px-5 py-4 text-left">
                    <span class="font-medium text-gray-900">{{ is_array($faq) ? $faq['question'] : $faq }}</span>
                    <svg class="h-5 w-5 text-brand-400 transition-transform" :class="open === {{ $i }} ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === {{ $i }}" x-transition class="px-5 pb-4 text-sm text-gray-500">
                    {{ is_array($faq) ? $faq['answer'] : '' }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@else

{{-- Static fallback page by slug --}}
@php
$staticContent = [
    'web-app-development' => [
        'icon' => '🌐',
        'title' => 'Web App Development',
        'tagline' => 'We build Laravel and React applications that handle real traffic, real data, and real business logic.',
        'description' => 'From SaaS platforms to internal tools, we architect and build web applications that are fast, secure, and maintainable. Our stack centers on Laravel for the backend and Tailwind + Alpine.js or React for the frontend.',
        'features' => ['Laravel + React / Next.js', 'REST and GraphQL APIs', 'Multi-tenant SaaS', 'Admin dashboards', 'E-commerce and payments', 'Real-time features with WebSockets'],
    ],
    'mobile-app-development' => [
        'icon' => '📱',
        'title' => 'Mobile App Development',
        'tagline' => 'Cross-platform Flutter apps for iOS and Android that users actually keep on their phones.',
        'description' => 'We build Flutter applications that deliver a native feel across iOS and Android from a single codebase. From consumer apps to enterprise tools, we handle the full cycle from Figma to App Store.',
        'features' => ['Flutter (iOS + Android)', 'Push notifications', 'Offline-first architecture', 'Stripe and Razorpay payments', 'Play Store + App Store submission', 'OTA updates'],
    ],
    'ai-integration' => [
        'icon' => '🤖',
        'title' => 'AI Integration',
        'tagline' => 'Gemini, GPT-4, Stable Diffusion, and custom LLM integrations wired directly into your product.',
        'description' => 'We integrate AI APIs into existing products and build AI-native features from the ground up. We have shipped AI-powered search, image generation, document analysis, and conversational interfaces.',
        'features' => ['Gemini and OpenAI API integration', 'Stable Diffusion image generation', 'RAG (retrieval-augmented generation)', 'AI-powered search', 'Document processing and analysis', 'Custom fine-tuning pipelines'],
    ],
    'ui-ux-development' => [
        'icon' => '🎨',
        'title' => 'UI / UX Development',
        'tagline' => 'Figma-to-code that looks great, loads fast, and works on every device.',
        'description' => 'We take your Figma designs and build pixel-perfect, responsive frontends using Tailwind CSS and modern JavaScript. We also do design work when needed.',
        'features' => ['Figma-to-Tailwind implementation', 'Responsive layouts', 'Design system creation', 'Animation and micro-interactions', 'Accessibility (WCAG AA)', 'Performance optimization'],
    ],
    'mvp-development' => [
        'icon' => '🚀',
        'title' => 'MVP Development',
        'tagline' => 'Launch your idea in 6-8 weeks with a production-ready MVP, not a prototype.',
        'description' => 'We specialize in taking ideas from zero to live product quickly. Our MVP process is structured: one week of scoping, five to six weeks of development, one week of QA and launch.',
        'features' => ['Fixed-scope, fixed-timeline delivery', 'Production-ready from day one', 'Auth, payments, and admin included', 'Laravel + Flutter or React', 'Deployment on your infrastructure', 'Post-launch support'],
    ],
];
$content = $staticContent[$slug] ?? ['icon' => '🔧', 'title' => ucwords(str_replace('-', ' ', $slug)), 'tagline' => '', 'description' => '', 'features' => []];
@endphp

<section class="section gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-5xl">{{ $content['icon'] }}</span>
            <h1 class="mt-4 section-title text-balance">{{ $content['title'] }}</h1>
            <p class="section-subtitle mx-auto max-w-2xl">{{ $content['tagline'] }}</p>
            <div class="mt-8">
                <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start Your Project</a>
            </div>
        </div>
    </div>
</section>

@if($content['description'])
<section class="section bg-white">
    <div class="container-site">
        <div class="mx-auto max-w-3xl">
            <p class="text-lg text-gray-600 leading-relaxed">{{ $content['description'] }}</p>
        </div>
    </div>
</section>
@endif

@if(count($content['features']))
<section class="section bg-gray-50">
    <div class="container-site">
        <h2 class="section-title text-center">What we deliver</h2>
        <div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach($content['features'] as $feat)
            <div class="flex items-center gap-3 rounded-xl border border-gray-100 bg-white p-4">
                <svg class="h-5 w-5 text-brand-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                <span class="text-sm font-medium text-gray-700">{{ $feat }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endif

{{-- CTA --}}
<section class="section bg-white">
    <div class="container-site text-center">
        <h2 class="section-title">Ready to start?</h2>
        <p class="section-subtitle">Tell us what you want to build. We reply within one business day.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start Your Project</a>
            <a href="{{ url('/portfolio') }}" class="btn-outline text-base px-8 py-4">See our work</a>
        </div>
    </div>
</section>

@endsection
