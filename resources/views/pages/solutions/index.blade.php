@extends('layouts.app')

@section('title', 'Industry Solutions | Plazmasoft')
@section('meta_description', 'Vertical-specific software solutions for fintech, fleet management, AI property visualization, and agritech from a software studio in India.')

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.sol-grid{display:grid;grid-template-columns:1fr;gap:1.5rem}
@media(min-width:768px){.sol-grid{grid-template-columns:repeat(2,1fr)}}
.sol-card{background:var(--surface);border:1px solid var(--border);border-radius:22px;padding:2.5rem;text-decoration:none;display:flex;flex-direction:column;position:relative;overflow:hidden;transition:border-color .3s,transform .35s cubic-bezier(.16,1,.3,1)}
.sol-card::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 85% 10%,rgba(249,115,22,.07) 0%,transparent 55%);opacity:0;transition:opacity .3s}
.sol-card:hover{border-color:rgba(249,115,22,.3);transform:translateY(-4px)}
.sol-card:hover::before{opacity:1}
.sol-num{font-size:.65rem;font-weight:800;letter-spacing:.12em;color:var(--orange);margin-bottom:1.25rem}
.sol-icon{width:56px;height:56px;border-radius:16px;background:rgba(249,115,22,.08);display:flex;align-items:center;justify-content:center;color:var(--orange);margin-bottom:1.5rem}
.sol-title{font-size:1.2rem;font-weight:700;color:var(--t1);margin-bottom:.5rem}
.sol-tag{font-size:.85rem;color:var(--t2);line-height:1.6;margin-bottom:1.5rem}
.sol-feats{display:flex;flex-direction:column;gap:.55rem;flex:1;margin-bottom:1.75rem}
.sol-feat{display:flex;align-items:flex-start;gap:.65rem}
.sol-dot{width:5px;height:5px;border-radius:50%;background:var(--orange);flex-shrink:0;margin-top:.52rem}
.sol-feat-t{font-size:.82rem;color:var(--t2)}
.sol-link{display:inline-flex;align-items:center;gap:.4rem;font-size:.82rem;font-weight:700;color:var(--orange-l);text-decoration:none;transition:gap .2s}
.sol-link:hover{gap:.7rem}
.ind-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1rem}
@media(min-width:768px){.ind-grid{grid-template-columns:repeat(4,1fr)}}
.ind-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.4rem;text-align:center}
.ind-icon{width:44px;height:44px;border-radius:10px;background:rgba(249,115,22,.08);display:flex;align-items:center;justify-content:center;color:var(--orange);margin:0 auto .75rem}
.ind-t{font-size:.85rem;font-weight:600;color:var(--t1);margin-bottom:.25rem}
.ind-d{font-size:.76rem;color:var(--t3);line-height:1.5}
.cta-band{background:linear-gradient(135deg,rgba(249,115,22,.08),rgba(249,115,22,.03));border:1px solid rgba(249,115,22,.15);border-radius:24px;padding:3.5rem 2.5rem;text-align:center}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:8rem 0 5rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-6rem;left:50%;transform:translateX(-50%);width:800px;height:800px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;text-align:center;max-width:680px;margin:0 auto">
        <span class="eyebrow sr">Industry Solutions</span>
        <h1 class="dh2 sr" style="margin-top:.9rem">Built for your<br><span class="grad-t">vertical.</span></h1>
        <p class="dlead sr" style="margin-top:1.1rem;max-width:540px;margin-left:auto;margin-right:auto">Deep expertise in specific industries means you spend less time explaining context and more time building. We know the domain before you brief us.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2.25rem" class="sr">
            <a href="{{ url('/contact') }}" class="bsolid">Discuss Your Project</a>
            <a href="{{ url('/portfolio') }}" class="bghost">View Portfolio</a>
        </div>
    </div>
</section>

