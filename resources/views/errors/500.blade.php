@extends('layouts.app')

@section('title', 'Something Went Wrong | Greenfield Training & Consultancy Safety')

@section('content')

<section class="error-page-section">

    <div class="container">

        <div class="error-page-content">

            <div class="error-page-icon">
                <i class="bi bi-shield-exclamation"></i>
            </div>

            <span class="section-eyebrow">
                Greenfield Training & Consultancy Safety
            </span>

            <h1>
                500
            </h1>

            <h2>
                Something Went Wrong
            </h2>

            <p>
                We’re sorry, but something unexpected happened.
                Please try again shortly or return to the homepage.
            </p>

            <div class="error-page-actions">

                <a
                    href="{{ route('home') }}"
                    class="error-page-primary-btn"
                >
                    <i class="bi bi-house"></i>
                    Back to Home
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="error-page-secondary-btn"
                >
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>

@endsection