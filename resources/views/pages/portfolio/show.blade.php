@extends('layouts.app')

@section('title', ($project->meta_title ?: $project->title . ' | Plazmasoft'))
@section('meta_description', $project->meta_description ?: $project->tagline)
@section('og_title', $project->title)
@section('og_description', $project->tagline)
@if($project->banner_image_path)
@section('og_image', asset('storage/' . $project->banner_image_path))
@endif
@section('canonical', url('/portfolio/' . $project->slug))

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CreativeWork",
    "name": "{{ e($project->title) }}",
    "description": "{{ e($project->tagline) }}",
    "url": "{{ url('/portfolio/' . $project->slug) }}",
    "creator": { "@type": "Organization", "name": "Plazmasoft", "url": "{{ url('/') }}" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",      "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Portfolio", "item": "{{ url('/portfolio') }}" },
        { "@type": "ListItem", "position": 3, "name": "{{ e($project->title) }}", "item": "{{ url('/portfolio/' . $project->slug) }}" }
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
.proj-cat-badge{display:inline-block;font-size:.65rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--orange);background:rgba(249,115,22,.1);border:1px solid rgba(249,115,22,.2);padding:.25rem .75rem;border-radius:999px;margin-bottom:1rem}
.meta-row{display:flex;flex-wrap:wrap;gap:1.25rem;margin-top:1.5rem}
.meta-item{display:flex;flex-direction:column;gap:.15rem}
.meta-label{font-size:.65rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--t3)}
.meta-val{font-size:.85rem;font-weight:500;color:var(--t1)}
.proj-links{display:flex;flex-wrap:wrap;gap:.75rem;margin-top:2rem}
.proj-link-btn{display:inline-flex;align-items:center;gap:.4rem;padding:.6rem 1.25rem;font-size:.82rem;font-weight:600;border-radius:10px;text-decoration:none;transition:all .2s}
.proj-link-primary{background:linear-gradient(135deg,var(--orange-l),var(--orange));color:#fff}
.proj-link-primary:hover{box-shadow:0 8px 24px rgba(249,115,22,.3);transform:translateY(-1px)}
.proj-link-ghost{border:1px solid var(--border);color:var(--t2);background:rgba(255,255,255,.02)}
.proj-link-ghost:hover{border-color:var(--bh);color:var(--t1)}
.banner-wrap{background:var(--bg-alt);border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:2.5rem 0}
.banner-img{border-radius:20px;overflow:hidden;border:1px solid var(--border);max-width:900px;margin:0 auto}
.banner-img img{width:100%;display:block}
.content-layout{display:grid;grid-template-columns:1fr;gap:3rem}
@media(min-width:1024px){.content-layout{grid-template-columns:1fr 320px}}
.content-section{margin-bottom:2.5rem}
.section-label-sm{font-size:.68rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--orange);margin-bottom:.6rem}
.section-h2{font-size:1.1rem;font-weight:700;color:var(--t1);margin-bottom:1rem}
.content-body{font-size:.9rem;color:var(--t2);line-height:1.8}
.gallery-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:.75rem;margin-top:.75rem}
.gallery-img{border-radius:12px;overflow:hidden;border:1px solid var(--border)}
.gallery-img img{width:100%;display:block;object-fit:cover}
.sidebar-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:1.5rem;margin-bottom:1.25rem}
.sidebar-card h3{font-size:.68rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--t3);margin-bottom:1rem}
.tech-wrap{display:flex;flex-wrap:wrap;gap:.4rem}
.tech-pill{font-size:.72rem;font-weight:500;padding:.25rem .65rem;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid var(--border);color:var(--t2)}
.testi-card{background:var(--surface);border:1px solid var(--border);border-left:3px solid var(--orange);border-radius:0 12px 12px 0;padding:1.5rem;margin-bottom:1.25rem}
.testi-quote{font-size:.875rem;color:var(--t2);line-height:1.7;font-style:italic;margin-bottom:.9rem}
.testi-author{font-size:.82rem;font-weight:700;color:var(--t1)}
.testi-role{font-size:.75rem;color:var(--t3);margin-top:.15rem}
.cta-sidebar{background:linear-gradient(135deg,rgba(249,115,22,.1),rgba(249,115,22,.04));border:1px solid rgba(249,115,22,.2);border-radius:16px;padding:1.75rem;text-align:center}
.cta-sidebar h3{font-size:.95rem;font-weight:700;color:var(--t1);margin-bottom:.5rem}
.cta-sidebar p{font-size:.8rem;color:var(--t2);margin-bottom:1.25rem;line-height:1.6}
.related-grid{display:grid;grid-template-columns:1fr;gap:1.25rem}
@media(min-width:640px){.related-grid{grid-template-columns:repeat(3,1fr)}}
.related-card{text-decoration:none;display:block}
.related-thumb{aspect-ratio:16/9;border-radius:12px;overflow:hidden;margin-bottom:.75rem;background:var(--bg-alt);border:1px solid var(--border)}
.related-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .35s}
.related-card:hover .related-thumb img{transform:scale(1.05)}
.related-placeholder{width:100%;height:100%;background:linear-gradient(135deg,rgba(249,115,22,.08),rgba(249,115,22,.03));display:flex;align-items:center;justify-content:center}
.related-title{font-size:.9rem;font-weight:600;color:var(--t1);line-height:1.35;transition:color .2s}
.related-card:hover .related-title{color:var(--orange-l)}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:7rem 0 3rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-8rem;right:5%;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;max-width:860px;margin:0 auto">
        <nav class="bc sr">
            <a href="{{ url('/') }}">Home</a><span class="bc-sep">/</span>
            <a href="{{ url('/portfolio') }}">Portfolio</a><span class="bc-sep">/</span>
            <span style="color:var(--t2)">{{ $project->title }}</span>
        </nav>
        @if($project->category)
        <span class="proj-cat-badge">{{ $project->category->name }}</span>
        @endif
        <h1 style="font-size:clamp(2rem,5vw,3.2rem);font-weight:800;color:var(--t1);letter-spacing:-.03em;line-height:1.1;margin-bottom:.75rem" class="sr">{{ $project->title }}</h1>
        @if($project->tagline)
        <p style="font-size:1.05rem;color:var(--t2);line-height:1.7;max-width:620px" class="sr">{{ $project->tagline }}</p>
        @endif

        <div class="meta-row sr">
            @if($project->client_name)
            <div class="meta-item">
                <span class="meta-label">Client</span>
                <span class="meta-val">{{ $project->client_name }}</span>
            </div>
            @endif
            @if($project->region)
            <div class="meta-item">
                <span class="meta-label">Region</span>
                <span class="meta-val">{{ $project->region }}</span>
            </div>
            @endif
            @if($project->industry)
            <div class="meta-item">
                <span class="meta-label">Industry</span>
                <span class="meta-val">{{ $project->industry }}</span>
            </div>
            @endif
            @if($project->duration_from)
            <div class="meta-item">
                <span class="meta-label">Timeline</span>
                <span class="meta-val">{{ $project->duration_from->format('M Y') }}{{ $project->duration_to ? ' to ' . $project->duration_to->format('M Y') : '' }}</span>
            </div>
            @endif
        </div>

        <div class="proj-links sr">
            @if($project->live_url)
            <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer" class="proj-link-btn proj-link-primary">
                View live
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
            @endif
            @if($project->playstore_url)
            <a href="{{ $project->playstore_url }}" target="_blank" rel="noopener noreferrer" class="proj-link-btn proj-link-ghost">Play Store</a>
            @endif
            @if($project->appstore_url)
            <a href="{{ $project->appstore_url }}" target="_blank" rel="noopener noreferrer" class="proj-link-btn proj-link-ghost">App Store</a>
            @endif
        </div>
    </div>
