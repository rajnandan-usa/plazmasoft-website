@extends('layouts.app')

@section('title')
    Our Blogs
@endsection


@section('mainBody')
    <!-- About Landing Section Start -->
    <section class="vs-landing-section vs-about-landing-section">
        <div class="container">
            <div class="vs-landing-content">
                <div class="row align-items-center">
                    <div class="col col-12 col-md-12">
                        <div class="vs-landing-content__inner mb-0">
                            <h1 class="vs-section-title">How to Get started with <span>AI/ML technology</span></h1>
                            <p class="vs-section-description">Want to connect with us <span> {{config('app.name')}} </span> teams will help you to get started.</p>
                            <div class="vs-landing-btn">
                                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#requestProposalModalSM">Let's work together</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Landing Section End -->

    <!-- News Section Start -->
    <div class="vs-believe-section vs-section-spacer">
        <div class="container">

            <div class="row">
                @if ($search)
                    <div class="col-12 mb-4">
                        <!-- Content -->
                        <div class="vs-section-subtitle">
                            <h3 class="my-2"><a href="{{ route('posts.index') }}"> Result
                                    <strong>{{ $search }}</strong></a></h3>
                            <p>{{ count($posts) }} results found</p>
                            <hr>
                        </div>
                    </div>
                @endif

            </div>

            <div class="row">

                @forelse ($posts as $post)
                    <!-- News Start -->
                    <div class="col-md-4 mb-4">

                        <!-- Image -->
                        <a href="{{ route('posts.show', $post->slug) }}"><img loading="lazy" class="img-fluid rounded"
                                src="{{ str_starts_with($post->image, 'http') ? $post->image : asset('/storage/' . $post->image) }}"
                                alt="{{ $post->title }}"></a>
                        <!-- Content -->
                        <div class="vs-landing-content__inner mt-2">
                            <h3 class="vs-section-subtitle mb-0">
                                <a class="vs-section-description"
                                    href="{{ route('posts.show', $post->slug) }}">{{ $post->title > 50 ? substr($post->title, 0, 50) . '...' : $post->title }}</a>
                            </h3>
                            <!-- Meta -->
                            <div class="d-flex gap-4 my-2">
                                <span class="text-muted"><i class="fa fa-user me-2"></i>{{ $post->admin?->name }}</span>
                                <span class="text-muted"><i
                                        class="fa fa-calendar me-2"></i>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <p>{{ $post->description > 150 ? substr($post->description, 0, 150) . '...' : $post->description }}
                            </p>
                            <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-sm btn-primary">Read
                                more</a>
                        </div>

                    </div>
                @empty
                    <div class="col-12 mb-4">

                        <!-- Image -->
                        <img loading="lazy" src="https://via.placeholder.com/360x240.png/eeeeee?text=No+post+found!"
                            alt="">

                        <!-- Content -->
                        <div class="vs-landing-content__inner">
                            <h3 class="vs-section-subtitle text-muted mt-4 mb-2">{{ __('news.not_found') }}</h3>
                            <h5 class="vs-section-description text-muted mb-4">{{ __('news.search_other') }}</h5>
                            <a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary">Back to posts</a>
                        </div>

                    </div>
                @endforelse

                <!-- Page Pagination Start -->
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
    </div><!-- News Section End -->
@endsection
