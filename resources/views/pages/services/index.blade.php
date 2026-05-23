@extends('layouts.app')

@section('title', 'Services | Plazmasoft')
@section('meta_description', 'Web app development, mobile app development, AI integration, UI/UX design, and MVP development services from a software studio in India.')

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.svc-grid{display:grid;grid-template-columns:1fr;gap:1.5rem}
@media(min-width:640px){.svc-grid{grid-template-columns:repeat(2,1fr)}}
@media(min-width:1024px){.svc-grid{grid-template-columns:repeat(3,1fr)}}
.svc-card{background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:2.25rem;text-decoration:none;display:flex;flex-direction:column;position:relative;overflow:hidden;transition:border-color .3s,transform .35s cubic-bezier(.16,1,.3,1)}
.svc-card::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 90% 0%,rgba(249,115,22,.07) 0%,transparent 60%);opacity:0;transition:opacity .3s}
.svc-card:hover{border-color:rgba(249,115,22,.3);transform:translateY(-4px)}
.svc-card:hover::before{opacity:1}
.svc-num{font-size:.65rem;font-weight:800;letter-spacing:.12em;color:var(--orange);margin-bottom:1.25rem}
.svc-icon{width:50px;height:50px;border-radius:14px;background:rgba(249,115,22,.08);display:flex;align-items:center;justify-content:center;color:var(--orange);margin-bottom:1.25rem}
.svc-title{font-size:1.1rem;font-weight:700;color:var(--t1);margin-bottom:.4rem;line-height:1.25}
.svc-tag{font-size:.82rem;color:var(--t2);margin-bottom:1.25rem;line-height:1.55}
.svc-feats{display:flex;flex-direction:column;gap:.5rem;margin-bottom:1.5rem;flex:1}
.svc-feat{display:flex;align-items:flex-start;gap:.6rem}
.svc-dot{width:5px;height:5px;border-radius:50%;background:var(--orange);flex-shrink:0;margin-top:.52rem}
.svc-feat-t{font-size:.8rem;color:var(--t2);line-height:1.4}
.svc-link{display:inline-flex;align-items:center;gap:.4rem;font-size:.8rem;font-weight:700;color:var(--orange-l);text-decoration:none;margin-top:auto;transition:gap .2s}
.svc-link:hover{gap:.7rem}
.why-grid{display:grid;grid-template-columns:1fr;gap:1.25rem}
@media(min-width:768px){.why-grid{grid-template-columns:repeat(3,1fr)}}
.why-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:1.75rem;text-align:center}
.why-icon{width:48px;height:48px;border-radius:12px;background:rgba(249,115,22,.08);display:flex;align-items:center;justify-content:center;color:var(--orange);margin:0 auto 1rem}
.why-t{font-size:1rem;font-weight:700;color:var(--t1);margin-bottom:.4rem}
.why-d{font-size:.82rem;color:var(--t2);line-height:1.65}
.cta-band{background:linear-gradient(135deg,rgba(249,115,22,.08) 0%,rgba(249,115,22,.03) 100%);border:1px solid rgba(249,115,22,.15);border-radius:24px;padding:3.5rem 2.5rem;text-align:center}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:8rem 0 5rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-6rem;left:50%;transform:translateX(-50%);width:800px;height:800px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;text-align:center;max-width:700px;margin:0 auto">
        <span class="eyebrow sr">What We Build</span>
        <h1 class="dh2 sr" style="margin-top:.9rem">Expert services.<br><span class="grad-t">Delivered on time.</span></h1>
        <p class="dlead sr" style="margin-top:1.1rem;max-width:560px;margin-left:auto;margin-right:auto">From MVPs to production-grade platforms, our team ships software that scales. Every engagement is scoped, priced, and delivered with full transparency.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2.25rem" class="sr">
            <a href="{{ url('/contact') }}" class="bsolid">Start a Project</a>
            <a href="{{ url('/portfolio') }}" class="bghost">View Portfolio</a>
        </div>
    </div>
</section>

