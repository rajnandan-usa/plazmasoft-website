@extends('layouts.app')

@section('title', ($settings['default_meta_title'] ?? 'Plazmasoft') . ' | Web and Mobile App Development Studio')
@section('meta_description', $settings['default_meta_description'] ?? 'Production-grade web and mobile apps for startups and growing businesses.')
@section('canonical', url('/'))

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Plazmasoft",
    "url": "{{ url('/') }}",
    "description": "Production-grade web apps, mobile apps, and AI integrations for startups and growing businesses.",
    "potentialAction": {
        "@type": "SearchAction",
        "target": {
            "@type": "EntryPoint",
            "urlTemplate": "{{ url('/') }}?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Plazmasoft",
    "url": "{{ url('/') }}",
    "description": "Plazmasoft is a software development studio in Noida, India, building production-grade web apps, mobile apps, and AI integrations for startups and growing businesses.",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Noida",
        "addressRegion": "Uttar Pradesh",
        "addressCountry": "IN"
    },
    "areaServed": ["IN","US","GB","AU","AE"],
    "serviceType": ["Web App Development","Mobile App Development","AI Integration","UI/UX Development","MVP Development"],
    "priceRange": "$$",
    "openingHours": "Mo-Fr 09:00-18:00"
}
</script>
@endsection

@section('head')
<style>
/* ─────────────────────────────────────────────────────────
   BASE & TOKENS
───────────────────────────────────────────────────────── */
:root {
    --bg:       #07070a;
    --bg-alt:   #0a0a10;
    --surface:  rgba(255,255,255,0.03);
    --border:   rgba(255,255,255,0.07);
    --bh:       rgba(255,255,255,0.13);
    --t1:       #ffffff;
    --t2:       rgba(255,255,255,0.52);
    --t3:       rgba(255,255,255,0.28);
    --orange:   #f97316;
    --orange-l: #fb923c;
    --orange-d: #ea580c;
}

/* ─────────────────────────────────────────────────────────
   KEYFRAMES
───────────────────────────────────────────────────────── */
@keyframes fadeUp   { from{opacity:0;transform:translateY(28px)} to{opacity:1;transform:none} }
@keyframes fadeDown { from{opacity:0;transform:translateY(-20px)} to{opacity:1;transform:none} }
@keyframes fadeIn   { from{opacity:0} to{opacity:1} }
@keyframes gradShift{ 0%{background-position:0% 50%} 50%{background-position:100% 50%} 100%{background-position:0% 50%} }
@keyframes marqueeX { from{transform:translateX(0)} to{transform:translateX(-50%)} }
@keyframes morphBlob{
    0%,100%{border-radius:60% 40% 30% 70%/60% 30% 70% 40%}
    33%    {border-radius:30% 60% 70% 40%/50% 60% 30% 60%}
    66%    {border-radius:50% 60% 30% 60%/30% 60% 70% 40%}
}
@keyframes pingDot  { 75%,100%{transform:scale(2.2);opacity:0} }
@keyframes shimmer  { from{background-position:-200% center} to{background-position:200% center} }
@keyframes floatY   { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-10px)} }

/* ─────────────────────────────────────────────────────────
   SCROLL REVEAL
───────────────────────────────────────────────────────── */
.sr { opacity:0; transform:translateY(32px); transition:opacity .75s cubic-bezier(.16,1,.3,1), transform .75s cubic-bezier(.16,1,.3,1); }
.sr.up   { transform:translateY(32px); }
.sr.left { transform:translateX(-32px); }
.sr.right{ transform:translateX(32px); }
.sr.scale{ transform:scale(.9); }
.sr.in   { opacity:1; transform:none; }

.sg > * { opacity:0; transform:translateY(24px); transition:opacity .65s cubic-bezier(.16,1,.3,1), transform .65s cubic-bezier(.16,1,.3,1); }
.sg.in > *:nth-child(1){transition-delay:.04s;opacity:1;transform:none}
.sg.in > *:nth-child(2){transition-delay:.10s;opacity:1;transform:none}
.sg.in > *:nth-child(3){transition-delay:.16s;opacity:1;transform:none}
.sg.in > *:nth-child(4){transition-delay:.22s;opacity:1;transform:none}
.sg.in > *:nth-child(5){transition-delay:.28s;opacity:1;transform:none}
.sg.in > *:nth-child(6){transition-delay:.34s;opacity:1;transform:none}

/* ─────────────────────────────────────────────────────────
   LAYOUT HELPERS
───────────────────────────────────────────────────────── */
.wrap { max-width:1200px; margin:0 auto; padding:0 1.5rem; }
@media(min-width:1024px){ .wrap{padding:0 2.5rem} }

.page-section { padding:6rem 0; }
@media(min-width:768px){ .page-section{padding:8rem 0} }

.eyebrow {
    display:inline-flex; align-items:center; gap:.6rem;
    font-size:.7rem; font-weight:700; letter-spacing:.18em; text-transform:uppercase;
    color:var(--orange-l);
}
.eyebrow::before,.eyebrow::after {
    content:''; width:1.5rem; height:1px;
    background:linear-gradient(90deg,transparent,rgba(251,146,60,.6));
}
.eyebrow::before { background:linear-gradient(90deg,rgba(251,146,60,.6),transparent); }

.h2 {
    font-size:clamp(1.9rem,4.5vw,3rem);
    font-weight:800; letter-spacing:-.03em; line-height:1.1; color:var(--t1);
}
.lead { font-size:1.05rem; color:var(--t2); line-height:1.75; }

.grad-text {
    background:linear-gradient(135deg,var(--orange-l) 0%,var(--orange) 40%,var(--orange-d) 100%);
    background-size:200% 100%;
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
    background-clip:text;
    animation:gradShift 6s ease infinite;
}

