@extends('layouts.app')

@section('title', 'Safety Consultancy | Greenfield Training & Consultancy Safety')

@section('meta_description', 'Greenfield Training & Consultancy Safety provides practical safety consultancy, HSE management, risk assessment and workplace safety solutions.')

@section('meta_keywords', 'safety consultancy UAE, HSE consultancy, risk assessment UAE, HSE management, workplace safety consultancy')

@section('content')

    {{-- CONSULTANCY HERO --}}
    <section class="inner-page-hero consultancy-page-hero">

        <div class="inner-page-hero-overlay"></div>

        <div class="container">

            <div class="inner-page-hero-content">

                <span>SAFETY CONSULTANCY</span>

                <h1>
                    Practical Safety
                    <br>
                    Solutions for Your Business
                </h1>

                <p>
                    Professional safety consultancy services designed to
                    help organisations identify risks, improve safety
                    practices and create safer workplaces.
                </p>

            </div>

        </div>

    </section>


    {{-- CONSULTANCY INTRO --}}
    <section class="consultancy-intro-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="consultancy-intro-image">

                        <img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85"
                            alt="Safety Consultancy"
                        >

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="consultancy-intro-content">

                        <span class="section-subtitle">
                            OUR CONSULTANCY
                        </span>

                        <h2>
                            Helping Organisations
                            <br>
                            Improve Workplace Safety
                        </h2>

                        <p>
                            Greenfield Training & Consultancy Safety provides
                            practical consultancy support to help organisations
                            understand workplace risks and strengthen their
                            safety practices.
                        </p>

                        <p>
                            Our approach focuses on understanding the specific
                            requirements of each organisation and providing
                            practical recommendations that can be implemented
                            effectively.
                        </p>

                        <div class="consultancy-points">

                            <div>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Practical Safety Recommendations</span>
                            </div>

                            <div>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Workplace Risk Awareness</span>
                            </div>

                            <div>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Organisation-Focused Solutions</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- CONSULTANCY SERVICES --}}
    <section class="consultancy-services-section">

        <div class="container">

            <div class="section-heading text-center">

                <span class="section-subtitle">
                    OUR SERVICES
                </span>

                <h2>
                    Safety Consultancy Services
                </h2>

                <p>
                    Our consultancy services can support organisations
                    across different workplace safety requirements.
                </p>

            </div>


            <div class="row g-4 mt-4">

                {{-- SERVICE 1 --}}
                <div class="col-lg-4 col-md-6">

                    <div class="consultancy-service-card">

                        <div class="consultancy-service-icon">
                            <i class="bi bi-search"></i>
                        </div>

                        <h3>
                            Safety Audits
                        </h3>

                        <p>
                            Review workplace safety practices and identify
                            areas where safety processes can be strengthened.
                        </p>

                        <a href="{{ route('contact') }}">
                            Discuss Your Requirements
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                {{-- SERVICE 2 --}}
                <div class="col-lg-4 col-md-6">

                    <div class="consultancy-service-card">

                        <div class="consultancy-service-icon">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>

                        <h3>
                            Risk Assessment
                        </h3>

                        <p>
                            Identify workplace hazards and support the
                            development of appropriate risk control measures.
                        </p>

                        <a href="{{ route('contact') }}">
                            Discuss Your Requirements
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                {{-- SERVICE 3 --}}
                <div class="col-lg-4 col-md-6">

                    <div class="consultancy-service-card">

                        <div class="consultancy-service-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>

                        <h3>
                            Safety Documentation
                        </h3>

                        <p>
                            Support organisations with structured safety
                            documentation and workplace safety procedures.
                        </p>

                        <a href="{{ route('contact') }}">
                            Discuss Your Requirements
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                {{-- SERVICE 4 --}}
                <div class="col-lg-4 col-md-6">

                    <div class="consultancy-service-card">

                        <div class="consultancy-service-icon">
                            <i class="bi bi-building-check"></i>
                        </div>

                        <h3>
                            Workplace Inspections
                        </h3>

                        <p>
                            Identify potential workplace safety concerns
                            through structured inspection activities.
                        </p>

                        <a href="{{ route('contact') }}">
                            Discuss Your Requirements
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                {{-- SERVICE 5 --}}
                <div class="col-lg-4 col-md-6">

                    <div class="consultancy-service-card">

                        <div class="consultancy-service-icon">
                            <i class="bi bi-clipboard-check-fill"></i>
                        </div>

                        <h3>
                            Compliance Support
                        </h3>

                        <p>
                            Help organisations understand and improve their
                            workplace safety processes and practices.
                        </p>

                        <a href="{{ route('contact') }}">
                            Discuss Your Requirements
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                {{-- SERVICE 6 --}}
                <div class="col-lg-4 col-md-6">

                    <div class="consultancy-service-card">

                        <div class="consultancy-service-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <h3>
                            Safety Awareness Programs
                        </h3>

                        <p>
                            Support organisations in developing stronger
                            workplace safety awareness and culture.
                        </p>

                        <a href="{{ route('contact') }}">
                            Discuss Your Requirements
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection