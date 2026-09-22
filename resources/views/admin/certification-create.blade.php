@extends('layouts.admin')

@section('title', 'Add Certification')

@section('content')

<div class="admin-page-header">
    <div>
        <h1>Add Certification</h1>
        <p>Add a new certification or approval to your website.</p>
    </div>

    <a href="{{ route('admin.certifications') }}" class="admin-secondary-btn">
        <i class="bi bi-arrow-left"></i>
        Back to Certifications
    </a>
</div>

<div class="admin-form-card">

    <form
        action="{{ route('admin.certifications.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

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
                    value="{{ old('name') }}"
                    placeholder="e.g. ISO 45001"
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
                    value="{{ old('slug') }}"
                    placeholder="e.g. iso-45001"
                >

                @error('slug')
                    <small class="admin-form-error">{{ $message }}</small>
                @enderror
            </div>

            {{-- Image --}}
            <div class="admin-form-group admin-form-full">
                <label for="image">
                    Certification Logo <span>*</span>
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                    required
                >

                <small class="admin-form-help">
                    JPG, JPEG, PNG or WEBP. Maximum size: 2MB.
                </small>

                @error('image')
                    <small class="admin-form-error">{{ $message }}</small>
                @enderror

                <div id="certification-image-preview" class="admin-image-preview">
                    <img src="" alt="Preview">
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
                    value="{{ old('display_order', 0) }}"
                    min="0"
                    placeholder="0"
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
                <label>
                    Status
                </label>

                <label class="admin-checkbox-label">
                    <input
                        type="checkbox"
                        name="is_active"
                        value="1"
                        {{ old('is_active', true) ? 'checked' : '' }}
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
                Save Certification
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