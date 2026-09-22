@extends('layouts.app')

@section('title', 'Greenfield Training & Consultancy Safety')

@section('content')

    {{-- =========================
        HERO SECTION
    ========================== --}}
    <section class="hero-section">

        <div class="hero-overlay"></div>

        <div class="container hero-content">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <span class="hero-subtitle">
                        BUILDING A SAFER TOMORROW
                    </span>

                    <h1>
                        Professional Safety
                        <br>
                        Training & Consultancy
                    </h1>

                    <p>
                        Empowering individuals and organisations with the
                        knowledge, skills and solutions to create safer
                        workplaces.
                    </p>

                    <div class="hero-buttons">

                        <a href="{{ route('training') }}" class="btn hero-primary-btn">
                            <i class="bi bi-mortarboard-fill"></i>
                            Explore Courses
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="{{ route('contact') }}" class="btn hero-secondary-btn">
                            <i class="bi bi-telephone-fill"></i>
                            Contact Us
                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- Slider arrows --}}
        <button type="button" class="hero-arrow hero-arrow-left">
            <i class="bi bi-chevron-left"></i>
        </button>

        <button type="button" class="hero-arrow hero-arrow-right">
            <i class="bi bi-chevron-right"></i>
        </button>

        {{-- Slider dots --}}
        <div class="hero-dots">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>

    </section>


    {{-- =========================
        FEATURES
    ========================== --}}
    <section class="features-section">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>
                            <h5>Certified Training</h5>
                            <p>Internationally recognized programs</p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <div class="feature-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div>
                            <h5>Expert Consultants</h5>
                            <p>Industry experienced professionals</p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <div class="feature-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>

                        <div>
                            <h5>On-Site Support</h5>
                            <p>Practical and result-driven solutions</p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>

                        <div>
                            <h5>Safer Workplaces</h5>
                            <p>Creating a culture of safety together</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- =========================
    ABOUT SECTION
    ========================== --}}
    <section class="about-section">

        <div class="container">

            <div class="row align-items-center g-5">

                {{-- Image --}}
                <div class="col-lg-6">

                    <div class="about-image-wrapper">

                        <img
                            src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1000&q=85"
                            alt="Greenfield Safety Training"
                            class="about-image"
                        >

                        <div class="experience-box">
                            <strong>10+</strong>
                            <span>Years of Experience</span>
                        </div>

                    </div>

                </div>


                {{-- Content --}}
                <div class="col-lg-6">

                    <div class="about-content">

                        <span class="section-subtitle">
                            ABOUT GREENFIELD
                        </span>

                        <h2>
                            Building Safer Workplaces
                            Through Knowledge & Expertise
                        </h2>

                        <p>
                            Greenfield Training & Consultancy Safety is committed
                            to providing professional safety training, consultancy
                            and inspection solutions designed to help organizations
                            create safer and more productive workplaces.
                        </p>

                        <p>
                            Our approach combines industry knowledge, practical
                            training and professional guidance to help individuals
                            and organizations meet modern workplace safety
                            requirements.
                        </p>


                        <div class="about-features">

                            <div class="about-feature">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Professional Safety Training</span>
                            </div>

                            <div class="about-feature">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Experienced Safety Consultants</span>
                            </div>

                            <div class="about-feature">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Practical Safety Solutions</span>
                            </div>

                            <div class="about-feature">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Industry-Focused Approach</span>
                            </div>

                        </div>


                        <a href="#" class="btn about-btn">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- =========================
        CERTIFICATIONS & APPROVALS
    ========================== --}}
    <section class="certifications-section">

        <div class="container">

            <div class="section-heading text-center">

                <span class="section-subtitle">
                    TRUST & RECOGNITION
                </span>

                <h2>
                    Our Certifications & Approvals
                </h2>

                <div class="heading-line"></div>

            </div>


            <div class="certifications-slider">

                <button class="cert-arrow cert-arrow-left">
                    <i class="bi bi-chevron-left"></i>
                </button>


                <div class="certifications-track">

                    @forelse($certifications as $certification)

                        <div class="certification-item">

                            <div class="certification-logo">

                                <img
                                    src="{{ asset('storage/' . $certification->image) }}"
                                    alt="{{ $certification->name }}"
                                >

                            </div>

                        </div>

                    @empty

                        <div class="certification-empty">
                            No certifications available.
                        </div>

                    @endforelse

                </div>


                <button class="cert-arrow cert-arrow-right">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>


            <div class="certification-dots">
            </div>

        </div>

    </section>
    {{-- =========================
        VISION & MISSION
    ========================== --}}
    <section class="vision-mission-section">

        <div class="container">

            <div class="row g-4 align-items-stretch">

                {{-- Left Column --}}
                <div class="col-lg-6">

                    <div class="vm-image-card">

                        <img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85"
                            alt="Greenfield Team"
                        >

                    </div>


                    <div class="vm-content-card vm-vision-card">

                        <div class="vm-icon">
                            <i class="bi bi-eye"></i>
                        </div>

                        <h3>
                            Greenfield Vision
                        </h3>

                        <p>
                            Our vision is to become a trusted safety training
                            and consultancy partner, helping organizations
                            build safer, healthier and more productive
                            workplaces through knowledge and practical
                            solutions.
                        </p>

                    </div>

                </div>


                {{-- Right Column --}}
                <div class="col-lg-6">

                    <div class="vm-content-card vm-mission-card">

                        <div class="vm-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>

                        <h3>
                            Greenfield Mission
                        </h3>

                        <p>
                            Our mission is to provide high-quality safety
                            training, consultancy and inspection services
                            that empower individuals and organizations to
                            identify risks, improve safety performance and
                            create safer working environments.
                        </p>

                    </div>


                    <div class="vm-image-card">

                        <img
                            src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=85"
                            alt="Greenfield Safety Team"
                        >

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- =========================
        WHAT WE DO
    ========================== --}}
    <section class="what-we-do-section">

        <div class="container">

            {{-- Section Heading --}}
            <div class="what-we-do-heading">

                <div class="what-we-do-number">
                    01. <span>What We Do</span>
                </div>

                <h2>
                    Your Trusted HSE Partner
                </h2>

            </div>


            {{-- Services --}}
            <div class="row g-0 what-we-do-grid">

                {{-- Safety Training --}}
                <div class="col-lg-6">

                    <div class="what-we-do-card">

                        <div class="what-we-do-image">

                            <img
                                src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=85"
                                alt="Safety Training"
                            >

                        </div>

                        <div class="what-we-do-content">

                            <div class="service-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>

                            <h3>
                                Safety Training
                            </h3>

                            <p>
                                Professional safety training programs designed
                                to equip individuals and teams with the practical
                                knowledge and skills required to work safely
                                and confidently.
                            </p>

                            <a href="#" class="service-link">
                                Explore Training
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Consultancy & Inspection --}}
                <div class="col-lg-6">

                    <div class="what-we-do-card">

                        <div class="what-we-do-image">

                            <img
                                src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=85"
                                alt="Safety Consultancy and Inspection"
                            >

                        </div>

                        <div class="what-we-do-content">

                            <div class="service-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h3>
                                Consultancy & Inspection
                            </h3>

                            <p>
                                Practical consultancy and inspection services
                                helping organizations identify workplace risks,
                                improve safety performance and maintain safer
                                working environments.
                            </p>

                            <a href="#" class="service-link">
                                Explore Services
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- =========================
        WHY CHOOSE GREENFIELD
    ========================== --}}
    <section class="why-choose-section">

        <div class="container">

            {{-- Heading --}}
            <div class="why-choose-heading text-center">

                <span class="section-subtitle">
                    WHY GREENFIELD
                </span>

                <h2>
                    Why Choose Greenfield?
                </h2>

                <p>
                    We combine professional expertise, practical training and
                    safety-focused solutions to help organisations build safer
                    and more productive workplaces.
                </p>

            </div>


            {{-- Cards --}}
            <div class="row g-4">

                {{-- Card 1 --}}
                <div class="col-lg-3 col-md-6">

                    <div class="why-card">

                        <div class="why-icon">
                            <i class="bi bi-person-check-fill"></i>
                        </div>

                        <h4>
                            Experienced Professionals
                        </h4>

                        <p>
                            Our services are delivered by knowledgeable
                            professionals with a practical understanding
                            of workplace safety requirements.
                        </p>

                        <span class="why-number">
                            01
                        </span>

                    </div>

                </div>


                {{-- Card 2 --}}
                <div class="col-lg-3 col-md-6">

                    <div class="why-card">

                        <div class="why-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                        <h4>
                            Industry-Focused Training
                        </h4>

                        <p>
                            Training programs are designed around practical
                            workplace situations to help participants develop
                            useful safety skills.
                        </p>

                        <span class="why-number">
                            02
                        </span>

                    </div>

                </div>


                {{-- Card 3 --}}
                <div class="col-lg-3 col-md-6">

                    <div class="why-card">

                        <div class="why-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <h4>
                            Practical Safety Solutions
                        </h4>

                        <p>
                            We focus on identifying risks and providing
                            practical solutions that support safer working
                            environments.
                        </p>

                        <span class="why-number">
                            03
                        </span>

                    </div>

                </div>


                {{-- Card 4 --}}
                <div class="col-lg-3 col-md-6">

                    <div class="why-card">

                        <div class="why-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>

                        <h4>
                            Commitment to Excellence
                        </h4>

                        <p>
                            We are committed to delivering professional,
                            reliable and quality-focused safety services
                            to our clients.
                        </p>

                        <span class="why-number">
                            04
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- FACILITIES / WHAT WE PROVIDE --}}
    <section class="facilities-section">
        <div class="container">

            <div class="facilities-heading">
                <div>
                    <span class="section-subtitle">OUR SERVICES</span>
                    <h2>What We Provide</h2>
                </div>

                <p>
                    Professional safety training and consultancy services
                    designed to support safer, compliant and more productive
                    workplaces.
                </p>
            </div>

            <div class="row g-4">

                {{-- CARD 1 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-image">
                            <img
                                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=85"
                                alt="Safety Training"
                            >
                        </div>

                        <div class="facility-content">
                            <div class="facility-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>

                            <h3>Safety Training</h3>

                            <p>
                                Practical safety training programs for individuals,
                                teams and organizations across different industries.
                            </p>

                            <a href="#" class="facility-link">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-image">
                            <img
                                src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=900&q=85"
                                alt="Safety Consultancy"
                            >
                        </div>

                        <div class="facility-content">
                            <div class="facility-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h3>Safety Consultancy</h3>

                            <p>
                                Professional consultancy services to help organizations
                                identify risks and improve workplace safety performance.
                            </p>

                            <a href="#" class="facility-link">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 3 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-image">
                            <img
                                src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=900&q=85"
                                alt="Safety Inspection"
                            >
                        </div>

                        <div class="facility-content">
                            <div class="facility-icon">
                                <i class="bi bi-search"></i>
                            </div>

                            <h3>Safety Inspection</h3>

                            <p>
                                Workplace inspections focused on identifying hazards,
                                risks and opportunities for safety improvement.
                            </p>

                            <a href="#" class="facility-link">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 4 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-image">
                            <img
                                src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85"
                                alt="HSE Management"
                            >
                        </div>

                        <div class="facility-content">
                            <div class="facility-icon">
                                <i class="bi bi-clipboard2-check-fill"></i>
                            </div>

                            <h3>HSE Management</h3>

                            <p>
                                Support for organizations looking to strengthen their
                                health, safety and environmental management systems.
                            </p>

                            <a href="#" class="facility-link">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 5 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-image">
                            <img
                                src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=85"
                                alt="Risk Assessment"
                            >
                        </div>

                        <div class="facility-content">
                            <div class="facility-icon">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                            </div>

                            <h3>Risk Assessment</h3>

                            <p>
                                Structured risk assessment services to help businesses
                                understand workplace hazards and control risks.
                            </p>

                            <a href="#" class="facility-link">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 6 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-image">
                            <img
                                src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=85"
                                alt="Corporate Safety Programs"
                            >
                        </div>

                        <div class="facility-content">
                            <div class="facility-icon">
                                <i class="bi bi-building-check"></i>
                            </div>

                            <h3>Corporate Safety Programs</h3>

                            <p>
                                Customized safety programs designed around the needs
                                and operational requirements of organizations.
                            </p>

                            <a href="#" class="facility-link">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- SAFETY TRAINING COURSES --}}
    <section class="courses-section">

        <div class="container">

            <div class="courses-heading text-center">
                <span class="section-subtitle">OUR TRAINING PROGRAMS</span>

                <h2>Safety Training Courses</h2>

                <p>
                    Develop essential workplace safety knowledge and skills
                    through our practical and professionally designed training
                    programs.
                </p>
            </div>

            <div class="row g-4">

                {{-- COURSE 1 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">

                        <div class="course-image">
                            <img
                                src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=900&q=85"
                                alt="NEBOSH Training"
                            >

                            <span class="course-category">
                                Health & Safety
                            </span>
                        </div>

                        <div class="course-content">

                            <div class="course-meta">
                                <span>
                                    <i class="bi bi-clock"></i>
                                    Professional Course
                                </span>
                            </div>

                            <h3>NEBOSH Safety Training</h3>

                            <p>
                                Build a strong understanding of workplace health
                                and safety principles through structured training.
                            </p>

                            <a href="#" class="course-link">
                                View Course
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                {{-- COURSE 2 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">

                        <div class="course-image">
                            <img
                                src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=85"
                                alt="IOSH Training"
                            >

                            <span class="course-category">
                                Safety Management
                            </span>
                        </div>

                        <div class="course-content">

                            <div class="course-meta">
                                <span>
                                    <i class="bi bi-clock"></i>
                                    Professional Course
                                </span>
                            </div>

                            <h3>IOSH Safety Training</h3>

                            <p>
                                Practical training focused on workplace safety
                                responsibilities, risk awareness and prevention.
                            </p>

                            <a href="#" class="course-link">
                                View Course
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                {{-- COURSE 3 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">

                        <div class="course-image">
                            <img
                                src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=85"
                                alt="Fire Safety Training"
                            >

                            <span class="course-category">
                                Emergency Safety
                            </span>
                        </div>

                        <div class="course-content">

                            <div class="course-meta">
                                <span>
                                    <i class="bi bi-clock"></i>
                                    Professional Course
                                </span>
                            </div>

                            <h3>Fire Safety Training</h3>

                            <p>
                                Learn essential fire prevention, emergency response
                                and workplace fire safety practices.
                            </p>

                            <a href="#" class="course-link">
                                View Course
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                {{-- COURSE 4 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">

                        <div class="course-image">
                            <img
                                src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=900&q=85"
                                alt="First Aid Training"
                            >

                            <span class="course-category">
                                First Aid
                            </span>
                        </div>

                        <div class="course-content">

                            <div class="course-meta">
                                <span>
                                    <i class="bi bi-clock"></i>
                                    Professional Course
                                </span>
                            </div>

                            <h3>First Aid Training</h3>

                            <p>
                                Develop practical knowledge for responding to common
                                workplace emergencies and first aid situations.
                            </p>

                            <a href="#" class="course-link">
                                View Course
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                {{-- COURSE 5 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">

                        <div class="course-image">
                            <img
                                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=85"
                                alt="HSE Training"
                            >

                            <span class="course-category">
                                HSE
                            </span>
                        </div>

                        <div class="course-content">

                            <div class="course-meta">
                                <span>
                                    <i class="bi bi-clock"></i>
                                    Professional Course
                                </span>
                            </div>

                            <h3>HSE Awareness Training</h3>

                            <p>
                                Improve employee awareness of workplace hazards,
                                safe practices and health and safety responsibilities.
                            </p>

                            <a href="#" class="course-link">
                                View Course
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                {{-- COURSE 6 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">

                        <div class="course-image">
                            <img
                                src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85"
                                alt="Risk Assessment Training"
                            >

                            <span class="course-category">
                                Risk Management
                            </span>
                        </div>

                        <div class="course-content">

                            <div class="course-meta">
                                <span>
                                    <i class="bi bi-clock"></i>
                                    Professional Course
                                </span>
                            </div>

                            <h3>Risk Assessment Training</h3>

                            <p>
                                Understand workplace risk assessment methods and
                                practical approaches to controlling hazards.
                            </p>

                            <a href="#" class="course-link">
                                View Course
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="courses-button">
                <a href="#" class="btn courses-btn">
                    View All Training Courses
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>

    </section>


    {{-- STATS SECTION --}}
    <section class="stats-section">
        <div class="container">

            <div class="row g-0 stats-row">

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div class="stat-number">500+</div>

                        <div class="stat-title">
                            Professionals Trained
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-building"></i>
                        </div>

                        <div class="stat-number">100+</div>

                        <div class="stat-title">
                            Organisations Served
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                        <div class="stat-number">25+</div>

                        <div class="stat-title">
                            Training Programs
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>

                        <div class="stat-number">10+</div>

                        <div class="stat-title">
                            Years of Experience
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- CTA SECTION --}}
    <section class="cta-section">

        <div class="cta-overlay"></div>

        <div class="container">
            <div class="cta-content text-center">

                <span class="cta-subtitle">
                    SAFETY STARTS WITH THE RIGHT KNOWLEDGE
                </span>

                <h2>
                    Ready to Build a Safer Workplace?
                </h2>

                <p>
                    Partner with Greenfield Training & Consultancy Safety for
                    professional training, consultancy and practical safety
                    solutions tailored to your organisation.
                </p>

                <div class="cta-buttons">

                    <a href="#" class="btn cta-primary-btn">
                        <i class="bi bi-mortarboard-fill"></i>
                        Explore Training
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="#" class="btn cta-secondary-btn">
                        <i class="bi bi-chat-dots-fill"></i>
                        Talk to Our Team
                    </a>

                </div>

            </div>
        </div>

    </section>

    {{-- TESTIMONIALS SECTION --}}
    <section class="testimonials-section">

        <div class="container">

            <div class="testimonials-heading text-center">
                <span class="section-subtitle">CLIENT FEEDBACK</span>

                <h2>What Our Clients Say</h2>

                <p>
                    Hear from professionals and organisations who have worked
                    with Greenfield Training & Consultancy Safety.
                </p>
            </div>

            <div class="row g-4">

                {{-- TESTIMONIAL 1 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">

                        <div class="testimonial-quote">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <p class="testimonial-text">
                            The training was well organised, practical and easy
                            to understand. The team demonstrated strong knowledge
                            of workplace safety requirements.
                        </p>

                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="bi bi-person-fill"></i>
                            </div>

                            <div>
                                <h4>Safety Professional</h4>
                                <span>Corporate Client</span>
                            </div>
                        </div>

                    </div>
                </div>


                {{-- TESTIMONIAL 2 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">

                        <div class="testimonial-quote">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <p class="testimonial-text">
                            Greenfield provided useful and practical guidance
                            that helped our team improve awareness of workplace
                            hazards and safe working practices.
                        </p>

                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="bi bi-person-fill"></i>
                            </div>

                            <div>
                                <h4>HSE Manager</h4>
                                <span>Corporate Client</span>
                            </div>
                        </div>

                    </div>
                </div>


                {{-- TESTIMONIAL 3 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">

                        <div class="testimonial-quote">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <p class="testimonial-text">
                            Professional service and knowledgeable trainers.
                            The course content was relevant and the overall
                            training experience was very positive.
                        </p>

                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="bi bi-person-fill"></i>
                            </div>

                            <div>
                                <h4>Training Participant</h4>
                                <span>Professional Client</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="testimonial-dots">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>

        </div>

    </section>
@endsection