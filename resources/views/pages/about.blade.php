@extends('layouts.app')

@section('title', 'About Plazmasoft | Founder-Led Web and Mobile App Studio')
@section('meta_description', 'We are a founder-led software studio in India building production-grade web apps, mobile apps, and AI integrations. Founded in ' . ($settings['founded_year'] ?? '2022') . '.')

@section('content')

{{-- Hero --}}
<section class="section gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-3xl text-center">
            <p class="section-label">Our Story</p>
            <h1 class="section-title mt-2 text-balance">Built by a founder who ships.</h1>
            <p class="section-subtitle mx-auto max-w-2xl">
                Plazmasoft is a lean, founder-led studio. No layers of account managers between you and the developer. Just direct communication, honest timelines, and code that ships.
            </p>
        </div>
    </div>
</section>

{{-- Founder section --}}
<section class="section bg-white">
    <div class="container-site">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="section-label">Who We Are</p>
                <h2 class="section-title mt-2">Rajnandan Kushwaha, Founder</h2>
                <div class="mt-6 space-y-4 text-gray-600">
                    <p>
                        I started Plazmasoft in {{ $settings['founded_year'] ?? '2022' }} after years of building production apps for clients across fintech, logistics, agritech, and e-commerce. I got tired of watching good ideas fail because of bloated agencies and disconnected teams.
                    </p>
                    <p>
                        The studio is built around one principle: the person writing the code should also be the person talking to the client. That means faster decisions, fewer misunderstandings, and software that actually matches what you asked for.
                    </p>
                    <p>
                        We are registered as <strong>{{ $settings['legal_name'] ?? 'Kushwaha Webformat Private Limited' }}</strong> and operate out of Mumbai and Patna, India.
                    </p>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    @if(!empty($settings['linkedin_url']))
                    <a href="{{ $settings['linkedin_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-sm">
                        Connect on LinkedIn
                    </a>
                    @endif
                    @if(!empty($settings['github_url']))
                    <a href="{{ $settings['github_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-ghost text-sm">
                        GitHub
                    </a>
                    @endif
                </div>
            </div>
            <div class="flex justify-center">
                <div class="relative">
                    <div class="h-72 w-72 overflow-hidden rounded-2xl bg-gradient-to-br from-brand-100 to-brand-200 shadow-card-hover lg:h-96 lg:w-96">
                        <img src="{{ asset('images/logo.png') }}" alt="Plazmasoft" class="h-full w-full object-contain p-12 opacity-30">
                    </div>
                    <div class="absolute -bottom-4 -right-4 rounded-xl bg-white p-4 shadow-card">
                        <p class="font-display text-2xl font-bold text-brand-500">{{ $settings['projects_delivered'] ?? '18' }}+</p>
                        <p class="text-xs text-gray-500">Projects shipped</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="section-sm bg-gray-50">
    <div class="container-site">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div class="text-center">
                <p class="font-display text-4xl font-bold text-brand-500">{{ $settings['founded_year'] ?? '2022' }}</p>
                <p class="mt-1 text-sm text-gray-500">Founded</p>
            </div>
            <div class="text-center">
                <p class="font-display text-4xl font-bold text-brand-500">{{ $settings['projects_delivered'] ?? '18' }}+</p>
                <p class="mt-1 text-sm text-gray-500">Projects</p>
            </div>
            <div class="text-center">
                <p class="font-display text-4xl font-bold text-brand-500">{{ $settings['happy_clients'] ?? '15' }}+</p>
                <p class="mt-1 text-sm text-gray-500">Clients</p>
            </div>
            <div class="text-center">
                <p class="font-display text-4xl font-bold text-brand-500">{{ $settings['industries_served'] ?? '7' }}+</p>
                <p class="mt-1 text-sm text-gray-500">Industries</p>
            </div>
        </div>
    </div>
</section>

{{-- Values --}}
<section class="section bg-white">
    <div class="container-site">
        <div class="text-center">
            <p class="section-label">How We Work</p>
            <h2 class="section-title mt-2">The Plazmasoft way</h2>
        </div>
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
            @php
            $values = [
                ['icon' => '🎯', 'title' => 'Direct communication', 'desc' => 'You talk to the person building your product. No account managers, no relay chains, no lost context.'],
                ['icon' => '🏗', 'title' => 'Production-first mindset', 'desc' => 'We build for scale, security, and maintainability from day one. Not just for the demo.'],
                ['icon' => '📋', 'title' => 'Honest timelines', 'desc' => 'We scope projects carefully and only promise what we can deliver. No surprises at launch.'],
            ];
            @endphp
            @foreach($values as $val)
            <div class="card-bordered text-center">
                <span class="text-4xl">{{ $val['icon'] }}</span>
                <h3 class="mt-4 font-display text-lg font-semibold text-gray-900">{{ $val['title'] }}</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
@if($testimonials->count())
<section class="section bg-gray-50">
    <div class="container-site">
        <div class="text-center">
            <p class="section-label">Client Stories</p>
            <h2 class="section-title mt-2">What clients say</h2>
        </div>
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach($testimonials as $testimonial)
            <div class="card">
                <blockquote class="text-sm text-gray-600 leading-relaxed italic">"{{ $testimonial->quote }}"</blockquote>
                <div class="mt-4 flex items-center gap-3">
                    @if($testimonial->author_avatar_path)
                    <img src="{{ asset('storage/' . $testimonial->author_avatar_path) }}" alt="{{ $testimonial->author_name }}" class="h-10 w-10 rounded-full object-cover">
                    @else
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-brand-100 text-sm font-semibold text-brand-600">{{ substr($testimonial->author_name, 0, 1) }}</div>
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

{{-- CTA --}}
<section class="section bg-white">
    <div class="container-site text-center">
        <h2 class="section-title">Ready to build something?</h2>
        <p class="section-subtitle mx-auto max-w-xl">Tell us what you are working on. We reply within one business day.</p>
        <div class="mt-8">
            <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">
                {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
            </a>
        </div>
    </div>
</section>

@endsection
