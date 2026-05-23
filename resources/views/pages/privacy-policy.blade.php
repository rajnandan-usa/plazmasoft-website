@extends('layouts.app')

@section('title', 'Privacy Policy | Plazmasoft')
@section('meta_description', 'Privacy policy for Plazmasoft.')

@section('content')
<section class="section gradient-hero">
    <div class="container-site text-center">
        <h1 class="section-title">Privacy Policy</h1>
        <p class="section-subtitle">Last updated: May 2026</p>
    </div>
</section>
<section class="section bg-white">
    <div class="container-site">
        <div class="mx-auto max-w-3xl prose prose-gray">
            <p>This privacy policy applies to the website plazmasoft.com, operated by <strong>{{ $settings['legal_name'] ?? 'Kushwaha Webformat Private Limited' }}</strong>.</p>

            <h2>Information we collect</h2>
            <p>When you contact us through our contact form, we collect your name, email address, phone number (if provided), company name (if provided), and the content of your message. We store this information to respond to your inquiry and track our sales pipeline.</p>
            <p>If you subscribe to our newsletter, we collect your email address.</p>

            <h2>How we use your information</h2>
            <ul>
                <li>To respond to your project inquiry</li>
                <li>To send newsletters if you subscribed (you can unsubscribe at any time)</li>
                <li>To analyze aggregate traffic patterns via Google Analytics (if enabled)</li>
            </ul>

            <h2>Data sharing</h2>
            <p>We do not sell, trade, or rent your personal information to third parties. We may share aggregate, anonymized data for analytics purposes.</p>

            <h2>Data retention</h2>
            <p>Contact form submissions are retained for up to 2 years. Newsletter subscriber records are retained until you unsubscribe.</p>

            <h2>Your rights</h2>
            <p>You have the right to request access to, correction of, or deletion of your personal data. Contact us at <a href="mailto:{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}">{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}</a> to make such a request.</p>

            <h2>Cookies</h2>
            <p>We use session cookies required for the site to function and, if configured, Google Analytics cookies for traffic analysis. We do not use advertising or tracking cookies.</p>

            <h2>Contact</h2>
            <p>Questions about this policy? Email <a href="mailto:{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}">{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}</a>.</p>
        </div>
    </div>
</section>
@endsection
