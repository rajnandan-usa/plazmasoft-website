@php
$contactFaqs = [
    ['q' => 'How quickly can you start on a project?',
     'a' => 'Typically within 1 to 2 weeks from proposal acceptance, depending on our current engagements. We maintain a transparent queue and will tell you upfront.'],
    ['q' => 'Do you work with international clients?',
     'a' => 'Yes. We work with clients across the US, UK, Europe, and the Middle East. Our team is remote-first and comfortable with async communication across time zones.'],
    ['q' => 'What is your pricing model?',
     'a' => 'We offer both fixed-scope project pricing and monthly retainers. Fixed-scope works well for MVPs and defined features. Retainers suit ongoing product development.'],
    ['q' => 'Do you sign NDAs?',
     'a' => 'Absolutely. We sign NDAs before any sensitive discussions. Your IP always belongs to you.'],
    ['q' => 'Can I see work you have done before?',
     'a' => 'Yes. Visit our portfolio page or mention it in your message and we will send relevant case studies directly.'],
];
@endphp

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
    "url": "{{ url('/') }}",
    "telephone": "{{ $settings['phone_primary'] ?? '' }}",
    "email": "{{ $settings['email_sales'] ?? 'hello@plazmasoft.com' }}",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Noida",
        "addressRegion": "Uttar Pradesh",
        "addressCountry": "IN"
    },
    "openingHours": "Mo-Fr 09:00-18:00",
    "priceRange": "$$"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($contactFaqs as $faq)
        {
            "@type": "Question",
            "name": "{{ addslashes($faq['q']) }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ addslashes($faq['a']) }}"
            }
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endsection

