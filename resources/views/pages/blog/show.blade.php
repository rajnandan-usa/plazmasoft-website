@extends('layouts.app')

@section('title', $post->meta_title ?: $post->title . ' | Plazmasoft Blog')
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
    "author": { "@type": "Organization", "name": "Plazmasoft", "url": "{{ url('/') }}" },
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

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.bc{display:flex;align-items:center;gap:.5rem;font-size:.75rem;color:var(--t3);margin-bottom:1.75rem}
.bc a{color:var(--t3);text-decoration:none;transition:color .2s}.bc a:hover{color:var(--t1)}
.bc-sep{opacity:.4}
.post-cat{display:inline-block;font-size:.65rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--orange);background:rgba(249,115,22,.1);border:1px solid rgba(249,115,22,.2);padding:.25rem .75rem;border-radius:999px;margin-bottom:1rem;text-decoration:none}
.post-title{font-size:clamp(1.75rem,4.5vw,3rem);font-weight:800;color:var(--t1);letter-spacing:-.03em;line-height:1.15;margin-bottom:1rem}
.post-excerpt{font-size:1.05rem;color:var(--t2);line-height:1.7;margin-bottom:1.5rem;max-width:640px}
.post-meta{display:flex;flex-wrap:wrap;align-items:center;gap:.5rem;font-size:.78rem;color:var(--t3)}
.post-meta-sep{opacity:.4}
.post-tags{display:flex;flex-wrap:wrap;gap:.4rem;margin-top:1.25rem}
.post-tag{font-size:.72rem;font-weight:500;padding:.25rem .7rem;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid var(--border);color:var(--t2)}
.cover-wrap{background:var(--bg-alt);border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:2.5rem 0}
.cover-img{max-width:860px;margin:0 auto;border-radius:20px;overflow:hidden;border:1px solid var(--border)}
.cover-img img{width:100%;display:block}
.article-layout{display:grid;grid-template-columns:1fr;gap:3rem}
@media(min-width:1024px){.article-layout{grid-template-columns:1fr 280px}}
/* Dark prose */
.dark-prose{font-size:.95rem;color:var(--t2);line-height:1.85}
.dark-prose h1,.dark-prose h2,.dark-prose h3,.dark-prose h4{color:var(--t1);font-weight:700;letter-spacing:-.02em;line-height:1.25;margin-top:2.25rem;margin-bottom:.75rem}
.dark-prose h2{font-size:1.45rem}
.dark-prose h3{font-size:1.15rem}
.dark-prose h4{font-size:1rem}
.dark-prose p{margin-bottom:1.25rem}
.dark-prose a{color:var(--orange-l);text-decoration:none;border-bottom:1px solid rgba(251,146,60,.3);transition:border-color .2s}
.dark-prose a:hover{border-color:var(--orange-l)}
.dark-prose strong{color:var(--t1);font-weight:700}
.dark-prose em{color:var(--t2);font-style:italic}
.dark-prose ul,.dark-prose ol{padding-left:1.5rem;margin-bottom:1.25rem;display:flex;flex-direction:column;gap:.4rem}
.dark-prose ul li{list-style:disc;color:var(--t2)}
.dark-prose ol li{list-style:decimal;color:var(--t2)}
.dark-prose blockquote{border-left:3px solid var(--orange);padding:.75rem 1.25rem;background:rgba(249,115,22,.05);border-radius:0 8px 8px 0;margin:1.5rem 0;color:var(--t2);font-style:italic}
.dark-prose code{font-family:'JetBrains Mono',monospace;font-size:.82em;background:rgba(255,255,255,.06);border:1px solid var(--border);border-radius:5px;padding:.15em .4em;color:var(--orange-l)}
.dark-prose pre{background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:12px;padding:1.25rem 1.5rem;overflow-x:auto;margin:1.5rem 0}
.dark-prose pre code{background:none;border:none;padding:0;font-size:.84rem;color:var(--t1)}
.dark-prose img{border-radius:12px;border:1px solid var(--border);max-width:100%;margin:1.5rem 0}
.dark-prose hr{border:none;border-top:1px solid var(--border);margin:2rem 0}
.dark-prose table{width:100%;border-collapse:collapse;margin:1.5rem 0;font-size:.875rem}
.dark-prose th{background:rgba(255,255,255,.05);color:var(--t1);font-weight:700;padding:.6rem 1rem;text-align:left;border:1px solid var(--border)}
.dark-prose td{padding:.6rem 1rem;border:1px solid var(--border);color:var(--t2)}
.toc-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:1.5rem;margin-bottom:1.25rem}
.toc-card h3{font-size:.68rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--t3);margin-bottom:1rem}
.toc-list{display:flex;flex-direction:column;gap:.4rem}
.toc-link{font-size:.82rem;color:var(--t2);text-decoration:none;line-height:1.4;transition:color .2s;padding:.15rem 0}
.toc-link:hover{color:var(--orange-l)}
.cta-sidebar{background:linear-gradient(135deg,rgba(249,115,22,.1),rgba(249,115,22,.04));border:1px solid rgba(249,115,22,.2);border-radius:16px;padding:1.75rem;text-align:center}
.cta-sidebar h3{font-size:.95rem;font-weight:700;color:var(--t1);margin-bottom:.5rem}
.cta-sidebar p{font-size:.8rem;color:var(--t2);margin-bottom:1.25rem;line-height:1.6}
.related-grid{display:grid;grid-template-columns:1fr;gap:1.25rem}
@media(min-width:640px){.related-grid{grid-template-columns:repeat(3,1fr)}}
.related-card{text-decoration:none;display:block}
.related-thumb{aspect-ratio:16/9;border-radius:12px;overflow:hidden;margin-bottom:.75rem;background:var(--bg-alt);border:1px solid var(--border)}
.related-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .35s}
.related-card:hover .related-thumb img{transform:scale(1.05)}
.related-placeholder{width:100%;height:100%;background:linear-gradient(135deg,rgba(249,115,22,.08),rgba(249,115,22,.03))}
.related-cat{font-size:.65rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--orange);display:block;margin-bottom:.3rem}
.related-title{font-size:.875rem;font-weight:600;color:var(--t1);line-height:1.35;transition:color .2s}
.related-card:hover .related-title{color:var(--orange-l)}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

