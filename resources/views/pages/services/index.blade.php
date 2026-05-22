@extends('layouts.app')

@section('title', 'Services | Plazmasoft')
@section('meta_description', 'Web app development, mobile app development, AI integration, UI/UX, and MVP development services from a founder-led studio in India.')

@section('content')

<section class="section gradient-hero">
    <div class="container-site text-center">
        <p class="section-label">What We Do</p>
        <h1 class="section-title mt-2">Services</h1>
        <p class="section-subtitle mx-auto max-w-xl">Production-grade software delivered by the person who builds it.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="container-site">
        @if($services->count())
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($services as $svc)
            <a href="{{ url('/services/' . $svc->slug) }}" class="card-bordered group">
                @if($svc->icon)
                <span class="text-4xl">{{ $svc->icon }}</span>
                @endif
                <h2 class="mt-4 font-display text-xl font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $svc->title }}</h2>
                @if($svc->tagline)
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $svc->tagline }}</p>
                @endif
                <span class="mt-4 inline-flex items-center text-sm font-medium text-brand-500">
                    Learn more
                    <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </span>
            </a>
            @endforeach
        </div>
        @else
        {{-- Static fallback while DB is empty --}}
        @php
        $staticServices = [
            ['icon' => '🌐', 'title' => 'Web App Development', 'tagline' => 'Laravel and React applications built for scale.', 'href' => '/services/web-app-development'],
            ['icon' => '📱', 'title' => 'Mobile App Development', 'tagline' => 'Cross-platform Flutter apps for iOS and Android.', 'href' => '/services/mobile-app-development'],
            ['icon' => '🤖', 'title' => 'AI Integration', 'tagline' => 'Gemini, GPT-4, Stable Diffusion wired into your product.', 'href' => '/services/ai-integration'],
            ['icon' => '🎨', 'title' => 'UI / UX Development', 'tagline' => 'Figma-to-code that looks great on every device.', 'href' => '/services/ui-ux-development'],
            ['icon' => '🚀', 'title' => 'MVP Development', 'tagline' => 'Launch your idea in 6-8 weeks, production-ready.', 'href' => '/services/mvp-development'],
        ];
        @endphp
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($staticServices as $svc)
            <a href="{{ $svc['href'] }}" class="card-bordered group">
                <span class="text-4xl">{{ $svc['icon'] }}</span>
                <h2 class="mt-4 font-display text-xl font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $svc['title'] }}</h2>
                <p class="mt-2 text-sm text-gray-500">{{ $svc['tagline'] }}</p>
                <span class="mt-4 inline-flex items-center text-sm font-medium text-brand-500">Learn more <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @endif
    </div>
</section>

@endsection
