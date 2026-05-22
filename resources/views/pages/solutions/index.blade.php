@extends('layouts.app')

@section('title', 'Solutions | Plazmasoft')
@section('meta_description', 'Vertical-specific software solutions for fintech, fleet management, AI property visualization, and agritech.')

@section('content')

<section class="section gradient-hero">
    <div class="container-site text-center">
        <p class="section-label">Industry Solutions</p>
        <h1 class="section-title mt-2">Built for your vertical</h1>
        <p class="section-subtitle mx-auto max-w-xl">Deep expertise in specific industries means you spend less time explaining context and more time building.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="container-site">
        @if($solutions->count())
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            @foreach($solutions as $sol)
            <a href="{{ url('/solutions/' . $sol->slug) }}" class="card-bordered group">
                @if($sol->icon)<span class="text-4xl">{{ $sol->icon }}</span>@endif
                <h2 class="mt-4 font-display text-xl font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $sol->title }}</h2>
                @if($sol->tagline)<p class="mt-2 text-sm text-gray-500">{{ $sol->tagline }}</p>@endif
                <span class="mt-4 inline-flex items-center text-sm font-medium text-brand-500">Explore <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @else
        @php
        $staticSolutions = [
            ['icon' => '💳', 'title' => 'Fintech Development', 'tagline' => 'Trading platforms, wallets, KYC flows, and payment integrations.', 'href' => '/solutions/fintech-development'],
            ['icon' => '🚚', 'title' => 'Fleet Management', 'tagline' => 'Real-time GPS tracking, driver apps, and dispatch dashboards.', 'href' => '/solutions/fleet-management'],
            ['icon' => '🏠', 'title' => 'AI Property Visualization', 'tagline' => 'Stable Diffusion-powered staging and virtual tours for real estate.', 'href' => '/solutions/ai-property-visualization'],
            ['icon' => '🌾', 'title' => 'Agritech Development', 'tagline' => 'Crop monitoring, marketplace apps, and advisory platforms for farmers.', 'href' => '/solutions/agritech-development'],
        ];
        @endphp
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            @foreach($staticSolutions as $sol)
            <a href="{{ $sol['href'] }}" class="card-bordered group">
                <span class="text-4xl">{{ $sol['icon'] }}</span>
                <h2 class="mt-4 font-display text-xl font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $sol['title'] }}</h2>
                <p class="mt-2 text-sm text-gray-500">{{ $sol['tagline'] }}</p>
                <span class="mt-4 inline-flex items-center text-sm font-medium text-brand-500">Explore <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @endif
    </div>
</section>

@endsection