<article>

    {{-- HEADER --}}
    <header style="background:var(--bg);padding:7rem 0 3.5rem;position:relative;overflow:hidden">
        <div style="position:absolute;top:-8rem;right:5%;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);pointer-events:none"></div>
        <div class="w" style="position:relative;z-index:1;max-width:800px;margin:0 auto">
            <nav class="bc sr">
                <a href="{{ url('/blog') }}">Blog</a>
                @if($post->category)
                <span class="bc-sep">/</span>
                <span>{{ $post->category->name }}</span>
                @endif
            </nav>
            @if($post->category)
            <a href="{{ url('/blog?category=' . $post->category->slug) }}" class="post-cat">{{ $post->category->name }}</a>
            @endif
            <h1 class="post-title sr">{{ $post->title }}</h1>
            @if($post->excerpt)
            <p class="post-excerpt sr">{{ $post->excerpt }}</p>
            @endif
            <div class="post-meta sr">
                @if($post->author)
                <span>By <strong style="color:var(--t1)">{{ $post->author->name }}</strong></span>
                <span class="post-meta-sep">&middot;</span>
                @endif
                @if($post->published_at)
                <span>{{ $post->published_at->format('F j, Y') }}</span>
                <span class="post-meta-sep">&middot;</span>
                @endif
                <span>{{ $post->reading_time ?? 5 }} min read</span>
                @if($post->view_count)
                <span class="post-meta-sep">&middot;</span>
                <span>{{ number_format($post->view_count) }} views</span>
                @endif
            </div>
            @if($post->tags->count())
            <div class="post-tags sr">
                @foreach($post->tags as $tag)
                <span class="post-tag">{{ $tag->name }}</span>
                @endforeach
            </div>
            @endif
        </div>
    </header>

    {{-- COVER IMAGE --}}
    @if($post->cover_image_path)
    <div class="cover-wrap">
        <div class="w">
            <div class="cover-img">
                <img src="{{ asset('storage/' . $post->cover_image_path) }}" alt="{{ $post->title }}">
            </div>
        </div>
    </div>
    @endif

    {{-- BODY --}}
    <section class="ps" style="background:var(--bg)">
        <div class="w" style="max-width:1100px;margin:0 auto">
            <div class="article-layout">

                {{-- ARTICLE CONTENT --}}
                <div class="dark-prose sr">
                    {!! $post->content !!}
                </div>

                {{-- SIDEBAR --}}
                <div>
                    <div style="position:sticky;top:5rem;display:flex;flex-direction:column;gap:1.25rem">

                        {{-- Share --}}
                        <div class="toc-card sr">
                            <h3>Share this article</h3>
                            <div style="display:flex;gap:.6rem;flex-wrap:wrap">
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url('/blog/' . $post->slug)) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:.4rem;padding:.45rem .9rem;border-radius:8px;border:1px solid var(--border);color:var(--t2);font-size:.78rem;font-weight:500;text-decoration:none;transition:all .2s;background:rgba(255,255,255,.02)">
                                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                    X / Twitter
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url('/blog/' . $post->slug)) }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:.4rem;padding:.45rem .9rem;border-radius:8px;border:1px solid var(--border);color:var(--t2);font-size:.78rem;font-weight:500;text-decoration:none;transition:all .2s;background:rgba(255,255,255,.02)">
                                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    LinkedIn
                                </a>
                            </div>
                        </div>

                        {{-- CTA --}}
                        <div class="cta-sidebar sr">
                            <h3>Building something?</h3>
                            <p>We ship web apps, mobile apps, and AI integrations. Tell us what you need.</p>
                            <a href="{{ url('/contact') }}" class="bsolid" style="width:100%;justify-content:center;font-size:.82rem;padding:.8rem 1.5rem">Start a project</a>
                        </div>

                        {{-- Services links --}}
                        <div class="toc-card sr">
                            <h3>Our Services</h3>
                            <div class="toc-list">
                                <a href="{{ url('/services/web-app-development') }}" class="toc-link">Web App Development</a>
                                <a href="{{ url('/services/mobile-app-development') }}" class="toc-link">Mobile App Development</a>
                                <a href="{{ url('/services/ai-integration') }}" class="toc-link">AI Integration</a>
                                <a href="{{ url('/services/ui-ux-development') }}" class="toc-link">UI / UX Development</a>
                                <a href="{{ url('/services/mvp-development') }}" class="toc-link">MVP Development</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</article>

