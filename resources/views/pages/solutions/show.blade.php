@extends('layouts.app')

@section('title', isset($solution) ? ($solution->meta_title ?: $solution->title . ' | Plazmasoft') : ucwords(str_replace('-', ' ', $slug)) . ' | Plazmasoft')
@section('canonical', url('/solutions/' . $slug))

@section('content')

@if(isset($solution))

<section class="section gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-3xl text-center">
            @if($solution->icon)<span class="text-5xl">{{ $solution->icon }}</span>@endif
            <h1 class="mt-4 section-title">{{ $solution->title }}</h1>
            @if($solution->tagline)<p class="section-subtitle mx-auto max-w-2xl">{{ $solution->tagline }}</p>@endif
            <div class="mt-8"><a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start Your Project</a></div>
        </div>
    </div>
</section>

@if($solution->description)
<section class="section bg-white">
    <div class="container-site mx-auto max-w-3xl prose prose-lg prose-gray">{!! $solution->description !!}</div>
</section>
@endif

@if(is_array($solution->features) && count($solution->features))
<section class="section bg-gray-50">
    <div class="container-site">
        <h2 class="section-title text-center">What we build</h2>
        <div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach($solution->features as $feat)
            <div class="flex items-center gap-3 rounded-xl border border-gray-100 bg-white p-4">
                <svg class="h-5 w-5 text-brand-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                <span class="text-sm font-medium text-gray-700">{{ is_array($feat) ? ($feat['title'] ?? $feat) : $feat }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@else

{{-- Static fallback --}}
@php
$staticContent = [
    'fintech-development' => [
        'icon' => '💳',
        'title' => 'Fintech Development',
        'tagline' => 'Trading platforms, wallets, KYC flows, and payment integrations built for compliance.',
        'description' => 'We have built fintech products for trade finance, investment tracking, and digital wallets. We understand the compliance requirements, the API integrations, and the security architecture that fintech demands.',
        'features' => ['Trade finance platforms', 'Digital wallets and UPI', 'KYC and AML flows', 'Stripe, Razorpay, and PayU integrations', 'Portfolio and investment dashboards', 'Real-time market data feeds'],
    ],
    'fleet-management' => [
        'icon' => '🚚',
        'title' => 'Fleet Management',
        'tagline' => 'Real-time GPS tracking, driver apps, and dispatch dashboards that reduce operational costs.',
        'description' => 'Our fleet management software covers the full logistics stack: driver mobile apps, dispatcher dashboards, real-time GPS, route optimization, and reporting.',
        'features' => ['Real-time GPS tracking', 'Driver mobile app (Flutter)', 'Dispatch and booking dashboard', 'Route optimization', 'Fuel and maintenance tracking', 'Customer tracking links'],
    ],
    'ai-property-visualization' => [
        'icon' => '🏠',
        'title' => 'AI Property Visualization',
        'tagline' => 'Stable Diffusion-powered virtual staging and property visualization for real estate.',
        'description' => 'We build AI-powered visualization tools for real estate: virtual staging, facade redesign, interior renovation previews, and neighborhood rendering.',
        'features' => ['Stable Diffusion virtual staging', 'Before and after interior renders', 'Facade redesign AI', '360-degree virtual tours', 'CRM integration', 'Bulk image processing'],
    ],
    'agritech-development' => [
        'icon' => '🌾',
        'title' => 'Agritech Development',
        'tagline' => 'Crop monitoring, farmer marketplace apps, and advisory platforms for Indian agriculture.',
        'description' => 'We have built agritech products for crop advisory, farm-to-market commerce, and government scheme tracking. We understand the constraints of rural connectivity and low-end devices.',
        'features' => ['Farmer advisory apps', 'Crop health monitoring', 'Farm-to-market marketplace', 'SMS and WhatsApp notifications', 'Offline-first Flutter apps', 'Government scheme integration'],
    ],
];
$content = $staticContent[$slug] ?? ['icon' => '🔧', 'title' => ucwords(str_replace('-', ' ', $slug)), 'tagline' => '', 'description' => '', 'features' => []];
@endphp

<section class="section gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-5xl">{{ $content['icon'] }}</span>
            <h1 class="mt-4 section-title">{{ $content['title'] }}</h1>
            <p class="section-subtitle mx-auto max-w-2xl">{{ $content['tagline'] }}</p>
            <div class="mt-8"><a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start Your Project</a></div>
        </div>
    </div>
</section>

@if($content['description'])
<section class="section bg-white">
    <div class="container-site mx-auto max-w-3xl">
        <p class="text-lg text-gray-600 leading-relaxed">{{ $content['description'] }}</p>
    </div>
</section>
@endif

@if(count($content['features']))
<section class="section bg-gray-50">
    <div class="container-site">
        <h2 class="section-title text-center">What we build</h2>
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

<section class="section bg-white">
    <div class="container-site text-center">
        <h2 class="section-title">Have a project in this space?</h2>
        <p class="section-subtitle">Tell us about it. We reply within one business day.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start a conversation</a>
            <a href="{{ url('/portfolio') }}" class="btn-outline text-base px-8 py-4">See related work</a>
        </div>
    </div>
</section>

@endsection
