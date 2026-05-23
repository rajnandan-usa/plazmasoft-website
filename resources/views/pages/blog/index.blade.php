@extends('layouts.app')

@section('title', 'Blog | Plazmasoft')
@section('meta_description', 'Practical articles on Laravel, Flutter, AI integration, and building software products that ship.')

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.cat-wrap{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:3rem}
.cat-chip{padding:.4rem 1.1rem;border-radius:999px;font-size:.8rem;font-weight:600;text-decoration:none;border:1px solid var(--border);background:transparent;color:var(--t2);transition:all .2s;display:inline-block}
.cat-chip:hover,.cat-chip.active{background:var(--orange);border-color:var(--orange);color:#fff}
.blog-grid{display:grid;grid-template-columns:1fr;gap:1.75rem}
@media(min-width:640px){.blog-grid{grid-template-columns:repeat(2,1fr)}}
@media(min-width:1024px){.blog-grid{grid-template-columns:repeat(3,1fr)}}
.blog-card{text-decoration:none;display:block}
.blog-img{aspect-ratio:16/9;overflow:hidden;border-radius:14px;margin-bottom:1rem;background:var(--bg-alt);border:1px solid var(--border)}
.blog-img img{width:100%;height:100%;object-fit:cover;transition:transform .4s}
.blog-card:hover .blog-img img{transform:scale(1.05)}
.blog-img-placeholder{width:100%;height:100%;background:linear-gradient(135deg,rgba(249,115,22,.08),rgba(249,115,22,.03));display:flex;align-items:center;justify-content:center}
.blog-cat{font-size:.68rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--orange);margin-bottom:.4rem;display:block}
.blog-title{font-size:1rem;font-weight:700;color:var(--t1);line-height:1.35;margin-bottom:.5rem;transition:color .2s}
.blog-card:hover .blog-title{color:var(--orange-l)}
.blog-excerpt{font-size:.82rem;color:var(--t2);line-height:1.6;margin-bottom:.75rem;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
.blog-meta{display:flex;align-items:center;gap:.5rem;font-size:.75rem;color:var(--t3)}
.blog-sep{opacity:.4}
.empty-state{text-align:center;padding:5rem 2rem}
.empty-state p{font-size:1rem;color:var(--t3);margin-top:.75rem}
.pagination-wrap{margin-top:3rem;display:flex;justify-content:center}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:8rem 0 4rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-6rem;left:50%;transform:translateX(-50%);width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;text-align:center;max-width:640px;margin:0 auto">
        <span class="eyebrow sr">Insights</span>
        <h1 class="dh2 sr" style="margin-top:.9rem">The Plazmasoft<br><span class="grad-t">blog.</span></h1>
        <p class="dlead sr" style="margin-top:1.1rem">Practical articles on building web apps, mobile apps, and AI-powered products. No hype — just what actually works.</p>
    </div>
</section>

{{-- POSTS --}}
<section class="ps" style="background:var(--bg);padding-top:0">
    <div class="w">

        @if($categories->count())
        <div class="cat-wrap sr">
            @php $activeCategory = request('category') @endphp
            <a href="{{ url('/blog') }}" class="cat-chip {{ !$activeCategory ? 'active' : '' }}">All</a>
            @foreach($categories as $cat)
            <a href="{{ url('/blog?category=' . $cat->slug) }}" class="cat-chip {{ $activeCategory === $cat->slug ? 'active' : '' }}">{{ $cat->name }}</a>
            @endforeach
        </div>
        @endif

        @if($posts->count())
        <div class="blog-grid">
            @foreach($posts as $post)
            <a href="{{ url('/blog/' . $post->slug) }}" class="blog-card sr">
                <div class="blog-img">
                    @if($post->cover_image_path)
                    <img src="{{ asset('storage/' . $post->cover_image_path) }}" alt="{{ $post->title }}">
                    @else
                    <div class="blog-img-placeholder">
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color:rgba(249,115,22,.3)"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    @endif
                </div>
                @if($post->category)
                <span class="blog-cat">{{ $post->category->name }}</span>
                @endif
                <h2 class="blog-title">{{ $post->title }}</h2>
                @if($post->excerpt)
                <p class="blog-excerpt">{{ $post->excerpt }}</p>
                @endif
                <div class="blog-meta">
                    @if($post->published_at)
                    <span>{{ $post->published_at->format('M j, Y') }}</span>
                    <span class="blog-sep">&middot;</span>
                    @endif
                    <span>{{ $post->reading_time ?? 5 }} min read</span>
                </div>
            </a>
            @endforeach
        </div>

        @if($posts->hasPages())
        <div class="pagination-wrap sr">
            {{ $posts->links() }}
        </div>
        @endif

        @else
        <div class="empty-state sr">
            <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24" style="color:var(--t3);margin:0 auto"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p>Articles coming soon. Check back shortly.</p>
        </div>
        @endif
    </div>
</section>

{{-- NEWSLETTER / CTA --}}
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w" style="text-align:center;max-width:580px;margin:0 auto">
        <div class="sr">
            <span class="eyebrow" style="justify-content:center">Building something?</span>
            <h2 class="dh2" style="margin-top:.75rem">Let's work together.</h2>
            <p class="dlead" style="margin-top:.75rem">We build web apps, mobile apps, and AI-powered products. Tell us what you want to ship.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start a Project</a>
                <a href="{{ url('/services') }}" class="bghost">View Services</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const g = document.getElementById('cursorGlow2');
    if (g) document.addEventListener('mousemove', e => { g.style.left = e.clientX + 'px'; g.style.top = e.clientY + 'px'; });
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: .1 });
    document.querySelectorAll('.sr, .sg').forEach(el => io.observe(el));
});
</script>
@endsection