</section>

{{-- BANNER IMAGE --}}
@if($project->banner_image_path)
<div class="banner-wrap">
    <div class="w">
        <div class="banner-img">
            <img src="{{ asset('storage/' . $project->banner_image_path) }}" alt="{{ $project->title }}">
        </div>
    </div>
</div>
@endif

{{-- CONTENT --}}
<section class="ps" style="background:var(--bg)">
    <div class="w" style="max-width:1100px;margin:0 auto">
        <div class="content-layout">

            {{-- MAIN --}}
            <div>
                @if($project->problem)
                <div class="content-section sr">
                    <p class="section-label-sm">The Problem</p>
                    <h2 class="section-h2">What needed solving</h2>
                    <div class="content-body">{!! nl2br(e($project->problem)) !!}</div>
                </div>
                @endif

                @if($project->solution)
                <div class="content-section sr">
                    <p class="section-label-sm">Our Solution</p>
                    <h2 class="section-h2">How we solved it</h2>
                    <div class="content-body">{!! nl2br(e($project->solution)) !!}</div>
                </div>
                @endif

                @if($project->outcome)
                <div class="content-section sr">
                    <p class="section-label-sm">The Outcome</p>
                    <h2 class="section-h2">Results delivered</h2>
                    <div class="content-body">{!! nl2br(e($project->outcome)) !!}</div>
                </div>
                @endif

                @if($project->images->count())
                <div class="content-section sr">
                    <p class="section-label-sm">Screenshots</p>
                    <h2 class="section-h2">Project gallery</h2>
                    <div class="gallery-grid">
                        @foreach($project->images as $img)
                        <div class="gallery-img">
                            <img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->caption ?: $project->title }}">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            {{-- SIDEBAR --}}
            <div>
                @if(is_array($project->tech_stack) && count($project->tech_stack))
                <div class="sidebar-card sr">
                    <h3>Tech Stack</h3>
                    <div class="tech-wrap">
                        @foreach($project->tech_stack as $tech)
                        <span class="tech-pill">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                @if($project->testimonials->count())
                @php $t = $project->testimonials->first() @endphp
                <div class="testi-card sr">
                    <p class="testi-quote">"{{ $t->quote }}"</p>
                    <p class="testi-author">{{ $t->author_name }}</p>
                    <p class="testi-role">{{ $t->author_role }}@if($t->author_company), {{ $t->author_company }}@endif</p>
                </div>
                @endif

                <div class="cta-sidebar sr">
                    <h3>Want something like this?</h3>
                    <p>Tell us about your project and we will reply within one business day.</p>
                    <a href="{{ url('/contact') }}" class="bsolid" style="width:100%;justify-content:center;font-size:.85rem;padding:.8rem 1.5rem">Start a conversation</a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- RELATED --}}