{{-- SERVICES GRID --}}
<section class="ps" style="background:var(--bg);padding-top:0">
    <div class="w">
        @if($services->count())
        <div class="svc-grid">
            @foreach($services as $svc)
            <a href="{{ url('/services/' . $svc->slug) }}" class="svc-card sr">
                <p class="svc-num">0{{ $loop->iteration }}</p>
                <div class="svc-icon">
                    @if($svc->icon)
                    <span style="font-size:1.4rem">{{ $svc->icon }}</span>
                    @else
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    @endif
                </div>
                <h2 class="svc-title">{{ $svc->title }}</h2>
                @if($svc->tagline)
                <p class="svc-tag">{{ $svc->tagline }}</p>
                @endif
                <div class="svc-feats"></div>
                <span class="svc-link">View service <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @else
        @php
        $staticServices = [
            [
                'num'  => '01',
                'slug' => 'web-app-development',
                'icon' => '<svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path stroke-linecap="round" d="M3 9h18M9 21V9"/></svg>',
                'title'=> 'Web App Development',
                'tag'  => 'Laravel and React applications built for real scale.',
                'feats'=> ['Laravel 11 + React / Next.js','REST and GraphQL APIs','Multi-tenant SaaS architecture','Admin dashboards with Filament'],
            ],
            [
                'num'  => '02',
                'slug' => 'mobile-app-development',
                'icon' => '<svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><rect x="7" y="2" width="10" height="20" rx="3"/><circle cx="12" cy="18" r="1" fill="currentColor"/></svg>',
                'title'=> 'Mobile App Development',
                'tag'  => 'Cross-platform Flutter apps for iOS and Android.',
                'feats'=> ['Flutter for iOS and Android','Push notifications and deep links','Offline-first architecture','App Store and Play Store submission'],
            ],
            [
                'num'  => '03',
                'slug' => 'ai-integration',
                'icon' => '<svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .946.384 1.803 1.06 2.385M15 3.104v5.714c0 .946.384 1.803 1.06 2.385M5 14.5l-.175 1.131A3 3 0 008.808 19H15.2a3 3 0 002.983-3.371L18 14.5M5 14.5h13"/></svg>',
                'title'=> 'AI Integration',
                'tag'  => 'Gemini, GPT-4o, and custom LLM features built into your product.',
                'feats'=> ['OpenAI and Gemini API integration','RAG and document processing','AI-powered search and recommendations','Custom fine-tuning pipelines'],
            ],
            [
                'num'  => '04',
                'slug' => 'ui-ux-development',
                'icon' => '<svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>',
                'title'=> 'UI / UX Development',
                'tag'  => 'Figma-to-code that looks great and loads fast on every device.',
                'feats'=> ['Figma-to-Tailwind implementation','Design systems and component libraries','Animation and micro-interactions','Accessibility (WCAG AA)'],
            ],
            [
                'num'  => '05',
                'slug' => 'mvp-development',
                'icon' => '<svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.82m5.84-2.56a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.82m2.56-5.84a14.98 14.98 0 00-2.58 5.841m2.58-5.841A6.002 6.002 0 0115.59 8.41m0 5.96"/></svg>',
                'title'=> 'MVP Development',
                'tag'  => 'Launch your idea in 6 to 8 weeks, production-ready.',
                'feats'=> ['Fixed scope and timeline','Production-ready from day one','Auth, payments, and admin included','Post-launch support included'],
            ],
        ];
        @endphp
        <div class="svc-grid">
            @foreach($staticServices as $svc)
            <a href="{{ url('/services/' . $svc['slug']) }}" class="svc-card sr">
                <p class="svc-num">{{ $svc['num'] }}</p>
                <div class="svc-icon">{!! $svc['icon'] !!}</div>
                <h2 class="svc-title">{{ $svc['title'] }}</h2>
                <p class="svc-tag">{{ $svc['tag'] }}</p>
                <div class="svc-feats">
                    @foreach($svc['feats'] as $feat)
                    <div class="svc-feat">
                        <span class="svc-dot"></span>
                        <span class="svc-feat-t">{{ $feat }}</span>
                    </div>
                    @endforeach
                </div>
                <span class="svc-link">View service <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @endif
    </div>
</section>

{{-- WHY US --}}
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Why Plazmasoft</span>
            <h2 class="dh2" style="margin-top:.75rem">How we work</h2>
            <div class="divx cx"></div>
        </div>
        <div class="why-grid sg">
            <div class="why-card">
                <div class="why-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <p class="why-t">Fast, predictable delivery</p>
                <p class="why-d">We scope tightly and ship on schedule. No surprise delays, no vague timelines, just clear milestones you can plan around.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <p class="why-t">Fixed, transparent pricing</p>
                <p class="why-d">You know the cost before we start. Our proposals are fixed-price with no hidden fees, add-ons, or retroactive scope changes.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg></div>
                <p class="why-t">Direct communication</p>
                <p class="why-d">You talk directly to the team that builds your product. No account managers, no ticket queues, fast, clear updates throughout.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div class="cta-band sr">
            <span class="eyebrow" style="justify-content:center">Ready to start?</span>
            <h2 class="dh2" style="margin-top:.75rem">Have a project in mind?</h2>
            <p class="dlead" style="margin-top:.75rem;max-width:480px;margin-left:auto;margin-right:auto">Tell us what you want to build. We scope, price, and deliver, no fluff, no surprises.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start a Project</a>
                <a href="{{ url('/portfolio') }}" class="bghost">See Our Work</a>
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
