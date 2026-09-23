@extends('layouts.app')

@section('title', 'Course Details | Greenfield Training & Consultancy Safety')

@section('meta_description', $courseData['overview'] ?: 'Professional safety training course by Greenfield Training & Consultancy Safety.')

@section('meta_keywords', $courseData['title'] . ', safety training UAE, HSE training, Greenfield Safety')

@section('content')

    {{-- COURSE HERO --}}
    <section class="inner-page-hero course-details-hero">

        <div class="inner-page-hero-overlay"></div>

        <div class="container">

            <div class="inner-page-hero-content">

                <span>SAFETY TRAINING</span>

                <!-- <h1>
                    {{ ucwords(str_replace('-', ' ', $course)) }}
                </h1> -->
                <h1>
                    {{ $courseData['title'] }}
                </h1>

                <p>
                    Professional safety training designed to develop
                    practical knowledge, awareness and workplace competency.
                </p>

            </div>

        </div>

    </section>


    {{-- COURSE DETAILS --}}
    <section class="course-details-section">

        <div class="container">

            <div class="row g-5">

                {{-- MAIN CONTENT --}}
                <div class="col-lg-8">

                    <div class="course-details-content">

                        <span class="section-subtitle">
                            COURSE OVERVIEW
                        </span>

                        <h2>
                            About This Training
                        </h2>

                        <p>
                            {{ $courseData['overview'] }}
                        </p>

                        <p>
                            {{ $courseData['description'] }}
                        </p>


                        <div class="course-learn-section">

                            <h3>
                                What You Will Learn
                            </h3>

                            <div class="course-topic-list">

                                @foreach($courseData['topics'] as $topic)

                                    <div>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>{{ $topic }}</span>
                                    </div>

                                @endforeach

                            </div>

                        </div>


                        <div class="course-learn-section">

                            <h3>
                                Who Should Attend?
                            </h3>

                            <p>
                                {{ $courseData['audience'] }}
                            </p>

                        </div>

                    </div>

                </div>


                {{-- SIDEBAR --}}
                <div class="col-lg-4">

                    <div class="course-sidebar">

                        <div class="course-sidebar-header">
                            <i class="bi bi-mortarboard-fill"></i>

                            <h3>
                                Course Information
                            </h3>
                        </div>


                        <div class="course-info-item">

                            <span>Training Type</span>

                            <strong>
                                Professional Safety Training
                            </strong>

                        </div>


                        <div class="course-info-item">

                            <span>Delivery</span>

                            <strong>
                                Classroom / On-site
                            </strong>

                        </div>


                        <div class="course-info-item">

                            <span>Suitable For</span>

                            <strong>
                                Individuals & Organisations
                            </strong>

                        </div>


                        <div class="course-info-item">

                            <span>Location</span>

                            <strong>
                                UAE
                            </strong>

                        </div>


                        <a href="{{ route('contact', ['course' => $course]) }}" class="course-enquiry-btn">
                            Enquire About This Course
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection