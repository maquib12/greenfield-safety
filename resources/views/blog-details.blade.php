@extends('layouts.app')

@section('title', $blog->title . ' | Greenfield Training & Consultancy Safety')

@section('content')

    {{-- Blog Hero --}}
    <section class="inner-page-hero blog-details-hero">

        <div class="container">

            <div class="inner-page-hero-content">

                <span class="hero-eyebrow">
                    {{ $blog->category }}
                </span>

                <h1>
                    {{ $blog->title }}
                </h1>

                <p>
                    Greenfield Training & Consultancy Safety
                </p>

            </div>

        </div>

    </section>


    {{-- Blog Content --}}
    <section class="blog-details-section">

        <div class="container">

            <div class="row g-5">

                {{-- Main Content --}}
                <div class="col-lg-8">

                    <article class="blog-details-content">

                        <div class="blog-details-image">
                            <img
                                src="{{ $blog->image }}"
                                alt="{{ $blog->title }}"
                            >
                        </div>

                        <div class="blog-details-category">
                            {{ $blog->category }}
                        </div>

                        <h2>
                            {{ $blog->title }}
                        </h2>

                            <div class="blog-details-body">

                                @foreach(preg_split("/\R{2,}/", trim($blog->content)) as $paragraph)

                                    <p>
                                        {{ $paragraph }}
                                    </p>

                                @endforeach

                            </div>

                    </article>

                </div>


                {{-- Sidebar --}}
                <div class="col-lg-4">

                    <aside class="blog-details-sidebar">

                        <div class="blog-sidebar-box">

                            <span class="section-eyebrow">
                                Need More Information?
                            </span>

                            <h3>
                                Looking for Safety Training?
                            </h3>

                            <p>
                                Explore our professional safety training
                                programs or contact our team to discuss
                                your requirements.
                            </p>

                            <a
                                href="{{ route('training') }}"
                                class="blog-sidebar-btn"
                            >
                                Explore Training
                                <i class="bi bi-arrow-right"></i>
                            </a>

                            <a
                                href="{{ route('contact') }}"
                                class="blog-sidebar-contact"
                            >
                                Contact Our Team
                            </a>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </section>

@endsection