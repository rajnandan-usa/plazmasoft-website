{{-- resources/views/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Plazmasoft | Software Development Studio in India')
@section('meta_description', 'Plazmasoft is a software development studio based in India. We build production-grade web apps, mobile apps, and AI integrations for startups and growing businesses.')

@section('head')
<style>
    /* ═══════════════════════════════════════════════════
       ABOUT PAGE - PREMIUM STYLES
    ═══════════════════════════════════════════════════ */

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(40px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes morphBlob {
        0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
        25% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
        50% { border-radius: 50% 60% 30% 60% / 30% 60% 70% 40%; }
        75% { border-radius: 60% 40% 60% 30% / 60% 40% 30% 60%; }
    }

    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @keyframes shimmer {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }

    @keyframes pulse-ring {
        0% { transform: scale(0.8); opacity: 1; }
        100% { transform: scale(2.5); opacity: 0; }
    }

    @keyframes drawBorder {
        from { stroke-dashoffset: 1000; }
        to { stroke-dashoffset: 0; }
    }

    @keyframes typewrite {
        from { width: 0; }
        to { width: 100%; }
    }

    @keyframes rotateSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .animate-fade-up { animation: fadeInUp 0.8s ease-out forwards; }
    .animate-fade-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-left { animation: fadeInLeft 0.8s ease-out forwards; }
    .animate-fade-right { animation: fadeInRight 0.8s ease-out forwards; }
    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-morph { animation: morphBlob 15s ease-in-out infinite; }

    /* Scroll reveal */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .reveal-left {
        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal-left.is-visible {
        opacity: 1;
        transform: translateX(0);
    }

    .reveal-right {
        opacity: 0;
        transform: translateX(50px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal-right.is-visible {
        opacity: 1;
        transform: translateX(0);
    }

    .stagger-children > * {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .stagger-children.is-visible > *:nth-child(1) { transition-delay: 0.05s; opacity: 1; transform: translateY(0); }
    .stagger-children.is-visible > *:nth-child(2) { transition-delay: 0.15s; opacity: 1; transform: translateY(0); }
    .stagger-children.is-visible > *:nth-child(3) { transition-delay: 0.25s; opacity: 1; transform: translateY(0); }
    .stagger-children.is-visible > *:nth-child(4) { transition-delay: 0.35s; opacity: 1; transform: translateY(0); }
    .stagger-children.is-visible > *:nth-child(5) { transition-delay: 0.45s; opacity: 1; transform: translateY(0); }
    .stagger-children.is-visible > *:nth-child(6) { transition-delay: 0.55s; opacity: 1; transform: translateY(0); }

    /* Text gradient */
    .text-gradient-premium {
        background: linear-gradient(135deg, #fb923c 0%, #f97316 25%, #ea580c 50%, #fb923c 75%, #fbbf24 100%);
        background-size: 300% 100%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradientShift 5s ease infinite;
    }

    /* Section styling */
    .section-label-dark {
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: #fb923c;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-label-dark::before,
    .section-label-dark::after {
        content: '';
        width: 2rem;
        height: 1px;
        background: linear-gradient(90deg, rgba(251, 146, 60, 0.5), transparent);
    }
    .section-label-dark::before {
        background: linear-gradient(90deg, transparent, rgba(251, 146, 60, 0.5));
    }

    .section-title-dark {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 800;
        color: white;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }

    .section-divider {
        width: 3rem;
        height: 3px;
        border-radius: 2px;
        background: linear-gradient(90deg, #fb923c, #ea580c);
        margin: 1rem auto 0;
    }

    /* ═══════════════════════════════════════════════════
       ABOUT HERO
    ═══════════════════════════════════════════════════ */
    .about-hero {
        background: radial-gradient(ellipse 80% 50% at 50% 0%, rgba(251,146,60,0.06) 0%, transparent 50%),
                    radial-gradient(ellipse 60% 80% at 20% 100%, rgba(124,58,237,0.04) 0%, transparent 50%),
                    linear-gradient(180deg, #030712 0%, #0a0f1e 100%);
        position: relative;
        overflow: hidden;
    }

    .about-hero .grid-pattern {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255,255,255,0.015) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px);
        background-size: 60px 60px;
        mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 20%, transparent 70%);
    }

    .hero-badge-about {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(20px);
        position: relative;
        overflow: hidden;
    }

    .hero-badge-about::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, transparent, rgba(251, 146, 60, 0.08), transparent);
        animation: shimmer 4s ease-in-out infinite;
        background-size: 200% 100%;
    }

    /* ═══════════════════════════════════════════════════
       FOUNDER SECTION
    ═══════════════════════════════════════════════════ */
    .founder-section {
        background: linear-gradient(180deg, #0a0f1e 0%, #030712 100%);
    }

    .founder-image-container {
        position: relative;
    }

    .founder-image-frame {
        position: relative;
        border-radius: 1.5rem;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(251,146,60,0.1) 0%, rgba(251,146,60,0.02) 100%);
        border: 1px solid rgba(251, 146, 60, 0.15);
        transition: all 0.5s;
    }

    .founder-image-frame:hover {
        border-color: rgba(251, 146, 60, 0.3);
        box-shadow: 0 30px 80px rgba(251, 146, 60, 0.1);
    }

    .founder-image-frame::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 60%, rgba(3, 7, 18, 0.8) 100%);
        z-index: 1;
    }

    .founder-orbiting-ring {
        position: absolute;
        inset: -20px;
        border: 1px dashed rgba(251, 146, 60, 0.1);
        border-radius: 50%;
        animation: rotateSlow 30s linear infinite;
    }

    .founder-orbiting-dot {
        position: absolute;
        top: 0;
        left: 50%;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #fb923c;
        box-shadow: 0 0 15px rgba(251, 146, 60, 0.5);
        transform: translateX(-50%);
    }

    .founder-stat-badge {
        position: absolute;
        background: rgba(3, 7, 18, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(20px);
        border-radius: 1rem;
        padding: 1rem 1.25rem;
        transition: all 0.4s;
        z-index: 5;
    }

    .founder-stat-badge:hover {
        border-color: rgba(251, 146, 60, 0.3);
        transform: translateY(-3px);
    }

    .founder-text-highlight {
        color: #fb923c;
        font-weight: 600;
    }

    .founder-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 2rem;
        font-size: 0.875rem;
        font-weight: 600;
        border-radius: 100px;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .founder-link-primary {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        color: white;
    }

    .founder-link-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 40px rgba(249, 115, 22, 0.3);
    }

    .founder-link-ghost {
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
    }

    .founder-link-ghost:hover {
        border-color: rgba(255, 255, 255, 0.2);
        color: white;
        background: rgba(255, 255, 255, 0.05);
    }

    /* ═══════════════════════════════════════════════════
       STATS SECTION
    ═══════════════════════════════════════════════════ */
    .stats-section-about {
        background: linear-gradient(180deg, #030712 0%, #0a0f1e 50%, #030712 100%);
        position: relative;
    }

    .stat-card {
        position: relative;
        text-align: center;
        padding: 2.5rem 1.5rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 1.25rem;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(251, 146, 60, 0.5), transparent);
        opacity: 0;
        transition: opacity 0.4s;
    }

    .stat-card:hover {
        border-color: rgba(251, 146, 60, 0.15);
        background: rgba(255, 255, 255, 0.04);
        transform: translateY(-5px);
    }

    .stat-card:hover::before { opacity: 1; }

    .stat-card-number {
        font-size: 3rem;
        font-weight: 800;
        line-height: 1;
        background: linear-gradient(135deg, #fb923c, #f97316);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-card-label {
        margin-top: 0.75rem;
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.4);
        font-weight: 500;
    }

    /* ═══════════════════════════════════════════════════
       VALUES SECTION
    ═══════════════════════════════════════════════════ */
    .values-section {
        background: linear-gradient(180deg, #030712 0%, #0a0f1e 100%);
    }

    .value-card {
        position: relative;
        padding: 2.5rem 2rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 1.5rem;
        text-align: center;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        overflow: hidden;
    }

    .value-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(251, 146, 60, 0.03) 0%, transparent 50%);
        opacity: 0;
        transition: opacity 0.5s;
        border-radius: inherit;
    }

    .value-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.02), transparent);
        transition: left 0.7s;
    }

    .value-card:hover {
        border-color: rgba(251, 146, 60, 0.2);
        transform: translateY(-8px);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(251, 146, 60, 0.08);
    }

    .value-card:hover::before { opacity: 1; }
    .value-card:hover::after { left: 100%; }

    .value-icon-container {
        width: 5rem;
        height: 5rem;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1.25rem;
        background: rgba(251, 146, 60, 0.06);
        border: 1px solid rgba(251, 146, 60, 0.1);
        transition: all 0.4s;
        font-size: 2rem;
    }

    .value-card:hover .value-icon-container {
        background: rgba(251, 146, 60, 0.12);
        border-color: rgba(251, 146, 60, 0.25);
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 10px 40px rgba(251, 146, 60, 0.15);
    }

    .value-card-number {
        position: absolute;
        top: 1rem;
        right: 1.5rem;
        font-size: 5rem;
        font-weight: 900;
        color: rgba(255, 255, 255, 0.015);
        line-height: 1;
    }

    /* ═══════════════════════════════════════════════════
       TIMELINE / JOURNEY
    ═══════════════════════════════════════════════════ */
    .journey-section {
        background: linear-gradient(180deg, #0a0f1e 0%, #030712 100%);
    }

    .timeline-line {
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(180deg, rgba(251, 146, 60, 0.3) 0%, rgba(251, 146, 60, 0.05) 100%);
        transform: translateX(-50%);
    }

    .timeline-item {
        position: relative;
        padding-bottom: 3rem;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        top: 0;
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: #fb923c;
        border: 3px solid #030712;
        transform: translateX(-50%);
        z-index: 2;
        box-shadow: 0 0 15px rgba(251, 146, 60, 0.4);
        transition: all 0.3s;
    }

    .timeline-item:hover .timeline-dot {
        transform: translateX(-50%) scale(1.3);
        box-shadow: 0 0 25px rgba(251, 146, 60, 0.6);
    }

    .timeline-content {
        width: 45%;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 1rem;
        transition: all 0.4s;
    }

    .timeline-content:hover {
        border-color: rgba(251, 146, 60, 0.15);
        background: rgba(255, 255, 255, 0.04);
    }

    .timeline-item:nth-child(odd) .timeline-content { margin-right: auto; }
    .timeline-item:nth-child(even) .timeline-content { margin-left: auto; }

    @media (max-width: 768px) {
        .timeline-line { left: 1rem; }
        .timeline-dot { left: 1rem; }
        .timeline-content { width: calc(100% - 3rem); margin-left: 3rem !important; }
    }

    /* ═══════════════════════════════════════════════════
       TESTIMONIALS
    ═══════════════════════════════════════════════════ */
    .testimonials-section-about {
        background: linear-gradient(180deg, #030712 0%, #0a0f1e 100%);
    }

    .testimonial-card-about {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 1.5rem;
        padding: 2rem;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    .testimonial-card-about::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(251, 146, 60, 0.4), transparent);
        opacity: 0;
        transition: opacity 0.4s;
    }

    .testimonial-card-about:hover {
        border-color: rgba(255, 255, 255, 0.1);
        background: rgba(255, 255, 255, 0.04);
        transform: translateY(-6px);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
    }

    .testimonial-card-about:hover::before { opacity: 1; }

    .testimonial-quote-mark-about {
        font-size: 4rem;
        line-height: 1;
        color: rgba(251, 146, 60, 0.08);
        font-family: Georgia, serif;
        position: absolute;
        top: 0.5rem;
        right: 1.5rem;
    }

    /* ═══════════════════════════════════════════════════
       CTA SECTION
    ═══════════════════════════════════════════════════ */
    .cta-section-about {
        background: linear-gradient(180deg, #0a0f1e 0%, #030712 50%, #0a0f1e 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        animation: morphBlob 20s ease-in-out infinite;
    }

    .btn-cta-primary {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 2.5rem;
        font-weight: 700;
        font-size: 0.95rem;
        color: white;
        background: linear-gradient(135deg, #f97316 0%, #ea580c 50%, #dc2626 100%);
        background-size: 200% 200%;
        border-radius: 100px;
        border: none;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        overflow: hidden;
        animation: gradientShift 4s ease infinite;
    }

    .btn-cta-primary::before {
        content: '';
        position: absolute;
        inset: -2px;
        border-radius: 100px;
        background: linear-gradient(135deg, #fb923c, #f97316, #ea580c, #fb923c);
        background-size: 300% 300%;
        animation: gradientShift 3s ease infinite;
        z-index: -1;
        filter: blur(15px);
        opacity: 0.4;
        transition: opacity 0.4s;
    }

    .btn-cta-primary:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 20px 60px rgba(249, 115, 22, 0.4);
    }

    .btn-cta-primary:hover::before { opacity: 0.7; }

    /* Tech stack pills */
    .tech-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.4rem 0.9rem;
        font-size: 0.75rem;
        font-weight: 500;
        border-radius: 100px;
        border: 1px solid rgba(255, 255, 255, 0.06);
        background: rgba(255, 255, 255, 0.02);
        color: rgba(255, 255, 255, 0.4);
        transition: all 0.3s;
    }

    .tech-pill:hover {
        border-color: rgba(251, 146, 60, 0.2);
        color: rgba(251, 146, 60, 0.7);
        background: rgba(251, 146, 60, 0.05);
    }

    /* ═══════════════════════════════════════════════════
       TEAM / DISCIPLINE CARDS
    ═══════════════════════════════════════════════════ */
    .team-section {
        background: linear-gradient(180deg, #0a0f1e 0%, #030712 100%);
    }

    .discipline-card {
        position: relative;
        padding: 1.75rem 1.5rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 1.25rem;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        overflow: hidden;
    }

    .discipline-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(251, 146, 60, 0.04) 0%, transparent 60%);
        opacity: 0;
        transition: opacity 0.4s;
    }

    .discipline-card:hover {
        border-color: rgba(251, 146, 60, 0.2);
        background: rgba(255, 255, 255, 0.04);
        transform: translateY(-5px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .discipline-card:hover::before { opacity: 1; }

    .discipline-icon {
        width: 2.75rem;
        height: 2.75rem;
        border-radius: .9rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(251, 146, 60, 0.08);
        border: 1px solid rgba(251, 146, 60, 0.14);
        transition: all 0.35s;
        margin-bottom: 1rem;
    }

    .discipline-card:hover .discipline-icon {
        background: rgba(251, 146, 60, 0.15);
        border-color: rgba(251, 146, 60, 0.3);
        transform: scale(1.08) rotate(4deg);
    }

    .discipline-title {
        font-size: .9rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: .35rem;
        transition: color .25s;
    }

    .discipline-card:hover .discipline-title { color: #fb923c; }

    .discipline-tech {
        font-size: .75rem;
        color: rgba(255, 255, 255, 0.3);
        line-height: 1.55;
    }

    /* Cursor glow */
    .cursor-glow-about {
        position: fixed;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(251, 146, 60, 0.05) 0%, transparent 70%);
        pointer-events: none;
        z-index: 1;
        transform: translate(-50%, -50%);
        transition: opacity 0.3s;
    }

    /* Scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #030712; }
    ::-webkit-scrollbar-thumb { background: rgba(251, 146, 60, 0.3); border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: rgba(251, 146, 60, 0.5); }
</style>
@endsection

@section('canonical', url('/about'))

@section('content')

{{-- Cursor Glow --}}
<div class="cursor-glow-about hidden lg:block" id="cursorGlowAbout"></div>

{{-- ══════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════ --}}
<section class="about-hero py-32 md:py-44 relative">
    <div class="grid-pattern" aria-hidden="true"></div>

    {{-- Ambient orbs --}}
    <div class="absolute -top-32 left-1/4 w-[500px] h-[500px] rounded-full bg-orange-500/5 blur-[120px] animate-morph" aria-hidden="true"></div>
    <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] rounded-full bg-purple-500/3 blur-[100px] animate-morph" style="animation-delay: -7s;" aria-hidden="true"></div>

    <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="mx-auto max-w-4xl text-center">
            {{-- Badge --}}
            <div class="mb-8 inline-flex animate-fade-down" style="animation-delay: 0.2s;">
                <span class="hero-badge-about rounded-full px-6 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-gray-400">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="h-3.5 w-3.5 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Our Story
                    </span>
                </span>
            </div>

            <h1 class="animate-fade-up" style="animation-delay: 0.4s;">
                <span class="block font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-[0.95] tracking-tight text-white">
                    We are Plazmasoft.
                </span>
                <span class="block font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-[0.95] tracking-tight mt-2">
                    A team that <span class="text-gradient-premium">actually ships.</span>
                </span>
            </h1>

            <p class="mt-8 text-lg md:text-xl leading-relaxed text-gray-400 max-w-2xl mx-auto animate-fade-up" style="animation-delay: 0.6s;">
                A software development studio based in India, building production-grade products for startups and growing businesses.
                <span class="text-gray-500">Direct communication, honest timelines, and code that goes live.</span>
            </p>

            {{-- Scroll indicator --}}
            <div class="mt-14 animate-fade-up" style="animation-delay: 0.8s;">
                <div class="flex flex-col items-center gap-2">
                    <span class="text-[10px] font-medium uppercase tracking-widest text-gray-600">Discover</span>
                    <div class="w-5 h-8 rounded-full border border-gray-700 flex justify-center pt-2">
                        <div class="w-1 h-2 rounded-full bg-gray-500 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     TEAM SECTION
══════════════════════════════════════════════════════ --}}
<section class="team-section py-28 md:py-36">
    <div class="container mx-auto px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 items-start gap-16 lg:grid-cols-2">

            {{-- Left: Who We Are --}}
            <div class="reveal-left">
                <p class="section-label-dark">Who We Are</p>
                <h2 class="mt-4 font-display text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                    Small team.<br>
                    <span class="text-gradient-premium">Big output.</span>
                </h2>

                <div class="mt-8 space-y-5 text-gray-400 text-[0.95rem] leading-relaxed">
                    <p>
                        Plazmasoft is a <span class="founder-text-highlight">software development studio</span> based in India,
                        specializing in web applications, mobile apps, and AI-powered products.
                        We are a focused team of engineers, designers, and product thinkers working across the full stack.
                    </p>
                    <p>
                        We keep teams small on purpose. Every client gets
                        <span class="text-white font-medium">direct access to the people actually building their product,</span>
                        not an account manager reading off a status doc.
                        That means faster decisions, zero context loss, and software that matches what you asked for.
                    </p>
                    <p class="text-gray-500 text-sm">
                        Founded {{ $settings['founded_year'] ?? '2022' }} &middot; Noida, India &middot; IT Services &amp; Software Development
                    </p>
                </div>

                {{-- Tech stack pills --}}
                <div class="mt-8 flex flex-wrap gap-2">
                    @foreach(['Laravel', 'Flutter', 'React', 'Node.js', 'GPT-4', 'AWS', 'Figma', 'PostgreSQL'] as $tech)
                    <span class="tech-pill">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange-400/50"></span>
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="https://www.linkedin.com/company/plazmasoft/" target="_blank" rel="noopener noreferrer" class="founder-link founder-link-primary">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        Plazmasoft on LinkedIn
                    </a>
                    <a href="{{ url('/contact') }}" class="founder-link founder-link-ghost">
                        Start a Project
                    </a>
                </div>
            </div>

            {{-- Right: Discipline cards --}}
            <div class="reveal-right">
                @php
                $disciplines = [
                    [
                        'title' => 'Web Engineering',
                        'tech'  => 'Laravel, React, Next.js, Node.js, PostgreSQL',
                        'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>',
                    ],
                    [
                        'title' => 'Mobile Development',
                        'tech'  => 'Flutter, iOS, Android, Firebase, Dart',
                        'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 15.75h3"/>',
                    ],
                    [
                        'title' => 'AI &amp; Integrations',
                        'tech'  => 'GPT-4, Gemini, LLM pipelines, RAG systems',
                        'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>',
                    ],
                    [
                        'title' => 'Design &amp; Product',
                        'tech'  => 'Figma, UI/UX, Design systems, Prototyping',
                        'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>',
                    ],
                ];
                @endphp

                <div class="grid grid-cols-2 gap-4">
                    @foreach($disciplines as $d)
                    <div class="discipline-card">
                        <div class="discipline-icon">
                            <svg class="h-5 w-5 text-orange-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                {!! $d['svg'] !!}
                            </svg>
                        </div>
                        <div class="discipline-title">{!! $d['title'] !!}</div>
                        <div class="discipline-tech">{!! $d['tech'] !!}</div>
                    </div>
                    @endforeach
                </div>

                {{-- Availability badge --}}
                <div class="mt-5 flex items-center gap-3 px-4 py-3 rounded-xl border border-white/[0.06] bg-white/[0.02]">
                    <span class="relative flex-shrink-0">
                        <span class="block w-2.5 h-2.5 rounded-full bg-green-400" style="box-shadow: 0 0 8px rgba(74,222,128,0.7);"></span>
                        <span class="absolute inset-0 rounded-full bg-green-400 animate-ping opacity-30"></span>
                    </span>
                    <span class="text-sm text-gray-400">Currently accepting new projects &middot; <span class="text-green-400 font-medium">Available now</span></span>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     STATS
══════════════════════════════════════════════════════ --}}
<section class="stats-section-about py-24">
    <div class="container mx-auto px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4 stagger-children reveal-on-scroll">
            @php
            $stats = [
                ['value' => $settings['founded_year'] ?? '2022', 'label' => 'Founded', 'countable' => false],
                ['value' => ($settings['projects_delivered'] ?? '18') . '+', 'label' => 'Projects', 'countable' => true, 'num' => preg_replace('/\D/', '', $settings['projects_delivered'] ?? '18')],
                ['value' => ($settings['happy_clients'] ?? '15') . '+', 'label' => 'Clients', 'countable' => true, 'num' => preg_replace('/\D/', '', $settings['happy_clients'] ?? '15')],
                ['value' => ($settings['industries_served'] ?? '7') . '+', 'label' => 'Industries', 'countable' => true, 'num' => preg_replace('/\D/', '', $settings['industries_served'] ?? '7')],
            ];
            @endphp
            @foreach($stats as $stat)
            <div class="stat-card">
                <p class="stat-card-number" @if($stat['countable']) data-count-to="{{ $stat['num'] }}" @endif>
                    {{ $stat['value'] }}
                </p>
                <p class="stat-card-label">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     VALUES
══════════════════════════════════════════════════════ --}}
<section class="values-section py-28 md:py-36">
    <div class="container mx-auto px-6 lg:px-8 max-w-7xl">
        <div class="text-center reveal-on-scroll">
            <p class="section-label-dark">How We Work</p>
            <h2 class="section-title-dark mt-4">The Plazmasoft way</h2>
            <div class="section-divider"></div>
            <p class="mt-4 text-gray-500 max-w-xl mx-auto">Three principles that guide every project we take on.</p>
        </div>

        @php
        $values = [
            [
                'icon' => '🎯',
                'title' => 'Direct Communication',
                'desc' => 'You talk to the person building your product. No account managers, no relay chains, no lost context. Decisions happen faster.',
                'features' => ['Slack / WhatsApp access', 'Weekly video calls', 'Same-day responses'],
            ],
            [
                'icon' => '🏗️',
                'title' => 'Production-First Mindset',
                'desc' => 'We build for scale, security, and maintainability from day one. Not just for the demo or the investor pitch.',
                'features' => ['CI/CD pipelines', 'Automated testing', 'Performance monitoring'],
            ],
            [
                'icon' => '📋',
                'title' => 'Honest Timelines',
                'desc' => 'We scope projects carefully and only promise what we can deliver. No surprises at launch, no hidden costs.',
                'features' => ['Detailed SOW upfront', 'Weekly progress reports', 'Transparent billing'],
            ],
        ];
        @endphp

        <div class="mt-14 grid grid-cols-1 gap-6 md:grid-cols-3 stagger-children reveal-on-scroll">
            @foreach($values as $index => $val)
            <div class="value-card group">
                <span class="value-card-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <div class="relative z-10">
                    <div class="value-icon-container">
                        {{ $val['icon'] }}
                    </div>
                    <h3 class="mt-6 text-lg font-bold text-white group-hover:text-orange-300 transition-colors duration-300">{{ $val['title'] }}</h3>
                    <p class="mt-3 text-sm leading-relaxed text-gray-500 group-hover:text-gray-400 transition-colors duration-300">{{ $val['desc'] }}</p>

                    {{-- Feature list --}}
                    <ul class="mt-5 space-y-2">
                        @foreach($val['features'] as $feature)
                        <li class="flex items-center gap-2 text-xs text-gray-600 group-hover:text-gray-500 transition-colors">
                            <svg class="h-3.5 w-3.5 text-orange-500/50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     JOURNEY / TIMELINE
══════════════════════════════════════════════════════ --}}
<section class="journey-section py-28 md:py-36">
    <div class="container mx-auto px-6 lg:px-8 max-w-4xl">
        <div class="text-center reveal-on-scroll">
            <p class="section-label-dark">Our Journey</p>
            <h2 class="section-title-dark mt-4">Milestones</h2>
            <div class="section-divider"></div>
        </div>

        <div class="mt-20 relative">
            <div class="timeline-line" aria-hidden="true"></div>

            @php
            $milestones = [
                ['year' => $settings['founded_year'] ?? '2022', 'title' => 'Studio Founded', 'desc' => 'Started Plazmasoft with a simple mission: build software that ships, for clients who care.'],
                ['year' => '2023', 'title' => 'First 10 Projects', 'desc' => 'Delivered production apps across fintech, e-commerce, and logistics. Grew through referrals only.'],
                ['year' => '2024', 'title' => 'AI Integration Era', 'desc' => 'Integrated GPT-4, Gemini, and custom LLM pipelines into client products. Entered the AI-first product space.'],
                ['year' => '2025', 'title' => 'Scaling Up', 'desc' => 'Crossed ' . ($settings['projects_delivered'] ?? '18') . '+ projects. Expanding the team while keeping the founder-led approach intact.'],
            ];
            @endphp

            <div class="stagger-children reveal-on-scroll">
                @foreach($milestones as $index => $milestone)
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="text-xs font-bold text-orange-400 uppercase tracking-wider">{{ $milestone['year'] }}</span>
                        <h3 class="mt-2 text-base font-bold text-white">{{ $milestone['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $milestone['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════════════════ --}}
@if($testimonials->count())
<section class="testimonials-section-about py-28 md:py-36">
    <div class="container mx-auto px-6 lg:px-8 max-w-7xl">
        <div class="text-center reveal-on-scroll">
            <p class="section-label-dark">Client Stories</p>
            <h2 class="section-title-dark mt-4">What clients say</h2>
            <div class="section-divider"></div>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-6 md:grid-cols-3 stagger-children reveal-on-scroll">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-card-about">
                <span class="testimonial-quote-mark-about">"</span>

                <div class="flex gap-1 relative z-10">
                    @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                    <svg class="h-4 w-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>

                <blockquote class="relative z-10 mt-5 text-sm leading-relaxed text-gray-400 italic">
                    "{{ $testimonial->quote }}"
                </blockquote>

                <div class="relative z-10 mt-6 flex items-center gap-3 pt-5 border-t border-white/[0.06]">
                    @if($testimonial->author_avatar_path)
                    <img src="{{ asset('storage/' . $testimonial->author_avatar_path) }}" alt="{{ $testimonial->author_name }}"
                         class="h-10 w-10 rounded-full object-cover ring-2 ring-orange-500/20">
                    @else
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-orange-500 to-orange-700 text-sm font-bold text-white">
                        {{ substr($testimonial->author_name, 0, 1) }}
                    </div>
                    @endif
                    <div>
                        <p class="text-sm font-semibold text-white">{{ $testimonial->author_name }}</p>
                        <p class="text-xs text-gray-500">{{ $testimonial->author_role }}{{ $testimonial->author_company ? ', ' . $testimonial->author_company : '' }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif


{{-- ══════════════════════════════════════════════════════
     CTA
══════════════════════════════════════════════════════ --}}
<section class="cta-section-about py-32 relative">
    {{-- Ambient orbs --}}
    <div class="cta-orb w-[500px] h-[500px] bg-orange-500/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" aria-hidden="true"></div>
    <div class="cta-orb w-[300px] h-[300px] bg-purple-500/3 top-0 right-1/4" style="animation-delay: -8s;" aria-hidden="true"></div>

    <div class="container mx-auto px-6 lg:px-8 max-w-4xl relative z-10 text-center reveal-on-scroll">
        <p class="section-label-dark">Ready?</p>
        <h2 class="mt-6 font-display text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Ready to build<br>
            <span class="text-gradient-premium">something great?</span>
        </h2>
        <p class="mt-6 text-lg text-gray-400 max-w-xl mx-auto">
            Tell us what you're working on. We reply within one business day with a clear plan and honest estimate.
        </p>
        <div class="mt-10 flex flex-wrap items-center justify-center gap-5">
            <a href="{{ url('/contact') }}" class="btn-cta-primary">
                {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="mailto:{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}" class="founder-link founder-link-ghost">
                {{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}
            </a>
        </div>

        {{-- Social proof --}}
        <div class="mt-14 flex flex-wrap items-center justify-center gap-6 text-sm text-gray-600">
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                No upfront payment required
            </span>
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Free consultation call
            </span>
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Reply within 24 hours
            </span>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ═══════════════════════════════════════════
    // SCROLL REVEAL
    // ═══════════════════════════════════════════
    const revealElements = document.querySelectorAll('.reveal-on-scroll, .reveal-left, .reveal-right, .stagger-children');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -60px 0px'
    });

    revealElements.forEach(el => observer.observe(el));

    // ═══════════════════════════════════════════
    // COUNTER ANIMATION
    // ═══════════════════════════════════════════
    const counters = document.querySelectorAll('[data-count-to]');

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.counted) {
                entry.target.dataset.counted = 'true';
                const target = parseInt(entry.target.dataset.countTo);
                const duration = 2000;
                const start = performance.now();

                function update(currentTime) {
                    const elapsed = currentTime - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    entry.target.textContent = Math.floor(eased * target) + '+';
                    if (progress < 1) requestAnimationFrame(update);
                    else entry.target.textContent = target + '+';
                }
                requestAnimationFrame(update);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(el => counterObserver.observe(el));

    // ═══════════════════════════════════════════
    // CURSOR GLOW
    // ═══════════════════════════════════════════
    const glow = document.getElementById('cursorGlowAbout');
    if (glow && window.innerWidth > 1024) {
        let mx = 0, my = 0, gx = 0, gy = 0;
        document.addEventListener('mousemove', (e) => { mx = e.clientX; my = e.clientY; });
        function animGlow() {
            gx += (mx - gx) * 0.08;
            gy += (my - gy) * 0.08;
            glow.style.left = gx + 'px';
            glow.style.top = gy + 'px';
            requestAnimationFrame(animGlow);
        }
        animGlow();
    }

    // ═══════════════════════════════════════════
    // TIMELINE ANIMATION - Draw line on scroll
    // ═══════════════════════════════════════════
    const timelineLine = document.querySelector('.timeline-line');
    if (timelineLine) {
        const timelineSection = timelineLine.closest('section');
        window.addEventListener('scroll', () => {
            const rect = timelineSection.getBoundingClientRect();
            const windowH = window.innerHeight;
            const sectionH = timelineSection.offsetHeight;
            const progress = Math.max(0, Math.min(1, (windowH - rect.top) / (windowH + sectionH)));
            timelineLine.style.background = `linear-gradient(180deg, rgba(251, 146, 60, 0.3) 0%, rgba(251, 146, 60, 0.3) ${progress * 100}%, rgba(251, 146, 60, 0.05) ${progress * 100}%, rgba(251, 146, 60, 0.05) 100%)`;
        }, { passive: true });
    }

    // ═══════════════════════════════════════════
    // PARALLAX ON FOUNDER BADGES
    // ═══════════════════════════════════════════
    if (window.innerWidth > 768) {
        const badges = document.querySelectorAll('.founder-stat-badge');
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            badges.forEach((badge, i) => {
                const speed = (i + 1) * 0.02;
                badge.style.transform = `translateY(${Math.sin(scrollY * 0.01 + i) * 10}px)`;
            });
        }, { passive: true });
    }
});
</script>
@endsection