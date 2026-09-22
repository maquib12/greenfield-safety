@extends('layouts.admin')

@section('title', 'Certificates | Greenfield Admin')

@section('page-title', 'Certificates')

@section('content')

<div class="admin-page-wrapper">

    {{-- Page Header --}}
    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">
                Greenfield Administration
            </span>

            <h1>Certificates</h1>

            <p>
                Manage certificates issued by Greenfield Training & Consultancy.
            </p>
        </div>

    </div>


    {{-- Certificates --}}
    <div class="admin-table-card">

        @if(session('success'))
            <div class="admin-success-message">
                <i class="bi bi-check-circle-fill"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif
        <div class="admin-table-header">

            <div>
                <h2>All Certificates</h2>

                <span>
                    {{ $certificates->count() }} certificate(s)
                </span>
            </div>

            <a href="{{ route('admin.certificates.create') }}" class="admin-add-btn">
                <i class="bi bi-plus-lg"></i>
                Add Certificate
            </a>

        </div>


        @if($certificates->count())

            <div class="admin-table-wrapper">

                <table class="admin-data-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Certificate No.</th>
                            <th>Participant</th>
                            <th>Course</th>
                            <th>Issue Date</th>
                            <th>Expiry Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($certificates as $certificate)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $certificate->certificate_number }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $certificate->participant_name }}
                                </td>

                                <td>
                                    {{ $certificate->course_name }}
                                </td>

                                <td>
                                    {{ $certificate->issue_date->format('d M Y') }}
                                </td>

                                <td>
                                    {{ $certificate->expiry_date
                                        ? $certificate->expiry_date->format('d M Y')
                                        : '—'
                                    }}
                                </td>

                                <td>
                                    {{ ucfirst($certificate->status) }}
                                </td>

                                <td>
                                    <div class="admin-table-actions">

                                        <a
                                            href="{{ route('admin.certificates.show', $certificate) }}"
                                            class="admin-view-btn"
                                            title="View Certificate"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a
                                            href="{{ route('admin.certificates.edit', $certificate) }}"
                                            class="admin-edit-btn"
                                            title="Edit Certificate"
                                        >
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form
                                            action="{{ route('admin.certificates.destroy', $certificate) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this certificate?');"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="admin-delete-btn"
                                                title="Delete Certificate"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="admin-empty-state">

                <div class="admin-empty-icon">
                    <i class="bi bi-patch-check"></i>
                </div>

                <h3>No Certificates Yet</h3>

                <p>
                    Certificates added through the admin panel
                    will appear here.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection