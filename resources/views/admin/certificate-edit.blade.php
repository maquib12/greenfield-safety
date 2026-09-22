@extends('layouts.admin')

@section('title', 'Edit Certificate | Greenfield Admin')
@section('page-title', 'Edit Certificate')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Certificate Management</span>

            <h1>Edit Certificate</h1>

            <p>
                Update the certificate details in the Greenfield verification system.
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


    @if($errors->any())

        <div class="admin-form-error">

            <i class="bi bi-exclamation-circle-fill"></i>

            <div>

                <strong>Please check the following:</strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        </div>

    @endif


    <div class="admin-form-card">

        <form
            action="{{ route('admin.certificates.update', $certificate) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <div class="row g-4">


                {{-- Certificate Number --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="certificate_number">
                            Certificate Number <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="certificate_number"
                            name="certificate_number"
                            value="{{ old('certificate_number', $certificate->certificate_number) }}"
                            placeholder="e.g. GTS-2026-0002"
                            required
                        >

                    </div>

                </div>


                {{-- Participant Name --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="participant_name">
                            Participant Name <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="participant_name"
                            name="participant_name"
                            value="{{ old('participant_name', $certificate->participant_name) }}"
                            placeholder="Enter participant name"
                            required
                        >

                    </div>

                </div>


                {{-- Course Name --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="course_name">
                            Course Name <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="course_name"
                            name="course_name"
                            value="{{ old('course_name', $certificate->course_name) }}"
                            placeholder="e.g. Fire Safety"
                            required
                        >

                    </div>

                </div>


                {{-- Status --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="status">
                            Status <span>*</span>
                        </label>

                        <select
                            id="status"
                            name="status"
                            required
                        >

                            <option value="">Select Status</option>

                            <option
                                value="valid"
                                {{ old('status', $certificate->status) === 'valid' ? 'selected' : '' }}
                            >
                                Valid
                            </option>

                            <option
                                value="expired"
                                {{ old('status', $certificate->status) === 'expired' ? 'selected' : '' }}
                            >
                                Expired
                            </option>

                            <option
                                value="revoked"
                                {{ old('status', $certificate->status) === 'revoked' ? 'selected' : '' }}
                            >
                                Revoked
                            </option>

                        </select>

                    </div>

                </div>


                {{-- Issue Date --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="issue_date">
                            Issue Date <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="issue_date"
                            name="issue_date"
                            value="{{ old('issue_date', $certificate->issue_date?->format('Y-m-d')) }}"
                            required
                        >

                    </div>

                </div>


                {{-- Expiry Date --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="expiry_date">
                            Expiry Date
                        </label>

                        <input
                            type="date"
                            id="expiry_date"
                            name="expiry_date"
                            value="{{ old('expiry_date', $certificate->expiry_date?->format('Y-m-d')) }}"
                        >

                    </div>

                </div>

            </div>


            {{-- Actions --}}

            <div class="admin-form-actions">

                <a
                    href="{{ route('admin.certificates') }}"
                    class="admin-form-cancel-btn"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="admin-form-submit-btn"
                >
                    <i class="bi bi-check-lg"></i>
                    Update Certificate
                </button>

            </div>

        </form>

    </div>

</div>

@endsection