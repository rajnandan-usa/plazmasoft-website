<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $settings['default_meta_title'] ?? config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', $settings['default_meta_description'] ?? '')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="@yield('og_url', url()->current())">
    <meta property="og:title"       content="@yield('og_title', $settings['default_meta_title'] ?? config('app.name'))">
    <meta property="og:description" content="@yield('og_description', $settings['default_meta_description'] ?? '')">
    <meta property="og:image"       content="@yield('og_image', asset('web-assets/images/logo1.png'))">
    <meta property="og:site_name"   content="{{ $settings['site_name'] ?? config('app.name') }}">

    {{-- Twitter --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="@yield('og_title', $settings['default_meta_title'] ?? config('app.name'))">
    <meta name="twitter:description" content="@yield('og_description', $settings['default_meta_description'] ?? '')">
    <meta name="twitter:image"       content="@yield('og_image', asset('web-assets/images/logo1.png'))">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Tag Manager --}}
    @if(!empty($settings['google_tag_manager_id']))
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{ $settings['google_tag_manager_id'] }}');</script>
    @endif

    {{-- Google Analytics --}}
    @if(!empty($settings['google_analytics_id']))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $settings['google_analytics_id'] }}"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{{ $settings['google_analytics_id'] }}');</script>
    @endif

    @yield('head')

    {{-- Organization JSON-LD (every page) --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ $settings['site_name'] ?? 'Plazmasoft' }}",
        "legalName": "{{ $settings['legal_name'] ?? 'Kushwaha Webformat Private Limited' }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('web-assets/images/logo1.png') }}",
        "foundingDate": "{{ $settings['founded_year'] ?? '2022' }}",
        "address": [
            {
                "@type": "PostalAddress",
                "addressLocality": "Mumbai",
                "addressRegion": "Maharashtra",
                "addressCountry": "IN"
            },
            {
                "@type": "PostalAddress",
                "addressLocality": "Patna",
                "addressRegion": "Bihar",
                "addressCountry": "IN"
            }
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "{{ $settings['phone_primary'] ?? '' }}",
            "contactType": "sales",
            "email": "{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}"
        },
        "sameAs": [
            @php $sameAs = array_filter([$settings['linkedin_url'] ?? '', $settings['github_url'] ?? '', $settings['twitter_url'] ?? '', $settings['instagram_url'] ?? '', $settings['youtube_url'] ?? '']); @endphp
            {{ implode(",\n            ", array_map(fn($u) => '"' . e($u) . '"', $sameAs)) }}
        ]
    }
    </script>

    {{-- Page-specific JSON-LD --}}
    @yield('jsonld')
</head>
<body class="bg-white text-gray-800 antialiased">

    {{-- GTM noscript --}}
    @if(!empty($settings['google_tag_manager_id']))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $settings['google_tag_manager_id'] }}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    {{-- WhatsApp floating button --}}
    @if(!empty($settings['whatsapp_number']))
    <a href="https://wa.me/{{ $settings['whatsapp_number'] }}?text=Hi%2C%20I%27d%20like%20to%20discuss%20a%20project."
       target="_blank" rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] shadow-lg transition-transform duration-200 hover:scale-110"
       aria-label="Chat on WhatsApp">
        <svg class="h-7 w-7 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
    @endif

    @yield('scripts')
</body>
</html>
