<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5968Z9LS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header class="vs-site-header mt-0 pt-0">
    <div class="container">
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-0">
                <a class="navbar-brand me-0" href="{{route('index')}}">
                    <span class="ps-3 text-black fw-bold" style="letter-spacing: 0.1em;color: #3d3d3d;font-size: 30px;">Plazma</span>
           <img src="{{route('index')}}/web-assets/images/logo1.png" alt="Logo" class="img-fluid logoimage">
           <span style="letter-spacing: 0.1em;color: #3d3d3d;font-size: 30px;line-height: 1px;" class=" text-black fw-bold">oft</span>
                       </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icons"></span>
                    <span class="navbar-toggler-icons"></span>
                    <span class="navbar-toggler-icons"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item vs-has-submenu">
                            <a class="nav-link" href="#">Services</a>
                            <ul class="vs-mega-menu-list">
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.mobile_app_development') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/development.png')}}" width="25" height="25" alt="mobile-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Mobile App Development</h3>
                                        </span>
                                    </a>

                                    <ul class="vs-site-menu-list list-unstyled">
                                        <li class="vs-site-menu-item">
                                            <a href="{{ route('services.ios') }}" class="vs-site-menu-link">iOS
                                                Development</a>
                                        </li>
                                        <li class="vs-site-menu-item">
                                            <a href="{{ route('services.android') }}" class="vs-site-menu-link">Android
                                                Development</a>
                                        </li>
                                        <li class="vs-site-menu-item">
                                            <a href="{{ route('services.flutter') }}" class="vs-site-menu-link">Flutter
                                                Development</a>
                                        </li>
                                        <li class="vs-site-menu-item">
                                            <a href="{{ route('services.react_native') }}" class="vs-site-menu-link">React
                                                Native Development</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.web_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/app-development.png')}}" width="25" height="25" alt="web-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Web App Development</h3>
                                            <p class="vs-mega-menu-description">Craft intuitive and scalable web
                                                applications that resonate with your business needs.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.ui_ux') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/ui.png')}}" width="25" height="25" alt="ui-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">UI/UX Design</h3>
                                            <p class="vs-mega-menu-description">Get the world class Mobile and Web
                                                App designing with our striking and user friendly UI/UX design
                                                approach.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.mvp') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/mvp.png')}}" width="25" height="25"  alt="mvp-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">MVP Development</h3>
                                            <p class="vs-mega-menu-description">Quickly validate your product
                                                concept and gather valuable user feedback with our MVP development
                                                services.</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.app_maintenance') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/coding.png')}}" width="25" height="25"  alt="mobile-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">App Maintenance</h3>
                                            <p class="vs-mega-menu-description">Ensure the longevity and efficiency
                                                of your mobile application. We guarantee optimal performance and
                                                timely updates.</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.chatgpt') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/artificial-intelligence.png')}}" width="25" height="25" alt="chat-gpt-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">ChatGPT Development</h3>
                                            <p class="vs-mega-menu-description">Harness the potential of
                                                conversational AI with our end to end ChatGPT development services.
                                            </p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.iot') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/iot-icon.png')}}" width="25" height="25"  alt="iot-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">IoT Development</h3>
                                            <p class="vs-mega-menu-description">We can create innovative IoT enabled
                                                solutions that optimize processes, enhance decision-making and drive
                                                business growth.</p>
                                        </span>
                                    </a>
                                </li>

                                {{-- <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.blockchain') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/mobile-icon.svg')}}" alt="blockchain-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Blockchain App Development</h3>
                                            <p class="vs-mega-menu-description">Venture into the future of secure
                                                and transparent transactions with our blockchain app development
                                                services.</p>
                                        </span>
                                    </a>
                                </li> --}}

                                {{-- <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.ar_vr') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/ar-vr-icon.svg')}}" alt="ar-vr-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">AR/VR Development</h3>
                                            <p class="vs-mega-menu-description">Immerse your audience in captivating
                                                AR & VR experiences. Get engagement and interaction through our
                                                AR/VR development services.</p>
                                        </span>
                                    </a>
                                </li> --}}



                            </ul>
                        </li>
                        <li class="nav-item vs-has-submenu vs-service-menu">
                            <a class="nav-link" href="#">Solution</a>
                            <ul class="vs-mega-menu-list vs-solution-menu">
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.fintech') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/payment.png')}}" width="25" height="25"  alt="fintech app"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Fintech App Development</h3>
                                            <p class="vs-mega-menu-description">Custom Native iPhone App Development
                                                and support</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.food_ordering') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/online-order.png')}}" width="25" height="25" alt="restaurant-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Restaurant Food ordering app</h3>
                                            <p class="vs-mega-menu-description">Ondemand android development for
                                                your business</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.health_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/health-app.png')}}" width="25" height="25" alt="healthcare-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Healthcare App Development</h3>
                                            <p class="vs-mega-menu-description">App development using flutter and
                                                react technology</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.qr_code_based_food') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/qr-payment.png')}}" width="25" height="25" alt="qr-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">QR code-based food ordering</h3>
                                            <p class="vs-mega-menu-description">Helping startups, small businesses
                                                and growing enterprises </p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.on_demand_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/on-demand-service.png')}}" width="25" height="25" alt="on-demand-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">On-Demand App Development</h3>
                                            <p class="vs-mega-menu-description">controlled remotely and can be used
                                                to monitor the connected product's condition</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.fitness_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/heart-rate.png')}}" width="25" height="25" alt="fitness-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Fitness App Development</h3>
                                            <p class="vs-mega-menu-description">empower businesses them with our
                                                skilled technology capabilities in AR/VR</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.fantasy_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/mobile-app.png')}}" width="25" height="25" alt="fantasy-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Fantasy App Development</h3>
                                            <p class="vs-mega-menu-description">iOS and Android mobile applications
                                                in an industry-driving structure</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.transport_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/car.png')}}" width="25" height="25" alt="transport-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Transport Industry App Development</h3>
                                            <p class="vs-mega-menu-description">We build bespoke websites and web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.texi_booking_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/booking.png')}}" width="25" height="25" alt="transport-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Taxi Booking App Development</h3>
                                            <p class="vs-mega-menu-description">We build easy-to-use taxi booking
                                                websites and web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.dating_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/relationships.png')}}" width="25" height="25" alt="dating-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Dating App Development</h3>
                                            <p class="vs-mega-menu-description">We build dating websites and web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.grocary_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/eshopping.png')}}" width="25" height="25" alt="grocery-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Grocery Delivery App Development</h3>
                                            <p class="vs-mega-menu-description">We build grocery delivery websites
                                                and web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.socialmedia_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/social-media.png')}}" width="25" height="25"
                                                alt="social-media-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Social Media App Development</h3>
                                            <p class="vs-mega-menu-description">We build social media websites and
                                                web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.sportbatting_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/casino-chips.png')}}" width="25" height="25" alt="sport-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Sports Betting App Development</h3>
                                            <p class="vs-mega-menu-description">We build sports betting websites and
                                                web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.stocktrading_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/trading.png')}}" width="25" height="25" alt="stock-icon"
                                                class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Stock Trading App Development</h3>
                                            <p class="vs-mega-menu-description">We build stock trading websites and
                                                web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>

                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.videostreaming_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/live.png')}}"
                                            width="25" height="25"  alt="video-streaming-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Video Streaming App Development</h3>
                                            <p class="vs-mega-menu-description">We build video streamimg websites
                                                and web
                                                applications</p>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item vs-has-submenu">
                            <a class="nav-link" href="#">About Us</a>
                            <ul class="vs-submenu-list">
                                <li class="vs-submenu-item">
                                    <a href="{{ route('about') }}" class="vs-submenu-link">Company</a>
                                </li>
                                <li class="vs-submenu-item">
                                    <a href="{{ route('about') }}#our_story" class="vs-submenu-link">Our Story</a>
                                </li>
                                <li class="vs-submenu-item">
                                    <a href="{{route('team.index')}}" class="vs-submenu-link">Our Team</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index') }}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">Tech Blogs</a>
                        </li>
                    </ul>
                </div>
                <div class="vs-header-btn">
                    <a href="{{ route('contact.index') }}" class="btn btn-primary">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </div>

            </div>
        </nav>
    </div>
</header>
