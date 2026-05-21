@extends("layouts.app")

@section("title")
    Our Team — {{ config('app.name') }}
@endsection

@section("mainBody")

    <!-- Team Hero Section Start -->
    <section class="vs-team-section vs-landing-section vs-section-spacer">
        <div class="container">
            <div class="vs-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
            </div>
            <div class="vs-heading-center">
                <h1 class="vs-section-title vs-title-border">Meet the Founder</h1>
                <p class="vs-section-description">{{ config('app.name') }} is a founder-led boutique software studio. We bring in trusted specialists for design, QA, and platform-specific work — selected per project so you always get the right expert for the job.</p>
            </div>

            <div class="vs-team-content mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="vs-team-card vs-team-head-card text-center">
                            <div class="vs-team-card-img mx-auto" style="max-width: 180px;">
                                <img src="{{ asset('web-assets/images/team/rajnandan.jpg') }}" alt="Rajnandan Kushwaha" class="img-fluid rounded-circle">
                            </div>
                            <div class="vs-team-card-body mt-3">
                                <h2 class="vs-team-member-name h4 fw-bold">Rajnandan Kushwaha</h2>
                                <p class="vs-team-member-designation text-primary fw-semibold">Founder &amp; Full Stack Developer</p>
                                <p class="text-muted mt-2">Laravel · Flutter · Python · AI Integrations (Gemini, Stable Diffusion, ControlNet)</p>
                                <p class="mt-3">Director, Kushwaha Webformat Pvt Ltd — East Champaran, Bihar, India</p>
                                <div class="mt-3">
                                    <a href="https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/" target="_blank" rel="noopener" class="btn btn-sm btn-outline-primary me-2">LinkedIn</a>
                                    <a href="https://github.com/rajnandan-usa" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary">GitHub</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                        <div class="ps-lg-4 mt-4 mt-md-0">
                            <h3 class="h5 fw-bold mb-3">How we work</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong>Founder-led delivery</strong> — Rajnandan is personally involved in architecture, code review, and client communication for every project.
                                </li>
                                <li class="mb-3">
                                    <strong>Specialist network</strong> — For larger engagements we bring in vetted freelance specialists in UI/UX design, QA testing, iOS development, and DevOps.
                                </li>
                                <li class="mb-3">
                                    <strong>No middlemen</strong> — You communicate directly with the developer building your product, resulting in faster decisions and fewer misunderstandings.
                                </li>
                                <li class="mb-3">
                                    <strong>Transparent pricing</strong> — Fixed-scope quotes or milestone-based billing. No surprise invoices.
                                </li>
                            </ul>
                            <a href="{{ route('contact.index') }}" class="btn btn-primary mt-2">Start a Conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Hero Section End -->

    <!-- Speak to Team Section Start -->
    <section class="vs-speak-section py-5" id="speak-to-team-section">
        <div class="container">
            <div class="vs-heading-center mb-4">
                <h2 class="vs-section-title">Ready to Build Something?</h2>
                <p class="vs-section-description">100% idea protection. We sign a Non-Disclosure Agreement before any technical discussion.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <x-contact-form />
                </div>
            </div>
        </div>
    </section>
    <!-- Speak to Team Section End -->

@endsection
