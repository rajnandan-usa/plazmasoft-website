@extends('layouts.app')

@section('title', 'Terms of Service | Plazmasoft')
@section('meta_description', 'Terms of service for Plazmasoft.')

@section('content')
<section class="section gradient-hero">
    <div class="container-site text-center">
        <h1 class="section-title">Terms of Service</h1>
        <p class="section-subtitle">Last updated: May 2026</p>
    </div>
</section>
<section class="section bg-white">
    <div class="container-site">
        <div class="mx-auto max-w-3xl prose prose-gray">
            <p>These terms govern your use of plazmasoft.com, operated by <strong>{{ $settings['legal_name'] ?? 'Kushwaha Webformat Private Limited' }}</strong> ("Plazmasoft", "we", "us").</p>

            <h2>Services</h2>
            <p>Plazmasoft provides custom software development services. Specific terms for each engagement are defined in a separate Statement of Work (SOW) or service agreement signed between the client and Plazmasoft.</p>

            <h2>Website use</h2>
            <p>You may use this website to learn about our services and contact us. You may not use this site to transmit spam, malware, or any unlawful content.</p>

            <h2>Intellectual property</h2>
            <p>All content on this site including text, images, and code samples is the property of Plazmasoft unless stated otherwise. You may not reproduce or redistribute content without prior written permission.</p>

            <h2>Disclaimer</h2>
            <p>This website is provided "as is" without warranties of any kind. We do not guarantee uninterrupted availability or freedom from errors.</p>

            <h2>Limitation of liability</h2>
            <p>Plazmasoft is not liable for indirect, incidental, or consequential damages arising from use of this website. Our total liability for any claim is limited to INR 1,000.</p>

            <h2>Governing law</h2>
            <p>These terms are governed by the laws of India. Any disputes shall be subject to the exclusive jurisdiction of courts in Mumbai, Maharashtra.</p>

            <h2>Contact</h2>
            <p>Questions? Email <a href="mailto:{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}">{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}</a>.</p>
        </div>
    </div>
</section>
@endsection
