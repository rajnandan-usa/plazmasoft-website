@extends('layouts.app')

@section('title')
    Mobile App Development Services - {{ config('app.name') }}
@endsection

@section('mainBody')

    <!-- Hero Section -->
    <section class="ar-vr-hero block-chain-hero pt-0 vs-hiring-landing-section">
        <div class="container">
            <div class="vs-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mobile App Development</li>
                    </ol>
                </nav>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ios-banner">
                        <img class="img-fluid" src="{{ asset('web-assets/images/about-react-native.png') }}" alt="mobile app development">
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-in" data-aos-delay="100">
                    <div class="vs-landing-content__inner mb-0">
                        <h1 class="vs-landing-title">Mobile App Development</h1>
                        <p class="vs-landing-description">We build high-performance mobile applications for iOS and Android platforms. From native to cross-platform solutions, our expert team delivers apps that drive business growth and user engagement.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary mt-3">Get Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="vs-heading-center mb-5">
                <h2 class="vs-section-title">Our Mobile App Development Services</h2>
                <p class="vs-section-description">Choose the right platform for your business needs</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ route('services.android') }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('web-assets/images/about-react-native.png') }}" width="60" alt="Android" class="img-fluid">
                            </div>
                            <h3 class="h5 fw-bold">Android App Development</h3>
                            <p class="text-muted small">Build powerful Android apps with native performance and seamless user experience.</p>
                            <span class="text-primary fw-semibold">Know More &rarr;</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ route('services.ios') }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('web-assets/images/about-react-native.png') }}" width="60" alt="iOS" class="img-fluid">
                            </div>
                            <h3 class="h5 fw-bold">iOS App Development</h3>
                            <p class="text-muted small">Create elegant and high-performing iOS apps for iPhone and iPad.</p>
                            <span class="text-primary fw-semibold">Know More &rarr;</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ route('services.flutter') }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('web-assets/images/flutter.svg') }}" width="60" alt="Flutter" class="img-fluid">
                            </div>
                            <h3 class="h5 fw-bold">Flutter App Development</h3>
                            <p class="text-muted small">Build beautiful cross-platform apps from a single codebase with Flutter.</p>
                            <span class="text-primary fw-semibold">Know More &rarr;</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ route('services.react_native') }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('web-assets/images/about-react-native.png') }}" width="60" alt="React Native" class="img-fluid">
                            </div>
                            <h3 class="h5 fw-bold">React Native Development</h3>
                            <p class="text-muted small">Develop fast and scalable cross-platform mobile apps with React Native.</p>
                            <span class="text-primary fw-semibold">Know More &rarr;</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-3">Ready to Build Your Mobile App?</h2>
            <p class="mb-4">Get a free consultation with our expert mobile app developers today.</p>
            <a href="{{ route('contact.index') }}" class="btn btn-light btn-lg fw-semibold">Talk to Our Experts</a>
        </div>
    </section>
    <!-- CTA Section End -->

    <!-- Request Proposal Form -->
    <section class="vs-speak-section py-5">
        <div class="container">
            <div class="vs-heading-center mb-4">
                <h2 class="vs-section-title">Request a Proposal</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <x-contact-form />
                </div>
            </div>
        </div>
    </section>
    <!-- Request Proposal Form End -->

@endsection
