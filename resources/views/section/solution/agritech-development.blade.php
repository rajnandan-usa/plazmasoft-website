@extends('layouts.app')

@section('title')
    Agritech App Development — FasalVision Case Study | {{ config('app.company_name') }}
@endsection

@section('mainBody')

    <!-- Hero Section -->
    <section class="vs-landing-section sec-pad" style="background: linear-gradient(135deg, #14532d 0%, #065f46 100%); color: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-12 col-lg-7">
                    <div class="vs-landing-content__inner mt-5 mb-5">
                        <span style="background:#059669; color:#fff; padding:6px 16px; border-radius:20px; font-size:0.85rem; font-weight:600; letter-spacing:0.05em;">AGRITECH + AI</span>
                        <h1 class="vs-section-title mt-3" style="color:#fff;">Agritech App Development</h1>
                        <h2 style="color:#6ee7b7; font-size:1.4rem; margin-bottom:1.2rem;">AI Farming Assistant in 9 Languages, Live in Multiple Countries</h2>
                        <p style="color:#d1fae5; font-size:1rem; line-height:1.8;">
                            We built FasalVision — an AI-powered farming assistant app that helps smallholder farmers
                            diagnose crop diseases, get personalized advice, and track weather — in their own language.
                            Built with Flutter and Gemini AI, supporting 9 Indian and international languages.
                            This is one of our flagship AI mobile projects.
                        </p>
                        <div class="mt-4">
                            <a href="https://play.google.com/store/apps/details?id=com.fasalvision.app" target="_blank" rel="noopener" class="btn btn-primary custom-btn me-3">View on Play Store</a>
                            <a href="/contact" class="btn btn-outline-light">Start Your Project</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-5">
                    <div class="p-4" style="background: rgba(255,255,255,0.08); border-radius: 12px; border: 1px solid rgba(255,255,255,0.15);">
                        <h4 style="color:#6ee7b7;">Project Snapshot</h4>
                        <table class="table table-borderless" style="color:#d1fae5;">
                            <tbody>
                                <tr><td><strong style="color:#fff;">Client</strong></td><td>FasalVision</td></tr>
                                <tr><td><strong style="color:#fff;">Domain</strong></td><td>AgriTech / Generative AI</td></tr>
                                <tr><td><strong style="color:#fff;">Stack</strong></td><td>Flutter, Firebase, Gemini AI</td></tr>
                                <tr><td><strong style="color:#fff;">Platform</strong></td><td>Android (Google Play Store)</td></tr>
                                <tr><td><strong style="color:#fff;">Languages</strong></td><td>9 languages (Hindi, English + 7 more)</td></tr>
                                <tr><td><strong style="color:#fff;">Reach</strong></td><td>Live in multiple countries</td></tr>
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
                    <p>India's smallholder farmers — over 100 million families farming plots under 2 hectares — lose an estimated 20–40% of crop yields annually to diseases and pests that could be managed with timely intervention. The barrier isn't money; it's information access.</p>
                    <p>Agricultural extension services are understaffed. Farmers in Bihar, Odisha, or Karnataka cannot easily call an agronomist when they see yellowing leaves on their paddy. They rely on neighbours' advice or delay action until the damage is obvious.</p>
                    <p>FasalVision's vision: put an agronomist in every farmer's pocket. The app had to work on low-end Android devices, in regional languages, with minimal data usage — and the AI had to give genuinely actionable advice, not generic Wikipedia-grade responses.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="sec-pad" style="background: #f8fafc;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Approach</h2>
                <p class="vs-section-description">Gemini AI for multimodal crop advice — photo + text, in any language.</p>
            </div>
            <div class="row mt-4">
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">1. Multimodal crop diagnosis</h4>
                        <p>We integrated Gemini's vision capability so farmers can photograph a diseased leaf or pest-damaged crop, describe their concern in plain language, and receive a diagnosis with treatment options — all in one prompt. The Gemini API processes image + text together, giving far more accurate advice than text-only queries against a crops database.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">2. 9-language support without 9 codebases</h4>
                        <p>We used Flutter's intl package with ARB localization files for UI strings, and passed Gemini a system prompt instructing it to respond in the user's selected language. This means agricultural advice is generated natively in Hindi, Bengali, Telugu, Marathi, Kannada, Tamil, Gujarati, Odia, and English — without pre-translating a database of answers.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">3. Low-data, low-end device optimisation</h4>
                        <p>FasalVision targets farmers using ₹5,000–₹8,000 Android phones on Jio 4G. We compressed the app bundle to under 18 MB, implemented image compression before API upload (reducing data cost per query by ~70%), and added graceful offline states — cached advice and weather data available without connectivity.</p>
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
                            <tr><td><strong>Mobile Framework</strong></td><td>Flutter 3, Dart</td></tr>
                            <tr><td><strong>AI Engine</strong></td><td>Google Gemini API (multimodal: vision + text generation)</td></tr>
                            <tr><td><strong>Backend / Auth</strong></td><td>Firebase (Auth, Firestore, Remote Config)</td></tr>
                            <tr><td><strong>Localisation</strong></td><td>Flutter intl, ARB files — 9 languages</td></tr>
                            <tr><td><strong>Weather</strong></td><td>OpenWeatherMap API (GPS-based local forecast)</td></tr>
                            <tr><td><strong>Image processing</strong></td><td>Flutter image_compress before Gemini upload</td></tr>
                            <tr><td><strong>Distribution</strong></td><td>Google Play Store (Android)</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Outcomes -->
    <section class="sec-pad" style="background: #14532d; color: #fff;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border" style="color:#fff;">What Was Delivered</h2>
            </div>
            <div class="row mt-4 text-center">
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#34d399;">9 langs</h3>
                        <p style="color:#d1fae5;">AI advice in local languages</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#34d399;">Multi-country</h3>
                        <p style="color:#d1fae5;">Live on Play Store globally</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#34d399;">&lt; 18 MB</h3>
                        <p style="color:#d1fae5;">App size, optimised for rural India</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#34d399;">Gemini</h3>
                        <p style="color:#d1fae5;">Multimodal AI — photo + text diagnosis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">AgriTech App Development — Common Questions</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <div class="accordion" id="agriFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#agf1">
                                    Can you build a similar AI farming app for a different crop or region?
                                </button>
                            </h2>
                            <div id="agf1" class="accordion-collapse collapse show" data-bs-parent="#agriFaq">
                                <div class="accordion-body">Yes. The Gemini multimodal approach is domain-agnostic — we've used similar patterns for crop disease, equipment troubleshooting, and pest identification. A regional fork (new languages, different crop database, local weather source) typically takes 6–8 weeks to productionise.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agf2">
                                    How accurate is Gemini's crop disease diagnosis?
                                </button>
                            </h2>
                            <div id="agf2" class="accordion-collapse collapse" data-bs-parent="#agriFaq">
                                <div class="accordion-body">For common diseases and pests in major crops (paddy, wheat, cotton, tomato), Gemini Vision gives clinically reasonable diagnoses for clear photographs. We add a disclaimer on every response and prompt the user to verify with a local extension officer for high-stakes decisions. Accuracy improves significantly with a well-lit, close-up photo of the affected area.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agf3">
                                    What does it cost to build an agritech MVP?
                                </button>
                            </h2>
                            <div id="agf3" class="accordion-collapse collapse" data-bs-parent="#agriFaq">
                                <div class="accordion-body">A Flutter app with Gemini AI integration, Firebase backend, and 2–3 languages typically takes 10–14 weeks. The Gemini API cost at early-stage volume (under 10,000 queries/month) is negligible — under ₹5,000/month. We'll scope your specific feature list and give you a fixed-price estimate; contact us to start that conversation.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-contact-form />

@endsection
