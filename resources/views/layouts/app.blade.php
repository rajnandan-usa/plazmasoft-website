<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.company_name') }}</title>

    <meta name="description" content="@yield('meta_description', config('app.company_name') . ' — Founder-led web & mobile app development studio. Laravel, Flutter, AI integration (Gemini, Stable Diffusion). 18+ projects, 15+ happy clients. East Champaran, Bihar, India.')">
    <link rel="canonical" href="@yield('canonical', url()->current())" />

    <!-- Open Graph Meta Tags (For Facebook, LinkedIn, etc.) -->
    <meta property="og:url" content="@yield('og_url', url()->current())" />
    <meta property="og:title" content="@yield('og_title', config('app.company_name') . ' | Web & Mobile App Development')" />
    <meta property="og:site_name" content="{{ config('app.company_name') }}" />
    <meta property="og:description" content="@yield('og_description', 'Founder-led boutique studio specialising in Laravel, Flutter, and AI integrations. 18+ real projects delivered across fintech, fleet, agritech, and e-commerce.')" />
    <meta property="og:image" content="@yield('og_image', asset('web-assets/images/logo1.png'))" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@plazmasoft" />
    <meta name="twitter:url" content="@yield('og_url', url()->current())" />
    <meta name="twitter:title" content="@yield('og_title', config('app.company_name') . ' | Web & Mobile App Development')" />
    <meta name="twitter:description" content="@yield('og_description', 'Founder-led boutique studio specialising in Laravel, Flutter, and AI integrations. 18+ real projects delivered.')" />
    <meta name="twitter:image" content="@yield('og_image', asset('web-assets/images/logo1.png'))" />

    <!-- SEO & Indexing Meta Tags -->
    <meta name="robots" content="index, follow" />
    <meta name="Googlebot" content="index, follow" />
    <meta name="rating" content="Safe For Kids" />
    <meta name="googlebot" content="noodp" />
    <meta name="document-type" content="Public" />
    <meta name="language" content="English" />

    <!-- Additional SEO Meta Tags -->
    <meta name="keywords" content="mobile app development, web development, AI solutions, custom software, SaaS development, e-commerce development, Flutter apps, Laravel web applications, UI/UX design, cloud solutions, fintech software, enterprise solutions, startup app development, custom web portals, blockchain development, AI-powered web apps" />



    @include('layouts.header-script')

    <!-- Organization JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Plazmasoft",
      "legalName": "Kushwaha Webformat Private Limited",
      "url": "https://plazmasoft.com",
      "logo": "https://plazmasoft.com/web-assets/images/logo1.png",
      "founder": {
        "@type": "Person",
        "name": "Rajnandan Kushwaha",
        "jobTitle": "Founder & Full Stack Developer",
        "sameAs": [
          "https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/",
          "https://github.com/rajnandan-usa"
        ]
      },
      "foundingDate": "2021",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "East Champaran",
        "addressRegion": "Bihar",
        "postalCode": "845433",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-7903292066",
        "contactType": "sales",
        "email": "hello@plazmasoft.com",
        "availableLanguage": ["en", "hi"]
      },
      "sameAs": [
        "https://www.linkedin.com/company/plazmasoft/",
        "https://github.com/rajnandan-usa"
      ]
    }
    </script>
    @yield('structured_data')

</head>

<body class="vs-site">
    <!-- End Google Tag Manager (noscript) -->

    <!-- BEGIN #app -->

    <!-- Header Start -->
    @include('layouts.header')
    <!-- Header End -->
    <main class="vs-site-content">



        @yield('mainBody')


        <!-- White Space Devider Start -->
        <div class="vs-white-space"></div>
    </main>


    <!-- Site Footer Start -->
    @include('layouts.footer')
    <!-- Site Footer End -->

    <!-- Request Proposal Popup Start -->
    <div class="modal fade" id="requestProposalModalSM" aria-labelledby="requestProposalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="vs-request-modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="row g-0">
                            <div class="col col-12 col-md-12 col-lg-12">
                                <div class="vs-speak-form-content p-5" style="border-radius:16px !important">
                                    <p class="vs-speak-form-description">Book Your Free Consultation</p>
                                    <div class="vs-speak-form">
                                       <x-contact-form />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Proposal Popup End -->
    <!-- END #app -->

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-click="scroll-top" class="btn-scroll-top btn btn-sm btn-primary text-white position-fixed bottom-0 right-0"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->




    @include('layouts.footer-script')

</body>

</html>
