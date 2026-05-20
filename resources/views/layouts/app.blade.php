<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'PlazmaSoft') }}</title>

    <meta name="description" content="PlazmaSoft provides cutting-edge mobile app and web development services. From AI-driven solutions to custom SaaS platforms, we help businesses grow with innovative technology. Contact us today!">
    <link rel="canonical" href="{{route('index')}}/" />

    <!-- Open Graph Meta Tags (For Facebook, LinkedIn, etc.) -->
    <meta property="og:url" content="{{route('index')}}/" />
    <meta property="og:title" content="PlazmaSoft | Cutting-Edge Mobile & Web Development Solutions" />
    <meta property="og:site_name" content="PlazmaSoft" />
    <meta property="og:description" content="Looking for expert mobile and web development services? PlazmaSoft delivers AI-driven, user-centric solutions to boost your business. Let's build something amazing together!" />
    <meta property="og:image" content="{{route('index')}}/web-assets/images/logo1.png" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@PlazmaSoft" />
    <meta name="twitter:url" content="{{route('index')}}/" />
    <meta name="twitter:title" content="PlazmaSoft | Expert Mobile App & Web Development Services" />
    <meta name="twitter:description" content="PlazmaSoft specializes in custom mobile apps, AI-powered websites, and scalable cloud solutions. Transform your digital presence with us today!" />
    <meta name="twitter:image" content="{{route('index')}}/web-assets/images/logo1.png" />

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
