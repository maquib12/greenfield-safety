@extends('layouts.app')

@section('title', 'Verify Certificate | Greenfield Training & Consultancy Safety')

@section('meta_description', 'Verify safety training certificates issued by Greenfield Training & Consultancy Safety using the certificate verification system.')

@section('meta_keywords', 'certificate verification UAE, safety certificate verification, training certificate verification, Greenfield certificate')

@section('content')

    {{-- VERIFY HERO --}}
    <section class="inner-page-hero certificate-hero">

        <div class="inner-page-hero-overlay"></div>

        <div class="container">

            <div class="inner-page-hero-content">

                <span>CERTIFICATE VERIFICATION</span>

                <h1>
                    Verify Your
                    <br>
                    Training Certificate
                </h1>

                <p>
                    Enter your certificate number below to verify the
                    authenticity and status of your training certificate.
                </p>

            </div>

        </div>

    </section>


    {{-- VERIFICATION SECTION --}}
    <section class="certificate-verify-section">

        <div class="container">

            <div class="certificate-verify-box">

                <div class="certificate-verify-icon">
                    <i class="bi bi-patch-check-fill"></i>
                </div>

                <span class="section-subtitle">
                    CERTIFICATE CHECK
                </span>

                <h2>
                    Verify Certificate
                </h2>

                <p>
                    Enter the certificate number exactly as it appears
                    on your certificate.
                </p>


                {{-- ERROR MESSAGE --}}
                @if(session('certificate_error'))

                    <div class="certificate-error-message">

                        <i class="bi bi-exclamation-circle-fill"></i>

                        <span>
                            {{ session('certificate_error') }}
                        </span>

                    </div>

                @endif


                {{-- VERIFICATION FORM --}}
                <form
                    action="{{ route('certificate.verify.submit') }}"
                    method="POST"
                    class="certificate-verify-form"
                >

                    @csrf

                    <label for="certificate_number">
                        Certificate Number
                    </label>

                    <div class="certificate-input-group">

                        <input
                            type="text"
                            id="certificate_number"
                            name="certificate_number"
                            value="{{ old('certificate_number') }}"
                            placeholder="e.g. GTS-2026-0001"
                        >

                        <button type="submit">
                            Verify
                            <i class="bi bi-arrow-right"></i>
                        </button>

                    </div>


                    @error('certificate_number')

                        <small class="certificate-validation-error">
                            {{ $message }}
                        </small>

                    @enderror

                </form>


                {{-- SUCCESS RESULT --}}
                @if(session('certificate'))

                    @php
                        $certificate = session('certificate');
                    @endphp

                    <div class="certificate-result">

                        <div class="certificate-result-header">

                            <i class="bi bi-patch-check-fill"></i>

                            <div>
                                <span>
                                    CERTIFICATE VERIFIED
                                </span>

                                <h3>
                                    Valid Certificate
                                </h3>
                            </div>

                        </div>


                        <div class="certificate-result-details">

                            <div>
                                <span>Certificate Number</span>

                                <strong>
                                    {{ $certificate->certificate_number }}
                                </strong>
                            </div>


                            <div>
                                <span>Participant Name</span>

                                <strong>
                                    {{ $certificate->participant_name }}
                                </strong>
                            </div>


                            <div>
                                <span>Course</span>

                                <strong>
                                    {{ $certificate->course_name }}
                                </strong>
                            </div>


                            <div>
                                <span>Issue Date</span>

                                <strong>
                                    {{ $certificate->issue_date->format('d M Y') }}
                                </strong>
                            </div>


                            @if($certificate->expiry_date)

                                <div>
                                    <span>Expiry Date</span>

                                    <strong>
                                        {{ $certificate->expiry_date->format('d M Y') }}
                                    </strong>
                                </div>

                            @endif

                        </div>

                    </div>

                @endif

            </div>

        </div>

    </section>

@endsection