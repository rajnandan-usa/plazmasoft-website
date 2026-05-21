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
                                            <img src="{{asset('web-assets/images/development.png')}}" width="25" height="25" alt="mobile-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Mobile App Development</h3>
                                            <p class="vs-mega-menu-description">Flutter, React Native — cross-platform apps built to production standards.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.web_app') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/app-development.png')}}" width="25" height="25" alt="web-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Web App Development</h3>
                                            <p class="vs-mega-menu-description">Laravel, Node.js — scalable web applications with clean architecture.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.ai_integration') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/artificial-intelligence.png')}}" width="25" height="25" alt="ai-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">AI Integration</h3>
                                            <p class="vs-mega-menu-description">Gemini API, Stable Diffusion, ControlNet, RAG systems — real AI in production.</p>
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
                                            <p class="vs-mega-menu-description">Figma-first design process. Clean, accessible, and conversion-focused.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('services.mvp') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/mvp.png')}}" width="25" height="25" alt="mvp-icon" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">MVP Development</h3>
                                            <p class="vs-mega-menu-description">Validate your idea fast. Launch-ready MVP in 8–12 weeks.</p>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item vs-has-submenu vs-service-menu">
                            <a class="nav-link" href="#">Solutions</a>
                            <ul class="vs-mega-menu-list vs-solution-menu">
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.fintech') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/payment.png')}}" width="25" height="25" alt="fintech" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">FinTech Development</h3>
                                            <p class="vs-mega-menu-description">AI trading signals, portfolio platforms — TradeGuardian case study.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.fleet_management') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/car.png')}}" width="25" height="25" alt="fleet" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">Fleet Management</h3>
                                            <p class="vs-mega-menu-description">Real-time GPS tracking, driver app, ops dashboard — Fleeta2z case study.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.ai_property_visualization') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/artificial-intelligence.png')}}" width="25" height="25" alt="ai-property" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">AI Property Visualization</h3>
                                            <p class="vs-mega-menu-description">Stable Diffusion + ControlNet interior redesign — Proptifi case study.</p>
                                        </span>
                                    </a>
                                </li>
                                <li class="vs-mega-menu-item">
                                    <a href="{{ route('solutions.agritech_development') }}" class="vs-mega-menu-link">
                                        <span class="vs-mega-menu-icon">
                                            <img src="{{asset('web-assets/images/development.png')}}" width="25" height="25" alt="agritech" class="img-fluid">
                                        </span>
                                        <span class="vs-mega-menu-details">
                                            <h3 class="vs-mega-menu-title">AgriTech Development</h3>
                                            <p class="vs-mega-menu-description">Gemini AI farming assistant in 9 languages — FasalVision case study.</p>
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