@section('head')
@include('partials._dark-base')
<style>
body{background:var(--bg)}
.cg{display:grid;grid-template-columns:1fr;gap:2.5rem}
@media(min-width:1024px){.cg{grid-template-columns:1fr 1.65fr}}
.info-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:1.75rem}
.info-card h3{font-size:.7rem;font-weight:700;letter-spacing:.16em;text-transform:uppercase;color:var(--orange-l);margin-bottom:1.25rem}
.ci{display:flex;align-items:flex-start;gap:.9rem;padding:.4rem .5rem;border-radius:8px;text-decoration:none;color:inherit;transition:background .2s}
.ci:hover{background:rgba(255,255,255,.04)}
.ci-icon{width:34px;height:34px;border-radius:8px;background:rgba(249,115,22,.1);display:flex;align-items:center;justify-content:center;color:var(--orange);flex-shrink:0}
.ci-label{font-size:.68rem;color:var(--t3);margin-bottom:.1rem}
.ci-val{font-size:.875rem;color:var(--t1);font-weight:500}
.sl{display:flex;align-items:center;gap:.75rem;padding:.6rem .8rem;border-radius:8px;border:1px solid var(--border);color:var(--t2);text-decoration:none;font-size:.85rem;font-weight:500;transition:all .2s}
.sl:hover{border-color:var(--bh);color:var(--t1);background:rgba(255,255,255,.04)}
.sl svg{color:var(--orange);flex-shrink:0}
.sl-arr{margin-left:auto;opacity:.4}
.wnext{display:flex;flex-direction:column;gap:1.1rem}
.wn-item{display:flex;gap:1rem;align-items:flex-start}
.wn-num{font-size:.68rem;font-weight:800;color:var(--orange);letter-spacing:.1em;padding-top:.2rem;flex-shrink:0;min-width:1.8rem}
.wn-title{font-size:.875rem;font-weight:600;color:var(--t1);margin-bottom:.2rem}
.wn-desc{font-size:.78rem;color:var(--t2);line-height:1.6}
.form-card{background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:2.25rem}
.form-card h2{font-size:1.3rem;font-weight:700;color:var(--t1);margin-bottom:.4rem}
.form-sub{font-size:.85rem;color:var(--t2);margin-bottom:2rem}
.form-body{display:flex;flex-direction:column;gap:1.1rem}
.f2{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
@media(max-width:600px){.f2{grid-template-columns:1fr}}
.ferr-box{border:1px solid rgba(248,113,113,.25);background:rgba(248,113,113,.07);border-radius:10px;padding:.9rem 1.1rem}
.ferr-box li{font-size:.78rem;color:#f87171}
.submit-btn{display:flex;align-items:center;justify-content:center;gap:.5rem;width:100%;padding:1rem 2rem;font-size:.9rem;font-weight:700;color:#fff;background:linear-gradient(135deg,var(--orange-l),var(--orange),var(--orange-d));background-size:200% 200%;animation:gradShift 5s ease infinite;border:none;border-radius:12px;cursor:pointer;transition:transform .3s,box-shadow .3s}
.submit-btn:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(249,115,22,.3)}
.form-note{text-align:center;font-size:.7rem;color:var(--t3);margin-top:.25rem}
.faq-acc{display:flex;flex-direction:column;gap:.6rem;max-width:760px;margin:3rem auto 0}
.faq-item{background:var(--surface);border:1px solid var(--border);border-radius:12px;overflow:hidden}
.faq-q{width:100%;display:flex;align-items:center;justify-content:space-between;padding:1.1rem 1.5rem;text-align:left;cursor:pointer;background:none;border:none;font-size:.875rem;font-weight:600;color:var(--t1);gap:.75rem}
.faq-q svg{flex-shrink:0;color:var(--orange);transition:transform .2s}
.faq-a{padding:0 1.5rem 1.2rem;font-size:.845rem;color:var(--t2);line-height:1.72}
</style>
@endsection

@section('content')
<div id="cursorGlow2"></div>

{{-- HERO --}}
<section style="background:var(--bg);padding:8rem 0 4rem;position:relative;overflow:hidden">
    <div style="position:absolute;top:-8rem;right:8%;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.055) 0%,transparent 70%);pointer-events:none"></div>
    <div class="w" style="position:relative;z-index:1;max-width:660px;margin:0 auto;text-align:center">
        <span class="eyebrow sr">Get in Touch</span>
        <h1 class="dh2 sr" style="margin-top:.9rem">Let's build something<br><span class="grad-t">worth shipping.</span></h1>
        <p class="dlead sr" style="margin-top:1.1rem">Tell us about your project. We reply within one business day, no sales scripts, just a real conversation about what you need.</p>
    </div>
</section>

{{-- MAIN GRID --}}
<section style="background:var(--bg);padding-bottom:6rem">
    <div class="w">
        <div class="cg">

            {{-- INFO COLUMN --}}
            <div style="display:flex;flex-direction:column;gap:1.5rem" class="sr left">

                <div class="info-card">
                    <h3>Contact Details</h3>
                    <div style="display:flex;flex-direction:column;gap:.75rem">
                        @if(!empty($settings['email_sales']))
                        <a href="mailto:{{ $settings['email_sales'] }}" class="ci">
                            <div class="ci-icon"><svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                            <div><p class="ci-label">Email</p><p class="ci-val">{{ $settings['email_sales'] }}</p></div>
                        </a>
                        @else
                        <div class="ci">
                            <div class="ci-icon"><svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                            <div><p class="ci-label">Email</p><p class="ci-val">hello@plazmasoft.com</p></div>
                        </div>
                        @endif

                        @if(!empty($settings['phone_primary']))
                        <a href="tel:{{ $settings['phone_primary'] }}" class="ci">
                            <div class="ci-icon"><svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></div>
                            <div><p class="ci-label">Phone</p><p class="ci-val">{{ $settings['phone_primary'] }}</p></div>
                        </a>
                        @endif

                        <div class="ci">
                            <div class="ci-icon"><svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                            <div><p class="ci-label">Hours</p><p class="ci-val">Mon to Fri, 9am to 6pm IST</p></div>
                        </div>

                        <div class="ci">
                            <div class="ci-icon"><svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                            <div><p class="ci-label">Location</p><p class="ci-val">Noida, Uttar Pradesh, India</p></div>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h3>Find Us Online</h3>
                    <div style="display:flex;flex-direction:column;gap:.6rem">
                        <a href="https://www.linkedin.com/company/plazmasoft/" target="_blank" rel="noopener" class="sl">
                            <svg width="17" height="17" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            <span>Plazmasoft on LinkedIn</span>
                            <svg class="sl-arr" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                        @if(!empty($settings['whatsapp_number']))
                        <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" rel="noopener" class="sl">
                            <svg width="17" height="17" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <span>Chat on WhatsApp</span>
                            <svg class="sl-arr" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="info-card">
                    <h3>What Happens Next</h3>
                    <div class="wnext">
                        <div class="wn-item">
                            <span class="wn-num">01</span>
                            <div>
                                <p class="wn-title">We review your message</p>
                                <p class="wn-desc">Usually within a few hours during business hours.</p>
                            </div>
                        </div>
                        <div class="wn-item">
                            <span class="wn-num">02</span>
                            <div>
                                <p class="wn-title">Discovery call</p>
                                <p class="wn-desc">A 30-minute call to understand your goals and answer questions.</p>
                            </div>
                        </div>
                        <div class="wn-item">
                            <span class="wn-num">03</span>
                            <div>
                                <p class="wn-title">Proposal and timeline</p>
                                <p class="wn-desc">A scoped proposal with clear timeline and fixed pricing within 2 business days.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- FORM COLUMN --}}
            <div class="form-card sr right">
                <h2>Start a conversation</h2>
                <p class="form-sub">Fill in the details below and we will get back to you within one business day.</p>

                <form action="{{ route('contact.store') }}" method="POST" class="form-body">
                    @csrf

                    <div class="hidden" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    @if($errors->any())
                    <div class="ferr-box">
                        <ul style="list-style:disc;padding-left:1.1rem;display:flex;flex-direction:column;gap:.2rem">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="f2">
                        <div>
                            <label class="dlabel" for="name">Full name <span style="color:#f87171">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="di" placeholder="Ravi Kumar">
                            @error('name')<p class="derr">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="dlabel" for="email">Work email <span style="color:#f87171">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="di" placeholder="ravi@company.com">
                            @error('email')<p class="derr">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="dlabel" for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="di" placeholder="+91 98765 43210">
                        </div>
                        <div>
                            <label class="dlabel" for="company">Company</label>
                            <input type="text" id="company" name="company" value="{{ old('company') }}" class="di" placeholder="Acme Inc">
                        </div>
                    </div>

                    <div class="f2">
                        <div>
                            <label class="dlabel" for="project_type">Project type <span style="color:#f87171">*</span></label>
                            <select id="project_type" name="project_type" required class="di">
                                <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Select type</option>
                                <option value="web_app"        {{ old('project_type') === 'web_app'        ? 'selected' : '' }}>Web App</option>
                                <option value="mobile_app"     {{ old('project_type') === 'mobile_app'     ? 'selected' : '' }}>Mobile App</option>
                                <option value="ai_integration" {{ old('project_type') === 'ai_integration' ? 'selected' : '' }}>AI Integration</option>
                                <option value="mvp"            {{ old('project_type') === 'mvp'            ? 'selected' : '' }}>MVP</option>
                                <option value="ui_ux"          {{ old('project_type') === 'ui_ux'          ? 'selected' : '' }}>UI / UX Design</option>
                                <option value="maintenance"    {{ old('project_type') === 'maintenance'    ? 'selected' : '' }}>Maintenance / Support</option>
                                <option value="other"          {{ old('project_type') === 'other'          ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('project_type')<p class="derr">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="dlabel" for="budget_range">Budget range <span style="color:#f87171">*</span></label>
                            <select id="budget_range" name="budget_range" required class="di">
                                <option value="" disabled {{ old('budget_range') ? '' : 'selected' }}>Select range</option>
                                <option value="under_5k" {{ old('budget_range') === 'under_5k' ? 'selected' : '' }}>Under $5,000</option>
                                <option value="5k_15k"   {{ old('budget_range') === '5k_15k'   ? 'selected' : '' }}>$5,000 to $15,000</option>
                                <option value="15k_30k"  {{ old('budget_range') === '15k_30k'  ? 'selected' : '' }}>$15,000 to $30,000</option>
                                <option value="30k_plus" {{ old('budget_range') === '30k_plus' ? 'selected' : '' }}>$30,000+</option>
                                <option value="not_sure" {{ old('budget_range') === 'not_sure' ? 'selected' : '' }}>Not sure yet</option>
                            </select>
                            @error('budget_range')<p class="derr">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="dlabel" for="message">Tell us about your project <span style="color:#f87171">*</span></label>
                        <textarea id="message" name="message" rows="5" required class="di" placeholder="Describe what you want to build, the problem it solves, any deadlines, and anything else relevant.">{{ old('message') }}</textarea>
                        @error('message')<p class="derr">{{ $message }}</p>@enderror
                    </div>

                    <input type="hidden" name="g_recaptcha_response" id="g_recaptcha_response">

                    <button type="submit" id="contactSubmitBtn" class="submit-btn">
                        Send message
                        <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>

                    <p class="form-note">We do not share your information with anyone. We reply within one business day.</p>
                </form>
            </div>

        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="ps" style="background:var(--bg-alt);border-top:1px solid var(--border)">
    <div class="w">
        <div style="text-align:center" class="sr">
            <span class="eyebrow">FAQ</span>
            <h2 class="dh2" style="margin-top:.75rem">Common questions</h2>
            <div class="divx cx"></div>
        </div>

        <div class="faq-acc sg">
            @foreach($contactFaqs as $faq)
            <div class="faq-item" x-data="{ open: false }">
                <button @click="open = !open" class="faq-q">
                    <span>{{ $faq['q'] }}</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" :style="open ? 'transform:rotate(180deg)' : ''"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="faq-a">{{ $faq['a'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('scripts')
@if(config('services.recaptcha.sitekey'))
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}" async defer></script>
@endif
<script>
document.addEventListener('DOMContentLoaded', () => {
    const g = document.getElementById('cursorGlow2');
    if (g) document.addEventListener('mousemove', e => { g.style.left = e.clientX + 'px'; g.style.top = e.clientY + 'px'; });
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: .1 });
    document.querySelectorAll('.sr, .sg').forEach(el => io.observe(el));

    const form = document.querySelector('form[action="{{ route('contact.store') }}"]');
    const tokenInput = document.getElementById('g_recaptcha_response');
    const siteKey = '{{ config('services.recaptcha.sitekey') }}';

    if (form && tokenInput && siteKey) {
        form.addEventListener('submit', function(e) {
            if (tokenInput.value) return; // already has token, let it go
            e.preventDefault();
            if (typeof grecaptcha === 'undefined') { form.submit(); return; }
            grecaptcha.ready(function() {
                grecaptcha.execute(siteKey, { action: 'contact' }).then(function(token) {
                    tokenInput.value = token;
                    form.submit();
                }).catch(function() {
                    form.submit(); // gracefully degrade if reCAPTCHA fails
                });
            });
        });
    }
});
</script>
@endsection
