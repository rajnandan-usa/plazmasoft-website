@extends('layouts.app')

@section('title')
    Fleet Management App Development — Fleeta2z Case Study | {{ config('app.company_name') }}
@endsection

@section('mainBody')

    <!-- Hero Section -->
    <section class="vs-landing-section sec-pad" style="background: linear-gradient(135deg, #0c4a1a 0%, #166534 100%); color: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-12 col-lg-7">
                    <div class="vs-landing-content__inner mt-5 mb-5">
                        <span style="background:#16a34a; color:#fff; padding:6px 16px; border-radius:20px; font-size:0.85rem; font-weight:600; letter-spacing:0.05em;">FLEET MANAGEMENT</span>
                        <h1 class="vs-section-title mt-3" style="color:#fff;">Fleet Management App Development</h1>
                        <h2 style="color:#86efac; font-size:1.4rem; margin-bottom:1.2rem;">Real-time GPS Tracking, Driver Management & Operations Dashboard</h2>
                        <p style="color:#dcfce7; font-size:1rem; line-height:1.8;">
                            We built Fleeta2z — a comprehensive fleet management platform that gives logistics operators
                            real-time visibility into every vehicle, driver, and delivery. Live GPS tracking,
                            trip history, fuel monitoring, and a mobile driver app — all in one system.
                        </p>
                        <div class="mt-4">
                            <a href="/portfolio-projects" class="btn btn-primary custom-btn me-3">View Portfolio</a>
                            <a href="/contact" class="btn btn-outline-light">Start Your Project</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-5">
                    <div class="p-4" style="background: rgba(255,255,255,0.08); border-radius: 12px; border: 1px solid rgba(255,255,255,0.15);">
                        <h4 style="color:#86efac;">Project Snapshot</h4>
                        <table class="table table-borderless" style="color:#dcfce7;">
                            <tbody>
                                <tr><td><strong style="color:#fff;">Client</strong></td><td>Fleeta2z</td></tr>
                                <tr><td><strong style="color:#fff;">Domain</strong></td><td>Logistics / Fleet Ops</td></tr>
                                <tr><td><strong style="color:#fff;">Stack</strong></td><td>Laravel API, Flutter Mobile, GPS protocols</td></tr>
                                <tr><td><strong style="color:#fff;">Live URL</strong></td><td><a href="https://fleeta2z.com/" target="_blank" rel="noopener" style="color:#4ade80;">fleeta2z.com</a></td></tr>
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
                    <p>Mid-size logistics companies in India operate fleets of 10–200 vehicles with almost no real-time visibility. Managers call drivers to ask where a shipment is. Fuel pilferage goes undetected. Trip logs are maintained on paper. Customer ETAs are guesses.</p>
                    <p>The Fleeta2z team needed a system that would give operations managers a single screen showing every active vehicle, its speed, route adherence, and fuel level — updated every 30 seconds without a page refresh. Driver behaviour analytics and automated daily reports would let managers spot patterns without manually reviewing logs.</p>
                    <p>The mobile driver app had to work in patchy 2G/3G connectivity — common on Indian highways — and sync trip data offline before uploading when connectivity resumed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="sec-pad" style="background: #f8fafc;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Approach</h2>
                <p class="vs-section-description">A dual-product build: web operations dashboard + offline-capable Flutter driver app.</p>
            </div>
            <div class="row mt-4">
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">1. GPS ingest pipeline</h4>
                        <p>We built a lightweight Laravel socket listener that ingests GPS packets from hardware trackers (RS232/TCP protocol), normalises coordinates, and stores them in a time-series-optimised MySQL schema. Each device pings every 30 seconds with position, speed, ignition state, and fuel level.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">2. Real-time ops dashboard</h4>
                        <p>A Laravel + Livewire web application renders a live map (Google Maps SDK) showing all active vehicles as colour-coded pins — green (moving), orange (idle), red (stopped). Managers can click any vehicle to see its driver details, last 24h route replay, and fuel graph.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">3. Offline-first Flutter driver app</h4>
                        <p>Drivers log trip start/end, load details, and delivery proof (photo) in the Flutter app. We used SQLite for local buffering with a custom sync queue — data uploads automatically when the device reconnects, with conflict resolution that never drops a completed trip.</p>
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
                            <tr><td><strong>Backend API</strong></td><td>Laravel 11, PHP 8.2, RESTful JSON API</td></tr>
                            <tr><td><strong>Web Dashboard</strong></td><td>Laravel Livewire, Alpine.js, Google Maps SDK</td></tr>
                            <tr><td><strong>Mobile App</strong></td><td>Flutter 3, Dart, SQLite (offline sync)</td></tr>
                            <tr><td><strong>GPS Protocol</strong></td><td>TCP socket listener, NMEA / proprietary tracker protocol</td></tr>
                            <tr><td><strong>Database</strong></td><td>MySQL 8.0, Redis (live vehicle state cache)</td></tr>
                            <tr><td><strong>Maps</strong></td><td>Google Maps Platform (Maps, Routes, Geocoding APIs)</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Outcomes -->
    <section class="sec-pad" style="background: #0c4a1a; color: #fff;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border" style="color:#fff;">What Was Delivered</h2>
            </div>
            <div class="row mt-4 text-center">
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#4ade80;">30 sec</h3>
                        <p style="color:#dcfce7;">GPS update frequency</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#4ade80;">2 apps</h3>
                        <p style="color:#dcfce7;">Web ops dashboard + Flutter driver app</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#4ade80;">Offline</h3>
                        <p style="color:#dcfce7;">Works on 2G with local sync queue</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#4ade80;">Live</h3>
                        <p style="color:#dcfce7;"><a href="https://fleeta2z.com/" target="_blank" rel="noopener" style="color:#86efac;">fleeta2z.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Fleet Management — Common Questions</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <div class="accordion" id="fleetFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ff1">
                                    Which GPS hardware do you support?
                                </button>
                            </h2>
                            <div id="ff1" class="accordion-collapse collapse show" data-bs-parent="#fleetFaq">
                                <div class="accordion-body">We've integrated with Teltonika, Concox, and generic NMEA-compatible trackers. If you have existing hardware, we evaluate the data protocol before committing — some devices require a custom parser, which adds 1–2 weeks.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ff2">
                                    Can the app scale to 500+ vehicles?
                                </button>
                            </h2>
                            <div id="ff2" class="accordion-collapse collapse" data-bs-parent="#fleetFaq">
                                <div class="accordion-body">Yes. We design the GPS ingest layer as a queue-based worker (Laravel Horizon + Redis) so it scales horizontally. The live vehicle state is cached in Redis, keeping the map dashboard fast regardless of how many vehicles are active.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ff3">
                                    What does a fleet management MVP cost?
                                </button>
                            </h2>
                            <div id="ff3" class="accordion-collapse collapse" data-bs-parent="#fleetFaq">
                                <div class="accordion-body">A focused MVP (live map, basic trip logging, driver mobile app) typically runs 12–16 weeks of development. Contact us with your vehicle count, must-have features, and budget — we'll give you an honest scope vs cost breakdown within 48 hours.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-contact-form />

@endsection