{{-- RELATED POSTS --}}
@if($related->count())
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="margin-bottom:2rem" class="sr">
            <span class="eyebrow">Keep Reading</span>
            <h2 class="dh2" style="margin-top:.6rem;font-size:clamp(1.4rem,3vw,2rem)">Related articles</h2>
        </div>
        <div class="related-grid sg">
            @foreach($related as $rp)
            <a href="{{ url('/blog/' . $rp->slug) }}" class="related-card">
                <div class="related-thumb">
                    @if($rp->cover_image_path)
                    <img src="{{ asset('storage/' . $rp->cover_image_path) }}" alt="{{ $rp->title }}">
                    @else
                    <div class="related-placeholder"></div>
                    @endif
                </div>
                @if($rp->category)
                <span class="related-cat">{{ $rp->category->name }}</span>
                @endif
                <h3 class="related-title">{{ $rp->title }}</h3>
                @if($rp->published_at)
                <p style="font-size:.73rem;color:var(--t3);margin-top:.3rem">{{ $rp->published_at->format('M j, Y') }}</p>
                @endif
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- CTA --}}
<section class="ps" style="background:var(--bg)">
    <div class="w" style="text-align:center;max-width:580px;margin:0 auto">
        <div class="sr">
            <span class="eyebrow" style="justify-content:center">Work with us</span>
            <h2 class="dh2" style="margin-top:.75rem">Building something similar?</h2>
            <p class="dlead" style="margin-top:.75rem">Tell us about your project. We reply within one business day with a clear plan and honest pricing.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start a conversation</a>
                <a href="{{ url('/blog') }}" class="bghost">Back to blog</a>
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
