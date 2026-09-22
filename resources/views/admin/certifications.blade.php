@extends('layouts.admin')

@section('title', 'Certification Approvals')

@section('content')

<div class="admin-page-header">
    <div>
        <h1>Certification Approvals</h1>
        <p>Manage certifications and approvals displayed on the website.</p>
    </div>

    <a href="{{ route('admin.certifications.create') }}" class="admin-primary-btn">
        <i class="bi bi-plus-lg"></i>
        Add Certification
    </a>
</div>

@if(session('success'))
    <div class="admin-success-message">
        <i class="bi bi-check-circle-fill"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

<div class="admin-table-card">

    <div class="admin-table-header">
        <div>
            <h3>All Certifications</h3>
            <span>{{ $certifications->count() }} certifications</span>
        </div>
    </div>

    @if($certifications->count())

        <div class="admin-table-wrapper">
            <table class="admin-table">

                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category / Slug</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($certifications as $certification)

                        <tr>

                            <td>
                                <div class="admin-certification-image">
                                    <img
                                        src="{{ asset('storage/' . $certification->image) }}"
                                        alt="{{ $certification->name }}"
                                    >
                                </div>
                            </td>

                            <td>
                                <strong>{{ $certification->name }}</strong>
                            </td>

                            <td>
                                <span class="admin-muted-text">
                                    {{ $certification->slug }}
                                </span>
                            </td>

                            <td>
                                {{ $certification->display_order }}
                            </td>

                            <td>
                                @if($certification->is_active)
                                    <span class="admin-status-badge active">
                                        Active
                                    </span>
                                @else
                                    <span class="admin-status-badge inactive">
                                        Inactive
                                    </span>
                                @endif
                            </td>

                            <td>
                                <div class="admin-action-buttons">
                                    <a
                                        href="{{ route('admin.certifications.show', $certification) }}"
                                        class="admin-view-btn"
                                        title="View Certification"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a
                                        href="{{ route('admin.certifications.edit', $certification) }}"
                                        class="admin-edit-btn"
                                        title="Edit Certification"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form
                                        action="{{ route('admin.certifications.destroy', $certification) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this certification?');"
                                        style="display:inline;"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="admin-delete-btn"
                                            title="Delete Certification"
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
            <i class="bi bi-award"></i>
            <h3>No Certifications Found</h3>
            <p>Add your first certification approval to display it on the website.</p>

            <a href="{{ route('admin.certifications.create') }}" class="admin-primary-btn">
                <i class="bi bi-plus-lg"></i>
                Add Certification
            </a>
        </div>

    @endif

</div>

@endsection