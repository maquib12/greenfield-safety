@extends('layouts.app')

@section('title', 'Page Not Found | Greenfield Training & Consultancy Safety')

@section('content')

<section class="error-page-section">

    <div class="container">

        <div class="error-page-content">

            <div class="error-page-icon">
                <i class="bi bi-exclamation-triangle"></i>
            </div>

            <span class="section-eyebrow">
                Greenfield Training & Consultancy Safety
            </span>

            <h1>
                404
            </h1>

            <h2>
                Page Not Found
            </h2>

            <p>
                Sorry, the page you are looking for could not be found.
                It may have been moved, removed, or the URL may be incorrect.
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