@extends('layouts.app')

@section('title', 'Blogs | Greenfield Training & Consultancy Safety')

@section('content')

    {{-- Blog Hero --}}
    <section class="inner-page-hero blogs-page-hero">
        <div class="container">
            <div class="inner-page-hero-content">
                <span class="hero-eyebrow">Knowledge & Insights</span>

                <h1>
                    Safety <span>Blogs</span>
                </h1>

                <p>
                    Explore useful insights, safety practices and workplace
                    safety information from Greenfield Training & Consultancy.
                </p>
            </div>
        </div>
    </section>


    {{-- Blog Intro --}}
    <section class="blogs-intro-section">
        <div class="container">
            <div class="section-heading text-center">

                <span class="section-eyebrow">
                    Our Latest Insights
                </span>

                <h2>
                    Learn. Improve. <span>Stay Safe.</span>
                </h2>

                <p>
                    Stay informed with practical safety knowledge, workplace
                    guidance and industry insights designed to support safer
                    working environments.
                </p>

            </div>
        </div>
    </section>


    {{-- Blog Cards --}}
    <section class="blogs-section">
        <div class="container">

            <div class="row g-4">

                @foreach($blogs as $blog)

                    <div class="col-lg-4 col-md-6">
                        <article class="blog-card">

                            <div class="blog-card-image">

                                <img
                                    src="{{ $blog->image }}"
                                    alt="{{ $blog->title }}"
                                >

                                <span class="blog-category">
                                    {{ $blog->category }}
                                </span>

                            </div>

                            <div class="blog-card-body">

                                <div class="blog-date">
                                    <i class="bi bi-calendar3"></i>
                                    Safety Insights
                                </div>

                                <h3>
                                    {{ $blog->title }}
                                </h3>

                                <p>
                                    {{ $blog->excerpt }}
                                </p>

                                <a
                                    href="{{ route('blog.details', $blog->slug) }}"
                                    class="blog-read-more"
                                >
                                    Read More
                                    <i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </article>
                    </div>

                @endforeach

            </div>

        </div>
    </section>

@endsection