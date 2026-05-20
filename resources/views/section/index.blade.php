@extends('layouts.app')

@section('title')
    Home
@endsection

@section('mainBody')
    <!-- Landing Section Start -->
    <section class="vs-landing-section sec-pad">
        <div class="container">
            <div class="vs-landing-content">
                <div class="row">
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-landing-content__inner mb-5 mt-5">
                            <h1 class="vs-section-title">Leading Web & Mobile <span>Application Development </span> Experts
                            </h1>
                            <p class="vs-section-description">We specialize in building high-performance web and mobile apps,
                                transforming ideas into market-ready products. Let’s bring yours to life!</p>
                            <div class="vs-landing-btn">
                                <a href="javascript:void(0)" class="btn btn-primary custom-btn" data-bs-toggle="modal"
                                    data-bs-target="#requestProposalModalSM">
                                    <i class="fas fa-calendar-check"></i> Book Your Consultation
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6">
                      <div class="vs-lading-img">
                         <img src="{{ asset('web-assets/images/landing-img.png') }}" alt="landing-img" class="img-fluid">
                     </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- Landing Section End -->
    <!-- Transparency Section Start -->

    <!-- Transparency Section End -->
    <!-- Technoyuga Section Start -->
    <section class="vs-vediccode-info-section vs-section-spacer bg-white sec-pad">
        <div class="container">
            <div class="vs-vediccode-info__inner">
                <div class="row">
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-technoyuga-info-content">
                            <div class="vs-heading-center">
                                <h2 class="vs-section-title vs-title-border"> {{ config('app.company_name') }}</h2>
                                <p class="vs-section-description">Transparency, Integrity & Empathy</p>
                            </div>
                            <div class="vs-technoyuga-info-description">
                                <p> {{ config('app.company_name') }} is a rising web and mobile app development company
                                    founded in {{ env('FOUNDED_ON') }}, dedicated to supporting startups, small businesses,
                                    and brands with their technology needs. We offer complete end-to-end product development
                                    services, acting as true technology partners throughout your product journey—from
                                    ideation to launch.</p>
                                <p>We take full ownership, providing free consultations, idea validation, risk assessments,
                                    business model advice, and the right tech and team to bring your vision to life.</p>
                                <p>What sets us apart is our commitment to your success. Beyond app development, we offer
                                    tech support, post-launch marketing, funding pitch guidance, and social media marketing
                                    to help you thrive.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-vediccode-counter-content">
                            <div class="row">
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="vs-vediccode-count-card">
                                        <h3 class="vs-vediccode-count">5+</h3>
                                        <p class="vs-vediccode-description">Successful years experience in Mobile
                                            and
                                            Web App Design and Development</p>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="vs-vediccode-count-card">
                                        <h3 class="vs-vediccode-count">10k+</h3>
                                        <p class="vs-vediccode-description">Hours worked on web and mobile app
                                            projects
                                            through Upwork with Top Rated Plus and 5* Feedbacks.</p>
                                    </div>
                                </div>

                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="vs-vediccode-count-card">
                                        <h3 class="vs-vediccode-count">10+</h3>
                                        <p class="vs-vediccode-description">Dedicated Developers & Designers
                                            worldwide.
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="vs-vediccode-count-card">
                                        <h3 class="vs-vediccode-count">40+</h3>
                                        <p class="vs-vediccode-description">Apps and Websites Developed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Technoyuga Section End -->
    <!-- Awards Section Start -->
    <section class="vs-awards-section vs-section-spacer vs-section-background sec-pad">

        <div class="container">
            <div class="vs-awards-content">
                <div class="vs-heading-center">
                    <h2 class="vs-section-title vs-title-border">Awards & <br />Recognitions</h2>
                </div>
                <div class="vs-awards-list">
                    <div class="vs-awards-list-item">
                        <img src="{{ asset('web-assets/images/award-clutch.svg') }}" alt="award-clutch" class="img-fluid">
                    </div>
                    <div class="vs-awards-list-item">
                        <img src="{{ asset('web-assets/images/award-upwork.svg') }}" alt="award-upwork" class="img-fluid">
                    </div>
                    <div class="vs-awards-list-item">
                        <img src="{{ asset('web-assets/images/award-softwareworld.svg') }}" alt="award-softwareworld"
                            class="img-fluid">
                    </div>
                    <div class="vs-awards-list-item">
                        <img src="{{ asset('web-assets/images/award-appdevelopment.svg') }}" alt="award-appdevelopment"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Awards  Section End -->
    <!-- White Space Devider Start -->
 
    <!-- White Space Devider End -->
    <!-- Services Section Start -->
    <section class="vs-service-section vs-section-spacer vs-section-background vs-service-not-hover bg-white sec-pad">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border"><span> Services </span></h2>
                <p class="vs-section-description">Everything your custom app needs under one roof.</p>
            </div>
            <div class="vs-service-content">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="">
                                <h3 class="vs-service-card-title">Mobile App Development</h3>
                            </a>
                            <div class="vs-service-card-item-list">
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/react-native.svg') }}"
                                            alt="react-native" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label"><a href="">React Native</a></p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/flutter.svg') }}" alt="flutter"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label"><a href="">Flutter</a></p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/android.svg') }}" alt="android"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label"><a href="">Android App</a></p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/ios.svg') }}" alt="ios"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label"><a href="">iOS App</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="">
                                <h3 class="vs-service-card-title">Web App Development</h3>
                            </a>
                            <div class="vs-service-card-item-list">
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/laravel.svg') }}" alt="laravel"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Laravel</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/node-Js.svg') }}" alt="node-Js"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Node.Js</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/angular-Js.svg') }}"
                                            alt="angular-Js" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Angular.Js</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/react-native.svg') }}"
                                            alt="react-native" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">React.Js</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="services/ui-ux-design.html">
                                <h3 class="vs-service-card-title">UI/UX Design</h3>
                            </a>
                            <div class="vs-service-card-item-list">
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/figma.svg') }}" alt="figma"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Figma</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/adobe-xd.svg') }}" alt="adobe-xd"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Adobe xd</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/sketch.svg') }}" alt="sketch"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Sketch</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/photoshop.svg') }}"
                                            alt="photoshop" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Photoshop</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="services/app-maintenance.html">
                                <h3 class="vs-service-card-title">App Maintenance</h3>
                            </a>
                            <div class="vs-service-card-item-list">
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/react-native.svg') }}"
                                            alt="react-native" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">React Native App Maintenance</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/flutter.svg') }}" alt="flutter"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Flutter App Maintenance</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/android.svg') }}" alt="android"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">Android App Maintenance</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/ios.svg') }}" alt="ios"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">iOS App Maintenance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="">
                                <h3 class="vs-service-card-title">IoT Development</h3>
                            </a>
                            <div class="vs-service-card-item-list">
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/iot-apps.svg') }}" alt="iot-apps"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">IoT Apps</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/iot-dashboard.svg') }}"
                                            alt="iot-dashboard" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">IoT Dashboard & Analytics</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/saas-development.svg') }}"
                                            alt="saas-development" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">SaaS App Development</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/iot-software.svg') }}"
                                            alt="iot-software" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">IoT Software</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-service-card">
                            <a href="">
                                <h3 class="vs-service-card-title">ChatGPT development</h3>
                            </a>
                            <div class="vs-service-card-item-list">
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/openAi.svg') }}" alt="openAi"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">OpenAi</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/chat-gpt.svg') }}" alt="chat-gpt"
                                            class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">ChatGPT Development</p>
                                </div>
                                <div class="vs-service-card-item">
                                    <div class="vs-service-card-item-logo">
                                        <img src="{{ asset('web-assets/images/services/chat-gpt-bots.svg') }}"
                                            alt="chat-gpt-bots" class="img-fluid">
                                    </div>
                                    <p class="vs-service-card-item-label">ChatGPT Bots</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vs-service-btn  text-center">
                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#requestProposalModalSM"><i class="fas fa-calendar-check"></i> Book Your
                    Consultation</a>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- White Space Devider Start -->
    
    <!-- White Space Devider End -->
    <!-- What We Do Section Start -->
    <section class="vs-what-do-section vs-section-spacer vs-section-background sec-pad">
        
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">What We Excel At</h2>
                <h4 class="vs-section-subtitle">Delivering Outsourced IT Services for Every Industry </h4>
                <p class="vs-section-description">At <a href="{{ route('index') }}">{{ env('COMPANY_NAME') }}</a> we
                    believe in the power of industry expertise. By partnering with experienced professionals, we deliver
                    superior products while keeping timelines and costs in check. Our areas of expertise include:</p>
            </div>
            <div class="vs-what-do-content">
                <div class="vs-what-do-card-list">
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{ asset('web-assets/images/newimages/ecomm.jpg') }}" alt="E-COMMERCE"
                                    class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">E-COMMERCE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{ asset('web-assets/images/newimages/on-demand.jpg') }}" alt="ON DEMAND"
                                        class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">ON DEMAND <br />SOLUTIONS</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{ asset('web-assets/images/newimages/social.jpg') }}" alt="SOCIAL NETWORKING"
                                    class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">SOCIAL <br />NETWORKING</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{ asset('web-assets/images/newimages/health.jpg') }}" alt="HEALTHCARE"
                                        class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">HEALTHCARE</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{ asset('web-assets/images/newimages/emerging.jpg') }}" alt="EMERGING TECH"
                                    class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">EMERGING <br />TECH</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{ asset('web-assets/images/newimages/tour.jpg') }}" alt="TOURS AND TRAVEL"
                                    class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">TOURS AND TRAVEL</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{ asset('web-assets/images/newimages/trans.jpg') }}"
                                        alt="TRANSPORT AND LOGISTICS" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">TRANSPORT AND LOGISTICS</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{ asset('web-assets/images/newimages/fintech.jpg') }}" alt="FINTECH"
                                        class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">FINTECH</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vs-what-do-card-item">
                        <div class="vs-what-do-card">
                            <div class="vs-what-do-card-img">
                                <img src="{{ asset('web-assets/images/newimages/education.jpg') }}" alt="EDUCATION"
                                    class="img-fluid">
                            </div>
                            <div class="vs-what-do-card-body">
                                <h5 class="vs-what-do-card-title">EDUCATION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="vs-what-do-card-item">
                        <a href="">
                            <div class="vs-what-do-card">
                                <div class="vs-what-do-card-img">
                                    <img src="{{ asset('web-assets/images/newimages/wellness.jpg') }}"
                                        alt="WELLNESS AND FITNESS" class="img-fluid">
                                </div>
                                <div class="vs-what-do-card-body">
                                    <h5 class="vs-what-do-card-title">WELLNESS <br />AND <br />FITNESS</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Section End -->
    <!-- Technology Stack Section Start -->
    <section class="vs-technology-section vs-section-spacer bg-white sec-pad">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Development Toolkit</h2>
                <p class="vs-section-description">
                    At {{ env('COMPANY_NAME') }}, we leverage scalable and cutting-edge frameworks and technologies to
                    build mobile apps, backend systems, and web applications for our clients.
                </p>
            </div>
            <div class="vs-technology-content">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="nav flex-column nav-pills me-3" id="vs-stack-tab" role="tablist"
                            aria-orientation="vertical">
                            <div class="nav-link active" id="vs-stack-web-tab" data-bs-toggle="pill"
                                data-bs-target="#vs-stack-web" role="tab" aria-controls="vs-stack-web"
                                aria-selected="true">
                                <div class="vs-technology-stack-tab-btn">
                                    <h3 class="vs-stack-tab-title">Web Development Tools</h3>
                                    <p class="vs-stack-tab-description">We employ an agile methodology and robust
                                        technology framework to develop web applications that exceed your expectations.</p>
                                </div>
                            </div>
                            <div class="nav-link" id="vs-stack-mobile-tab" data-bs-toggle="pill"
                                data-bs-target="#vs-stack-mobile" role="tab" aria-controls="vs-stack-mobile"
                                aria-selected="false">
                                <div class="vs-technology-stack-tab-btn">
                                    <h3 class="vs-stack-tab-title">Mobile Development Toolkit</h3>
                                    <p class="vs-stack-tab-description">{{ env('COMPANY_NAME') }} Mobile App Development
                                        teams utilize the latest tech frameworks to bring your dream mobile apps to life.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="tab-content" id="vs-stack-tabContent">
                            <div class="tab-pane fade show active" id="vs-stack-web" role="tabpanel"
                                aria-labelledby="vs-stack-web-tab">
                                <div class="vs-stack-tabContent__inner">
                                    <div class="vs-stack-content-item">
                                        <h4 class="vs-stack-logo-title">Frontend</h4>
                                        <div class="vs-stack-logo-list">
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/react.png') }}" alt="React"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">React</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/angular.png') }}"
                                                        alt="Angular" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Angular</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/javascript.png') }}"
                                                        alt="Java Script" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Java Script</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/html.png') }}" alt="HTML 5"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">HTML 5</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-stack-content-item">
                                        <h4 class="vs-stack-logo-title">Backend</h4>
                                        <div class="vs-stack-logo-list">
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/node.png') }}" alt="Node js"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Node js</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/php.png') }}" alt="PHP"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">PHP</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/csharpe.svg') }}"
                                                        alt="C#" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">C#</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/python.svg') }}" alt="Python"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Python</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-stack-content-item">
                                        <div class="vs-stack-logo-list">
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/express.png') }}"
                                                        alt="Express" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Express</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/laracel.png') }}"
                                                        alt="Laravel" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Laravel</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/dotnet.png') }}" alt=".NET"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">.NET</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/django.png') }}" alt="Django"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Django</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vs-stack-mobile" role="tabpanel"
                                aria-labelledby="vs-stack-mobile-tab">
                                <div class="vs-stack-tabContent__inner">
                                    <div class="vs-stack-content-item">
                                        <h4 class="vs-stack-logo-title">Languages</h4>
                                        <div class="vs-stack-logo-list">
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/swift.svg') }}" alt="swift"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Swift</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/kotlin.svg') }}" alt="Kotlin"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Kotlin</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/java.svg') }}" alt="Java"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Java</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/dart.svg') }}" alt="dart"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Dart</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-stack-content-item">
                                        <h4 class="vs-stack-logo-title">Frameworks</h4>
                                        <div class="vs-stack-logo-list">
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/flutter.svg') }}"
                                                        alt="Flutter" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Flutter</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/react.png') }}"
                                                        alt="React Native" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">React Native</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/rx-java.svg') }}"
                                                        alt="rx-java" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Rx Java</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/junit.svg') }}" alt="JUnit"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">JUnit</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-stack-content-item">
                                        <h4 class="vs-stack-logo-title">Database</h4>
                                        <div class="vs-stack-logo-list">
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/firebase-stack.svg') }}"
                                                        alt="Firebase" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Firebase</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/realm.svg') }}" alt="Realm"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">Realm</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/sw-lite.svg') }}"
                                                        alt="SW Lite" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">SW Lite</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/mongo-db.svg') }}"
                                                        alt="MongoDB" class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">MongoDB</h5>
                                            </div>
                                            <div class="vs-stack-logo-item">
                                                <div class="vs-stack-logo-img">
                                                    <img src="{{ asset('web-assets/images/my-sql.svg') }}" alt="My SQL"
                                                        class="img-fluid">
                                                </div>
                                                <h5 class="vs-stack-logo-label">My SQL</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology Stack Section End -->
    <!-- Platforms Section Start -->
    <section class="vs-platforms-section vs-section-spacer vs-section-background sec-pad">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Platforms</h2>
                <p class="vs-section-description">Connect with your customers across the full range of <br /> digital
                    devices </p>
            </div>
            <div class="vs-platforms-content">
                <div class="vs-platforms-item">
                    <div class="vs-platforms-logo">
                        <img src="{{ asset('web-assets/images/smart-house.png') }}"
                            style="width:198px !important; height:200px !important" alt="Phone" class="img-fluid">

                    </div>
                    <h4 class="vs-platforms-title">IOT</h4>
                </div>
                <div class="vs-platforms-item">
                    <div class="vs-platforms-logo">
                        <img src="{{ asset('web-assets/images/iphone.png') }}" style="height:213px !important"
                            alt="Phone" class="img-fluid">
                    </div>
                    <h4 class="vs-platforms-title">Phone</h4>
                </div>
                <div class="vs-platforms-item">
                    <div class="vs-platforms-logo">
                        <img src="{{ asset('web-assets/images/laptop.png') }}" width="240" height="100"
                            alt="Laptop" class="img-fluid">
                    </div>
                    <h4 class="vs-platforms-title">Web</h4>
                </div>
                <div class="vs-platforms-item">
                    <div class="vs-platforms-logo">
                        <img src="{{ asset('web-assets/images/tablet.png') }}" width="150"
                            style="height:180px !important" alt="Tablet" class="img-fluid">
                    </div>
                    <h4 class="vs-platforms-title">Tablet</h4>
                </div>
                <div class="vs-platforms-item">
                    <div class="vs-platforms-logo">
                        <img src="{{ asset('web-assets/images/smartwatch.png') }}" width="140" height="235"
                            alt="Wearable" class="img-fluid">
                    </div>
                    <h4 class="vs-platforms-title">Wearable</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Platforms Section End -->
    <!-- Portfolio Section Start -->
    {{-- <section class="vs-portfolio-section vs-section-spacer">
            <div class="vs-portfolio-particles">
                <img src="{{asset('web-assets/images/portfolio-particles.svg')}}" alt="Portfolio Particle" class="img-fluid">
            </div>
            <div class="container">
                <div class="vs-heading-center">
                    <h2 class="vs-section-title vs-title-border">Our Portfolio</h2>
                    <p class="vs-section-description">Work with groundbreakers who create top-notch mobile and web apps
                        on time & on budget
                    </p>
                </div>

                <div class="vs-portfolio-content vs-portfolio-area">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">
                            <div class="vs-portfolio-content__inner">
                                <div class="vs-portfolio-slider">
                                    <div class="vs-portfolio-item" style="background-color: #FFCC9F;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/7%20NOW%20%e2%80%93%20Food%20%26%20Alcohol%20Delivery%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/7%20NOW%20%e2%80%93%20Food%20%26%20Alcohol%20Delivery%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>7 NOW – Food &amp;
                                                                        Alcohol Delivery App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">7 Now is a premier
                                                            food and alcohol delivery app offering a curated selection
                                                            of culinary delights and beverages. With a user-friendly
                                                            interface and swift delivery, it&#039;s an all-encompassing
                                                            platform that ensures an exceptional dining and drinking
                                                            experience.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">7 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        ASP.net, MSSQL</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details49a4.html?id=com.seven.eleven.phoenix"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/us/app/7now-food-alcohol-delivery/id1316244211.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFD4B9;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Akasha%20Airlines%20%e2%80%93%20Flight%20Booking%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Akasha%20Airlines%20%e2%80%93%20Flight%20Booking%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Akasha Airlines –
                                                                        Flight Booking app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Akasha Airlines is
                                                            one of India&#039;s newest low-cost airlines based out in
                                                            India. Its app is very user-friendly. While using this app,
                                                            users can seamlessly book flights, manage their bookings,
                                                            check flight status, and more. The app offers exclusive
                                                            deals and discounts as well.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Flutter</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsf43a.html?id=com.akasaair.ibe"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/akasa-air/id1629829548.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFD8D9;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Baaz%20app%20-%20Social%20Media%20Platform.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Baaz%20app%20-%20Social%20Media%20Platform.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Baaz app - Social
                                                                        Media Platform</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Baaz is a social
                                                            media hub uniting diverse platforms via a single interface.
                                                            It offers a comprehensive view of trending discussions,
                                                            news, and user-generated content, simplifying the online
                                                            experience.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Tanzania.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Tanzania</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">9 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Flutter, Django,
                                                                        AWS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/searcha536.html?q=Baaz&amp;c=apps&amp;hl=en&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/us/app/baaz/id1092130570.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #F8BBFF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Booster%20Rewards%20-%20(Reward%20App).png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Booster%20Rewards%20-%20(Reward%20App).png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Booster Rewards -
                                                                        (Reward App)</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Booster Rewards is
                                                            a dynamic rewards program that enhances customer engagement.
                                                            Tailored for businesses, it offers a gamified experience,
                                                            encouraging loyalty through points, discounts, and exclusive
                                                            perks. Elevate your brand&#039;s customer relationships with
                                                            this innovative tool, driving repeat purchases and fostering
                                                            a dedicated clientele.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details78b0.html?id=com.olo.boosterjuice&amp;hl=en&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/booster-rewards/id1528598899.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E0E0E0;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Catholic%20Network%20-%20Networking%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Catholic%20Network%20-%20Networking%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Catholic Network -
                                                                        Networking App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Catholic Network is
                                                            a singapore based social networking app from singapore. It
                                                            connects individuals with their faith, offering prayers,
                                                            readings, and community discussions. Users can access daily
                                                            devotionals and deepen spiritual connections within the
                                                            Catholic community it also offers unique matching algorithm
                                                            to connect you with like minded individuals across the
                                                            globe.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Singapore.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Singapore</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, IOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details77c1.html?id=com.catholicnetworker"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/us/app/catholicnetworker/id6466239872.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFD5D9;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Cloud%20Menu%20Web%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Cloud%20Menu%20Web%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Cloud Menu Web
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">CloudMenu is a Saas
                                                            based startup from Saudi Arabia which offers cloud based
                                                            digital menu to restaurants and contact less ordering to
                                                            customers. Customers can browse and order the food menu by
                                                            scanning the QR code This solution offers intuitive
                                                            dashboard to manage the menus, orders and sales reports</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Saudi%20Arabia.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Saudi Arabia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">3 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, MongoDB,
                                                                        Node.JS and React</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFEAFB;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Dancematch%20-%20Social%20Networking%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Dancematch%20-%20Social%20Networking%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Dancematch - Social
                                                                        Networking App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">DanceMatch is an
                                                            social networking app that helps dancers find and connect
                                                            for lessons, events, and competitions. Users can create
                                                            profiles, browse other users&#039; profiles, and send
                                                            messages to connect. DanceMatch also allows users to find
                                                            and register for dance classes and events its unique
                                                            algorithm helps dancers to find the right partners.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, IOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        Laravel, MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E4DEFF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Doos%20Karting%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Doos%20Karting%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Doos Karting
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Dooskarting is a
                                                            Saudi Arabia company that offers electronic kart racing to
                                                            their customers. They are part of Osool Entertainment, the
                                                            pioneer in entertainment activities in Saudi Arabian region.
                                                            This app is developed to allow customers to book kart race
                                                            tickets, order food items and track their race results. The
                                                            results are directly integrated through the IOT sensors, and
                                                            as soon as the race is over, users can track their position
                                                            on the app itself. Region</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Saudi%20Arabia.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Saudi Arabia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details350d.html?id=com.dooskarting.app"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/us/app/doos-karting/id1610315037.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFDBEC;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Ginga%20-%20Fantasy%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Ginga%20-%20Fantasy%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Ginga - Fantasy
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Ginga is
                                                            Malaysiya&#039;s first fantasy app for football lovers. It
                                                            allows users to signup, create their team, and invite their
                                                            friends to play the EPL season fantasy game, they can manage
                                                            their players, budget, and earnings on the platform in
                                                            real-time. This app also offers an e- commerce store with
                                                            users can purchase merchandise</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Malaysia.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Malaysia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">On Going</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, IOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        PHP and Sportsmonk</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFDC8E;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Imwow-%20Health%20%26%20Fitness%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Imwow-%20Health%20%26%20Fitness%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Imwow- Health &amp;
                                                                        Fitness App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Imwow is a india
                                                            based startup focused on health, fitness and lifestyle. It
                                                            helps users to achieve their fitness goals via personalized
                                                            diet plans, workout videos, and one-on-one coaching with the
                                                            Imwow app. If you are planning to stay fit while improving
                                                            your overall health, such a health and fitness app can be a
                                                            good guide for you.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">7 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, React
                                                                        Native, MongoDB, Node.js</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsdd1a.html?id=com.imwow&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsdd1a.html?id=com.imwow&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #A7E9FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Justlife%20-%20Home%20Services%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Justlife%20-%20Home%20Services%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Justlife - Home
                                                                        Services App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Justlife is an
                                                            innovative, on-demand home services app designed for
                                                            seamless access to household assistance. Offering a diverse
                                                            range of services, from cleaning to repairs, it connects
                                                            users with skilled professionals efficiently, ensuring a
                                                            convenient solution for all their home service needs.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/UAE.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>UAE</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">React Native,
                                                                        Django, AWS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsb162.html?id=com.mobile.justmop&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/justlife-home-services/id1107705982f486.html?platform=iphone"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #D3E1FE;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Just%20Market%20Trading%20-%20Online%20Trading%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Just%20Market%20Trading%20-%20Online%20Trading%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Just Market Trading
                                                                        - Online Trading App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Just Market Trading
                                                            is a cutting-edge online trading app that empowers users to
                                                            navigate financial markets effortlessly. Packed with
                                                            real-time data, an intuitive interface, and powerful
                                                            analytical tools, it provides a seamless trading experience.
                                                            Elevate your investment game with this comprehensive
                                                            platform, making informed decisions at your fingertips.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Malaysia.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Malaysia</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Kotlin,
                                                                        MySQL, PHP</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsb1d0.html?id=com.justmarkets&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/us/app/justmarkets-trading/id1489327144.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FEE1DB;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Kidzin%20-%20Shopping%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Kidzin%20-%20Shopping%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Kidzin - Shopping
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Kidzin is a premier
                                                            shopping app designed for parents and guardians, offering a
                                                            curated selection of children&#039;s products. With an
                                                            intuitive interface and a wide range of quality items, it
                                                            simplifies shopping for kids. Discover convenience and style
                                                            in one place, ensuring a delightful shopping experience for
                                                            both parents and children.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Java and
                                                                        Django</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details9231.html?id=com.kidizen&amp;hl=en"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/us/app/kidizen-buy-sell-kids-clothes/id395245595.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #A6EFFF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/MFine%20-%20Healthcare%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/MFine%20-%20Healthcare%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>MFine - Healthcare
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">MFine is a
                                                            on-demand telehealth app redefining the patient-doctor
                                                            relationship. It provides instant access to experienced
                                                            doctors through virtual consultations, empowering users to
                                                            receive medical advice and prescriptions fromthe comfort of
                                                            their homes.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">8 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Kotlin,
                                                                        Django, AWS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/search8863.html?q=mfine&amp;c=apps&amp;hl=en-IN"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/mfine-consult-doctors-online/id1308944633.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #CBEFFF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Revv%20-%20Ride%20Sharing%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Revv%20-%20Ride%20Sharing%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Revv - Ride Sharing
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Revv is a
                                                            self-drive car rental and subscription app based in India.
                                                            Within the Revv app, users get a wide range of cars to
                                                            choose from and can book cars for hourly, daily, weekly, or
                                                            monthly periods. Revv delivers cars to the user&#039;s
                                                            doorstep and offers flexible pricing plans.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">10 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Java ,
                                                                        Google Maps API, Django</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details64e3.html?id=com.selfdrive&amp;hl=en"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/revv-self-drive-car-rental/id1021594400.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFFAE5;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/DLive%20-Video%20streaming%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/DLive%20-Video%20streaming%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>DLive -Video
                                                                        streaming app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">The mission of
                                                            DLive is to create a value-sharing live-streaming platform
                                                            that empowers creators and viewers through a revolutionary
                                                            rewards system.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Flutter, Django,
                                                                        AWS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details2544.html?id=io.dlive&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/dlive-your-stream-your-rules/id1446969385.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFE6FE;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Chaupal%20-Video%20streaming%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Chaupal%20-Video%20streaming%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Chaupal -Video
                                                                        streaming app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">CHAUPAL is a
                                                            premium OTT app where you find superhit, original and
                                                            exclusive movies, series &amp; short films - all ad-free and
                                                            with world-class customer service.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">9 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Flutter, Django,
                                                                        AWS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details7430.html?id=tv.chaupal.android&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">
                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/chaupal-movies-web-series/id1580581377.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFE6E7;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/dIGIPLEX%20-Video%20streaming%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/dIGIPLEX%20-Video%20streaming%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>dIGIPLEX -Video
                                                                        streaming app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">dIGIPLEX is an
                                                            over-the-top (OTT) video on-demand platform in India that
                                                            offers a large library of content, including movies, web
                                                            series, and TV shows in a variety of genres.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Flutter, Django,
                                                                        AWS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details78f6.html?id=tv.digiplex.app.ott&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/digiplex/id1630149016.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFE6E7;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/TV%20Time%20-Video%20streaming%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/TV%20Time%20-Video%20streaming%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>TV Time -Video
                                                                        streaming app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">TV Time is a social
                                                            television network and tracking platform for movies and TV.
                                                            It allows users to store their media consumption
                                                            information, leave reviews, and track shows and movies.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">7 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details139c.html?id=com.tozelabs.tvshowtime&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/tv-time-track-shows-movies/id431065232.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFF0E5;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Clapper%20-Social%20Media%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Clapper%20-Social%20Media%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Clapper -Social
                                                                        Media app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Clapper is a free
                                                            social media app that encourages users to share short
                                                            videos, live streams, and other content about their real
                                                            lives and experiences. The app is available on the Apple App
                                                            Store and the Google Play Store.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">7 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Kotlin,
                                                                        MySQL, PHP</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details02c2.html?id=com.newsclapper.video&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E6FFED;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Camfrog%20-Social%20Media%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Camfrog%20-Social%20Media%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Camfrog -Social
                                                                        Media app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Camfrog is a free
                                                            video chat and instant messaging app that allows users to
                                                            meet people from around the world through live chat rooms.
                                                        </p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details7b5c.html?id=com.camshare.camfrog.android&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/camfrog-live-cam-chat-rooms/id694578768.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E6F4FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/MeetYa%20-Social%20Media%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/MeetYa%20-Social%20Media%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>MeetYa -Social
                                                                        Media app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">MeetYa is a free
                                                            social networking app that helps users meet new friends and
                                                            potential soulmates.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Germany.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Germany</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, React
                                                                        Native, MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details707c.html?id=app.meetya.hi&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/meetya-meet-your-crush/id1444728266.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFF8E5;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/TaxiClick%20-Taxi%20Booking%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/TaxiClick%20-Taxi%20Booking%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>TaxiClick -Taxi
                                                                        Booking app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">TaxiClick is a free
                                                            app that offers taxi services in over 70 cities, with more
                                                            than 25,000 taxis available. The app is available for
                                                            iPhone, iPad, and iPod touch.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Spain.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Spain</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details30ce.html?id=com.interfacom.taxiclick&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/taxiclick/id510296062.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E5E5FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/taxi.eu%20-Taxi%20Booking%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/taxi.eu%20-Taxi%20Booking%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>taxi.eu -Taxi
                                                                        Booking app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">The taxi.eu app is
                                                            a free app that allows users to order taxis in over 160
                                                            cities across 9 European countries. The app connects users
                                                            with the fastest taxi in their area, and users can track the
                                                            taxi&#039;s route live.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Germany.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Germany</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase, Google Maps API</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsa519.html?id=at.austrosoft.t4me.MB_BerlinTZBEU&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/taxi-eu/id465315934.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFFAE5;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Wetaxi%20-Taxi%20Booking%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Wetaxi%20-Taxi%20Booking%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Wetaxi -Taxi
                                                                        Booking app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Wetaxi is a mobile
                                                            app that allows users to book taxis in advance at a fixed
                                                            price in over 23 cities in Italy. The app works by allowing
                                                            users to enter their departure and destination points, and
                                                            Wetaxi guarantees the maximum price for the ride.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Italy.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Italy</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">9 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase, Google Maps API</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details8ca5.html?id=it.moveplus.easymoove.user&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/wetaxi-all-in-one/id1011103009.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E5E8FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Betterment%20-Stock%20trading%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Betterment%20-Stock%20trading%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Betterment -Stock
                                                                        trading app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Betterment is a
                                                            robo advisor built with technology that optimizes for you,
                                                            creating a tailored experience that fits your needs whether
                                                            you’re an investor-in-training or a stock market guru.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        PHP , MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details28b5.html?id=com.betterment&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E9FFE6;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Fidelity%20-Stock%20trading%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Fidelity%20-Stock%20trading%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Fidelity -Stock
                                                                        trading app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Fidelity app gives
                                                            users mobile access to a broad range of investments, expert
                                                            insights, and tools to help you make smart investing,
                                                            saving, and financial planning decisions.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details484e.html?id=com.fidelity.android&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #EDE5FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Wealthfront-Stock%20trading%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Wealthfront-Stock%20trading%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Wealthfront-Stock
                                                                        trading app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Wealthfront is a
                                                            popular robo-advisor app that offers automated investment
                                                            management services. It uses algorithms to create and manage
                                                            a diversified investment portfolio based on your financial
                                                            goals and risk tolerance. Wealthfront also offers features
                                                            like tax-loss harvesting and automatic rebalancing to help
                                                            maximize your returns.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Java,
                                                                        MongoDB, Node.JS, Firebase </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsee40.html?id=com.wealthfront&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E9FFE6;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/NetBenefits%20-Stock%20trading%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/NetBenefits%20-Stock%20trading%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>NetBenefits -Stock
                                                                        trading app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">NetBenefits is a
                                                            mobile app provided by Fidelity Investments that allows
                                                            users to access and manage their retirement accounts, such
                                                            as 401(k) or pension plans, on the go. Users can view their
                                                            account balances, make contributions, change investment
                                                            allocations, and access educational resources to help them
                                                            plan for retirement.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/India.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>India</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, React
                                                                        Native, MongoDB, Node.JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details4c8c.html?id=com.fidelity.wi.activity&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/netbenefits/id640179084.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E5FFF0;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Shipt%20-Grocery%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Shipt%20-Grocery%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Shipt -Grocery
                                                                        app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Shipt is a grocery
                                                            delivery service that allows customers to order groceries
                                                            and have them delivered to their doorstep. The app enables
                                                            users to browse through a variety of products, select items
                                                            for purchase, and choose a delivery time that is convenient
                                                            for them.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        Laravel, MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details390c.html?id=com.shipt.groceries&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFF2E5;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Thuisbezorgd.nl-Grocery%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Thuisbezorgd.nl-Grocery%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title">
                                                                    <span>Thuisbezorgd.nl-Grocery app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Thuisbezorgd.nl is
                                                            a popular food delivery app in the Netherlands that allows
                                                            users to order food from various restaurants and have it
                                                            delivered to their doorstep. The app is user-friendly and
                                                            offers a wide range of cuisines to choose from.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Netherlands.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Netherlands</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Kotlin,
                                                                        MySQL, PHP</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details5ee8.html?id=com.takeaway.android&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/thuisbezorgd-nl/id329472759.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFE6EC;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/InstaShop-Grocery%20app.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/InstaShop-Grocery%20app.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>InstaShop-Grocery
                                                                        app</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">InstaShop is a
                                                            popular grocery delivery app that allows users to order
                                                            groceries and have them delivered to their doorstep. Users
                                                            can browse through a wide selection of products from various
                                                            stores, add items to their cart, and schedule a delivery
                                                            time that is convenient for them.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/UAE.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>UAE</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        PHP, MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details43b6.html?id=com.stedor.instashop&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/instashop-grocery-delivery/id989276051.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E6F0FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/FanDuel%20-Sports%20Betting%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/FanDuel%20-Sports%20Betting%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>FanDuel -Sports
                                                                        Betting App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">FanDuel is a
                                                            popular fantasy sports app that allows users to compete in
                                                            daily and weekly fantasy sports contests for real money
                                                            prizes. Users can create their own fantasy teams by
                                                            selecting players from various professional sports leagues
                                                            and compete against other users to win cash prizes.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">10 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Java and
                                                                        Django</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsc537.html?id=com.fanduel.sportsbook&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E6F7FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Boom%20Fantasy-Sports%20Betting%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Boom%20Fantasy-Sports%20Betting%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Boom Fantasy-Sports
                                                                        Betting App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Boom Fantasy is a
                                                            real-time fantasy sports app that allows users to play daily
                                                            fantasy sports contests for real cash prizes. The app offers
                                                            a variety of sports including basketball, football,
                                                            baseball, and hockey, and users can participate in contests
                                                            with different buy-ins and prize pools.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">7 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        Laravel, MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details4a01.html?id=com.booment.fantasy&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFEEE5;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/JAUMO%20-Dating%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/JAUMO%20-Dating%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>JAUMO -Dating
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">JAUMO is a dating
                                                            app that allows users to meet new people, chat, and find
                                                            love or friendship. It has a user-friendly interface and
                                                            offers features such as profile verification, photo
                                                            moderation, and location-based matching.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Germany.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Germany</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">7 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, React
                                                                        Native, Python</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsb7eb.html?id=com.jaumo&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/in/app/jaumo-dating-app-chat-meet/id522681493.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FDE5FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/DISCO-Dating%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/DISCO-Dating%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>DISCO-Dating
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">DISCO is a dating
                                                            app that focuses on connecting people through shared
                                                            interests and activities. It allows users to create
                                                            profiles, swipe through potential matches, and chat with
                                                            others who have similar interests.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/Germany.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>Germany</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">5 Months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsc678.html?id=com.jaumo.gay&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #EAE5FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Taimi-Dating%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Taimi-Dating%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Taimi-Dating
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Taimi is a dating
                                                            and social networking app for LGBTQ+ individuals. It is
                                                            designed to provide a safe and inclusive space for people to
                                                            connect, chat, and meet new friends or potential romantic
                                                            partners. The app also offers features such as video calls,
                                                            stories, and groups to help users interact and engage with
                                                            each other.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">4 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        MongoDB, Node.JS, Firebase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/details6b35.html?id=com.takimi.android&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #E6F4FF;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Poly-Dating%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Poly-Dating%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Poly-Dating
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Poly-Dating app is
                                                            a dating app specifically designed for individuals who are
                                                            interested in polyamorous relationships, where they can have
                                                            multiple romantic partners at the same time with the consent
                                                            of all parties involved. This app provides a platform for
                                                            like-minded individuals to connect, communicate, and
                                                            potentially form meaningful relationships.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">On Going</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Figma, Flutter,
                                                                        Laravel, MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #FFCC9F;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/Gfacilivs-Web%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/Gfacilivs-Web%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>Gfacilivs-Web
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">Gfacility is an
                                                            all-in-one solution for streamlined facility management. The
                                                            app offers intuitive scheduling, maintenance tracking, and
                                                            resource management tools. With Gfacility, you&#039;ll
                                                            optimize efficiency, reduce downtime, and enhance
                                                            productivity across your facilities.</p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">10 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Web</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Flutter PHP, MySQL
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../gfacility.com/index.html"
                                                                    class="btn btn-success" target="_blank">
                                                                    <span>Visit Website</span>
                                                                    <span class="vs-btn-icon">
                                                                        <svg width="17" height="17" viewBox="0 0 17 17"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.0319 9.37779L10.3659 14.0438C10.2359 14.1738 10.0652 14.2391 9.89453 14.2391C9.72387 14.2391 9.55318 14.1738 9.42318 14.0438C9.16251 13.7831 9.16251 13.3618 9.42318 13.1011L12.9518 9.57245H2.5612C2.19253 9.57245 1.89453 9.27379 1.89453 8.90579C1.89453 8.53779 2.19253 8.23912 2.5612 8.23912H12.9518L9.42318 4.71047C9.16251 4.44981 9.16251 4.02843 9.42318 3.76777C9.68384 3.5071 10.1052 3.5071 10.3659 3.76777L15.0319 8.43378C15.0939 8.49578 15.1426 8.56907 15.1766 8.65107C15.2439 8.81373 15.2439 8.99784 15.1766 9.16051C15.1426 9.24251 15.0939 9.31579 15.0319 9.37779Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vs-portfolio-item" style="background-color: #F3E4DB;">
                                        <div class="row">
                                            <div class="col col-12 col-md-4 col-lg-4">
                                                <div class="vs-portfolio-item-img">
                                                    <img src="{{asset('web-assets/images/new-portfolio/TangoPay%20-Fintech%20App.png')}}"
                                                        alt="demand-grocery-img" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                                <div class="vs-portfolio-details">
                                                    <div class="vs-portfolio-heading">
                                                        <div class="vs-portfolio-heading-top">
                                                            <div class="vs-portfolio-logo">
                                                                <img src="{{asset('web-assets/images/new-portfolio/logo/TangoPay%20-Fintech%20App.png')}}"
                                                                    alt="app-logo" class="img-fluid">
                                                            </div>
                                                            <div class="vs-portfolio-heading__inner">
                                                                <h3 class="vs-portfolio-title"><span>TangoPay -Fintech
                                                                        App</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p class="vs-portfolio-heading-desccription">TagnoPay mobile app
                                                            revolutionizes how you manage your money, offering secure,
                                                            lightning-fast payments, transfers, and bill payments all in
                                                            one place. With Tangopay, the transactions are protected by
                                                            state-of-the-art security measures. Experience the future of
                                                            banking at your fingertips with an app like TangoPay.
                                                        </p>

                                                        <div class="vs-portfolio-body">
                                                            <div class="vs-portfolio-info">
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Region</label>
                                                                    <p
                                                                        class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                        <img style="padding-right: 10px;" width="25%"
                                                                            src="web-assets/images/new-portfolio/flags/small/US.png')}}"
                                                                            alt="app-logo" class="img-fluid">

                                                                        <span>US</span>
                                                                    </p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Duration</label>
                                                                    <p class="vs-portfolio-info-text">6 months</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Platforms</label>
                                                                    <p class="vs-portfolio-info-text">Android, iOS</p>
                                                                </div>
                                                                <div class="vs-portfolio-info-item">
                                                                    <label
                                                                        class="vs-portfolio-info-label">Technology</label>
                                                                    <p class="vs-portfolio-info-text">Swift, Java, and
                                                                        Mongo DB, Nodejs</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vs-portfolio-footer">


                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../play.google.com/store/apps/detailsb8b1.html?id=com.org.TangoPay&amp;hl=en_IN&amp;gl=US"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/google-store.svg')}}">

                                                                </a>
                                                            </div>

                                                            <div class="vs-portfolio-footer-item">
                                                                <a href="../apps.apple.com/pk/app/tangopay-send-money-globally/id1590358558.html"
                                                                    class="vs-portfolio-footer-link" target="_blank">
                                                                    <img src="{{asset('web-assets/images/apple-store.svg')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> --}}
    <!-- Portfolio Section End -->
    <!-- Testimonials Section Start -->
    {{-- <section class="vs-testimonials-section vs-section-spacer vs-section-background sec-pad">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Testimonials</h2>
                <p class="vs-section-description">Discover why our clients trust us as their reliable <br />long-term
                    partner
                </p>
            </div>
            <div class="vs-testimonial-slider-area">
                <div class="vs-testimonial-slider">
                    <div class="vs-testimonial-item">
                        <div class="vs-testimonial-card">
                            <div class="vs-testimonial-card-head">
                                <div class="vs-testimonial-user">
                                    <div class="vs-testimonial-user-profile">
                                        <img src="{{ asset('web-assets/images/valon.png') }}" alt="valon"
                                            class="img-fluid">
                                    </div>
                                    <div class="vs-testimonial-user-info">
                                        <h4 class="vs-testimonial-username">Valon Miski</h4>
                                        <label class="vs-testimonial-designation">Founder, Gfacility</label>
                                        <div class="vs-testimonial-user-country">
                                            <img src="{{ asset('web-assets/images/belgium.png') }}" alt="belgium"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vs-testimonial-description">
                                <p>Awesome work culture. Requested some difficult and specific SDK integrations in
                                    my flutter application. Even Though it was complex, they made sure to understand
                                    it properly and to integrate it. Thanks to the dedication and overtime this
                                    difficult project was delivered within time and budget. Without a doubt one of
                                    my best experiences until now. Well done!</p>
                            </div>
                        </div>
                    </div>
                    <div class="vs-testimonial-item">
                        <div class="vs-testimonial-card">
                            <div class="vs-testimonial-card-head">
                                <div class="vs-testimonial-user">
                                    <div class="vs-testimonial-user-profile">
                                        <img src="{{ asset('web-assets/images/andrew.png') }}" alt="Andrew Garcia"
                                            class="img-fluid">
                                    </div>
                                    <div class="vs-testimonial-user-info">
                                        <h4 class="vs-testimonial-username">Andrew Garcia</h4>
                                        <label class="vs-testimonial-designation">Co-owner, Bubble Battle</label>
                                        <div class="vs-testimonial-user-country">
                                            <img src="{{ asset('web-assets/images/USA.png') }}" alt="USA"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vs-testimonial-description">
                                <p>{{ config('app.company_name') }}  did an AWESOME Job on our two projects Bubble Battle and
                                    Topline in last 2 years and we are very happy with the end results. They
                                    provided exceptional support even after delivery of the project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- Testimonials Section End -->
    <!-- Our Process Section Start -->
    <section class="vs-process-section vs-section-spacer sec-pad">

        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Process</h2>
                <p class="vs-section-description">Work with groundbreakers who create top-notch mobile and web apps
                    on time & on budget </p>
            </div>
            <div class="vs-process-step">
                <div class="vs-process-step-item">
                    <div class="vs-process-step-icon">
                        <img src="{{ asset('web-assets/images/creativity.png') }}" width="80" height="80"
                            style="margin-top:-18px;" alt="Idea" class="img-fluid">
                    </div>
                    <h5 class="vs-process-step-title">Idea</h5>
                    <p class="vs-process-step-description">We provide no obligation free consultation to discuss
                        your project idea and help you with tech stack, budget and timelines.</p>
                </div>
                <div class="vs-process-step-item">
                    <div class="vs-process-step-icon">
                        <img src="{{ asset('web-assets/images/web-design.png') }}" width="80" height="80"
                            style="margin-top:-18px;" alt="UI/UX design" class="img-fluid">
                    </div>
                    <h5 class="vs-process-step-title">UI/UX design</h5>
                    <p class="vs-process-step-description">Our clients work with our product design team to bring
                        project concept to live. We provide prototype so you can experience the app flow.</p>
                </div>
                <div class="vs-process-step-item">
                    <div class="vs-process-step-icon">
                        <img src="{{ asset('web-assets/images/developmen_process.png') }}" width="80" height="80"
                            style="margin-top:-18px;" alt="Development" class="img-fluid">
                    </div>
                    <h5 class="vs-process-step-title">Development</h5>
                    <p class="vs-process-step-description">Development team starts the coding. The process is
                        divided into sprints. Our agile model allow you to assess what we’re building and provide
                        you with weekly updates.</p>
                </div>
                <div class="vs-process-step-item">
                    <div class="vs-process-step-icon">
                        <img src="{{ asset('web-assets/images/quality-control.png') }}" width="80" height="80"
                            style="margin-top:-18px;" alt="Testing" class="img-fluid">
                    </div>
                    <h5 class="vs-process-step-title">Testing</h5>
                    <p class="vs-process-step-description">We test all use cases, critical scenarios, and all
                        functional on real time device for IOS and Android along with Desktop</p>
                </div>
                <div class="vs-process-step-item">
                    <div class="vs-process-step-icon">
                        <img src="{{ asset('web-assets/images/product-lauch.png') }}" width="80" height="80"
                            style="margin-top:-18px;" alt="Launching" class="img-fluid">
                    </div>
                    <h5 class="vs-process-step-title">Launching</h5>
                    <p class="vs-process-step-description">Passing through a final round of QA and client approval.
                        We manage the submission in the app and play store. Additionally we help with tech support
                        for 30 days after going live.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Process Section End -->
    <!-- App Project Section Start -->
    <section class="vs-app-project-section vs-section-spacer sec-pad">

        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Your Mobile App project in the safe hands:</h2>
                <p class="vs-section-description">Your Project is our responsibility : We are the team of technology
                    experts that care for your business. We will share our best ideas for the amazing project
                    delivery.</p>
            </div>
            <div class="vs-app-project-content">
                <div class="row g-0">
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <div class="vs-app-project-card active"> -->
                        <div class="vs-app-project-card">
                            <div class="vs-app-project-card-icon">
                                <svg width="65" height="46" viewBox="0 0 65 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="42.25" cy="23.1733" r="22.5" fill="#E0F9FF" />
                                    <g clip-path="url(#clip0_4295_3152)">
                                        <path
                                            d="M33.9727 7.79688H30.4688V5.96875C30.4688 5.2957 29.9231 4.75 29.25 4.75C28.5769 4.75 28.0312 5.2957 28.0312 5.96875V7.79688H10.9688V5.96875C10.9688 5.2957 10.4231 4.75 9.75 4.75C9.07687 4.75 8.53125 5.2957 8.53125 5.96875V7.79688H5.02734C2.25522 7.79688 0 10.0521 0 12.8242V38.7227C0 41.4948 2.25522 43.75 5.02734 43.75H33.9727C36.7448 43.75 39 41.4948 39 38.7227V12.8242C39 10.0521 36.7448 7.79688 33.9727 7.79688ZM5.02734 10.2344H8.53125V11.4531C8.53125 12.1262 9.07687 12.6719 9.75 12.6719C10.4231 12.6719 10.9688 12.1262 10.9688 11.4531V10.2344H28.0312V11.4531C28.0312 12.1262 28.5769 12.6719 29.25 12.6719C29.9231 12.6719 30.4688 12.1262 30.4688 11.4531V10.2344H33.9727C35.4007 10.2344 36.5625 11.3961 36.5625 12.8242V15.7188H2.4375V12.8242C2.4375 11.3961 3.59927 10.2344 5.02734 10.2344ZM33.9727 41.3125H5.02734C3.59927 41.3125 2.4375 40.1507 2.4375 38.7227V18.1562H36.5625V38.7227C36.5625 40.1507 35.4007 41.3125 33.9727 41.3125Z"
                                            fill="#2D2D2D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4295_3152">
                                            <rect width="39" height="39" fill="white"
                                                transform="translate(0 4.75)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="vs-app-project-card-body">
                                <h3 class="vs-app-project-card-title">1st Demo in 8 Days </h3>
                                <p class="vs-app-project-card-description">Get your first working Demo within 8
                                    working days of the project kickoff.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="vs-app-project-card">
                            <div class="vs-app-project-card-icon">
                                <svg width="65" height="45" viewBox="0 0 65 45" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="42.5" cy="22.5" r="22.5" fill="#E0F9FF" />
                                    <g clip-path="url(#clip0_4295_3160)">
                                        <path
                                            d="M31.1471 27.0558C30.3395 26.2186 29.3654 25.7711 28.333 25.7711C27.309 25.7711 26.3266 26.2103 25.4857 27.0475L22.8548 29.6584C22.6383 29.5423 22.4218 29.4346 22.2137 29.3268C21.914 29.1776 21.6309 29.0367 21.3895 28.8875C18.9251 27.3293 16.6855 25.2986 14.5375 22.6711C13.4968 21.3616 12.7974 20.2592 12.2896 19.1402C12.9723 18.5186 13.605 17.8721 14.2211 17.2504C14.4542 17.0184 14.6873 16.778 14.9205 16.5459C16.6688 14.8053 16.6688 12.5509 14.9205 10.8103L12.6476 8.54749C12.3895 8.29055 12.1231 8.02531 11.8733 7.76008C11.3737 7.24619 10.8492 6.71573 10.3081 6.21841C9.50049 5.42271 8.53471 5 7.51899 5C6.50326 5 5.52084 5.42271 4.68828 6.21841C4.67995 6.2267 4.67995 6.2267 4.67163 6.23499L1.84092 9.07796C0.775239 10.1389 0.167469 11.4319 0.0342587 12.9321C-0.165556 15.3524 0.550447 17.6069 1.09994 19.0822C2.44869 22.7043 4.46349 26.0612 7.46903 29.6584C11.1157 33.9933 15.5033 37.4164 20.5153 39.8284C22.4302 40.7319 24.9861 41.8011 27.8418 41.9834C28.0167 41.9917 28.1998 42 28.3663 42C30.2896 42 31.9047 41.312 33.1702 39.9444C33.1785 39.9279 33.1952 39.9196 33.2035 39.903C33.6364 39.3808 34.136 38.9084 34.6605 38.4028C35.0185 38.0629 35.3848 37.7065 35.7428 37.3336C36.5671 36.4798 37 35.4852 37 34.4657C37 33.4379 36.5587 32.4516 35.7179 31.6228L31.1471 27.0558ZM34.1277 35.7836C34.1193 35.7836 34.1193 35.7919 34.1277 35.7836C33.803 36.1317 33.4699 36.4467 33.1119 36.7948C32.5708 37.3087 32.0213 37.8474 31.5051 38.4525C30.6642 39.3477 29.6735 39.7704 28.3747 39.7704C28.2498 39.7704 28.1166 39.7704 27.9917 39.7621C25.519 39.6046 23.2211 38.6431 21.4977 37.8226C16.7854 35.5515 12.6476 32.3273 9.20909 28.241C6.37005 24.8345 4.47181 21.6848 3.21464 18.3031C2.44036 16.2392 2.15729 14.6313 2.28218 13.1145C2.36543 12.1447 2.74008 11.3407 3.43111 10.6528L6.27015 7.82639C6.6781 7.44512 7.11103 7.2379 7.53564 7.2379C8.06015 7.2379 8.48476 7.55287 8.75118 7.8181C8.75951 7.82639 8.76783 7.83468 8.77616 7.84297C9.28402 8.31541 9.7669 8.80444 10.2748 9.32661C10.5329 9.59185 10.7993 9.85708 11.0657 10.1306L13.3386 12.3934C14.2211 13.272 14.2211 14.0842 13.3386 14.9628C13.0972 15.2032 12.864 15.4435 12.6226 15.6756C11.9232 16.3884 11.2572 17.0515 10.5329 17.698C10.5162 17.7146 10.4996 17.7229 10.4912 17.7395C9.77523 18.4523 9.90844 19.1485 10.0583 19.621C10.0666 19.6458 10.075 19.6707 10.0833 19.6956C10.6744 21.1212 11.507 22.4639 12.7725 24.0636L12.7808 24.0719C15.0786 26.89 17.5014 29.0865 20.1739 30.769C20.5153 30.9845 20.865 31.1586 21.198 31.3244C21.4977 31.4736 21.7808 31.6145 22.0222 31.7637C22.0555 31.7802 22.0888 31.8051 22.1221 31.8217C22.4052 31.9626 22.6716 32.0289 22.9464 32.0289C23.6374 32.0289 24.0703 31.5979 24.2119 31.457L27.0592 28.6223C27.3423 28.3405 27.7919 28.0007 28.3164 28.0007C28.8326 28.0007 29.2572 28.3239 29.5153 28.6057C29.5236 28.614 29.5236 28.614 29.5319 28.6223L34.1193 33.1893C34.9769 34.0347 34.9769 34.905 34.1277 35.7836Z"
                                            fill="#2D2D2D" />
                                        <path
                                            d="M20.9338 12.2508C23.1356 12.6206 25.1357 13.6627 26.7325 15.2596C28.3292 16.8564 29.3628 18.8567 29.741 21.0587C29.8334 21.6134 30.3125 22 30.8587 22C30.9259 22 30.9848 21.9916 31.052 21.9832C31.6739 21.8823 32.0857 21.294 31.9848 20.6721C31.531 18.0079 30.2704 15.579 28.346 13.6543C26.4215 11.7297 23.9928 10.469 21.3288 10.0152C20.7069 9.91434 20.1271 10.3262 20.0178 10.9397C19.9086 11.5532 20.312 12.1499 20.9338 12.2508Z"
                                            fill="#2D2D2D" />
                                        <path
                                            d="M38.9826 19.7498C38.23 15.5665 36.1498 11.7598 32.9533 8.7305C29.7568 5.7012 25.7401 3.72974 21.326 3.01649C20.7087 2.91231 20.1252 3.31301 20.0153 3.89804C19.9138 4.49108 20.3282 5.04405 20.9539 5.14823C24.8945 5.78134 28.4884 7.55244 31.3466 10.2532C34.2048 12.9619 36.0652 16.3679 36.7332 20.1024C36.8263 20.6314 37.3083 21 37.8579 21C37.9256 21 37.9848 20.992 38.0524 20.984C38.6697 20.8958 39.0925 20.3348 38.9826 19.7498Z"
                                            fill="#2D2D2D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4295_3160">
                                            <rect width="39" height="39" fill="white"
                                                transform="translate(0 3)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="vs-app-project-card-body">
                                <h3 class="vs-app-project-card-title">Weekly Project Scrum Calls</h3>
                                <p class="vs-app-project-card-description">We ensure that you are updated with the
                                    project status on a weekly basis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 border-end-0">
                        <div class="vs-app-project-card">
                            <div class="vs-app-project-card-icon">
                                <svg width="63" height="45" viewBox="0 0 63 45" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="40.5" cy="22.5" r="22.5" fill="#E0F9FF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.1615 8C19.6205 8.15678 20.1064 8.14933 20.577 8.24201C23.9702 8.91031 26.7628 10.6129 28.9196 13.3528C31.3114 16.3916 32.3109 19.8855 31.9162 23.7584C31.5525 27.3277 30.0466 30.3372 27.4728 32.7942C25.8643 34.3296 24.3444 35.9575 22.7806 37.5397C21.4865 38.8492 20.1992 40.166 18.9137 41.4843C18.6995 41.7039 18.4803 41.9051 18.1847 42C18.0328 42 17.8809 42 17.729 42C17.4248 41.846 17.1975 41.5974 16.9623 41.3574C14.3782 38.7212 11.7918 36.0874 9.2094 33.4495C8.74211 32.9722 8.23395 32.5401 7.78119 32.0457C5.8896 29.9797 4.66194 27.5558 4.21813 24.7778C3.43507 19.8768 4.75935 15.6105 8.20685 12.085C10.345 9.89847 12.9582 8.62272 15.948 8.14774C16.2173 8.10505 16.4976 8.12517 16.7523 8C17.5554 8 18.3584 8 19.1615 8ZM18.3323 9.99628C16.0557 10.0231 14.2245 10.4509 12.5101 11.357C10.2704 12.5408 8.54205 14.2661 7.36136 16.5366C6.15917 18.8483 5.72884 21.3137 6.06681 23.9149C6.33696 25.9941 7.09242 27.8694 8.29588 29.5662C8.93039 30.4608 9.73785 31.1824 10.5007 31.9527C12.9371 34.4134 15.3561 36.8919 17.7737 39.3717C17.9558 39.5585 18.0499 39.5554 18.2229 39.3693C18.6857 38.8718 19.1675 38.3923 19.6462 37.9103C21.8469 35.6948 23.9872 33.4172 26.2313 31.2465C28.2769 29.2677 29.5257 26.8617 29.9119 24.0112C30.3667 20.6541 29.6101 17.5901 27.5963 14.8963C25.1869 11.6734 21.9357 10.0997 18.3323 9.99628Z"
                                        fill="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.001 22.9778C17.001 22.0145 16.9982 21.0512 17.0019 20.0879C17.0047 19.3858 17.3861 19.011 18.0999 19.0093C19.239 19.0068 20.3786 18.9862 21.5169 19.0158C23.4876 19.0672 24.6319 21.0976 23.6308 22.7712C23.1341 23.6014 22.3487 23.9756 21.377 23.9744C20.6651 23.9734 19.9531 23.9829 19.2415 23.9691C19.0217 23.9648 18.9652 24.0304 18.9707 24.2417C18.9855 24.8042 18.9804 25.3673 18.9744 25.9301C18.9677 26.5552 18.5526 26.9988 17.9849 27C17.4106 27.0012 17.0049 26.566 17.0022 25.9326C16.9981 24.9476 17.001 23.9627 17.001 22.9778ZM20.3072 22.0212C20.6571 22.0212 21.0068 22.0248 21.3565 22.0203C21.7976 22.0146 22.0243 21.8258 22.017 21.4792C22.01 21.1484 21.7811 20.9632 21.3638 20.9606C20.8391 20.9572 20.3146 20.9597 19.7898 20.9597C18.91 20.9597 18.9141 20.9595 18.9714 21.8427C18.9806 21.9832 19.0184 22.0269 19.1595 22.0239C19.542 22.0157 19.9247 22.0212 20.3072 22.0212Z"
                                        fill="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.9943 22.9969C15.9943 24.0031 16.01 25.0098 15.9891 26.0156C15.9738 26.7535 15.2519 27.2048 14.5961 26.9074C14.1662 26.7123 14.0017 26.3517 14.0016 25.9048C14.0016 25.0933 14.0016 24.2818 14.0016 23.4702C14.0016 22.3449 13.997 21.2196 14.0034 20.0943C14.0068 19.5024 14.3372 19.0898 14.8451 19.0126C15.462 18.9189 15.9823 19.356 15.9918 20.0108C16.0063 21.0059 15.9956 22.0015 15.9956 22.997C15.9952 22.9969 15.9948 22.9969 15.9943 22.9969Z"
                                        fill="#2D2D2D" />
                                </svg>
                            </div>
                            <div class="vs-app-project-card-body">
                                <h3 class="vs-app-project-card-title">Transfer Of IP</h3>
                                <p class="vs-app-project-card-description">You are the owner of the product
                                    Intellectual Property Rights.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 border-bottom-0">
                        <div class="vs-app-project-card">
                            <div class="vs-app-project-card-icon">
                                <svg width="62" height="45" viewBox="0 0 62 45" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="39.5" cy="22.5" r="22.5" fill="#E0F9FF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.125 41C20.375 41 19.625 41 18.875 41C18.7966 40.9809 18.7192 40.9554 18.6398 40.9438C17.8184 40.8238 16.9891 40.7446 16.1763 40.5819C9.19774 39.185 3.42051 33.1881 2.28134 26.1719C2.17098 25.4923 2.09299 24.8074 2 24.125C2 23.375 2 22.625 2 21.875C2.11486 21.0778 2.20106 20.2754 2.34891 19.4844C3.68859 12.3158 9.6743 6.4595 16.863 5.27692C17.5308 5.16711 18.2041 5.09149 18.875 5C19.625 5 20.375 5 21.125 5C21.2153 5.01966 21.3048 5.04397 21.396 5.0581C22.3198 5.20153 23.2569 5.28679 24.1659 5.49463C31.0985 7.07957 36.5523 12.8821 37.727 19.8971C37.837 20.5532 37.9099 21.2156 38 21.875C38 22.625 38 23.375 38 24.125C37.9801 24.2156 37.9545 24.3053 37.941 24.3968C37.8188 25.2297 37.7413 26.0717 37.571 26.8945C36.1274 33.874 30.1609 39.5832 23.136 40.7226C22.4682 40.8308 21.7954 40.9083 21.125 41ZM19.9854 38.7497C28.6515 38.7629 35.7198 31.7154 35.7497 23.0317C35.7794 14.3582 28.7048 7.26295 20.0141 7.25039C11.3476 7.23776 4.27826 14.2863 4.25032 22.9677C4.22245 31.64 11.2976 38.7364 19.9854 38.7497Z"
                                        fill="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.892 14.309C18.892 13.9195 18.8874 13.5308 18.893 13.1423C18.9027 12.4771 19.3848 11.9909 20.0183 12.0001C20.6339 12.009 21.0997 12.4935 21.1098 13.1432C21.1156 13.5208 21.1109 13.8986 21.1109 14.3057C21.2284 14.3427 21.344 14.3806 21.4606 14.4155C23.4955 15.0254 24.9557 16.9321 24.9918 19.0271C25.0038 19.723 24.5522 20.2339 23.9119 20.2487C23.2699 20.2635 22.803 19.7841 22.7737 19.08C22.7088 17.5237 21.444 16.3513 19.8857 16.4027C18.3695 16.4528 17.1751 17.745 17.231 19.2749C17.2843 20.7357 18.4939 21.8545 20.0347 21.9034C22.0746 21.9682 23.5939 22.9069 24.4954 24.716C25.8441 27.4223 24.3733 30.7005 21.4593 31.5841C21.3501 31.6171 21.2405 31.6487 21.1109 31.6871C21.1109 32.0812 21.1158 32.4698 21.1097 32.8581C21.0993 33.5214 20.6134 34.01 19.9824 33.9998C19.3669 33.9899 18.902 33.5042 18.893 32.8544C18.8877 32.466 18.8921 32.0774 18.8921 31.6793C17.8264 31.4108 16.9328 30.8919 16.2254 30.0768C15.4509 29.1845 15.0477 28.1459 15.0126 26.9709C14.9916 26.2725 15.4483 25.7655 16.0912 25.7512C16.7338 25.737 17.1998 26.2156 17.2291 26.92C17.2937 28.4746 18.5626 29.6508 20.1175 29.5974C21.6357 29.5452 22.8297 28.2528 22.7719 26.7242C22.7165 25.2606 21.5102 24.1494 19.9675 24.0959C17.8545 24.0226 16.3075 23.0314 15.4358 21.1266C14.1875 18.3989 15.7328 15.2105 18.6464 14.3951C18.7229 14.3738 18.7968 14.3427 18.892 14.309Z"
                                        fill="#2D2D2D" />
                                </svg>
                            </div>
                            <div class="vs-app-project-card-body">
                                <h3 class="vs-app-project-card-title">On Time. On Budget</h3>
                                <p class="vs-app-project-card-description">Set your project delivery when expected
                                    and within your budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 border-bottom-0">
                        <div class="vs-app-project-card">
                            <div class="vs-app-project-card-icon">
                                <svg width="70" height="48" viewBox="0 0 70 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="47.5" cy="22.5" r="22.5" fill="#E0F9FF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23.7246 46C22.8496 45.8056 22.0143 45.5227 21.2827 44.9556C19.4914 43.5669 18.7643 41.2101 19.4803 39.0558C20.2073 36.8678 22.2011 35.4467 24.462 35.505C26.6067 35.5604 28.5429 37.1245 29.1539 39.2953C29.1878 39.4161 29.221 39.537 29.2543 39.6572C31.1798 40.0605 34.6926 38.2464 35.8411 36.2016C35.487 36.2016 35.1741 36.2057 34.8611 36.2008C34.1403 36.1895 33.7731 35.8044 33.7729 35.0522C33.7716 30.7694 33.7698 26.4865 33.7786 22.2037C33.7791 21.931 33.8328 21.6446 33.925 21.3893C34.0694 20.9908 34.3574 20.7625 34.7979 20.7814C35.1186 20.7951 35.4405 20.784 35.7358 20.784C35.7759 20.7208 35.802 20.6988 35.8028 20.6757C35.9043 17.9341 35.8221 15.234 34.6663 12.6693C32.4837 7.82592 27.5704 4.78131 22.4451 5.16496C16.3992 5.61753 11.5924 10.2372 10.8033 16.4413C10.6243 17.8481 10.6842 19.2876 10.6318 20.7838C11.0044 20.7838 11.3081 20.7826 11.6118 20.784C12.2418 20.7873 12.612 21.1173 12.7008 21.7713C12.7271 21.9642 12.7226 22.1624 12.7226 22.3581C12.7238 26.571 12.7237 30.7839 12.7235 34.9968C12.7235 35.8467 12.3912 36.2003 11.5736 36.2003C10.3048 36.2003 9.03418 36.2339 7.76764 36.1756C5.75203 36.0829 4.08004 34.3559 4.03259 32.2593C3.97786 29.8396 4.00327 27.4171 4.02795 24.9962C4.04898 22.9353 5.70814 20.6569 8.2394 20.7822C8.34559 20.7875 8.45278 20.7729 8.62882 20.764C8.62882 20.5783 8.62755 20.4028 8.629 20.2275C8.64257 18.5919 8.55496 16.9511 8.88656 15.3331C9.97879 10.0023 12.9534 6.26755 17.7687 4.11232C19.1013 3.51593 20.5083 3.18743 21.9577 3.06629C22.0349 3.05987 22.1096 3.02285 22.1855 3C22.8875 3 23.5895 3 24.2916 3C24.8092 3.08168 25.3277 3.15684 25.8441 3.24588C31.6171 4.24253 36.4445 9.12832 37.5835 15.0961C37.9086 16.7996 37.8917 18.5169 37.888 20.2371C37.8876 20.4112 37.888 20.5854 37.888 20.7746C38.6352 20.7815 39.262 20.9697 39.8157 21.3805C41.142 22.3645 41.8818 23.7373 41.9418 25.3919C42.0286 27.7952 42.0033 30.2047 41.9622 32.6105C41.9337 34.2848 40.9784 35.5582 39.3996 35.886C38.5514 36.0621 38.0329 36.4666 37.6697 37.2085C37.6575 37.2333 37.6405 37.2555 37.6249 37.2783C36.0862 39.5375 34.0145 40.973 31.407 41.549C30.7011 41.7049 29.9744 41.7595 29.2576 41.8605C28.8612 43.8131 27.6903 45.0536 25.9103 45.7174C25.5709 45.8439 25.2098 45.9074 24.8587 45.9999C24.4806 46 24.1027 46 23.7246 46ZM10.6603 22.9043C9.85739 22.9043 9.07835 22.9042 8.29951 22.9043C6.95829 22.9047 6.07479 23.7964 6.06632 25.2034C6.05257 27.4825 6.05585 29.7616 6.06469 32.0407C6.0686 33.052 6.77432 33.9527 7.74251 34.037C8.70232 34.1206 9.67415 34.0553 10.6604 34.0553C10.6603 30.3463 10.6603 26.6595 10.6603 22.9043ZM35.8528 22.9085C35.8528 26.6555 35.8528 30.353 35.8528 34.0627C36.6896 34.0627 37.5008 34.1079 38.3051 34.0514C39.3303 33.9791 39.9196 33.387 39.9241 32.4816C39.9359 30.2024 39.942 27.9231 39.9192 25.6442C39.9108 24.8082 39.6209 24.0396 39.0374 23.4548C38.7828 23.1998 38.4081 22.9701 38.0672 22.9326C37.3479 22.8535 36.6148 22.9085 35.8528 22.9085ZM27.3009 40.7971C27.2852 38.9617 25.9682 37.5826 24.245 37.5968C22.6021 37.6105 21.2468 39.0177 21.2554 40.7008C21.2643 42.4129 22.701 43.8857 24.3504 43.8735C25.9823 43.8613 27.3151 42.4715 27.3009 40.7971Z"
                                        fill="#2D2D2D" />
                                </svg>
                            </div>
                            <div class="vs-app-project-card-body">
                                <h3 class="vs-app-project-card-title">Free Support</h3>
                                <p class="vs-app-project-card-description">We provide free 90 Days Technical Support
                                    to ensure the stability of the product.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 border-end-0 border-bottom-0">
                        <div class="vs-app-project-card">
                            <div class="vs-app-project-card-icon">
                                <svg width="65" height="45" viewBox="0 0 65 45" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="42.5" cy="22.5" r="22.5" fill="#E0F9FF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.499 33.9976C21.1956 33.9976 21.8925 34.0041 22.5891 33.9957C23.2338 33.9879 23.6738 33.5487 23.6869 32.9095C23.6946 32.5346 23.6742 32.1585 23.6977 31.7849C23.7047 31.6751 23.7936 31.5342 23.8881 31.4725C24.2025 31.2671 24.5297 31.0776 24.8668 30.9115C24.9769 30.8573 25.1557 30.8461 25.2628 30.8977C25.6226 31.0715 25.9573 31.296 26.3144 31.476C26.8277 31.7345 27.3882 31.6095 27.6807 31.1223C28.4295 29.8756 29.1602 28.6176 29.8703 27.3488C30.1406 26.8657 29.9726 26.3338 29.5129 26.0211C29.2898 25.8691 29.0587 25.7184 28.811 25.6147C28.3918 25.4393 28.1863 25.1865 28.2838 24.709C28.3317 24.4734 28.3075 24.2157 28.2743 23.9737C28.2446 23.7579 28.3293 23.6576 28.5071 23.5645C28.8303 23.3954 29.148 23.2139 29.4562 23.019C29.9848 22.6849 30.1501 22.1273 29.8435 21.585C29.1509 20.3598 28.4424 19.1432 27.7218 17.934C27.3949 17.3854 26.8204 17.2515 26.2488 17.5539C25.9679 17.7025 25.6845 17.8512 25.4237 18.0308C25.1803 18.1985 24.9892 18.2189 24.7393 18.0254C24.4908 17.833 24.2019 17.6839 23.9132 17.5538C23.7291 17.4708 23.678 17.3678 23.6848 17.1806C23.6981 16.8177 23.6944 16.4539 23.687 16.0907C23.6738 15.4512 23.2336 15.0085 22.589 15.0052C21.1956 14.9983 19.8021 14.9983 18.4088 15.0052C17.7644 15.0086 17.3232 15.4525 17.3112 16.0908C17.3041 16.4658 17.3241 16.8418 17.3006 17.2154C17.2937 17.3255 17.2051 17.4667 17.1107 17.5284C16.7964 17.734 16.4692 17.9236 16.1321 18.0896C16.0222 18.1437 15.8435 18.1541 15.7364 18.1025C15.3872 17.9339 15.0629 17.7153 14.7172 17.5385C14.1709 17.2591 13.6059 17.3894 13.2971 17.9055C12.5623 19.1335 11.8429 20.3709 11.1408 21.6175C10.8532 22.1282 11.0203 22.675 11.5133 22.9982C11.7491 23.1528 11.9898 23.309 12.2478 23.4194C12.6176 23.5777 12.7961 23.7949 12.7161 24.2203C12.6672 24.4801 12.6904 24.7603 12.724 25.0261C12.7513 25.2414 12.6695 25.3442 12.4931 25.4373C12.1705 25.6078 11.8522 25.788 11.5432 25.9817C11.0148 26.313 10.8482 26.8738 11.154 27.4143C11.8472 28.6391 12.5555 29.8558 13.2759 31.0652C13.5959 31.6026 14.1569 31.7444 14.7171 31.4624C14.9902 31.3249 15.263 31.1801 15.513 31.006C15.7954 30.8094 16.0269 30.7635 16.3186 31.0126C16.5375 31.1996 16.8178 31.324 17.0854 31.4438C17.2671 31.5252 17.3215 31.6304 17.3137 31.8192C17.299 32.1702 17.306 32.5222 17.3104 32.8739C17.3188 33.5558 17.7555 33.9907 18.4442 33.9962C19.1291 34.002 19.814 33.9979 20.499 33.9976Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.1218 6C32.791 6.24183 33.0146 6.73124 32.9993 7.43889C32.9667 8.9395 32.9913 10.4415 32.9884 11.9429C32.9867 12.7845 32.5861 13.1963 31.7623 13.1984C30.2181 13.2022 28.6738 13.2059 27.1298 13.1969C26.279 13.192 25.7538 12.4985 26.0186 11.7575C26.176 11.3173 26.5425 11.0621 27.0547 11.0562C27.6705 11.0493 28.2863 11.0546 28.9935 11.0546C28.8569 10.9385 28.7966 10.8761 28.7263 10.8293C25.7086 8.81806 22.3965 7.87058 18.8043 8.21378C12.5433 8.81183 8.0175 12.0629 5.45011 17.8892C3.35488 22.6438 3.67565 27.4126 6.03874 32.0358C6.16652 32.2857 6.30653 32.5485 6.34892 32.8202C6.42779 33.326 6.121 33.7796 5.66594 33.9374C5.18059 34.1059 4.64172 33.9327 4.40775 33.4357C3.88379 32.3223 3.35331 31.2064 2.92612 30.0529C2.41306 28.6673 2.16246 27.2095 2.05941 25.7292C2.0529 25.6363 2.02041 25.5451 2 25.4532C2 24.6903 2 23.9275 2 23.1646C2.11467 22.3538 2.20076 21.5376 2.34832 20.7331C3.68624 13.4404 9.66246 7.48478 16.8421 6.28164C17.509 6.16988 18.1814 6.09305 18.8513 6C19.5768 6 20.3024 6 21.0279 6C21.1303 6.01983 21.232 6.04996 21.3353 6.05788C24.4811 6.29651 27.3616 7.31586 29.9807 9.10418C30.2668 9.29948 30.5472 9.50341 30.8828 9.7406C30.8828 8.92359 30.9074 8.17444 30.8757 7.4277C30.8456 6.71885 31.0959 6.23135 31.7707 6.00008C31.8878 6 32.0047 6 32.1218 6Z"
                                        fill="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.87827 42C7.20991 41.7575 6.98521 41.2689 7.00075 40.5606C7.03371 39.0594 7.00899 37.5568 7.01166 36.0547C7.01315 35.2123 7.41271 34.8029 8.23953 34.8009C9.78416 34.7974 11.3289 34.7936 12.8735 34.8025C13.7244 34.8074 14.2535 35.5044 13.9779 36.2445C13.8119 36.6902 13.48 36.9303 13.0115 36.9412C12.4852 36.9534 11.9584 36.9441 11.4318 36.9462C11.3201 36.9467 11.2083 36.9563 11.0656 37.0439C11.529 37.329 11.983 37.6313 12.4571 37.8966C21.7612 43.1061 33.5616 37.4683 35.5884 26.8337C36.3271 22.9575 35.7437 19.2765 33.8779 15.8097C33.7835 15.6343 33.688 15.4468 33.653 15.2536C33.5571 14.7263 33.856 14.2234 34.329 14.0605C34.8277 13.8888 35.3349 14.0883 35.6158 14.5865C36.6557 16.4314 37.3625 18.4015 37.7173 20.4982C37.8322 21.1769 37.9069 21.8626 38 22.5452C38 23.3081 38 24.071 38 24.834C37.9801 24.9261 37.9546 25.0174 37.9411 25.1104C37.819 25.9577 37.7417 26.8143 37.5718 27.6513C36.1309 34.75 30.1716 40.5587 23.1569 41.7178C22.4902 41.8279 21.8183 41.9067 21.1488 42C20.4233 42 19.6977 42 18.9722 42C18.8702 41.9801 18.769 41.9497 18.6661 41.9417C15.2896 41.682 12.2339 40.5326 9.4904 38.5149C9.38398 38.4366 9.27504 38.3619 9.11753 38.2503C9.11753 39.0662 9.09233 39.8042 9.12467 40.5394C9.15614 41.255 8.9214 41.7629 8.22964 42C8.11231 42 7.99521 42 7.87827 42Z"
                                        fill="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 42C8.70833 41.7471 8.9487 41.2054 8.91647 40.4419C8.88336 39.6576 8.90916 38.8704 8.90916 38C9.07045 38.1191 9.18208 38.1987 9.29097 38.2822C12.1003 40.4346 15.2292 41.6608 18.6865 41.9378C18.7919 41.9464 18.8956 41.9787 19 42C15.3334 42 11.6667 42 8 42Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32 6.00009C31.309 6.24748 31.0528 6.76878 31.0836 7.5267C31.116 8.32523 31.0909 9.12633 31.0909 10C30.7472 9.74636 30.4601 9.52829 30.1672 9.31944C27.4854 7.40711 24.5359 6.31707 21.3147 6.06189C21.2089 6.05343 21.1049 6.0212 21 6C24.6666 6.00009 28.3333 6.00009 32 6.00009Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.4989 33.9976C19.814 33.9978 19.1291 34.002 18.4442 33.9965C17.7555 33.991 17.3187 33.556 17.3103 32.8742C17.3061 32.5225 17.2991 32.1704 17.3137 31.8195C17.3215 31.6307 17.2672 31.5254 17.0854 31.4441C16.8178 31.3242 16.5375 31.1999 16.3186 31.0129C16.0269 30.7638 15.7954 30.8097 15.513 31.0063C15.263 31.1803 14.9902 31.3252 14.7171 31.4626C14.1569 31.7446 13.5959 31.6028 13.2758 31.0655C12.5555 29.856 11.8471 28.6393 11.154 27.4145C10.8481 26.874 11.0148 26.3131 11.5432 25.9818C11.8521 25.7881 12.1705 25.608 12.4931 25.4375C12.6695 25.3442 12.7513 25.2416 12.724 25.0262C12.6905 24.7605 12.6672 24.4802 12.7161 24.2205C12.7961 23.7951 12.6176 23.5779 12.2478 23.4196C11.9897 23.3092 11.7491 23.153 11.5133 22.9984C11.0204 22.6751 10.8532 22.1283 11.1407 21.6176C11.8428 20.371 12.5623 19.1335 13.2971 17.9055C13.6059 17.3895 14.1709 17.2592 14.7172 17.5386C15.0629 17.7154 15.3872 17.934 15.7364 18.1025C15.8434 18.1542 16.0222 18.1437 16.1321 18.0896C16.4692 17.9236 16.7964 17.7341 17.1107 17.5284C17.2051 17.4667 17.2937 17.3255 17.3006 17.2155C17.3241 16.8418 17.304 16.4658 17.3111 16.0909C17.3232 15.4525 17.7644 15.0086 18.4088 15.0052C19.8021 14.9983 21.1956 14.9983 22.589 15.0052C23.2336 15.0085 23.6738 15.4512 23.687 16.0907C23.6944 16.4539 23.6981 16.8177 23.6848 17.1806C23.6779 17.3679 23.7291 17.4708 23.9132 17.5538C24.2019 17.6839 24.4908 17.833 24.7393 18.0254C24.9891 18.219 25.1803 18.1985 25.4237 18.0309C25.6845 17.8513 25.9679 17.7025 26.2488 17.5539C26.8204 17.2516 27.3949 17.3854 27.7218 17.9341C28.4425 19.1432 29.1509 20.3599 29.8435 21.5851C30.1501 22.1275 29.9848 22.685 29.4562 23.0191C29.148 23.214 28.8304 23.3956 28.5071 23.5646C28.3293 23.6578 28.2446 23.7579 28.2743 23.9738C28.3075 24.2159 28.3318 24.4735 28.2838 24.7091C28.1864 25.1866 28.3918 25.4394 28.811 25.6149C29.0587 25.7186 29.2898 25.8693 29.5129 26.0212C29.9726 26.334 30.1406 26.8659 29.8703 27.349C29.1602 28.6179 28.4295 29.8759 27.6807 31.1226C27.3882 31.6098 26.8276 31.7348 26.3144 31.4762C25.9572 31.2962 25.6226 31.0717 25.2628 30.8979C25.1557 30.8463 24.9769 30.8575 24.8668 30.9118C24.5297 31.0778 24.2025 31.2673 23.8881 31.4728C23.7936 31.5345 23.7047 31.6753 23.6977 31.7852C23.6741 32.1588 23.6946 32.5349 23.6869 32.9098C23.6738 33.549 23.2337 33.9882 22.589 33.996C21.8925 34.004 21.1956 33.9975 20.4989 33.9976ZM14.5846 29.1053C14.892 28.9304 15.1677 28.7751 15.4418 28.6171C15.9034 28.3508 16.3487 28.3758 16.7536 28.7195C17.3351 29.2128 17.9843 29.5818 18.7022 29.8397C19.192 30.0155 19.4277 30.3778 19.4348 30.889C19.4394 31.2132 19.4356 31.5375 19.4356 31.8621C20.1669 31.8621 20.8557 31.8621 21.5623 31.8621C21.5623 31.557 21.5612 31.2768 21.5625 30.9965C21.5652 30.3437 21.8037 30.066 22.3861 29.7873C23.0077 29.4901 23.6102 29.1405 24.1803 28.7546C24.6875 28.4114 25.0461 28.3397 25.5841 28.6352C25.8579 28.7856 26.1302 28.9388 26.4175 29.0987C26.7777 28.4788 27.1182 27.8925 27.4727 27.2821C27.169 27.106 26.8826 26.9469 26.6032 26.7765C26.1414 26.4949 26.0164 26.1128 26.0526 25.5842C26.101 24.8767 26.1113 24.1609 26.0602 23.4542C26.0175 22.8619 26.1382 22.4952 26.6593 22.1882C26.9217 22.0336 27.1871 21.8844 27.4744 21.7194C27.1159 21.1031 26.7704 20.5095 26.4138 19.897C26.0984 20.0765 25.8151 20.2423 25.5274 20.3999C25.0749 20.6479 24.6386 20.6165 24.2459 20.2815C23.6656 19.7866 23.0165 19.4177 22.2976 19.1607C21.8094 18.9862 21.5691 18.6254 21.5632 18.1126C21.5593 17.7883 21.5625 17.464 21.5625 17.138C20.832 17.138 20.1432 17.138 19.4358 17.138C19.4358 17.4544 19.4375 17.7462 19.4355 18.038C19.431 18.6471 19.1876 18.9323 18.6443 19.1972C18.0143 19.5045 17.3997 19.855 16.8192 20.2465C16.3037 20.5942 15.9373 20.661 15.3823 20.3494C15.1203 20.2021 14.8585 20.0547 14.5831 19.8998C14.2495 20.4725 13.9365 21.0088 13.6248 21.5458C13.596 21.5954 13.5744 21.6491 13.539 21.7224C13.8308 21.8927 14.1159 22.054 14.3957 22.2236C14.8537 22.5011 14.9794 22.888 14.9452 23.4166C14.8986 24.1356 14.8983 24.862 14.9448 25.581C14.9792 26.1106 14.8563 26.495 14.3975 26.7753C14.1179 26.9462 13.8319 27.1066 13.5274 27.2842C13.8793 27.8904 14.2198 28.4768 14.5846 29.1053Z"
                                        fill="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.0015 20C22.2023 20.0007 24.0005 21.8001 24 24.0011C23.9994 26.201 22.1986 28.0007 19.9987 28C17.8003 27.9992 15.9991 26.1966 16 23.9982C16.0008 21.7989 17.8019 19.9993 20.0015 20ZM20.0487 22.1826C19.0413 22.1596 18.2007 22.9601 18.1827 23.9598C18.1648 24.9527 18.9494 25.785 19.933 25.8166C20.9392 25.849 21.7897 25.0547 21.8168 24.0575C21.8442 23.0496 21.0482 22.2055 20.0487 22.1826Z"
                                        fill="#2D2D2D" />
                                </svg>
                            </div>
                            <div class="vs-app-project-card-body">
                                <h3 class="vs-app-project-card-title">Risk Free Trial</h3>
                                <p class="vs-app-project-card-description">Try our developer for 2 weeks, retaining
                                    the rights of your code, if you cancel the partnership. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Project Section End -->
    <!-- Speak to Team Section Start -->
    <section class="vs-speak-section pt-0" id="speak-to-team-section sec-pad">
        <div class="vs-speak-heading vs-section-spacer">
            <div class="container">
                <div class="vs-heading-center">
                    <h1 class="vs-section-title">Speak to our amazing Team</h1>
                    <p class="vs-section-description">100% Idea protection. We sign Non Disclosure Agreement</p>
                </div>
            </div>
        </div>
        <div class="vs-speak-content">
            <div class="container">
                <div class="row g-0">
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-speak-form-content">
                            <p class="vs-speak-form-description">Request a Proposal</p>
                            <div class="vs-speak-form">
                                <x-contact-form />
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-speak-content__inner">
                            <h2 class="vs-section-title">You have a <span>Dream</span>.</h2>
                            <p class="vs-section-description">We have the experience to make this Dream a reality.
                            </p>
                            <p class="vs-contact-description">Here’s what you will get for submitting your
                                contact details.</p>

                            <ul class="vs-dream-get-list list-unstyled">
                                <li class="vs-dream-get-item">
                                    <span class="vs-dream-get-count">1</span>
                                    <p>45 minutes of free consultation</p>
                                </li>
                                <li class="vs-dream-get-item">
                                    <span class="vs-dream-get-count">2</span>
                                    <p>A strict non-disclosure agreement</p>
                                </li>
                                <li class="vs-dream-get-item">
                                    <span class="vs-dream-get-count">3</span>
                                    <p>Free Market & Competitive Analysis</p>
                                </li>
                                <li class="vs-dream-get-item">
                                    <span class="vs-dream-get-count">4</span>
                                    <p>Suggestions on Revenue Models & Go To Market Strategy</p>
                                </li>
                                <li class="vs-dream-get-item">
                                    <span class="vs-dream-get-count">5</span>
                                    <p>No obligation Technical Specs & Proposal</p>
                                </li>
                                <li class="vs-dream-get-item">
                                    <span class="vs-dream-get-count">6</span>
                                    <p>Guidance on Pre-launch & Post-Launch Marketing</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Speak to Team Section End -->
@endsection
