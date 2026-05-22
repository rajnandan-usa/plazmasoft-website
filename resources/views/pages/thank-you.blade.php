@extends('layouts.app')

@section('title', 'Thank You | Plazmasoft')
@section('meta_description', 'Your message has been received. We will be in touch within one business day.')

@section('head')
<meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<section class="section">
    <div class="container-site">
        <div class="mx-auto max-w-lg text-center">
            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-green-50 mx-auto">
                <svg class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h1 class="mt-6 font-display text-3xl font-bold text-gray-900">Message received!</h1>
            <p class="mt-4 text-gray-500">
                Thanks for reaching out. We have received your message and will reply within one business day. Keep an eye on your inbox.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="{{ url('/') }}" class="btn-primary">Back to home</a>
                <a href="{{ url('/portfolio') }}" class="btn-outline">View our work</a>
            </div>
        </div>
    </div>
</section>
@endsection
