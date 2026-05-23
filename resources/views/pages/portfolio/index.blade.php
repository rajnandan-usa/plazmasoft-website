@extends('layouts.app')

@section('title', 'Portfolio | Plazmasoft Work')
@section('meta_description', 'Browse our portfolio of web apps, mobile apps, and AI integrations delivered for clients across fintech, fleet, agritech, and e-commerce.')

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.filter-wrap{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-bottom:3rem}
.f-chip{padding:.4rem 1.1rem;border-radius:999px;font-size:.8rem;font-weight:600;cursor:pointer;border:1px solid var(--border);background:transparent;color:var(--t2);transition:all .2s}
.f-chip.active,.f-chip:hover{background:var(--orange);border-color:var(--orange);color:#fff}
.proj-grid{display:grid;grid-template-columns:1fr;gap:1.5rem}
@media(min-width:640px){.proj-grid{grid-template-columns:repeat(2,1fr)}}
@media(min-width:1024px){.proj-grid{grid-template-columns:repeat(3,1fr)}}
.proj-card{background:var(--surface);border:1px solid var(--border);border-radius:20px;overflow:hidden;text-decoration:none;display:block;transition:border-color .3s,transform .35s cubic-bezier(.16,1,.3,1)}
.proj-card:hover{border-color:rgba(249,115,22,.3);transform:translateY(-4px)}
.proj-thumb{aspect-ratio:16/9;overflow:hidden;background:var(--bg-alt)}
.proj-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease}
.proj-card:hover .proj-thumb img{transform:scale(1.05)}
.proj-thumb-placeholder{width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,rgba(249,115,22,.08),rgba(249,115,22,.03))}
.proj-thumb-initials{font-size:2rem;font-weight:800;color:rgba(249,115,22,.25);letter-spacing:-.04em}
.proj-body{padding:1.5rem}
.proj-cat{display:inline-block;font-size:.65rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--orange);margin-bottom:.5rem}
.proj-title{font-size:1rem;font-weight:700;color:var(--t1);margin-bottom:.25rem;line-height:1.3;transition:color .2s}
.proj-card:hover .proj-title{color:var(--orange-l)}
.proj-client{font-size:.75rem;color:var(--t3);margin-bottom:.6rem}
.proj-tagline{font-size:.82rem;color:var(--t2);line-height:1.5;margin-bottom:.9rem}
.proj-techs{display:flex;flex-wrap:wrap;gap:.35rem}
.proj-tech{font-size:.68rem;font-weight:500;padding:.2rem .6rem;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid var(--border);color:var(--t3)}
.empty-state{text-align:center;padding:5rem 2rem}
.empty-state p{font-size:1rem;color:var(--t3);margin-top:.75rem}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:8rem 0 4rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-8rem;right:5%;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;text-align:center;max-width:680px;margin:0 auto">
        <span class="eyebrow sr">Our Work</span>
        <h1 class="dh2 sr" style="margin-top:.9rem">Projects we<br><span class="grad-t">have shipped.</span></h1>
        <p class="dlead sr" style="margin-top:1.1rem">
            @if($projects->count())
            {{ $projects->count() }} production-grade app{{ $projects->count() === 1 ? '' : 's' }} delivered{{ $categories->count() ? ' across ' . $categories->count() . ' categories' : '' }}.
            @else
            Production-grade web apps, mobile apps, and AI integrations delivered for clients worldwide.
            @endif
        </p>
    </div>
</section>

{{-- FILTER + GRID --}}
<section class="ps" style="background:var(--bg);padding-top:0" x-data="{ active: 'all' }">
    <div class="w">

        @if($categories->count())
        <div class="filter-wrap sr">
            <button @click="active = 'all'" :class="active === 'all' ? 'active' : ''" class="f-chip">All</button>
            @foreach($categories as $cat)
            <button @click="active = '{{ $cat->slug }}'" :class="active === '{{ $cat->slug }}' ? 'active' : ''" class="f-chip">{{ $cat->name }}</button>
            @endforeach
        </div>
        @endif

        @if($projects->count())
        <div class="proj-grid">
            @foreach($projects as $project)
            <div x-show="active === 'all' || active === '{{ $project->category?->slug ?? '' }}'" x-transition>
                <a href="{{ url('/portfolio/' . $project->slug) }}" class="proj-card">
                    <div class="proj-thumb">
                        @if($project->banner_image_path)
                        <img src="{{ asset('storage/' . $project->banner_image_path) }}" alt="{{ $project->title }}">
                        @else
                        <div class="proj-thumb-placeholder">
                            <span class="proj-thumb-initials">{{ substr($project->title, 0, 2) }}</span>
                        </div>
                        @endif
                    </div>
                    <div class="proj-body">
                        @if($project->category)
                        <span class="proj-cat">{{ $project->category->name }}</span>
                        @endif
                        <h2 class="proj-title">{{ $project->title }}</h2>
                        @if($project->client_name)
                        <p class="proj-client">{{ $project->client_name }}@if($project->region) &middot; {{ $project->region }}@endif</p>
                        @endif
                        @if($project->tagline)
                        <p class="proj-tagline">{{ $project->tagline }}</p>
                        @endif
                        @if(is_array($project->tech_stack) && count($project->tech_stack))
                        <div class="proj-techs">
                            @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                            <span class="proj-tech">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @else
        <div class="empty-state sr">
            <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24" style="color:var(--t3);margin:0 auto"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            <p>Portfolio coming soon. Check back shortly.</p>
            <div style="margin-top:1.5rem">
                <a href="{{ url('/contact') }}" class="bsolid" style="font-size:.85rem;padding:.75rem 1.75rem">Start a project with us</a>
            </div>
        </div>
        @endif
    </div>
</section>

{{-- CTA --}}
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w" style="text-align:center;max-width:600px;margin:0 auto">
        <div class="sr">
            <span class="eyebrow" style="justify-content:center">Work with us</span>
            <h2 class="dh2" style="margin-top:.75rem">Want to be on this list?</h2>
            <p class="dlead" style="margin-top:.75rem">Tell us about your project. We reply within one business day with a clear plan and honest pricing.</p>
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
