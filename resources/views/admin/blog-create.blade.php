@extends('layouts.admin')

@section('title', 'Add Blog | Greenfield Admin')
@section('page-title', 'Add Blog')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Blog Management</span>

            <h1>Add Blog</h1>

            <p>
                Create a new blog article for the Greenfield website.
            </p>
        </div>

        <a
            href="{{ route('admin.blogs') }}"
            class="admin-back-btn"
        >
            <i class="bi bi-arrow-left"></i>
            Back to Blogs
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
            action="{{ route('admin.blogs.store') }}"
            method="POST"
        >

            @csrf


            <div class="row g-4">


                {{-- Title --}}

                <div class="col-md-8">

                    <div class="admin-form-group">

                        <label for="title">
                            Blog Title <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Enter blog title"
                            required
                        >

                    </div>

                </div>


                {{-- Category --}}

                <div class="col-md-4">

                    <div class="admin-form-group">

                        <label for="category">
                            Category <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="category"
                            name="category"
                            value="{{ old('category') }}"
                            placeholder="e.g. Fire Safety"
                            required
                        >

                    </div>

                </div>


                {{-- Slug --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="slug">
                            Slug
                        </label>

                        <input
                            type="text"
                            id="slug"
                            name="slug"
                            value="{{ old('slug') }}"
                            placeholder="e.g. fire-safety-at-work"
                        >

                        <small class="admin-form-help">
                            Leave blank to generate automatically from the title.
                        </small>

                    </div>

                </div>


                {{-- Image --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="image">
                            Image URL
                        </label>

                        <input
                            type="text"
                            id="image"
                            name="image"
                            value="{{ old('image') }}"
                            placeholder="https://example.com/image.jpg"
                        >

                        <div
                            id="blog-image-preview"
                            class="admin-blog-image-preview"
                        >
                            <span>
                                <i class="bi bi-image"></i>
                                Image preview will appear here
                            </span>
                        </div>

                    </div>

                </div>


                {{-- Excerpt --}}

                <div class="col-12">

                    <div class="admin-form-group">

                        <label for="excerpt">
                            Short Description
                        </label>

                        <textarea
                            id="excerpt"
                            name="excerpt"
                            rows="4"
                            placeholder="Enter a short description for the blog listing..."
                        >{{ old('excerpt') }}</textarea>
                        <small class="admin-form-help">
                            <span id="excerpt-count">0</span> / 1000 characters
                        </small>

                    </div>

                </div>


                {{-- Content --}}

                <div class="col-12">

                    <div class="admin-form-group">

                        <label for="content">
                            Blog Content <span>*</span>
                        </label>

                        <textarea
                            id="content"
                            name="content"
                            rows="12"
                            placeholder="Write the full blog content here..."
                            required
                        >{{ old('content') }}</textarea>

                        <small class="admin-form-help">
                            Separate paragraphs with blank lines.
                            <span id="content-count">0</span> characters
                        </small>

                    </div>

                </div>

            </div>


            <div class="admin-form-actions">

                <a
                    href="{{ route('admin.blogs') }}"
                    class="admin-form-cancel-btn"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="admin-form-submit-btn"
                >
                    <i class="bi bi-check-lg"></i>
                    Create Blog
                </button>

            </div>

        </form>

    </div>

</div>

@endsection