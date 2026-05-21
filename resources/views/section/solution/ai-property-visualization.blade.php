@extends('layouts.app')

@section('title')
    AI Property Visualization — Proptifi Case Study | {{ config('app.company_name') }}
@endsection

@section('mainBody')

    <!-- Hero Section -->
    <section class="vs-landing-section sec-pad" style="background: linear-gradient(135deg, #1e1b4b 0%, #4c1d95 100%); color: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-12 col-lg-7">
                    <div class="vs-landing-content__inner mt-5 mb-5">
                        <span style="background:#7c3aed; color:#fff; padding:6px 16px; border-radius:20px; font-size:0.85rem; font-weight:600; letter-spacing:0.05em;">AI + REAL ESTATE</span>
                        <h1 class="vs-section-title mt-3" style="color:#fff;">AI Property Visualization</h1>
                        <h2 style="color:#c4b5fd; font-size:1.4rem; margin-bottom:1.2rem;">Stable Diffusion + ControlNet for Interior Design at Scale</h2>
                        <p style="color:#ede9fe; font-size:1rem; line-height:1.8;">
                            We built Proptifi — a generative AI platform that lets property developers and buyers
                            visualize interior redesigns in seconds. Upload a room photo, choose a style, and
                            receive photorealistic AI renders — powered by Stable Diffusion and ControlNet.
                            This is one of our flagship AI engineering projects.
                        </p>
                        <div class="mt-4">
                            <a href="/portfolio-projects" class="btn btn-primary custom-btn me-3">View Portfolio</a>
                            <a href="/contact" class="btn btn-outline-light">Discuss Your AI Project</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-5">
                    <div class="p-4" style="background: rgba(255,255,255,0.08); border-radius: 12px; border: 1px solid rgba(255,255,255,0.15);">
                        <h4 style="color:#c4b5fd;">Project Snapshot</h4>
                        <table class="table table-borderless" style="color:#ede9fe;">
                            <tbody>
                                <tr><td><strong style="color:#fff;">Client</strong></td><td>Proptifi</td></tr>
                                <tr><td><strong style="color:#fff;">Domain</strong></td><td>PropTech / Generative AI</td></tr>
                                <tr><td><strong style="color:#fff;">Stack</strong></td><td>Angular, Python, Stable Diffusion, ControlNet</td></tr>
                                <tr><td><strong style="color:#fff;">Live URL</strong></td><td><a href="https://proptifi.com/" target="_blank" rel="noopener" style="color:#a78bfa;">proptifi.com</a></td></tr>
                                <tr><td><strong style="color:#fff;">Year</strong></td><td>2024 – 2025</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Problem -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2">
                    <div class="vs-heading-center">
                        <h2 class="vs-section-title vs-title-border">The Problem We Solved</h2>
                    </div>
                    <p>Real estate developers spend ₹5–15 lakh on 3D renders for an apartment project before a single unit is sold. Buyers still walk through empty shells and struggle to imagine what the finished space will look like. Interior designers charge for revisions on early-stage concept work.</p>
                    <p>The Proptifi founders had a sharp insight: Stable Diffusion had reached a quality threshold where AI-generated room redesigns were indistinguishable from commissioned renders — but accessing it required GPU expertise most product teams don't have.</p>
                    <p>They needed a product that a non-technical property agent could use: upload a photo, pick a style from a curated menu (Scandinavian / Industrial / Luxury Modern / Minimalist), and receive 4 photorealistic variants in under 60 seconds.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="sec-pad" style="background: #f8fafc;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Approach</h2>
                <p class="vs-section-description">Two hard problems: structural consistency + production-grade throughput at low cost.</p>
            </div>
            <div class="row mt-4">
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">1. ControlNet for structure preservation</h4>
                        <p>Vanilla Stable Diffusion ignores room geometry — it hallucinates windows in walls and moves doorways. We used ControlNet with a depth map preprocessor to lock the structural skeleton of the original room, allowing the diffusion model to change only surfaces (walls, floor, furniture) while keeping architectural lines intact.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">2. Style-specific prompt engineering</h4>
                        <p>We built a curated prompt library for each interior style, fine-tuned against a validation set of professional renders. Each style has a positive prompt, a negative prompt, and a ControlNet weight schedule calibrated to balance style strength against structural fidelity. The result: consistent, on-brand outputs without per-user prompt knowledge.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mb-4">
                    <div class="vs-service-card h-100" style="padding: 2rem;">
                        <h4 class="vs-service-card-title">3. Cost-optimised GPU pipeline</h4>
                        <p>We designed the inference pipeline on spot GPU instances (RunPod) with a queue-based job system. A generation job costs under ₹2 per render at 512×512 upscaled to 1024×1024. The Angular frontend polls for completion and renders results progressively — users see partial results in ~20 seconds rather than waiting 60 seconds for a full set.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Technology Stack</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <table class="table table-striped">
                        <tbody>
                            <tr><td><strong>Frontend</strong></td><td>Angular 17, TypeScript, RxJS</td></tr>
                            <tr><td><strong>Backend API</strong></td><td>Python (FastAPI), RESTful JSON</td></tr>
                            <tr><td><strong>AI Models</strong></td><td>Stable Diffusion XL, ControlNet (depth), ESRGAN upscaler</td></tr>
                            <tr><td><strong>GPU Inference</strong></td><td>RunPod spot instances, CUDA 12, VRAM-optimised batching</td></tr>
                            <tr><td><strong>Image Processing</strong></td><td>OpenCV (depth map extraction), Pillow, ComfyUI pipeline</td></tr>
                            <tr><td><strong>Storage</strong></td><td>AWS S3 (render storage), CloudFront CDN</td></tr>
                            <tr><td><strong>Database</strong></td><td>PostgreSQL (job queue + user history)</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Outcomes -->
    <section class="sec-pad" style="background: #1e1b4b; color: #fff;">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border" style="color:#fff;">What Was Delivered</h2>
            </div>
            <div class="row mt-4 text-center">
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#a78bfa;">&lt; 60s</h3>
                        <p style="color:#ede9fe;">4 AI renders delivered</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#a78bfa;">₹2</h3>
                        <p style="color:#ede9fe;">Cost per render at scale</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#a78bfa;">4 styles</h3>
                        <p style="color:#ede9fe;">Curated interior design modes</p>
                    </div>
                </div>
                <div class="col col-6 col-md-3 mb-4">
                    <div style="background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1.5rem;">
                        <h3 class="vs-vediccode-count" style="color:#a78bfa;">Live</h3>
                        <p style="color:#ede9fe;"><a href="https://proptifi.com/" target="_blank" rel="noopener" style="color:#c4b5fd;">proptifi.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="sec-pad bg-white">
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">AI Product Development — Common Questions</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col col-12 col-md-8">
                    <div class="accordion" id="aiFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#af1">
                                    Can you build a similar AI generation product for a different domain?
                                </button>
                            </h2>
                            <div id="af1" class="accordion-collapse collapse show" data-bs-parent="#aiFaq">
                                <div class="accordion-body">Yes. The core pattern — image-conditioned generation with structure preservation — applies to fashion, e-commerce product staging, architecture, and landscaping. Contact us with your use case; we'll assess feasibility and likely model choices within a few days.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#af2">
                                    Do I need to host my own GPU servers?
                                </button>
                            </h2>
                            <div id="af2" class="accordion-collapse collapse" data-bs-parent="#aiFaq">
                                <div class="accordion-body">Not at the start. We typically begin with spot GPU instances (RunPod, Lambda Labs, or Replicate) to keep upfront cost near zero, then help you evaluate whether dedicated GPUs make economic sense at your usage volume. For most early-stage products, serverless inference is the right answer.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#af3">
                                    Can you use Gemini or GPT-4 instead of Stable Diffusion?
                                </button>
                            </h2>
                            <div id="af3" class="accordion-collapse collapse" data-bs-parent="#aiFaq">
                                <div class="accordion-body">It depends on the task. For photorealistic image generation with structural control, Stable Diffusion + ControlNet is the right choice. For text tasks, document analysis, or conversational features, we use Gemini API (our preferred LLM integration — see our AI Integration service). We pick the right model for the job, not the most-hyped one.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-contact-form />

@endsection
