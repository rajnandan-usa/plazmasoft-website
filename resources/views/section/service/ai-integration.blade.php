@extends('layouts.app')

@section('title')
    AI Integration Services — Gemini, Stable Diffusion, LLM & RAG | {{ config('app.company_name') }}
@endsection

@section('mainBody')

    <!-- Hero -->
    <section class="vs-landing-section sec-pad" style="background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%); color: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-12 col-lg-7">
                    <div class="vs-landing-content__inner mt-5 mb-5">
                        <span style="background:#6366f1; color:#fff; padding:6px 16px; border-radius:20px; font-size:0.85rem; font-weight:600; letter-spacing:0.05em;">AI INTEGRATION</span>
                        <h1 class="vs-section-title mt-3" style="color:#fff;">AI Integration Services</h1>
                        <h2 style="color:#a5b4fc; font-size:1.4rem; margin-bottom:1.2rem;">Gemini API · Stable Diffusion · ControlNet · LLM Apps · RAG Systems</h2>
                        <p style="color:#e0e7ff; font-size:1rem; line-height:1.8;">
                            We embed AI into real products — not demo projects. From multimodal crop diagnosis
                            (Gemini Vision + Flutter) to AI interior renders (Stable Diffusion + ControlNet)
                            to intelligent document analysis — we have shipped AI integrations that are
                            live in production and used daily by real users.
                        </p>
                        <div class="mt-4">
                            <a href="/contact" class="btn btn-primary custom-btn me-3"><i class="fas fa-calendar-check"></i> Book a Free Consultation</a>
                            <a href="/portfolio-projects" class="btn btn-outline-light">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-5">
                    <div class="p-4" style="background: rgba(255,255,255,0.06); border-radius: 12px; border: 1px solid rgba(255,255,255,0.12);">
                        <h4 style="color:#a5b4fc; margin-bottom: 1rem;">What We've Shipped</h4>
                        <ul style="color:#e0e7ff; list-style:none; padding:0; margin:0;">
                            <li class="mb-2">✓ <strong>FasalVision</strong> — Gemini multimodal farming AI, 9 languages</li>
                            <li class="mb-2">✓ <strong>Proptifi</strong> — Stable Diffusion + ControlNet interior redesign</li>
                            <li class="mb-2">✓ <strong>TradeGuardian</strong> — AI trading signal pipeline</li>
                            <li class="mb-2">✓ <strong>Custom chatbots</strong> — RAG over client documents</li>
                            <li>✓ <strong>Image generation APIs</strong> — production-grade GPU pipelines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Build -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">What We Build</h2>
                <p class="vs-section-description">Every integration we've shipped is in production. No toy demos.</p>
            </div>
            <div class="row mt-4">
                <div class="col col-12 col-md-6 col-lg-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">Gemini API Integration</h4>
                        <p>We integrate Google's Gemini API into your web or mobile app — text generation, multimodal (image + text), function calling, and streaming responses. We've shipped Gemini-powered features into Flutter apps used by farmers across 9 countries. Preferred over GPT-4 for cost efficiency at Indian user volumes.</p>
                        <p><strong>Use cases:</strong> content generation, document Q&A, image analysis, multilingual AI assistants.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">Stable Diffusion + ControlNet</h4>
                        <p>We deploy and customise Stable Diffusion pipelines — inpainting, img2img, ControlNet for structure-preserving generation, custom LoRA fine-tuning, and ESRGAN upscaling. We've shipped a production system generating interior design renders at under ₹2 per image for Proptifi.</p>
                        <p><strong>Use cases:</strong> property visualisation, fashion try-on, product staging, architectural renders.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">RAG Systems (Retrieval-Augmented Generation)</h4>
                        <p>We build document intelligence products — upload a PDF, query it with natural language, get precise answers with source citations. Built on LangChain or LlamaIndex, with vector databases (Chroma, Pinecone, pgvector), and your choice of LLM backend (Gemini, Claude, or local Mistral for data-sensitive clients).</p>
                        <p><strong>Use cases:</strong> legal document Q&A, policy chatbots, internal knowledge bases.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">LLM-powered Web & Mobile Features</h4>
                        <p>We embed LLM features into existing Laravel or Flutter apps — AI-drafted content, smart search (semantic rather than keyword), form auto-fill from uploaded documents, and automated report generation. We specialise in the engineering work, not just API calls: streaming responses, cost optimisation, rate-limit handling, fallback logic.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">AI Signal & Analytics Pipelines</h4>
                        <p>We build data pipelines that transform raw inputs (market data, sensor readings, user behaviour events) into AI-generated insights surfaced in your dashboard. TradeGuardian's real-time trading signal engine is an example — raw tick data in, actionable buy/sell signals out, displayed live via WebSockets.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">GPU Inference Infrastructure</h4>
                        <p>Running image generation or large models at production scale requires more than an API call. We design cost-optimised GPU inference pipelines — spot instances (RunPod, Lambda Labs), batching, queue workers, and automatic scale-down. We've reduced image generation costs by 80% versus naive per-request GPU allocation for clients who came to us after their cloud bill exploded.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="sec-pad" style="background: #f8fafc;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our AI Technology Stack</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-10">
                    <div class="row">
                        <div class="col col-12 col-md-6">
                            <table class="table table-striped">
                                <thead><tr><th colspan="2">Language Models</th></tr></thead>
                                <tbody>
                                    <tr><td>Gemini 1.5 Flash / Pro</td><td>Primary LLM (cost + multimodal)</td></tr>
                                    <tr><td>Claude Haiku / Sonnet</td><td>Long-context document tasks</td></tr>
                                    <tr><td>Mistral 7B / 8x7B</td><td>On-premise, data-sensitive projects</td></tr>
                                    <tr><td>LangChain / LlamaIndex</td><td>RAG orchestration</td></tr>
                                    <tr><td>Pinecone / pgvector</td><td>Vector database</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col col-12 col-md-6">
                            <table class="table table-striped">
                                <thead><tr><th colspan="2">Image Generation</th></tr></thead>
                                <tbody>
                                    <tr><td>Stable Diffusion XL</td><td>Base image generation</td></tr>
                                    <tr><td>ControlNet</td><td>Structure-preserving generation</td></tr>
                                    <tr><td>ComfyUI</td><td>Pipeline orchestration</td></tr>
                                    <tr><td>ESRGAN</td><td>AI upscaling to print quality</td></tr>
                                    <tr><td>RunPod / Lambda Labs</td><td>Cost-optimised GPU inference</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio CTA -->
    <section class="sec-pad" style="background: #0f0c29; color: #fff;">
        <div class="container text-center">
            <h2 class="vs-section-title" style="color:#fff;">See AI Integration in Action</h2>
            <p style="color:#a5b4fc; max-width:600px; margin: 1rem auto 2rem;">
                FasalVision, Proptifi, and TradeGuardian are all live products we built — not concepts.
                View them in the portfolio to see what production AI integration actually looks like.
            </p>
            <a href="/portfolio-projects" class="btn btn-primary custom-btn me-3">View Portfolio</a>
            <a href="/solutions/ai-property-visualization" class="btn btn-outline-light me-3">Proptifi Case Study</a>
            <a href="/solutions/agritech-development" class="btn btn-outline-light">FasalVision Case Study</a>
        </div>
    </section>

    <!-- FAQ -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">AI Integration — Common Questions</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <div class="accordion" id="aiFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ai1">
                                    Which AI model should I use for my product?
                                </button>
                            </h2>
                            <div id="ai1" class="accordion-collapse collapse show" data-bs-parent="#aiFaq">
                                <div class="accordion-body">It depends on the task. For text generation and document Q&A at Indian user volumes, Gemini 1.5 Flash gives the best cost-per-token. For image generation with structure control, Stable Diffusion + ControlNet. For long legal or financial documents, Claude's 200K context window is worth the cost. We'll recommend the right model after understanding your use case — book a free consultation.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai2">
                                    Can you add AI to my existing Laravel or Flutter app?
                                </button>
                            </h2>
                            <div id="ai2" class="accordion-collapse collapse" data-bs-parent="#aiFaq">
                                <div class="accordion-body">Yes — most of our AI work is adding AI features to existing applications, not starting fresh. We audit your codebase, identify where AI adds genuine value (not where it's technically interesting but doesn't help users), and integrate it with minimal disruption to your existing architecture.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai3">
                                    How much does AI integration cost?
                                </button>
                            </h2>
                            <div id="ai3" class="accordion-collapse collapse" data-bs-parent="#aiFaq">
                                <div class="accordion-body">A focused AI feature addition (e.g., Gemini-powered chat in an existing app) typically takes 2–4 weeks. A full AI product (image generation pipeline, RAG system) is 8–16 weeks. API costs at early-stage volume are usually negligible — Gemini charges fractions of a rupee per query. Contact us with your use case for a fixed-price estimate.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai4">
                                    Is my data safe when using third-party AI APIs?
                                </button>
                            </h2>
                            <div id="ai4" class="accordion-collapse collapse" data-bs-parent="#aiFaq">
                                <div class="accordion-body">Google's Gemini API (when accessed via API key, not Google AI Studio) does not use your queries to train models by default. For clients with strict data requirements, we deploy local models (Mistral, LLaMA) on your own infrastructure — no data leaves your servers. We design the architecture to match your compliance posture.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-contact-form />

@endsection