.divider {
    width:2.5rem; height:3px; border-radius:2px;
    background:linear-gradient(90deg,var(--orange),var(--orange-d));
    margin:.9rem 0 0;
}
.divider.center { margin:.9rem auto 0; }

/* ─────────────────────────────────────────────────────────
   BUTTONS
───────────────────────────────────────────────────────── */
.btn-solid {
    position:relative; display:inline-flex; align-items:center; gap:.45rem;
    padding:.85rem 2rem; font-size:.875rem; font-weight:700; color:#fff;
    background:linear-gradient(135deg,var(--orange-l),var(--orange),var(--orange-d));
    background-size:200% 200%; animation:gradShift 5s ease infinite;
    border-radius:12px; border:none; cursor:pointer;
    transition:transform .3s cubic-bezier(.16,1,.3,1), box-shadow .3s;
    text-decoration:none; overflow:hidden;
}
.btn-solid::after {
    content:''; position:absolute; inset:-1px; border-radius:13px;
    background:linear-gradient(135deg,var(--orange-l),var(--orange-d));
    background-size:200% 200%; animation:gradShift 4s ease infinite;
    z-index:-1; filter:blur(12px); opacity:.35; transition:opacity .3s;
}
.btn-solid:hover { transform:translateY(-2px); box-shadow:0 16px 40px rgba(249,115,22,.3); }
.btn-solid:hover::after { opacity:.6; }

.btn-ghost {
    display:inline-flex; align-items:center; gap:.45rem;
    padding:.85rem 2rem; font-size:.875rem; font-weight:600;
    color:var(--t2); border:1px solid var(--border);
    border-radius:12px; cursor:pointer;
    transition:all .25s ease; text-decoration:none;
    background:rgba(255,255,255,.02);
}
.btn-ghost:hover { border-color:var(--bh); color:var(--t1); background:rgba(255,255,255,.05); transform:translateY(-1px); }

.btn-link {
    display:inline-flex; align-items:center; gap:.4rem;
    font-size:.8rem; font-weight:600; color:var(--t3);
    text-decoration:none; transition:color .2s;
}
.btn-link:hover { color:var(--orange-l); }
.btn-link svg { transition:transform .2s; }
.btn-link:hover svg { transform:translateX(3px); }

/* ─────────────────────────────────────────────────────────
   HERO
───────────────────────────────────────────────────────── */
.hero {
    min-height:100svh; display:flex; align-items:center;
    background:var(--bg); position:relative; overflow:hidden;
}

