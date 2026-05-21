@extends('layouts.app')

@section('title')
    FinTech App Development — TradeGuardian Case Study | {{ config('app.company_name') }}
@endsection

@section('mainBody')

    <!-- Hero Section -->
    <section class="vs-landing-section sec-pad" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%); color: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-12 col-lg-7">
                    <div class="vs-landing-content__inner mt-5 mb-5">
                        <span style="background:#2563eb; color:#fff; padding:6px 16px; border-radius:20px; font-size:0.85rem; font-weight:600; letter-spacing:0.05em;">FINTECH SOLUTION</span>
                        <h1 class="vs-section-title mt-3" style="color:#fff;">FinTech App Development</h1>
                        <h2 style="color:#93c5fd; font-size:1.4rem; margin-bottom:1.2rem;">Real-time AI Trading Signals & Portfolio Intelligence</h2>
                        <p style="color:#cbd5e1; font-size:1rem; line-height:1.8;">
                            We built TradeGuardian — an AI-powered trading platform that delivers real-time market signals,
                            risk alerts, and portfolio analysis to retail traders across India. From concept to production
                            in under 10 weeks.
                        </p>
                        <div class="mt-4">
                            <a href="/portfolio-projects" class="btn btn-primary custom-btn me-3">View Portfolio</a>
                            <a href="/contact" class="btn btn-outline-light">Start Your Project</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-5">
                    <div class="p-4" style="background: rgba(255,255,255,0.05); border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
                        <h4 style="color:#93c5fd;">Project Snapshot</h4>
                        <table class="table table-borderless" style="color:#cbd5e1;">
                            <tbody>
                                <tr><td><strong style="color:#fff;">Client</strong></td><td>TradeGuardian</td></tr>
                                <tr><td><strong style="color:#fff;">Domain</strong></td><td>FinTech / AI Trading</td></tr>
                                <tr><td><strong style="color:#fff;">Stack</strong></td><td>Laravel, Blade, MySQL, AI signal APIs</td></tr>
                                <tr><td><strong style="color:#fff;">Live URL</strong></td><td><a href="https://tradeguardian.tech/" target="_blank" rel="noopener" style="color:#60a5fa;">tradeguardian.tech</a></td></tr>
                                <tr><td><strong style="color:#fff;">Year</strong></td><td>2024 – 2025</td></tr>
                                <tr><td><strong style="color:#fff;">Region</strong></td><td>India</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Problem -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2">
                    <div class="vs-heading-center">
                        <h2 class="vs-section-title vs-title-border">The Problem We Solved</h2>
                    </div>
                    <p>Retail traders in India face an information asymmetry problem. Institutional desks have Bloomberg terminals and quantitative models; retail traders rely on noisy social media tips and delayed news. Bad entries, poor risk management, and emotional trading cost retail participants thousands every month.</p>
                    <p>The TradeGuardian founders approached us with a clear brief: build a platform that levels the playing field. Real-time AI-generated signals for equity and derivative instruments, automatic stop-loss recommendations, and a clean dashboard that a first-time trader could navigate without a manual.</p>
                    <p>The hard constraint: the MVP had to launch in under 10 weeks and had to be reliable enough for production — a 2 AM crash on a live trading account is not a UX issue, it's a financial incident.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="sec-pad" style="background: #f8fafc;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Approach</h2>
                <p class="vs-section-description">Speed without compromising reliability — the only way to ship fintech.</p>
            </div>
            <div class="row mt-4">
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">1. API-first architecture</h4>
                        <p>We separated the signal engine (Python microservice consuming market data feeds) from the Laravel web layer via a clean REST interface. This kept the UI decoupled from data latency and allowed the signal logic to evolve independently.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">2. Real-time dashboard</h4>
                        <p>Laravel Echo + Pusher pushed signal updates to the browser without page reload. Users see a live feed of buy/sell alerts with confidence scores, stop-loss levels, and a plain-English rationale for each signal — no jargon walls.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">3. Subscription & billing</h4>
                        <p>Tiered subscription plans (Basic → Pro → Institutional) with Razorpay integration, automatic renewal reminders, and plan downgrade logic that preserves user data while restricting access on non-payment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Technology Stack</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <table class="table table-striped">
                        <tbody>
                            <tr><td><strong>Backend / API</strong></td><td>Laravel 11, PHP 8.2, RESTful JSON API</td></tr>
                            <tr><td><strong>Frontend</strong></td><td>Blade templates, Alpine.js, Tailwind CSS</td></tr>
                            <tr><td><strong>Real-time</strong></td><td>Laravel Echo, Pusher WebSockets</td></tr>
                            <tr><td><strong>AI / Signals</strong></td><td>Python microservice, market data APIs</td></tr>
                            <tr><td><strong>Database</strong></td><td>MySQL 8.0, Redis (session + cache)</td></tr>
                            <tr><td><strong>Payments</strong></td><td>Razorpay subscriptions</td></tr>
                            <tr><td><strong>Infrastructure</strong></td><td>VPS, Nginx, SSL, cron workers</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Outcomes -->
    <section class="sec-pad" style="background: #0f172a; color: #fff;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border" style="color:#fff;">What Was Delivered</h2>
            </div>
            <div class="row mt-4 text-center">
                <div class="col col-6 col-md-3 mb-4">
                    <div class="vs-vediccode-count-card" style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#60a5fa;">10 wks</h3>
                        <p style="color:#cbd5e1;">MVP to production</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div class="vs-vediccode-count-card" style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#60a5fa;">3 tiers</h3>
                        <p style="color:#cbd5e1;">Subscription plans with live billing</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div class="vs-vediccode-count-card" style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#60a5fa;">Real-time</h3>
                        <p style="color:#cbd5e1;">WebSocket signal delivery</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div class="vs-vediccode-count-card" style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#60a5fa;">Live</h3>
                        <p style="color:#cbd5e1;"><a href="https://tradeguardian.tech/" target="_blank" rel="noopener" style="color:#93c5fd;">tradeguardian.tech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">FinTech Development — Common Questions</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <div class="accordion" id="fintechFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Can you integrate with stock market data feeds?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#fintechFaq">
                                <div class="accordion-body">Yes. We've integrated with NSE/BSE data providers, broker APIs (Zerodha, Angel One), and third-party market data services. We design the integration layer to be replaceable so you're not locked into a single data vendor.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How do you handle compliance for financial platforms?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#fintechFaq">
                                <div class="accordion-body">We build the technical infrastructure — audit logs, data encryption, role-based access, and KYC hooks. Regulatory compliance (SEBI registration, RBI guidelines) is your responsibility as the product owner; we make it technically straightforward to implement what your compliance officer specifies.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What is a realistic timeline for a fintech MVP?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#fintechFaq">
                                <div class="accordion-body">A focused MVP with core functionality (user auth, a primary data display, one payment integration, admin panel) typically takes 8–12 weeks. TradeGuardian went from signed contract to production in 10 weeks. Scope creep is the main risk — we help you ruthlessly prioritise the launch-critical features.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Do you offer post-launch maintenance?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#fintechFaq">
                                <div class="accordion-body">Yes. We offer monthly maintenance retainers covering bug fixes, security patches, Laravel/dependency version upgrades, and feature additions. Most fintech clients stay on a retainer for at least the first year post-launch.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-contact-form />

@endsection
