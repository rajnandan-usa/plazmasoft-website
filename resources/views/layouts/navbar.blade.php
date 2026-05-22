<nav
    x-data="{
        open: false,
        scrolled: false,
        servicesOpen: false,
        solutionsOpen: false,
        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            });
        }
    }"
    @class([
        'fixed inset-x-0 top-0 z-50 transition-all duration-300',
        'bg-white/95 shadow-card backdrop-blur-md' => 'scrolled',
        'bg-transparent' => '!scrolled',
    ])
    :class="scrolled ? 'bg-white/95 shadow-card backdrop-blur-md' : 'bg-white/80 backdrop-blur-sm'"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-sm"
>
    <div class="container-site">
        <div class="flex h-16 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2.5 flex-shrink-0">
                <img src="{{ asset('web-assets/images/logo1.png') }}" alt="{{ $settings['site_name'] ?? 'Plazmasoft' }}" class="h-8 w-auto">
                <span class="font-display text-lg font-bold text-gray-900">{{ $settings['site_name'] ?? 'Plazmasoft' }}</span>
            </a>

            {{-- Desktop nav --}}
            <div class="hidden items-center gap-1 lg:flex">

                {{-- Services dropdown --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1 rounded-lg px-3 py-2 hover:bg-gray-50">
                        Services
                        <svg class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div
                        x-show="open" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute left-0 top-full mt-1 w-64 rounded-xl bg-white p-2 shadow-card-hover ring-1 ring-gray-100"
                    >
                        <a href="{{ url('/services/web-app-development') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🌐</span> Web App Development
                        </a>
                        <a href="{{ url('/services/mobile-app-development') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">📱</span> Mobile App Development
                        </a>
                        <a href="{{ url('/services/ai-integration') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🤖</span> AI Integration
                        </a>
                        <a href="{{ url('/services/ui-ux-development') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🎨</span> UI / UX Development
                        </a>
                        <a href="{{ url('/services/mvp-development') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🚀</span> MVP Development
                        </a>
                    </div>
                </div>

                {{-- Solutions dropdown --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1 rounded-lg px-3 py-2 hover:bg-gray-50">
                        Solutions
                        <svg class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div
                        x-show="open" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute left-0 top-full mt-1 w-64 rounded-xl bg-white p-2 shadow-card-hover ring-1 ring-gray-100"
                    >
                        <a href="{{ url('/solutions/fintech-development') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">💳</span> Fintech Development
                        </a>
                        <a href="{{ url('/solutions/fleet-management') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🚚</span> Fleet Management
                        </a>
                        <a href="{{ url('/solutions/ai-property-visualization') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🏠</span> AI Property Visualization
                        </a>
                        <a href="{{ url('/solutions/agritech-development') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">
                            <span class="text-lg">🌾</span> Agritech Development
                        </a>
                    </div>
                </div>

                <a href="{{ url('/portfolio') }}" class="nav-link rounded-lg px-3 py-2 hover:bg-gray-50">Work</a>
                <a href="{{ url('/about') }}" class="nav-link rounded-lg px-3 py-2 hover:bg-gray-50">About</a>
                <a href="{{ url('/blog') }}" class="nav-link rounded-lg px-3 py-2 hover:bg-gray-50">Blog</a>
            </div>

            {{-- Desktop CTA --}}
            <div class="hidden items-center gap-3 lg:flex">
                <a href="{{ url('/contact') }}" class="btn-primary px-5 py-2.5 text-sm">
                    {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button
                @click="open = !open"
                class="flex items-center justify-center rounded-lg p-2 text-gray-600 hover:bg-gray-100 lg:hidden"
                aria-label="Toggle menu"
            >
                <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="border-t border-gray-100 bg-white lg:hidden"
        @click.away="open = false"
    >
        <div class="container-site space-y-1 py-4">

            <p class="px-3 py-1 text-xs font-semibold uppercase tracking-widest text-gray-400">Services</p>
            <a href="{{ url('/services/web-app-development') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🌐 Web App Development</a>
            <a href="{{ url('/services/mobile-app-development') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">📱 Mobile App Development</a>
            <a href="{{ url('/services/ai-integration') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🤖 AI Integration</a>
            <a href="{{ url('/services/ui-ux-development') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🎨 UI / UX Development</a>
            <a href="{{ url('/services/mvp-development') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🚀 MVP Development</a>

            <div class="my-2 border-t border-gray-100"></div>
            <p class="px-3 py-1 text-xs font-semibold uppercase tracking-widest text-gray-400">Solutions</p>
            <a href="{{ url('/solutions/fintech-development') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">💳 Fintech Development</a>
            <a href="{{ url('/solutions/fleet-management') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🚚 Fleet Management</a>
            <a href="{{ url('/solutions/ai-property-visualization') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🏠 AI Property Visualization</a>
            <a href="{{ url('/solutions/agritech-development') }}" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">🌾 Agritech Development</a>

            <div class="my-2 border-t border-gray-100"></div>
            <a href="{{ url('/portfolio') }}" class="block rounded-lg px-3 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50">Work</a>
            <a href="{{ url('/about') }}" class="block rounded-lg px-3 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50">About</a>
            <a href="{{ url('/blog') }}" class="block rounded-lg px-3 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50">Blog</a>

            <div class="pt-2">
                <a href="{{ url('/contact') }}" class="btn-primary w-full justify-center">
                    {{ $settings['hero_cta_primary_label'] ?? 'Start Your Project' }}
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Spacer to prevent content jumping under fixed nav --}}
<div class="h-16"></div>
