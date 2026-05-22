@extends('layouts.app')

@section('title', ($project->meta_title ?: $project->title . ' | Plazmasoft'))
@section('meta_description', $project->meta_description ?: $project->tagline)
@section('og_title', $project->title)
@section('og_description', $project->tagline)
@if($project->banner_image_path)
@section('og_image', asset('storage/' . $project->banner_image_path))
@endif

@section('content')

{{-- Hero --}}
<section class="section-sm gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-3xl">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <a href="{{ url('/portfolio') }}" class="hover:text-brand-500">Work</a>
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-gray-700">{{ $project->title }}</span>
            </div>
            @if($project->category)
            <span class="mt-4 badge-brand inline-flex">{{ $project->category->name }}</span>
            @endif
            <h1 class="mt-3 font-display text-4xl font-bold text-gray-900 md:text-5xl">{{ $project->title }}</h1>
            @if($project->tagline)
            <p class="mt-4 text-xl text-gray-500">{{ $project->tagline }}</p>
            @endif

            {{-- Meta row --}}
            <div class="mt-6 flex flex-wrap gap-6 text-sm text-gray-500">
                @if($project->client_name)
                <span><strong class="font-medium text-gray-700">Client:</strong> {{ $project->client_name }}</span>
                @endif
                @if($project->region)
                <span><strong class="font-medium text-gray-700">Region:</strong> {{ $project->region }}</span>
                @endif
                @if($project->industry)
                <span><strong class="font-medium text-gray-700">Industry:</strong> {{ $project->industry }}</span>
                @endif
                @if($project->duration_from)
                <span><strong class="font-medium text-gray-700">Timeline:</strong> {{ $project->duration_from->format('M Y') }}{{ $project->duration_to ? ' to ' . $project->duration_to->format('M Y') : '' }}</span>
                @endif
            </div>

            {{-- Links --}}
            <div class="mt-6 flex flex-wrap gap-3">
                @if($project->live_url)
                <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer" class="btn-primary text-sm">
                    View live
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                @endif
                @if($project->playstore_url)
                <a href="{{ $project->playstore_url }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-sm">Play Store</a>
                @endif
                @if($project->appstore_url)
                <a href="{{ $project->appstore_url }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-sm">App Store</a>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- Banner image --}}
@if($project->banner_image_path)
<div class="bg-gray-50">
    <div class="container-site py-8">
        <div class="overflow-hidden rounded-2xl shadow-card-hover">
            <img src="{{ asset('storage/' . $project->banner_image_path) }}" alt="{{ $project->title }}" class="w-full object-cover">
        </div>
    </div>
</div>
@endif

{{-- Content --}}
<section class="section bg-white">
    <div class="container-site">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2 space-y-10">

                @if($project->problem)
                <div>
                    <h2 class="font-display text-xl font-bold text-gray-900">The Problem</h2>
                    <div class="mt-4 prose prose-gray max-w-none text-gray-600">
                        {!! nl2br(e($project->problem)) !!}
                    </div>
                </div>
                @endif

                @if($project->solution)
                <div>
                    <h2 class="font-display text-xl font-bold text-gray-900">Our Solution</h2>
                    <div class="mt-4 prose prose-gray max-w-none text-gray-600">
                        {!! nl2br(e($project->solution)) !!}
                    </div>
                </div>
                @endif

                @if($project->outcome)
                <div>
                    <h2 class="font-display text-xl font-bold text-gray-900">The Outcome</h2>
                    <div class="mt-4 prose prose-gray max-w-none text-gray-600">
                        {!! nl2br(e($project->outcome)) !!}
                    </div>
                </div>
                @endif

                {{-- Gallery --}}
                @if($project->images->count())
                <div>
                    <h2 class="font-display text-xl font-bold text-gray-900">Screenshots</h2>
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        @foreach($project->images as $img)
                        <img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->caption ?: $project->title }}" class="rounded-xl shadow-card w-full object-cover">
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

            {{-- Sidebar --}}
            <div class="space-y-6">
                @if(is_array($project->tech_stack) && count($project->tech_stack))
                <div class="card">
                    <h3 class="font-display text-sm font-semibold uppercase tracking-widest text-gray-500">Tech Stack</h3>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach($project->tech_stack as $tech)
                        <span class="badge-gray">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Testimonial --}}
                @if($project->testimonials->count())
                @php $t = $project->testimonials->first() @endphp
                <div class="card border-l-4 border-brand-400">
                    <blockquote class="text-sm text-gray-600 italic">"{{ $t->quote }}"</blockquote>
                    <p class="mt-3 text-sm font-semibold text-gray-900">{{ $t->author_name }}</p>
                    <p class="text-xs text-gray-500">{{ $t->author_role }}@if($t->author_company), {{ $t->author_company }}@endif</p>
                </div>
                @endif

                <div class="card bg-brand-50 border-0">
                    <h3 class="font-display text-base font-semibold text-gray-900">Want something like this?</h3>
                    <p class="mt-2 text-sm text-gray-600">Tell us about your project and we will reply within one business day.</p>
                    <a href="{{ url('/contact') }}" class="mt-4 btn-primary w-full justify-center text-sm">Start a conversation</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
