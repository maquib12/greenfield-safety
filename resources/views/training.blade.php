@extends('layouts.app')

@section('title', 'Safety Training Courses | Greenfield Training & Consultancy Safety')

@section('content')

    {{-- TRAINING HERO --}}
    <section class="inner-page-hero training-page-hero">

        <div class="inner-page-hero-overlay"></div>

        <div class="container">

            <div class="inner-page-hero-content">

                <span>SAFETY TRAINING</span>

                <h1>
                    Professional Training
                    <br>
                    for Safer Workplaces
                </h1>

                <p>
                    Practical safety training programs designed to develop
                    knowledge, awareness and workplace competency.
                </p>

            </div>

        </div>

    </section>


    {{-- TRAINING INTRO --}}
    <section class="training-intro-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="training-intro-image">

                        <img
                            src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1200&q=85"
                            alt="Safety Training"
                        >

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="training-intro-content">

                        <span class="section-subtitle">
                            OUR TRAINING
                        </span>

                        <h2>
                            Develop Skills.
                            <br>
                            Improve Safety.
                        </h2>

                        <p>
                            Our training programs are designed to help
                            individuals and organisations develop practical
                            safety knowledge and improve workplace awareness.
                        </p>

                        <p>
                            We focus on clear instruction, practical
                            understanding and safety practices that can be
                            applied in real workplace environments.
                        </p>

                        <div class="training-intro-points">

                            <div>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Practical Safety Knowledge</span>
                            </div>

                            <div>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Workplace-Focused Training</span>
                            </div>

                            <div>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Professional Instructors</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- COURSE CATEGORIES --}}
    <section class="training-courses-section">

        <div class="container">

            <div class="section-heading text-center">

                <span class="section-subtitle">
                    TRAINING PROGRAMS
                </span>

                <h2>
                    Our Safety Training Courses
                </h2>

                <p>
                    Explore our range of safety-focused training programs
                    designed for different workplace requirements.
                </p>

            </div>


            @forelse($trainingCourses->groupBy('category') as $category => $courses)

                <div class="training-category-block">

                    <div class="training-category-heading">

                        <span class="section-subtitle">
                            {{ strtoupper($category) }}
                        </span>

                        <h3>
                            {{ $category }} Training
                        </h3>

                    </div>


                    <div class="row g-4">

                        @foreach($courses as $course)

                            <div class="col-lg-4 col-md-6">

                                <div class="training-course-card">

                                    <div class="training-course-icon">

                                        @if($course->category === 'Fire Safety')
                                            <i class="bi bi-fire"></i>

                                        @elseif($course->category === 'First Aid')
                                            <i class="bi bi-heart-pulse-fill"></i>

                                        @elseif($course->category === 'Construction Safety')
                                            <i class="bi bi-cone-striped"></i>

                                        @elseif($course->category === 'Risk Management')
                                            <i class="bi bi-exclamation-triangle-fill"></i>

                                        @elseif($course->category === 'PASMA')
                                            <i class="bi bi-building"></i>

                                        @elseif($course->category === 'IPAF')
                                            <i class="bi bi-arrow-up-square"></i>

                                        @elseif($course->category === 'Highfield')
                                            <i class="bi bi-award"></i>

                                        @else
                                            <i class="bi bi-shield-check"></i>
                                        @endif

                                    </div>


                                    <span class="training-course-category">
                                        {{ $course->category }}
                                    </span>


                                    <h3>
                                        {{ $course->short_title ?: $course->title }}
                                    </h3>


                                    <p>
                                        {{ $course->overview }}
                                    </p>


                                    <a href="{{ route('course.details', $course->slug) }}">
                                        Learn More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            @empty

                <div class="text-center py-5">

                    <i class="bi bi-mortarboard" style="font-size: 40px;"></i>

                    <h3 class="mt-3">
                        No Training Courses Available
                    </h3>

                    <p>
                        Training courses will be available soon.
                    </p>

                </div>

            @endforelse

        </div>

    </section>

@endsection