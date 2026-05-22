@extends('layouts.app')

@section('title', 'Contact Plazmasoft | Start Your Project')
@section('meta_description', 'Get in touch with Plazmasoft. Tell us about your project and we will reply within one business day.')
@section('canonical', url('/contact'))

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Plazmasoft",
    "legalName": "{{ $settings['legal_name'] ?? 'Kushwaha Webformat Private Limited' }}",
    "url": "{{ url('/') }}",
    "telephone": "{{ $settings['phone_primary'] ?? '' }}",
    "email": "{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}",
    "address": [
        {
            "@type": "PostalAddress",
            "streetAddress": "{{ $settings['office_mumbai_address'] ?? 'Mumbai' }}",
            "addressLocality": "Mumbai",
            "addressRegion": "Maharashtra",
            "addressCountry": "IN"
        },
        {
            "@type": "PostalAddress",
            "streetAddress": "{{ $settings['office_patna_address'] ?? 'Patna' }}",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "addressCountry": "IN"
        }
    ],
    "openingHours": "Mo-Fr 09:00-18:00",
    "priceRange": "$$"
}
</script>
@endsection

@section('content')

<section class="section gradient-hero">
    <div class="container-site">
        <div class="mx-auto max-w-2xl text-center">
            <p class="section-label">Get in Touch</p>
            <h1 class="section-title mt-2 text-balance">Tell us about your project</h1>
            <p class="section-subtitle">We reply within one business day. No sales scripts, just a real conversation about what you need.</p>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="container-site">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">

            {{-- Contact info sidebar --}}
            <div class="space-y-8">
                <div>
                    <h3 class="font-display text-lg font-semibold text-gray-900">Contact details</h3>
                    <ul class="mt-4 space-y-4">
                        @if(!empty($settings['email_sales']))
                        <li class="flex items-start gap-3">
                            <svg class="mt-0.5 h-5 w-5 text-brand-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <div>
                                <p class="text-xs text-gray-400">Email</p>
                                <a href="mailto:{{ $settings['email_sales'] }}" class="text-sm text-gray-700 hover:text-brand-500">{{ $settings['email_sales'] }}</a>
                            </div>
                        </li>
                        @endif
                        @if(!empty($settings['phone_primary']))
                        <li class="flex items-start gap-3">
                            <svg class="mt-0.5 h-5 w-5 text-brand-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <div>
                                <p class="text-xs text-gray-400">Phone</p>
                                <a href="tel:{{ $settings['phone_primary'] }}" class="text-sm text-gray-700 hover:text-brand-500">{{ $settings['phone_primary'] }}</a>
                            </div>
                        </li>
                        @endif
                        @if(!empty($settings['working_hours']))
                        <li class="flex items-start gap-3">
                            <svg class="mt-0.5 h-5 w-5 text-brand-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <div>
                                <p class="text-xs text-gray-400">Hours</p>
                                <p class="text-sm text-gray-700">{{ $settings['working_hours'] }}</p>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>

                @if(!empty($settings['office_mumbai_is_active']) && $settings['office_mumbai_is_active'])
                <div>
                    <h4 class="font-display text-sm font-semibold text-gray-900">{{ $settings['office_mumbai_label'] ?? 'Mumbai Office' }}</h4>
                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $settings['office_mumbai_address'] ?? '' }}</p>
                </div>
                @endif

                @if(!empty($settings['office_patna_is_active']) && $settings['office_patna_is_active'])
                <div>
                    <h4 class="font-display text-sm font-semibold text-gray-900">{{ $settings['office_patna_label'] ?? 'Patna Office' }}</h4>
                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $settings['office_patna_address'] ?? '' }}</p>
                </div>
                @endif

                @if(!empty($settings['whatsapp_number']))
                <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 rounded-lg bg-green-50 px-4 py-3 text-sm font-medium text-green-700 hover:bg-green-100 transition">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat on WhatsApp
                </a>
                @endif
            </div>

            {{-- Contact form --}}
            <div class="lg:col-span-2">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- Honeypot --}}
                    <div class="hidden" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    @if($errors->any())
                    <div class="rounded-lg border border-red-200 bg-red-50 p-4">
                        <ul class="list-disc list-inside space-y-1 text-sm text-red-600">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label class="form-label" for="name">Full name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-input" placeholder="Ravi Kumar">
                            @error('name')<p class="form-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="form-label" for="email">Work email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-input" placeholder="ravi@company.com">
                            @error('email')<p class="form-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="form-label" for="phone">Phone (optional)</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-input" placeholder="+91 98765 43210">
                        </div>
                        <div>
                            <label class="form-label" for="company">Company (optional)</label>
                            <input type="text" id="company" name="company" value="{{ old('company') }}" class="form-input" placeholder="Acme Inc">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label class="form-label" for="project_type">Project type <span class="text-red-500">*</span></label>
                            <select id="project_type" name="project_type" required class="form-input">
                                <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Select type</option>
                                <option value="web_app"         {{ old('project_type') === 'web_app' ? 'selected' : '' }}>Web App</option>
                                <option value="mobile_app"      {{ old('project_type') === 'mobile_app' ? 'selected' : '' }}>Mobile App</option>
                                <option value="ai_integration"  {{ old('project_type') === 'ai_integration' ? 'selected' : '' }}>AI Integration</option>
                                <option value="mvp"             {{ old('project_type') === 'mvp' ? 'selected' : '' }}>MVP</option>
                                <option value="ui_ux"           {{ old('project_type') === 'ui_ux' ? 'selected' : '' }}>UI / UX Design</option>
                                <option value="maintenance"     {{ old('project_type') === 'maintenance' ? 'selected' : '' }}>Maintenance / Support</option>
                                <option value="other"           {{ old('project_type') === 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('project_type')<p class="form-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="form-label" for="budget_range">Budget range <span class="text-red-500">*</span></label>
                            <select id="budget_range" name="budget_range" required class="form-input">
                                <option value="" disabled {{ old('budget_range') ? '' : 'selected' }}>Select range</option>
                                <option value="under_5k"  {{ old('budget_range') === 'under_5k' ? 'selected' : '' }}>Under $5,000</option>
                                <option value="5k_15k"    {{ old('budget_range') === '5k_15k' ? 'selected' : '' }}>$5,000 to $15,000</option>
                                <option value="15k_30k"   {{ old('budget_range') === '15k_30k' ? 'selected' : '' }}>$15,000 to $30,000</option>
                                <option value="30k_plus"  {{ old('budget_range') === '30k_plus' ? 'selected' : '' }}>$30,000+</option>
                                <option value="not_sure"  {{ old('budget_range') === 'not_sure' ? 'selected' : '' }}>Not sure yet</option>
                            </select>
                            @error('budget_range')<p class="form-error">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="form-label" for="message">Tell us about your project <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="5" required class="form-input" placeholder="Describe what you want to build, the problem it solves, any deadlines, and anything else you think is relevant.">{{ old('message') }}</textarea>
                        @error('message')<p class="form-error">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit" class="btn-primary w-full justify-center py-4 text-base">
                        Send message
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>

                    <p class="text-center text-xs text-gray-400">We do not share your information with anyone. We reply within one business day.</p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