.hero-grid {
    position:absolute; inset:0;
    background-image:
        linear-gradient(rgba(255,255,255,.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px);
    background-size:64px 64px;
    -webkit-mask-image:radial-gradient(ellipse 80% 80% at 50% 40%, #000 30%, transparent 80%);
    mask-image:radial-gradient(ellipse 80% 80% at 50% 40%, #000 30%, transparent 80%);
}

.hero-orb {
    position:absolute; border-radius:50%; filter:blur(90px);
    animation:morphBlob 22s ease-in-out infinite;
}
.hero-orb-a {
    width:700px; height:700px;
    background:radial-gradient(circle,rgba(249,115,22,.1) 0%,transparent 70%);
    top:-250px; left:50%; transform:translateX(-50%);
}
.hero-orb-b {
    width:400px; height:400px;
    background:radial-gradient(circle,rgba(124,58,237,.07) 0%,transparent 70%);
    bottom:-100px; right:-80px; animation-delay:-8s;
}

.hero-content { position:relative; z-index:10; padding:8rem 0 6rem; }

.hero-badge {
    display:inline-flex; align-items:center; gap:.6rem;
    padding:.45rem 1rem .45rem .6rem;
    background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);
    border-radius:100px; backdrop-filter:blur(12px);
    font-size:.72rem; font-weight:600; color:var(--t2);
    animation:fadeDown .7s ease-out .1s both;
    margin-bottom:2rem;
}
.hero-badge-dot {
    width:7px; height:7px; border-radius:50%; background:#4ade80;
    box-shadow:0 0 8px rgba(74,222,128,.7); position:relative; flex-shrink:0;
}
.hero-badge-dot::after {
    content:''; position:absolute; inset:-2px; border-radius:50%; background:#4ade80;
    animation:pingDot 1.8s ease-out infinite;
}

.hero-h1 {
    font-size:clamp(3.2rem, 9vw, 6.5rem);
    font-weight:800; letter-spacing:-.04em; line-height:.97;
    color:var(--t1); margin-bottom:1.5rem;
    animation:fadeUp .8s cubic-bezier(.16,1,.3,1) .3s both;
}

.hero-sub {
    font-size:clamp(1rem,2vw,1.2rem);
    color:var(--t2); max-width:520px;
    line-height:1.72; margin-bottom:2.5rem;
    animation:fadeUp .8s cubic-bezier(.16,1,.3,1) .5s both;
}

.hero-ctas {
    display:flex; flex-wrap:wrap; gap:.9rem;
    animation:fadeUp .8s cubic-bezier(.16,1,.3,1) .65s both;
    margin-bottom:4rem;
}

.hero-stats {
    display:grid; grid-template-columns:repeat(4,1fr);
    border:1px solid var(--border); border-radius:16px;
    overflow:hidden; background:var(--surface);
    animation:fadeUp .8s cubic-bezier(.16,1,.3,1) .8s both;
}
@media(max-width:640px) { .hero-stats { grid-template-columns:repeat(2,1fr); } }

.hero-stat {
    padding:1.25rem 1rem; text-align:center;
    border-right:1px solid var(--border);
}
.hero-stat:last-child { border-right:none; }
@media(max-width:640px) {
    .hero-stat:nth-child(2) { border-right:none; }
    .hero-stat:nth-child(3) { border-top:1px solid var(--border); }
    .hero-stat:nth-child(4) { border-top:1px solid var(--border); border-right:none; }
}
.hero-stat-n { font-size:1.75rem; font-weight:800; color:var(--t1); line-height:1; }
.hero-stat-l { font-size:.7rem; color:var(--t3); margin-top:.3rem; font-weight:500; }

/* ─────────────────────────────────────────────────────────
   MARQUEE
───────────────────────────────────────────────────────── */
.marquee-strip {
    background:var(--bg-alt); border-top:1px solid var(--border); border-bottom:1px solid var(--border);
    padding:.9rem 0; overflow:hidden; position:relative;
}
.marquee-strip::before,.marquee-strip::after {
    content:''; position:absolute; inset-y:0; width:5rem; z-index:2; pointer-events:none;
}
.marquee-strip::before { left:0; background:linear-gradient(90deg,var(--bg-alt),transparent); }
.marquee-strip::after  { right:0; background:linear-gradient(-90deg,var(--bg-alt),transparent); }

.marquee-track {
    display:flex; width:max-content;
    animation:marqueeX 35s linear infinite;
}
.marquee-track:hover { animation-play-state:paused; }

.m-chip {
    display:inline-flex; align-items:center; gap:.45rem;
    padding:.45rem 1.1rem; margin:0 .35rem;
    border:1px solid var(--border); border-radius:100px;
    font-size:.78rem; font-weight:500; color:var(--t3);
    white-space:nowrap; transition:all .25s;
    cursor:default;
}
.m-chip:hover { border-color:rgba(249,115,22,.35); color:var(--orange-l); background:rgba(249,115,22,.05); }
.m-chip-dot { width:4px; height:4px; border-radius:50%; background:rgba(249,115,22,.5); }
.m-chip:hover .m-chip-dot { background:var(--orange-l); box-shadow:0 0 6px rgba(249,115,22,.8); }

/* ─────────────────────────────────────────────────────────
   SERVICES
───────────────────────────────────────────────────────── */
.services-bg { background:var(--bg); }

.service-card {
    position:relative; display:block; text-decoration:none;
    background:var(--surface); border:1px solid var(--border);
    border-radius:18px; padding:2rem; overflow:hidden;
    transition:transform .4s cubic-bezier(.16,1,.3,1), border-color .3s, box-shadow .4s, background .3s;
}
.service-card::before {
    content:''; position:absolute; inset:0;
    background:linear-gradient(135deg,rgba(249,115,22,.05) 0%,transparent 60%);
    opacity:0; transition:opacity .4s;
}
.service-card:hover {
    transform:translateY(-6px);
    border-color:rgba(249,115,22,.2);
    box-shadow:0 20px 60px rgba(0,0,0,.35), 0 0 0 1px rgba(249,115,22,.08);
    background:rgba(255,255,255,.05);
}
.service-card:hover::before { opacity:1; }

.service-num {
    position:absolute; top:1.25rem; right:1.5rem;
    font-size:3.5rem; font-weight:800; line-height:1;
    color:rgba(255,255,255,.025); transition:color .4s;
    font-variant-numeric:tabular-nums;
}
.service-card:hover .service-num { color:rgba(249,115,22,.055); }

.service-icon {
    width:3rem; height:3rem; border-radius:.9rem;
    display:flex; align-items:center; justify-content:center;
    background:linear-gradient(135deg,rgba(249,115,22,.1),rgba(249,115,22,.05));
    border:1px solid rgba(249,115,22,.12);
    transition:all .35s;
}
.service-card:hover .service-icon {
    background:linear-gradient(135deg,rgba(249,115,22,.2),rgba(249,115,22,.1));
    border-color:rgba(249,115,22,.25);
    transform:scale(1.08) rotate(4deg);
    box-shadow:0 6px 24px rgba(249,115,22,.15);
}

.service-title {
    font-size:1rem; font-weight:700; color:var(--t1);
    margin-top:1.25rem; margin-bottom:.5rem;
    transition:color .25s;
}
.service-card:hover .service-title { color:var(--orange-l); }

.service-desc { font-size:.85rem; color:var(--t3); line-height:1.65; }

.service-arrow {
    display:flex; align-items:center; gap:.35rem;
    font-size:.75rem; font-weight:600; color:var(--orange-l);
    margin-top:1.25rem;
    opacity:0; transform:translateX(-6px);
    transition:opacity .3s, transform .3s;
}
.service-card:hover .service-arrow { opacity:1; transform:none; }

/* ─────────────────────────────────────────────────────────
   WHY US
───────────────────────────────────────────────────────── */
.why-bg {
    background:var(--bg-alt);
    border-top:1px solid var(--border); border-bottom:1px solid var(--border);
}

.why-pill {
    display:flex; align-items:flex-start; gap:1rem;
    padding:1.25rem 1.5rem; border-radius:14px;
    background:var(--surface); border:1px solid var(--border);
    transition:border-color .3s, background .3s;
}
.why-pill:hover { border-color:var(--bh); background:rgba(255,255,255,.05); }
.why-pill-icon {
    width:2.2rem; height:2.2rem; border-radius:.6rem; flex-shrink:0;
    display:flex; align-items:center; justify-content:center;
    background:rgba(249,115,22,.1); border:1px solid rgba(249,115,22,.15);
}

/* ─────────────────────────────────────────────────────────
   PORTFOLIO
───────────────────────────────────────────────────────── */
.port-bg { background:var(--bg); }

.port-card {
    position:relative; display:block; text-decoration:none;
    border-radius:18px; overflow:hidden;
    border:1px solid var(--border);
    background:var(--surface);
    transition:transform .45s cubic-bezier(.16,1,.3,1), border-color .3s, box-shadow .45s;
}
.port-card:hover {
    transform:translateY(-8px);
    border-color:rgba(249,115,22,.2);
    box-shadow:0 28px 70px rgba(0,0,0,.4), 0 0 0 1px rgba(249,115,22,.07);
}

.port-thumb { position:relative; overflow:hidden; }
.port-thumb img,.port-thumb .port-placeholder {
    width:100%; height:100%; object-fit:cover;
    transition:transform .55s cubic-bezier(.16,1,.3,1);
}
.port-card:hover .port-thumb img,.port-card:hover .port-thumb .port-placeholder { transform:scale(1.07); }

.port-overlay {
    position:absolute; inset:0;
    background:linear-gradient(180deg,transparent 35%,rgba(7,7,10,.96) 100%);
    transition:background .35s;
}
.port-card:hover .port-overlay { background:linear-gradient(180deg,transparent 20%,rgba(7,7,10,.99) 100%); }

.port-info { position:absolute; bottom:0; left:0; right:0; padding:1.5rem; }

.port-cat {
    display:inline-flex; align-items:center;
    padding:.25rem .7rem; border-radius:100px;
    background:rgba(249,115,22,.12); border:1px solid rgba(249,115,22,.2);
    font-size:.65rem; font-weight:700; letter-spacing:.08em; text-transform:uppercase;
    color:var(--orange-l); margin-bottom:.6rem;
}

.port-title { font-size:1rem; font-weight:700; color:var(--t1); line-height:1.3; }
.port-tag { font-size:.8rem; color:var(--t2); margin-top:.3rem; }

.port-cta {
    display:inline-flex; align-items:center; gap:.35rem;
    font-size:.7rem; font-weight:700; letter-spacing:.06em; text-transform:uppercase;
    color:var(--orange); margin-top:.8rem;
    opacity:0; transform:translateY(6px);
    transition:opacity .3s, transform .3s;
}
.port-card:hover .port-cta { opacity:1; transform:none; }

/* ─────────────────────────────────────────────────────────
   STATS
───────────────────────────────────────────────────────── */
.stats-bg {
    background:linear-gradient(135deg, #f97316 0%, #ea580c 40%, #c2410c 70%, #7c3aed 100%);
    background-size:300% 300%; animation:gradShift 12s ease infinite;
    position:relative; overflow:hidden;
}
.stats-noise {
    position:absolute; inset:0;
    background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.04'/%3E%3C/svg%3E");
    mix-blend-mode:overlay; opacity:.5;
}
.stats-grid {
    display:grid; grid-template-columns:repeat(4,1fr);
    gap:0; position:relative; z-index:1;
}
@media(max-width:640px) { .stats-grid { grid-template-columns:repeat(2,1fr); } }

.stat-box { padding:3rem 1.5rem; text-align:center; position:relative; }
.stat-box::after {
    content:''; position:absolute; right:0; top:20%; bottom:20%;
    width:1px; background:rgba(255,255,255,.15);
}
.stat-box:last-child::after { display:none; }
@media(max-width:640px) {
    .stat-box:nth-child(2)::after { display:none; }
    .stat-box:nth-child(3),
    .stat-box:nth-child(4) { border-top:1px solid rgba(255,255,255,.15); }
}
.stat-box-n { font-size:3.5rem; font-weight:800; color:#fff; line-height:1; text-shadow:0 2px 20px rgba(0,0,0,.2); }
.stat-box-l { font-size:.78rem; color:rgba(255,255,255,.65); margin-top:.5rem; font-weight:500; letter-spacing:.04em; }

/* ─────────────────────────────────────────────────────────
   PROCESS
───────────────────────────────────────────────────────── */
.process-bg { background:var(--bg-alt); }

.process-step { position:relative; text-align:center; }

.process-num {
    width:3.5rem; height:3.5rem; border-radius:1rem;
    display:flex; align-items:center; justify-content:center;
    font-size:1.1rem; font-weight:800; color:var(--orange);
    background:rgba(249,115,22,.08); border:2px solid rgba(249,115,22,.15);
    margin:0 auto; transition:all .35s; position:relative; z-index:2;
}
.process-step:hover .process-num {
    background:rgba(249,115,22,.15); border-color:rgba(249,115,22,.4);
    transform:scale(1.1) rotate(6deg);
    box-shadow:0 8px 32px rgba(249,115,22,.2);
}

.process-line {
    position:absolute; top:1.75rem; left:calc(50% + 2rem); right:calc(-50% + 2rem);
    height:2px;
    background:linear-gradient(90deg,rgba(249,115,22,.25),rgba(249,115,22,.04));
}
.process-step-title { font-size:.95rem; font-weight:700; color:var(--t1); margin-top:1.1rem; }
.process-step-desc  { font-size:.8rem; color:var(--t3); line-height:1.6; margin-top:.4rem; }

/* ─────────────────────────────────────────────────────────
   TESTIMONIALS
───────────────────────────────────────────────────────── */
.testi-bg { background:var(--bg); }

.testi-card {
    position:relative; overflow:hidden;
    background:var(--surface); border:1px solid var(--border); border-radius:18px; padding:1.75rem;
    transition:transform .4s cubic-bezier(.16,1,.3,1), border-color .3s, box-shadow .4s;
}
.testi-card::before {
    content:''; position:absolute; top:0; left:0; right:0; height:2px;
    background:linear-gradient(90deg,transparent,rgba(249,115,22,.5),transparent);
    opacity:0; transition:opacity .3s;
}
.testi-card:hover { transform:translateY(-5px); border-color:var(--bh); box-shadow:0 20px 50px rgba(0,0,0,.3); }
.testi-card:hover::before { opacity:1; }

.testi-quote { font-size:4rem; line-height:1; color:rgba(249,115,22,.09); font-family:Georgia,serif; position:absolute; top:.6rem; right:1.25rem; }
.testi-stars { display:flex; gap:.2rem; }
.testi-text { font-size:.85rem; color:var(--t2); line-height:1.75; margin:.9rem 0 1.25rem; font-style:italic; }
.testi-divider { height:1px; background:var(--border); margin-bottom:1.25rem; }
.testi-author { display:flex; align-items:center; gap:.75rem; }
.testi-avatar {
    width:2.5rem; height:2.5rem; border-radius:50%; overflow:hidden; flex-shrink:0;
    background:linear-gradient(135deg,var(--orange),var(--orange-d));
    display:flex; align-items:center; justify-content:center;
    font-size:.85rem; font-weight:700; color:#fff;
    ring:2px solid rgba(249,115,22,.2);
}
.testi-name { font-size:.85rem; font-weight:700; color:var(--t1); }
.testi-role { font-size:.75rem; color:var(--t3); }

/* ─────────────────────────────────────────────────────────
   BLOG
───────────────────────────────────────────────────────── */
.blog-bg { background:var(--bg-alt); }

.blog-card {
    display:block; text-decoration:none;
    background:var(--surface); border:1px solid var(--border); border-radius:18px; overflow:hidden;
    transition:transform .4s cubic-bezier(.16,1,.3,1), border-color .3s, box-shadow .4s;
}
.blog-card:hover { transform:translateY(-5px); border-color:var(--bh); box-shadow:0 18px 48px rgba(0,0,0,.3); }

.blog-thumb { overflow:hidden; aspect-ratio:16/9; background:var(--bg); }
.blog-thumb img { width:100%; height:100%; object-fit:cover; transition:transform .5s cubic-bezier(.16,1,.3,1); }
.blog-card:hover .blog-thumb img { transform:scale(1.06); }

.blog-body { padding:1.5rem; }
.blog-cat { font-size:.65rem; font-weight:700; letter-spacing:.1em; text-transform:uppercase; color:var(--orange); }
.blog-title { font-size:.95rem; font-weight:700; color:var(--t1); line-height:1.4; margin:.4rem 0 .75rem; transition:color .2s; }
.blog-card:hover .blog-title { color:var(--orange-l); }
.blog-meta { display:flex; align-items:center; gap:.5rem; font-size:.7rem; color:var(--t3); }
.blog-sep { opacity:.4; }

/* ─────────────────────────────────────────────────────────
   CTA SECTION
───────────────────────────────────────────────────────── */
.cta-bg { background:var(--bg); position:relative; overflow:hidden; }
.cta-orb-a {
    position:absolute; width:600px; height:600px; border-radius:50%;
    background:radial-gradient(circle,rgba(249,115,22,.07) 0%,transparent 70%);
    top:50%; left:50%; transform:translate(-50%,-50%); filter:blur(80px);
    animation:morphBlob 20s ease-in-out infinite;
}
.cta-orb-b {
    position:absolute; width:350px; height:350px; border-radius:50%;
    background:radial-gradient(circle,rgba(124,58,237,.05) 0%,transparent 70%);
    top:-80px; right:10%; filter:blur(70px);
    animation:morphBlob 18s ease-in-out infinite; animation-delay:-6s;
}

.cta-box {
    border:1px solid var(--border); border-radius:24px; padding:4rem 3rem;
    background:rgba(255,255,255,.02); backdrop-filter:blur(10px); position:relative; z-index:1;
    text-align:center;
}

.cta-h2 { font-size:clamp(2rem,5vw,3.5rem); font-weight:800; letter-spacing:-.03em; line-height:1.1; color:var(--t1); }

.cta-proof { display:flex; flex-wrap:wrap; align-items:center; justify-content:center; gap:1.5rem; }
.cta-proof-item { display:flex; align-items:center; gap:.4rem; font-size:.78rem; color:var(--t3); }
.cta-proof-check { width:.9rem; height:.9rem; color:#4ade80; flex-shrink:0; }

/* ─────────────────────────────────────────────────────────
   CURSOR GLOW
───────────────────────────────────────────────────────── */
#cursorGlow {
    position:fixed; width:450px; height:450px; border-radius:50%; pointer-events:none; z-index:0;
    background:radial-gradient(circle,rgba(249,115,22,.055) 0%,transparent 70%);
    transform:translate(-50%,-50%); transition:opacity .4s;
}
</style>
@endsection

@section('content')

<div id="cursorGlow" class="hidden lg:block" aria-hidden="true"></div>

{{-- ═══════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════ --}}
<section class="hero">
    <div class="hero-grid" aria-hidden="true"></div>
    <div class="hero-orb hero-orb-a" aria-hidden="true"></div>
    <div class="hero-orb hero-orb-b" aria-hidden="true"></div>

    <div class="wrap w-full">
        <div class="hero-content max-w-2xl">

            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Available for new projects &middot; Est. {{ $settings['founded_year'] ?? '2022' }}
            </div>

            <h1 class="hero-h1">
                We turn your<br>
                idea into a<br>
                <span class="grad-text">live product.</span>
            </h1>

            <p class="hero-sub">
                {{ $settings['site_tagline'] ?? 'Production-grade web and mobile applications for startups and growing businesses.' }}
                No fluff, no hand-holding, just shipped code.
            </p>

            <div class="hero-ctas">
                <a href="{{ url('/contact') }}" class="btn-solid">
                    {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ url('/portfolio') }}" class="btn-ghost">
                    {{ $settings['hero_cta_secondary_label'] ?? 'View Our Work' }}
                </a>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-n grad-text">{{ $settings['projects_delivered'] ?? '18' }}+</div>
                    <div class="hero-stat-l">Projects Delivered</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-n grad-text">{{ $settings['happy_clients'] ?? '15' }}+</div>
                    <div class="hero-stat-l">Happy Clients</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-n grad-text">{{ $settings['years_experience'] ?? '5' }}+</div>
                    <div class="hero-stat-l">Years of Experience</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-n grad-text">{{ $settings['industries_served'] ?? '7' }}+</div>
                    <div class="hero-stat-l">Industries Served</div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     TECH MARQUEE
═══════════════════════════════════════════════════════ --}}
@php
$chips = $techStackItems->count()
    ? $techStackItems->pluck('name')->toArray()
    : ['Laravel','Flutter','React','Next.js','Node.js','MySQL','PostgreSQL','Firebase','GPT-4','Gemini','Figma','Docker','AWS','Tailwind CSS','TypeScript','Redis','Vue.js','Supabase'];
@endphp
<div class="marquee-strip">
    <div class="marquee-track">
        @foreach($chips as $t)
        <span class="m-chip"><span class="m-chip-dot"></span>{{ $t }}</span>
        @endforeach
        @foreach($chips as $t)
        <span class="m-chip"><span class="m-chip-dot"></span>{{ $t }}</span>
        @endforeach
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════
     SERVICES
═══════════════════════════════════════════════════════ --}}
<section class="services-bg page-section">
    <div class="wrap">

        <div class="sr up" style="max-width:600px;">
            <p class="eyebrow">What We Build</p>
            <h2 class="h2" style="margin-top:1rem;">
                Full-stack expertise,<br>end to end.
            </h2>
            <div class="divider"></div>
            <p class="lead" style="margin-top:1rem;">
                From early-stage MVPs to production systems handling real traffic, we cover every layer of the stack.
            </p>
        </div>

        @php
        $svcs = [
            ['n'=>'01','title'=>'Web Application Development','desc'=>'Laravel and React applications architected for scale. Clean codebase, CI/CD pipelines, and zero-downtime deployments included.',
             'href'=>'/services/web-app-development',
             'svg'=>'<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5a17.92 17.92 0 01-8.716-2.247"/>'],
            ['n'=>'02','title'=>'Mobile App Development','desc'=>'Cross-platform Flutter apps for iOS and Android. One codebase, native performance, delivered to both stores.',
             'href'=>'/services/mobile-app-development',
             'svg'=>'<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 15.75h3"/>'],
            ['n'=>'03','title'=>'AI Integration','desc'=>'GPT-4, Gemini, custom LLM pipelines, RAG systems. Real AI that solves a real problem in your product.',
             'href'=>'/services/ai-integration',
             'svg'=>'<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>'],
            ['n'=>'04','title'=>'MVP Development','desc'=>'Go from validated idea to a live, production MVP in 6 to 8 weeks. Built for investors and early users, not just for demos.',
             'href'=>'/services/mvp-development',
             'svg'=>'<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>'],
            ['n'=>'05','title'=>'UI / UX Design & Dev','desc'=>'Figma designs translated into pixel-perfect, performant interfaces. Design systems, component libraries, responsive layouts.',
             'href'=>'/services/ui-ux-development',
             'svg'=>'<path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>'],
            ['n'=>'06','title'=>'Ongoing Retainer Support','desc'=>'Monthly retainer for features, fixes, and performance monitoring. Your product keeps improving after launch.',
             'href'=>'/contact',
             'svg'=>'<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>'],
        ];
        @endphp

        <div class="sg" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(310px,1fr));gap:1.25rem;margin-top:3.5rem;">
            @foreach($svcs as $svc)
            <a href="{{ url($svc['href']) }}" class="service-card">
                <span class="service-num">{{ $svc['n'] }}</span>
                <div class="service-icon">
                    <svg class="w-5 h-5" style="color:var(--orange-l)" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        {!! $svc['svg'] !!}
                    </svg>
                </div>
                <div class="service-title">{{ $svc['title'] }}</div>
                <p class="service-desc">{{ $svc['desc'] }}</p>
                <div class="service-arrow">
                    Learn more
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     WHY FOUNDER-LED
═══════════════════════════════════════════════════════ --}}
<section class="why-bg page-section">
    <div class="wrap">
        <div style="display:grid;grid-template-columns:1fr;gap:3.5rem;align-items:center;" class="lg:grid-cols-[1fr_1.1fr]">

            <div class="sr left">
                <p class="eyebrow">The Plazmasoft Difference</p>
                <h2 class="h2" style="margin-top:1rem;">
                    You talk to the<br>
                    person <span class="grad-text">building it.</span>
                </h2>
                <div class="divider"></div>
                <p class="lead" style="margin-top:1rem;">
                    No account managers. No relay chains. No context lost between a sales call and a developer.
                    When you work with us, you talk directly to the founder who writes the code and ships the product.
                </p>
                <a href="{{ url('/about') }}" class="btn-link" style="margin-top:1.5rem;">
                    Our story
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="sr right" style="display:flex;flex-direction:column;gap:.9rem;">
                @php $whys = [
                    ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z','title'=>'Fast, Direct Communication','desc'=>'Slack or WhatsApp access. Same-day responses. Weekly updates without asking.'],
                    ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','title'=>'Production-First Mindset','desc'=>'We build for scale, security, and maintainability from day one, not just for the demo.'],
                    ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4','title'=>'Honest Scoping and Timelines','desc'=>'We quote only what we can deliver. No scope inflation, no hidden costs at the end.'],
                ]; @endphp
                @foreach($whys as $w)
                <div class="why-pill">
                    <div class="why-pill-icon">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--orange)">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $w['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <div style="font-size:.875rem;font-weight:700;color:var(--t1);margin-bottom:.2rem;">{{ $w['title'] }}</div>
                        <div style="font-size:.8rem;color:var(--t3);line-height:1.6;">{{ $w['desc'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     PORTFOLIO
═══════════════════════════════════════════════════════ --}}
@if($featuredProjects->count())
<section class="port-bg page-section">
    <div class="wrap">

        <div style="display:flex;flex-wrap:wrap;align-items:flex-end;justify-content:space-between;gap:1.5rem;" class="sr up">
            <div>
                <p class="eyebrow">Portfolio</p>
                <h2 class="h2" style="margin-top:1rem;">Selected work.</h2>
                <div class="divider"></div>
                <p class="lead" style="margin-top:.75rem;max-width:440px;">Real products for real businesses. Shipped, live, and growing.</p>
            </div>
            <a href="{{ url('/portfolio') }}" class="btn-ghost" style="flex-shrink:0;">
                View all projects
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="sg" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:1.25rem;margin-top:3rem;">
            @foreach($featuredProjects as $proj)
            <a href="{{ url('/portfolio/'.$proj->slug) }}" class="port-card">
                <div class="port-thumb" style="aspect-ratio:4/3;">
                    @if($proj->banner_image_path)
                        <img src="{{ asset('storage/'.$proj->banner_image_path) }}" alt="{{ $proj->title }}" loading="lazy">
                    @else
                        <div class="port-placeholder" style="background:linear-gradient(135deg,#111117 0%,#1a1a24 100%);display:flex;align-items:center;justify-content:center;">
                            <span style="font-size:3.5rem;font-weight:800;color:rgba(255,255,255,.04);font-family:'Space Grotesk',sans-serif;">{{ substr($proj->title,0,2) }}</span>
                        </div>
                    @endif
                    <div class="port-overlay"></div>
                </div>
                <div class="port-info">
                    @if($proj->category)
                    <div class="port-cat">{{ $proj->category->name }}</div>
                    @endif
                    <div class="port-title">{{ $proj->title }}</div>
                    @if($proj->tagline)
                    <div class="port-tag">{{ $proj->tagline }}</div>
                    @endif
                    <div class="port-cta">
                        View case study
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</section>
@endif


{{-- ═══════════════════════════════════════════════════════
     STATS
═══════════════════════════════════════════════════════ --}}
<section class="stats-bg">
    <div class="stats-noise" aria-hidden="true"></div>
    <div class="wrap" style="position:relative;z-index:1;">
        <div class="stats-grid sr up">
            <div class="stat-box">
                <div class="stat-box-n" data-count-to="{{ preg_replace('/\D/','',$settings['projects_delivered'] ?? '18') }}">0</div>
                <div class="stat-box-l">Projects Delivered</div>
            </div>
            <div class="stat-box">
                <div class="stat-box-n" data-count-to="{{ preg_replace('/\D/','',$settings['happy_clients'] ?? '15') }}">0</div>
                <div class="stat-box-l">Happy Clients</div>
            </div>
            <div class="stat-box">
                <div class="stat-box-n" data-count-to="{{ preg_replace('/\D/','',$settings['years_experience'] ?? '5') }}">0</div>
                <div class="stat-box-l">Years Active</div>
            </div>
            <div class="stat-box">
                <div class="stat-box-n" data-count-to="{{ preg_replace('/\D/','',$settings['industries_served'] ?? '7') }}">0</div>
                <div class="stat-box-l">Industries Served</div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     PROCESS
═══════════════════════════════════════════════════════ --}}
@if($processSteps->count())
<section class="process-bg page-section">
    <div class="wrap">

        <div class="sr up" style="text-align:center;max-width:520px;margin:0 auto;">
            <p class="eyebrow">How It Works</p>
            <h2 class="h2" style="margin-top:1rem;">Simple. Transparent. Structured.</h2>
            <div class="divider center"></div>
            <p class="lead" style="margin-top:.75rem;">You always know what's happening, what's next, and why.</p>
        </div>

        <div class="sg" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2rem;margin-top:4rem;position:relative;">
            @foreach($processSteps as $step)
            <div class="process-step">
                @if(!$loop->last)
                <div class="process-line hidden lg:block" aria-hidden="true"></div>
                @endif
                <div class="process-num">{{ str_pad($step->step_number,2,'0',STR_PAD_LEFT) }}</div>
                <div class="process-step-title">{{ $step->title }}</div>
                <p class="process-step-desc">{{ $step->description }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif


{{-- ═══════════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════════ --}}
@if($testimonials->count())
<section class="testi-bg page-section">
    <div class="wrap">

        <div class="sr up" style="text-align:center;max-width:480px;margin:0 auto;">
            <p class="eyebrow">Client Stories</p>
            <h2 class="h2" style="margin-top:1rem;">Results speak louder.</h2>
            <div class="divider center"></div>
        </div>

        <div class="sg" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(290px,1fr));gap:1.25rem;margin-top:3.5rem;">
            @foreach($testimonials as $t)
            <div class="testi-card">
                <span class="testi-quote">"</span>
                <div class="testi-stars">
                    @for($i = 0; $i < ($t->rating ?? 5); $i++)
                    <svg width="13" height="13" fill="currentColor" viewBox="0 0 20 20" style="color:var(--orange)">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="testi-text">"{{ $t->quote }}"</p>
                <div class="testi-divider"></div>
                <div class="testi-author">
                    @if($t->author_avatar_path)
                        <img src="{{ asset('storage/'.$t->author_avatar_path) }}" alt="{{ $t->author_name }}" class="testi-avatar" style="object-fit:cover;">
                    @else
                        <div class="testi-avatar">{{ substr($t->author_name,0,1) }}</div>
                    @endif
                    <div>
                        <div class="testi-name">{{ $t->author_name }}</div>
                        <div class="testi-role">{{ $t->author_role }}{{ $t->author_company ? ', '.$t->author_company : '' }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif


{{-- ═══════════════════════════════════════════════════════
     BLOG
═══════════════════════════════════════════════════════ --}}
@if($latestPosts->count())
<section class="blog-bg page-section">
    <div class="wrap">

        <div style="display:flex;flex-wrap:wrap;align-items:flex-end;justify-content:space-between;gap:1.5rem;" class="sr up">
            <div>
                <p class="eyebrow">Insights</p>
                <h2 class="h2" style="margin-top:1rem;">From the blog.</h2>
                <div class="divider"></div>
            </div>
            <a href="{{ url('/blog') }}" class="btn-ghost" style="flex-shrink:0;">All articles</a>
        </div>

        <div class="sg" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(290px,1fr));gap:1.25rem;margin-top:3rem;">
            @foreach($latestPosts as $post)
            <a href="{{ url('/blog/'.$post->slug) }}" class="blog-card">
                <div class="blog-thumb">
                    @if($post->cover_image_path)
                        <img src="{{ asset('storage/'.$post->cover_image_path) }}" alt="{{ $post->title }}" loading="lazy">
                    @else
                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#0e0e16,#161622);display:flex;align-items:center;justify-content:center;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" style="color:rgba(255,255,255,.08)">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                            </svg>
                        </div>
                    @endif
                </div>
                <div class="blog-body">
                    @if($post->category)
                    <div class="blog-cat">{{ $post->category->name }}</div>
                    @endif
                    <div class="blog-title">{{ $post->title }}</div>
                    <div class="blog-meta">
                        @if($post->published_at)
                            <span>{{ $post->published_at->format('M j, Y') }}</span>
                            <span class="blog-sep">&middot;</span>
                        @endif
                        <span>{{ $post->reading_time ?? 5 }} min read</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</section>
