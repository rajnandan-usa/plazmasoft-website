@extends('layouts.app')

@section('title')
    Our portfolio projects
@endsection


@section('mainBody')
    <!-- Portfolio Section Start -->
    <section class="vs-portfolio-section vs-section-spacer">
        <div class="vs-portfolio-particles">
            <img src="{{ asset('web-assets/images/portfolio-particles.svg') }}" alt="Portfolio Particle" class="img-fluid">
        </div>
        <div class="container">
            <div class="vs-heading-center">
                <h2 class="vs-section-title vs-title-border">Our Portfolio</h2>
                <p class="vs-section-description">Work with groundbreakers who create top-notch mobile and web apps
                    on time & on budget
                </p>
            </div>
            <div class="vs-portfolio-content">
                <div class="vs-portfolio-content__inner">
                    <div class="vs-portfolio-area">
                        @forelse ($projects as $project)
                            <div class="vs-portfolio-item" style="background-color: #FFCC9F;">
                                <div class="row">
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="vs-portfolio-item-img">
                                            <img src="{{ str_starts_with($project->banner, 'http') ? $project->banner : asset('/storage/' . $project->banner) }}"
                                                alt="{{ $project->title }}" class="img-fluid rounded shadow">
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-8 col-lg-8 col-xl-6 mx-auto">
                                        <div class="vs-portfolio-details">
                                            <div class="vs-portfolio-heading">
                                                <div class="vs-portfolio-heading-top">
                                                    <div class="vs-portfolio-logo">
                                                        <img src="{{ str_starts_with($project->logo, 'http') ? $project->logo : asset('/storage/' . $project->logo) }}"
                                                            alt="{{ $project->type }}" class="rounded" height="50px">
                                                    </div>
                                                    <div class="vs-portfolio-heading__inner">
                                                        <h3 class="vs-portfolio-title"><span>{{ $project->title }} </span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <p class="vs-portfolio-heading-desccription">
                                                    {{ $project->shortDescription }}</p>

                                                <div class="vs-portfolio-body">
                                                    <div class="vs-portfolio-info">
                                                        <div class="vs-portfolio-info-item">
                                                            <label class="vs-portfolio-info-label">Region</label>
                                                            <p class="vs-portfolio-info-text vs-portfolio-info-region">
                                                                <span>{{ $project->country }}</span>
                                                            </p>
                                                        </div>
                                                        <div class="vs-portfolio-info-item">
                                                            <label class="vs-portfolio-info-label">Duration</label>
                                                            <p class="vs-portfolio-info-text">{{ $project->startDate }} &Rightarrow;
                                                                {{ $project->endDate ? $project->endDate : 'present' }}</p>
                                                        </div>
                                                        <div class="vs-portfolio-info-item">
                                                            <label class="vs-portfolio-info-label">Technology</label>
                                                            <p class="vs-portfolio-info-text">{{ $project->technologies }}
                                                            </p>
                                                        </div>

                                                        <div class="vs-portfolio-info-item">
                                                            <label class="vs-portfolio-info-label">Category</label>
                                                            <p class="vs-portfolio-info-text"> <span class="bg-secondary badge p-2 rounded-pill">{{ $project->category }}</span> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="vs-portfolio-footer">

                                                    <div class="vs-portfolio-footer-item">
                                                        @if ($project->videoUrl)    
                                                            <a href="{{ $project->videoUrl }}" class="vs-portfolio-footer-link btn btn-primary me-4"
                                                                target="_blank"> Video
                                                            </a>
                                                        @endif
                                                        <a href="{{ $project->url }}" class="vs-portfolio-footer-link btn btn-dark"
                                                            target="_blank"> {{ $project->type }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->
@endsection
