@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title . ' | Plazmasoft Blog'))
@section('meta_description', $post->meta_description ?: $post->excerpt)
@section('og_title', $post->title)
@section('og_description', $post->excerpt)
@if($post->og_image_path || $post->cover_image_path)
@section('og_image', asset('storage/' . ($post->og_image_path ?: $post->cover_image_path)))
@endif
@section('canonical', url('/blog/' . $post->slug))

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ e($post->title) }}",
    "description": "{{ e($post->excerpt) }}",
    "url": "{{ url('/blog/' . $post->slug) }}",
    "datePublished": "{{ $post->published_at?->toIso8601String() }}",
    "dateModified": "{{ $post->updated_at->toIso8601String() }}",
    @if($post->cover_image_path)"image": "{{ asset('storage/' . $post->cover_image_path) }}",@endif
    "author": {
        "@type": "Organization",
        "name": "Plazmasoft",
        "url": "{{ url('/') }}"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Plazmasoft",
        "logo": { "@type": "ImageObject", "url": "{{ asset('images/logo.png') }}" }
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ url('/blog') }}" },
        { "@type": "ListItem", "position": 3, "name": "{{ e($post->title) }}", "item": "{{ url('/blog/' . $post->slug) }}" }
    ]
}
</script>
@endsection

@section('content')

<article>
    <header class="section-sm gradient-hero">
        <div class="container-site">
            <div class="mx-auto max-w-3xl">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <a href="{{ url('/blog') }}" class="hover:text-brand-500">Blog</a>
                    @if($post->category)
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    <span>{{ $post->category->name }}</span>
                    @endif
                </div>
                <h1 class="mt-4 font-display text-3xl font-bold text-gray-900 md:text-4xl text-balance">{{ $post->title }}</h1>
                @if($post->excerpt)
                <p class="mt-4 text-lg text-gray-500">{{ $post->excerpt }}</p>
                @endif
                <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-gray-400">
                    @if($post->author)
                    <span>By <strong class="text-gray-600">{{ $post->author->name }}</strong></span>
                    @endif
                    @if($post->published_at)
                    <span>&middot; {{ $post->published_at->format('F j, Y') }}</span>
                    @endif
                    <span>&middot; {{ $post->reading_time ?? 5 }} min read</span>
                    <span>&middot; {{ number_format($post->view_count) }} views</span>
                </div>
                @if($post->tags->count())
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach($post->tags as $tag)
                    <span class="badge-gray">{{ $tag->name }}</span>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </header>

    @if($post->cover_image_path)
    <div class="bg-gray-50 py-8">
        <div class="container-site">
            <div class="mx-auto max-w-3xl overflow-hidden rounded-2xl shadow-card">
                <img src="{{ asset('storage/' . $post->cover_image_path) }}" alt="{{ $post->title }}" class="w-full object-cover">
            </div>
        </div>
    </div>
    @endif

    <div class="py-12 bg-white">
        <div class="container-site">
            <div class="mx-auto max-w-3xl">
                <div class="prose prose-lg prose-gray max-w-none
                    prose-headings:font-display prose-headings:font-bold
                    prose-a:text-brand-500 prose-a:no-underline hover:prose-a:underline
                    prose-code:text-brand-600 prose-code:bg-brand-50 prose-code:rounded prose-code:px-1">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
</article>

{{-- Related posts --}}
@if($related->count())
<section class="section bg-gray-50">
    <div class="container-site">
        <h2 class="font-display text-xl font-bold text-gray-900">Related articles</h2>
        <div class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach($related as $rp)
            <a href="{{ url('/blog/' . $rp->slug) }}" class="group block">
                @if($rp->cover_image_path)
                <div class="aspect-video overflow-hidden rounded-xl bg-gray-100">
                    <img src="{{ asset('storage/' . $rp->cover_image_path) }}" alt="{{ $rp->title }}" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                @else
                <div class="aspect-video rounded-xl bg-gradient-to-br from-brand-50 to-orange-100"></div>
                @endif
                <h3 class="mt-3 font-display text-base font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $rp->title }}</h3>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- CTA --}}
<section class="section bg-white">
    <div class="container-site text-center">
        <h2 class="section-title">Building something similar?</h2>
        <p class="section-subtitle">Tell us about your project. We reply within one business day.</p>
        <div class="mt-8">
            <a href="{{ url('/contact') }}" class="btn-primary text-base px-8 py-4">Start a conversation</a>
        </div>
    </div>
</section>

@endsection