{{-- SOLUTIONS GRID --}}
<section class="ps" style="background:var(--bg);padding-top:0">
    <div class="w">
        @if($solutions->count())
        <div class="sol-grid">
            @foreach($solutions as $sol)
            <a href="{{ url('/solutions/' . $sol->slug) }}" class="sol-card sr">
                <p class="sol-num">0{{ $loop->iteration }}</p>
                <div class="sol-icon">
                    @if($sol->icon)
                    <span style="font-size:1.5rem">{{ $sol->icon }}</span>
                    @else
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    @endif
                </div>
                <h2 class="sol-title">{{ $sol->title }}</h2>
                @if($sol->tagline)<p class="sol-tag">{{ $sol->tagline }}</p>@endif
                <div class="sol-feats"></div>
                <span class="sol-link">Explore solution <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @else
        @php
        $staticSolutions = [
            [
                'num'  => '01',
                'slug' => 'fintech-development',
                'icon' => '<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>',
                'title'=> 'Fintech Development',
                'tag'  => 'Trading platforms, wallets, KYC flows, and payment integrations built for compliance.',
                'feats'=> ['Digital wallets and UPI integrations','KYC and AML verification flows','Trade finance and investment dashboards','Stripe, Razorpay, and PayU integrations'],
            ],
            [
                'num'  => '02',
                'slug' => 'fleet-management',
                'icon' => '<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 17a5 5 0 01-.916-9.916 5.002 5.002 0 019.832 0A5.002 5.002 0 0117 17H8z"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 17v2m4-2v2m4-2v2M3 21h18"/></svg>',
                'title'=> 'Fleet Management',
                'tag'  => 'Real-time GPS tracking, driver apps, and dispatch dashboards that reduce operational costs.',
                'feats'=> ['Real-time GPS and live map tracking','Driver mobile app (Flutter, iOS + Android)','Dispatch and booking dashboard','Route optimization and fuel tracking'],
            ],
            [
                'num'  => '03',
                'slug' => 'ai-property-visualization',
                'icon' => '<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 22V12h6v10"/></svg>',
                'title'=> 'AI Property Visualization',
                'tag'  => 'Stable Diffusion-powered virtual staging and property visualization for real estate.',
                'feats'=> ['Virtual staging with Stable Diffusion','Before and after interior renders','Facade redesign and renovation preview','360-degree virtual tours'],
            ],
            [
                'num'  => '04',
                'slug' => 'agritech-development',
                'icon' => '<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>',
                'title'=> 'Agritech Development',
                'tag'  => 'Crop monitoring, farmer marketplace apps, and advisory platforms for Indian agriculture.',
                'feats'=> ['Farmer advisory and crop monitoring apps','Farm-to-market commerce platforms','SMS and WhatsApp notification systems','Offline-first Flutter apps for rural users'],
            ],
        ];
        @endphp
        <div class="sol-grid">
            @foreach($staticSolutions as $sol)
            <a href="{{ url('/solutions/' . $sol['slug']) }}" class="sol-card sr">
                <p class="sol-num">{{ $sol['num'] }}</p>
                <div class="sol-icon">{!! $sol['icon'] !!}</div>
                <h2 class="sol-title">{{ $sol['title'] }}</h2>
                <p class="sol-tag">{{ $sol['tag'] }}</p>
                <div class="sol-feats">
                    @foreach($sol['feats'] as $feat)
                    <div class="sol-feat">
                        <span class="sol-dot"></span>
                        <span class="sol-feat-t">{{ $feat }}</span>
                    </div>
                    @endforeach
                </div>
                <span class="sol-link">Explore solution <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></span>
            </a>
            @endforeach
        </div>
        @endif
    </div>
</section>

{{-- WHY VERTICAL EXPERTISE --}}
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center;margin-bottom:3rem" class="sr">
            <span class="eyebrow">Domain Knowledge</span>
            <h2 class="dh2" style="margin-top:.75rem">Why vertical expertise matters</h2>
            <div class="divx cx"></div>
        </div>
        <div class="ind-grid sg">
            <div class="ind-card">
                <div class="ind-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <p class="ind-t">Fewer briefing cycles</p>
                <p class="ind-d">We know the domain constraints before the call starts.</p>
            </div>
            <div class="ind-card">
                <div class="ind-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                <p class="ind-t">Faster decisions</p>
                <p class="ind-d">Proven patterns from past builds mean less architecture debate.</p>
            </div>
            <div class="ind-card">
                <div class="ind-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <p class="ind-t">Realistic timelines</p>
                <p class="ind-d">We've shipped in these verticals before — no discovery surprises.</p>
            </div>
            <div class="ind-card">
                <div class="ind-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div>
                <p class="ind-t">Better outcomes</p>
                <p class="ind-d">Products designed for how real users in each industry actually work.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ps" style="background:var(--bg)">
    <div class="w">
        <div class="cta-band sr">
            <span class="eyebrow" style="justify-content:center">Working in one of these verticals?</span>
            <h2 class="dh2" style="margin-top:.75rem">Tell us about your project.</h2>
            <p class="dlead" style="margin-top:.75rem;max-width:480px;margin-left:auto;margin-right:auto">We reply within one business day with a clear plan and honest pricing — no fluff.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem">
                <a href="{{ url('/contact') }}" class="bsolid">Start a Conversation</a>
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
