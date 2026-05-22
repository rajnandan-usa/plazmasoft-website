@extends('layouts.app')

@section('title', 'Blog | Plazmasoft')
@section('meta_description', 'Practical articles on Laravel, Flutter, AI integration, and building software products that ship.')

@section('content')

<section class="section gradient-hero">
    <div class="container-site text-center">
        <p class="section-label">Insights</p>
        <h1 class="section-title mt-2">The Plazmasoft blog</h1>
        <p class="section-subtitle mx-auto max-w-xl">Practical articles on building web apps, mobile apps, and AI-powered products.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="container-site">

        @if($categories->count())
        <div class="flex flex-wrap gap-2 mb-10">
            <a href="{{ url('/blog') }}" class="rounded-full bg-brand-400 px-4 py-1.5 text-sm font-medium text-white">All</a>
            @foreach($categories as $cat)
            <a href="{{ url('/blog?category=' . $cat->slug) }}" class="rounded-full bg-gray-100 px-4 py-1.5 text-sm font-medium text-gray-600 hover:bg-gray-200 transition">{{ $cat->name }}</a>
            @endforeach
        </div>
        @endif

        @if($posts->count())
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $post)
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
                    <h2 class="mt-1 font-display text-lg font-semibold text-gray-900 group-hover:text-brand-500 transition-colors">{{ $post->title }}</h2>
                    @if($post->excerpt)
                    <p class="mt-2 text-sm text-gray-500 line-clamp-2">{{ $post->excerpt }}</p>
                    @endif
                    <div class="mt-3 flex items-center gap-3 text-xs text-gray-400">
                        @if($post->published_at)
                        <span>{{ $post->published_at->format('M j, Y') }}</span>
                        @endif
                        <span>&middot;</span>
                        <span>{{ $post->reading_time ?? 5 }} min read</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>
        @else
        <div class="py-20 text-center text-gray-400">
            <p>Articles coming soon. Check back shortly.</p>
        </div>
        @endif
    </div>
</section>

@endsection
