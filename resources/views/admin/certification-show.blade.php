@extends('layouts.admin')

@section('title', 'Certification Details')

@section('content')

<div class="admin-page-header">
    <div>
        <h1>Certification Details</h1>
        <p>View certification and approval information.</p>
    </div>

    <a href="{{ route('admin.certifications') }}" class="admin-secondary-btn">
        <i class="bi bi-arrow-left"></i>
        Back to Certifications
    </a>
</div>

<div class="admin-form-card">

    <div class="admin-certification-detail">

        <div class="admin-certification-detail-image">
            <img
                src="{{ asset('storage/' . $certification->image) }}"
                alt="{{ $certification->name }}"
            >
        </div>

        <div class="admin-certification-detail-info">

            <div class="admin-detail-row">
                <span class="admin-detail-label">Name</span>
                <strong>{{ $certification->name }}</strong>
            </div>

            <div class="admin-detail-row">
                <span class="admin-detail-label">Slug</span>
                <span>{{ $certification->slug }}</span>
            </div>

            <div class="admin-detail-row">
                <span class="admin-detail-label">Display Order</span>
                <span>{{ $certification->display_order }}</span>
            </div>

            <div class="admin-detail-row">
                <span class="admin-detail-label">Status</span>

                @if($certification->is_active)
                    <span class="admin-status-badge active">
                        Active
                    </span>
                @else
                    <span class="admin-status-badge inactive">
                        Inactive
                    </span>
                @endif
            </div>

            <div class="admin-detail-row">
                <span class="admin-detail-label">Created</span>
                <span>
                    {{ $certification->created_at->format('d M Y, h:i A') }}
                </span>
            </div>

            <div class="admin-detail-row">
                <span class="admin-detail-label">Last Updated</span>
                <span>
                    {{ $certification->updated_at->format('d M Y, h:i A') }}
                </span>
            </div>

        </div>

    </div>

    <div class="admin-form-actions">

        <a
            href="{{ route('admin.certifications.edit', $certification) }}"
            class="admin-primary-btn"
        >
            <i class="bi bi-pencil"></i>
            Edit Certification
        </a>

        <a
            href="{{ route('admin.certifications') }}"
            class="admin-secondary-btn"
        >
            Back
        </a>

    </div>

</div>

@endsection