@if(isset($related) && $related->count())
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="margin-bottom:2rem" class="sr">
            <span class="eyebrow">More Work</span>
            <h2 class="dh2" style="margin-top:.6rem;font-size:clamp(1.4rem,3vw,2rem)">Related projects</h2>
        </div>
        <div class="related-grid sg">
            @foreach($related as $rp)
            <a href="{{ url('/portfolio/' . $rp->slug) }}" class="related-card">
                <div class="related-thumb">
                    @if($rp->banner_image_path)
                    <img src="{{ asset('storage/' . $rp->banner_image_path) }}" alt="{{ $rp->title }}">
                    @else
                    <div class="related-placeholder">
                        <span style="font-size:1.5rem;font-weight:800;color:rgba(249,115,22,.25)">{{ substr($rp->title, 0, 2) }}</span>
                    </div>
                    @endif
                </div>
                <h3 class="related-title">{{ $rp->title }}</h3>
                @if($rp->tagline)
                <p style="font-size:.78rem;color:var(--t3);margin-top:.3rem;line-height:1.4">{{ $rp->tagline }}</p>
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
            <span class="eyebrow" style="justify-content:center">Next steps</span>
            <h2 class="dh2" style="margin-top:.75rem">Building something similar?</h2>
            <p class="dlead" style="margin-top:.75rem">Tell us about your project. We reply within one business day with a clear plan and honest pricing.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start a conversation</a>
                <a href="{{ url('/portfolio') }}" class="bghost">Back to portfolio</a>
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
