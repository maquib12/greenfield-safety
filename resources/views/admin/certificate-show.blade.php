@extends('layouts.admin')

@section('title', 'Certificate Details | Greenfield Admin')
@section('page-title', 'Certificate Details')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Certificate Management</span>

            <h1>Certificate Details</h1>

            <p>
                View the complete details of this certificate.
            </p>
        </div>

        <a
            href="{{ route('admin.certificates') }}"
            class="admin-back-btn"
        >
            <i class="bi bi-arrow-left"></i>
            Back to Certificates
        </a>

    </div>


    <div class="admin-certificate-detail-card">

        {{-- Certificate Header --}}

        <div class="admin-certificate-detail-header">

            <div class="admin-certificate-icon">
                <i class="bi bi-patch-check-fill"></i>
            </div>

            <div>

                <span>Certificate Number</span>

                <h2>
                    {{ $certificate->certificate_number }}
                </h2>

            </div>

        </div>


        {{-- Certificate Information --}}

        <div class="admin-certificate-info-grid">

            <div class="admin-certificate-info-item">

                <span>
                    <i class="bi bi-person"></i>
                    Participant
                </span>

                <strong>
                    {{ $certificate->participant_name }}
                </strong>

            </div>


            <div class="admin-certificate-info-item">

                <span>
                    <i class="bi bi-book"></i>
                    Course
                </span>

                <strong>
                    {{ $certificate->course_name }}
                </strong>

            </div>


            <div class="admin-certificate-info-item">

                <span>
                    <i class="bi bi-calendar-check"></i>
                    Issue Date
                </span>

                <strong>
                    {{ $certificate->issue_date->format('d M Y') }}
                </strong>

            </div>


            <div class="admin-certificate-info-item">

                <span>
                    <i class="bi bi-calendar-x"></i>
                    Expiry Date
                </span>

                <strong>
                    {{ $certificate->expiry_date
                        ? $certificate->expiry_date->format('d M Y')
                        : 'No Expiry'
                    }}
                </strong>

            </div>


            <div class="admin-certificate-info-item">

                <span>
                    <i class="bi bi-shield-check"></i>
                    Status
                </span>

                <strong class="admin-certificate-status {{ $certificate->status }}">
                    {{ ucfirst($certificate->status) }}
                </strong>

            </div>


            <div class="admin-certificate-info-item">

                <span>
                    <i class="bi bi-clock"></i>
                    Created
                </span>

                <strong>
                    {{ $certificate->created_at->format('d M Y, h:i A') }}
                </strong>

            </div>

        </div>


        {{-- Actions --}}

        <div class="admin-certificate-detail-actions">

            <a
                href="{{ route('admin.certificates.edit', $certificate) }}"
                class="admin-form-submit-btn"
            >
                <i class="bi bi-pencil"></i>
                Edit Certificate
            </a>

            <a
                href="{{ route('certificate.verify') }}"
                target="_blank"
                class="admin-certificate-public-btn"
            >
                <i class="bi bi-box-arrow-up-right"></i>
                Public Verification
            </a>

            <a
                href="{{ route('admin.certificates') }}"
                class="admin-form-cancel-btn"
            >
                Back
            </a>

        </div>

    </div>

</div>

@endsection