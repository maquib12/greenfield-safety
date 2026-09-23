@extends('layouts.app')

@section('title', 'Contact Us | Greenfield Training & Consultancy Safety')

@section('meta_description', 'Contact Greenfield Training & Consultancy Safety for safety training, HSE consultancy, risk assessment and workplace safety services.')

@section('meta_keywords', 'contact Greenfield Safety, safety training UAE, HSE consultancy UAE, safety services UAE')

@section('content')

    {{-- CONTACT HERO --}}
    <section class="inner-page-hero contact-page-hero">

        <div class="inner-page-hero-overlay"></div>

        <div class="container">

            <div class="inner-page-hero-content">

                <span>GET IN TOUCH</span>

                <h1>
                    Let's Build a
                    <br>
                    Safer Workplace
                </h1>

                <p>
                    Get in touch with Greenfield Training & Consultancy
                    Safety for professional training and safety solutions.
                </p>

            </div>

        </div>

    </section>


    {{-- CONTACT INFORMATION --}}
    <section class="contact-info-section">

        <div class="container">

            <div class="section-heading text-center">

                <span class="section-subtitle">
                    CONTACT US
                </span>

                <h2>
                    We're Here to Help
                </h2>

                <p>
                    Have a question about our training or consultancy services?
                    Our team is ready to assist you.
                </p>

            </div>


            <div class="row g-4 mt-4">

                {{-- ADDRESS --}}
                <div class="col-lg-4 col-md-6">

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>

                        <h3>
                            Our Location
                        </h3>

                        <p>
                            United Arab Emirates
                        </p>

                    </div>

                </div>


                {{-- PHONE --}}
                <div class="col-lg-4 col-md-6">

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>

                        <h3>
                            Phone Number
                        </h3>

                        <p>
                            +971 00 000 0000
                        </p>

                    </div>

                </div>


                {{-- EMAIL --}}
                <div class="col-lg-4 col-md-6">

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>

                        <h3>
                            Email Address
                        </h3>

                        <p>
                            info@greenfield.com
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- CONTACT FORM --}}
    <section class="contact-form-section">

        <div class="container">

            <div class="row g-5 align-items-start">

                {{-- LEFT CONTENT --}}
                <div class="col-lg-5">

                    <div class="contact-form-content">

                        <span class="section-subtitle">
                            SEND US A MESSAGE
                        </span>

                        <h2>
                            Let's Talk About
                            Your Safety Needs
                        </h2>

                        <p>
                            Whether you need professional safety training,
                            consultancy or guidance, send us a message and
                            our team will get back to you.
                        </p>

                        <div class="contact-working-hours">

                            <div class="contact-working-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>

                            <div>

                                <span>
                                    WORKING HOURS
                                </span>

                                <strong>
                                    Monday - Friday
                                </strong>

                                <small>
                                    9:00 AM - 6:00 PM
                                </small>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- FORM --}}
                <div class="col-lg-7">

                    <div class="contact-form-box">
                        @if(session('success'))
                            <div class="contact-success-message">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="contact-error-message">
                                <strong>Please check the following:</strong>

                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">

                                <div class="col-md-6">

                                    <label for="name">
                                        Full Name
                                    </label>

                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Your Name"
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label for="email">
                                        Email Address
                                    </label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="Your Email"
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label for="phone">
                                        Phone Number
                                    </label>

                                    <input
                                        type="text"
                                        id="phone"
                                        name="phone"
                                        placeholder="Your Phone"
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label for="subject">
                                        Subject
                                    </label>

                                    <input
                                        type="text"
                                        id="subject"
                                        name="subject"
                                        placeholder="Subject"
                                        value="{{ isset($course) ? 'Enquiry - ' . ucwords(str_replace('-', ' ', $course)) : old('subject') }}"
                                    >

                                </div>


                                <div class="col-12">

                                    <label for="message">
                                        Message
                                    </label>

                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="6"
                                        placeholder="Write your message..."
                                    ></textarea>

                                </div>


                                <div class="col-12">

                                    <button type="submit" class="contact-submit-btn">
                                        Send Message
                                        <i class="bi bi-arrow-right"></i>
                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection