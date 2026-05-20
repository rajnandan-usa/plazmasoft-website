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
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-landing-content__inner mb-0">
                            <h1 class="vs-section-title">{{ $post->title }}</h1>
                            <p class="vs-section-description">{{ $post->description }}</p>
                            <div class="vs-landing-btn">
                                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#requestProposalModalSM">Let's connect with us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6">
                        <div class="vs-about-landing-img">
                            <img loading="lazy"
                                src="{{ str_starts_with($post->image, 'http') ? $post->image : asset('/storage/' . $post->image) }}"
                                style="width: 750px !important; height: 500px !important; border-radius: 20px;"
                                alt="{{ $post->title }}" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Landing Section End -->



    <section class="vs-believe-section vs-section-spacer">
        <div class="container">
            <div class="vs-believe-content">
                <div class="row align-items-start">

                    <div class="col col-12 col-md-8 col-lg-8">

                        <h1 class="vs-section-title">{{ $post->title }}</h1>

                        <div class="d-flex gap-4 mb-4">
                            <a href="#" class="text-muted"><i
                                    class="fa fa-user me-2"></i>{{ $post->admin?->name }}</a>
                            <span class="text-muted"><i
                                    class="fa fa-calendar me-2"></i>{{ $post->created_at->diffForHumans() }}</span>
                        </div>


                        <div class="my-4">
                            {!! $post->content !!}
                        </div>


                        <div class="w-100 d-flex gap-4 mt-4">
                            <span class="text-muted small">Share on </span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="http://www.twitter.com/share?url={{ url()->current() }}"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="https://mail.google.com/mail/u/0/?to&su&body={{ url()->current() }}"><i
                                    class="fa fa-envelope"></i></a>
                        </div>



                    </div>

                    <div class="col col-12 col-md-4 col-lg-4">

                        <div class="vs-believe-content__inner mb-4">
                            <h4 class="vs-believe-description mb-4">Recent posts</h4>

                            @forelse ($posts as $sidePost)
                                <div class="d-flex justify-between gap-2 mb-3">
                                    <a href="{{ route('posts.show', $sidePost->slug) }}" class="image"><img
                                            class="img-fluid rounded" width="100px"
                                            src="{{ str_starts_with($sidePost->image, 'http') ? $sidePost->image : asset('/storage/' . $sidePost->image) }}"
                                            alt="{{ $sidePost->title }}">
                                    </a>

                                    <div class="w-100">
                                        <p class="text-muted mb-1"><a class="text-secondary"
                                                href="{{ route('posts.show', $sidePost->slug) }}">{{ $sidePost->title > 80 ? substr($sidePost->title, 0, 80) . '...' : $sidePost->title }}</a>
                                        </p>
                                        <small class="text-muted"><i
                                                class="fa fa-calendar me-2"></i>{{ $sidePost->created_at->diffForHumans() }}</small>
                                    </div>



                                </div>
                            @empty
                            @endforelse

                        </div>

                        <div class="vs-believe-content__inner mb-4">

                            <h4 class="vs-believe-description mb-4">Categories</h4>
                            <ul class="vs-section-description list-group list-group-flush">
                                @forelse ($categories as $category)
                                    <li class="list-item list-group-item mb-2"><a href="#">{{ $category->name }}
                                            &lpar;{{ $category->posts->count() }}&rpar;</a></li>
                                @empty
                                @endforelse
                            </ul>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>
@endsection
