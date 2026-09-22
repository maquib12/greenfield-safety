@extends('layouts.admin')

@section('title', 'Edit Certification')

@section('content')

<div class="admin-page-header">
    <div>
        <h1>Edit Certification</h1>
        <p>Update certification details and logo.</p>
    </div>

    <a href="{{ route('admin.certifications') }}" class="admin-secondary-btn">
        <i class="bi bi-arrow-left"></i>
        Back to Certifications
    </a>
</div>

<div class="admin-form-card">

    <form
        action="{{ route('admin.certifications.update', $certification) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div class="admin-form-grid">

            {{-- Name --}}
            <div class="admin-form-group">
                <label for="name">
                    Certification Name <span>*</span>
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $certification->name) }}"
                    required
                >

                @error('name')
                    <small class="admin-form-error">{{ $message }}</small>
                @enderror
            </div>

            {{-- Slug --}}
            <div class="admin-form-group">
                <label for="slug">
                    Slug
                </label>

                <input
                    type="text"
                    id="slug"
                    name="slug"
                    value="{{ old('slug', $certification->slug) }}"
                >

                @error('slug')
                    <small class="admin-form-error">{{ $message }}</small>
                @enderror
            </div>

            {{-- Image --}}
            <div class="admin-form-group admin-form-full">
                <label for="image">
                    Certification Logo
                </label>

                @if($certification->image)
                    <div class="admin-current-image">
                        <img
                            src="{{ asset('storage/' . $certification->image) }}"
                            alt="{{ $certification->name }}"
                        >
                    </div>
                @endif

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small class="admin-form-help">
                    Leave empty to keep the current logo.
                    JPG, JPEG, PNG or WEBP. Maximum size: 2MB.
                </small>

                @error('image')
                    <small class="admin-form-error">{{ $message }}</small>
                @enderror

                <div id="certification-image-preview" class="admin-image-preview">
                    <img src="" alt="New Preview">
                </div>
            </div>

            {{-- Display Order --}}
            <div class="admin-form-group">
                <label for="display_order">
                    Display Order
                </label>

                <input
                    type="number"
                    id="display_order"
                    name="display_order"
                    value="{{ old('display_order', $certification->display_order) }}"
                    min="0"
                >

                <small class="admin-form-help">
                    Lower numbers appear first.
                </small>

                @error('display_order')
                    <small class="admin-form-error">{{ $message }}</small>
                @enderror
            </div>

            {{-- Status --}}
            <div class="admin-form-group">
                <label>Status</label>

                <label class="admin-checkbox-label">
                    <input
                        type="checkbox"
                        name="is_active"
                        value="1"
                        {{ old('is_active', $certification->is_active) ? 'checked' : '' }}
                    >

                    <span>Active</span>
                </label>

                <small class="admin-form-help">
                    Active certifications will be displayed on the website.
                </small>
            </div>

        </div>

        <div class="admin-form-actions">

            <a
                href="{{ route('admin.certifications') }}"
                class="admin-secondary-btn"
            >
                Cancel
            </a>

            <button type="submit" class="admin-primary-btn">
                <i class="bi bi-check-lg"></i>
                Update Certification
            </button>

        </div>

    </form>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const imageInput = document.getElementById('image');
    const preview = document.getElementById('certification-image-preview');
    const previewImage = preview.querySelector('img');

    imageInput.addEventListener('change', function () {

        const file = this.files[0];

        if (!file) {
            preview.style.display = 'none';
            previewImage.src = '';
            return;
        }

        const reader = new FileReader();

        reader.onload = function (event) {
            previewImage.src = event.target.result;
            preview.style.display = 'flex';
        };

        reader.readAsDataURL(file);
    });

});
</script>

@endsection