@endif


{{-- ═══════════════════════════════════════════════════════
     CTA
═══════════════════════════════════════════════════════ --}}
<section class="cta-bg page-section">
    <div class="cta-orb-a" aria-hidden="true"></div>
    <div class="cta-orb-b" aria-hidden="true"></div>

    <div class="wrap" style="position:relative;z-index:1;">
        <div class="cta-box sr up">

            <p class="eyebrow" style="justify-content:center;">Ready to build?</p>

            <h2 class="cta-h2" style="margin-top:1.25rem;">
                Your next product,<br>
                <span class="grad-text">delivered.</span>
            </h2>

            <p class="lead" style="max-width:460px;margin:1.25rem auto 2.5rem;">
                Tell us what you're building. We'll reply within one business day with an honest assessment and a clear plan.
            </p>

            <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-bottom:2.5rem;">
                <a href="{{ url('/contact') }}" class="btn-solid" style="font-size:.95rem;padding:1rem 2.5rem;">
                    {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="mailto:{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}" class="btn-ghost" style="font-size:.95rem;padding:1rem 2.5rem;">
                    {{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}
                </a>
            </div>

            <div class="cta-proof">
                <span class="cta-proof-item">
                    <svg class="cta-proof-check" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    No upfront payment
                </span>
                <span class="cta-proof-item">
                    <svg class="cta-proof-check" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    Free scoping call
                </span>
                <span class="cta-proof-item">
                    <svg class="cta-proof-check" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    Reply within 24 hours
                </span>
                <span class="cta-proof-item">
                    <svg class="cta-proof-check" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    Transparent pricing
                </span>
            </div>

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {

    /* ── Scroll reveal ── */
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
    }, { threshold: 0.09, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.sr, .sg').forEach(el => io.observe(el));

    /* ── Grid column for why section ── */
    const whySec = document.querySelector('.why-bg .wrap > div');
    if (whySec && window.innerWidth >= 1024) {
        whySec.style.gridTemplateColumns = '1fr 1.1fr';
    }

    /* ── Counter animation ── */
    const cio = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting && !e.target.dataset.counted) {
                e.target.dataset.counted = '1';
                const target = +e.target.dataset.countTo;
                const dur = 2000, t0 = performance.now();
                const tick = (now) => {
                    const p = Math.min((now - t0) / dur, 1);
                    const v = Math.floor((1 - Math.pow(1 - p, 3)) * target);
                    e.target.textContent = v + '+';
                    if (p < 1) requestAnimationFrame(tick);
                    else e.target.textContent = target + '+';
                };
                requestAnimationFrame(tick);
            }
        });
    }, { threshold: 0.6 });
    document.querySelectorAll('[data-count-to]').forEach(el => cio.observe(el));

    /* ── Cursor glow ── */
    const glow = document.getElementById('cursorGlow');
    if (glow && window.innerWidth > 1024) {
        let mx = 0, my = 0, gx = 0, gy = 0;
        window.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });
        const loop = () => {
            gx += (mx - gx) * .07; gy += (my - gy) * .07;
            glow.style.left = gx + 'px'; glow.style.top = gy + 'px';
            requestAnimationFrame(loop);
        };
        loop();
    }

    /* ── Service grid responsive ── */
    const setGrid = () => {
        const w = window.innerWidth;
        document.querySelectorAll('.sg').forEach(g => {
            g.style.gridTemplateColumns = w < 640 ? '1fr' : w < 900 ? 'repeat(2,1fr)' : 'repeat(3,1fr)';
        });
    };
    setGrid();
    window.addEventListener('resize', setGrid);
});
</script>
@endsection
