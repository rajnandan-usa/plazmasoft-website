@extends('layouts.app')

@section('title', 'Portfolio | Plazmasoft Work')
@section('meta_description', 'Browse our portfolio of web apps, mobile apps, and AI integrations delivered for clients across fintech, fleet, agritech, and e-commerce.')

@section('content')

<section class="section gradient-hero">
    <div class="container-site text-center">
        <p class="section-label">Our Work</p>
        <h1 class="section-title mt-2">Projects we have shipped</h1>
        <p class="section-subtitle mx-auto max-w-2xl">{{ $projects->count() }} production-grade apps delivered across {{ $categories->count() }} categories.</p>
    </div>
</section>

<section class="section bg-white" x-data="{ active: 'all' }">
    <div class="container-site">

        {{-- Filter chips --}}
        @if($categories->count())
        <div class="flex flex-wrap gap-2 justify-center mb-10">
            <button @click="active = 'all'"
                :class="active === 'all' ? 'bg-brand-400 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                class="rounded-full px-4 py-1.5 text-sm font-medium transition">
                All
            </button>
            @foreach($categories as $cat)
            <button @click="active = '{{ $cat->slug }}'"
                :class="active === '{{ $cat->slug }}' ? 'bg-brand-400 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                class="rounded-full px-4 py-1.5 text-sm font-medium transition">
                {{ $cat->name }}
            </button>
            @endforeach
        </div>
        @endif

        @if($projects->count())
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($projects as $project)
            <div x-show="active === 'all' || active === '{{ $project->category?->slug ?? '' }}'" x-transition>
                <a href="{{ url('/portfolio/' . $project->slug) }}" class="group block overflow-hidden rounded-2xl bg-white shadow-card hover:shadow-card-hover transition-shadow">
                    @if($project->banner_image_path)
                    <div class="aspect-video overflow-hidden bg-gray-100">
                        <img src="{{ asset('storage/' . $project->banner_image_path) }}" alt="{{ $project->title }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    @else
                    <div class="aspect-video bg-gradient-to-br from-brand-50 to-brand-100 flex items-center justify-center">
                        <span class="font-display text-4xl font-bold text-brand-200">{{ substr($project->title, 0, 2) }}</span>
                    </div>
                    @endif
                    <div class="p-5">
                        @if($project->category)
                        <span class="badge-brand">{{ $project->category->name }}</span>
                        @endif
                        <h2 class="mt-2 font-display text-lg font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $project->title }}</h2>
                        @if($project->client_name)
                        <p class="mt-0.5 text-xs text-gray-400">{{ $project->client_name }}@if($project->region) &middot; {{ $project->region }}@endif</p>
                        @endif
                        @if($project->tagline)
                        <p class="mt-2 text-sm text-gray-500">{{ $project->tagline }}</p>
                        @endif
                        @if(is_array($project->tech_stack) && count($project->tech_stack))
                        <div class="mt-3 flex flex-wrap gap-1">
                            @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                            <span class="badge-gray">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @else
        <div class="py-20 text-center text-gray-400">
            <p class="text-lg">Portfolio coming soon. Check back shortly.</p>
        </div>
        @endif
    </div>
</section>

@endsection
