@extends('layouts.admin')

@section('title', 'Blog Details | Greenfield Admin')
@section('page-title', 'Blog Details')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Blog Management</span>

            <h1>Blog Details</h1>

            <p>
                View the complete details of this blog article.
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


    <div class="admin-blog-detail-card">

        @if($blog->image)

            <div class="admin-blog-detail-image">

                <img
                    src="{{ $blog->image }}"
                    alt="{{ $blog->title }}"
                >

            </div>

        @endif


        <div class="admin-blog-detail-content">

            <div class="admin-blog-detail-meta">

                <span class="admin-blog-category">
                    {{ $blog->category }}
                </span>

                <span>
                    <i class="bi bi-calendar3"></i>
                    {{ $blog->created_at->format('d M Y') }}
                </span>

            </div>


            <h2>
                {{ $blog->title }}
            </h2>


            <div class="admin-blog-detail-slug">

                <span>Slug:</span>

                {{ $blog->slug }}

            </div>


            @if($blog->excerpt)

                <div class="admin-blog-detail-excerpt">

                    {{ $blog->excerpt }}

                </div>

            @endif


            <div class="admin-blog-detail-body">

                @foreach(preg_split("/\R{2,}/", trim($blog->content)) as $paragraph)

                    <p>
                        {{ $paragraph }}
                    </p>

                @endforeach

            </div>

        </div>


        <div class="admin-blog-detail-actions">

            <div class="admin-blog-detail-actions-left">

                <a
                    href="{{ route('admin.blogs.edit', $blog) }}"
                    class="admin-form-submit-btn"
                >
                    <i class="bi bi-pencil"></i>
                    Edit Blog
                </a>

                <a
                    href="{{ route('blog.details', $blog->slug) }}"
                    target="_blank"
                    class="admin-certificate-public-btn"
                >
                    <i class="bi bi-box-arrow-up-right"></i>
                    View on Website
                </a>

            </div>


            <div class="admin-blog-detail-actions-right">

                <form
                    action="{{ route('admin.blogs.destroy', $blog) }}"
                    method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this blog?');"
                >

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="admin-blog-detail-delete-btn"
                    >
                        <i class="bi bi-trash"></i>
                        Delete Blog
                    </button>

                </form>


                <a
                    href="{{ route('admin.blogs') }}"
                    class="admin-form-cancel-btn"
                >
                    Back
                </a>

            </div>

        </div>

    </div>

</div>

@endsection