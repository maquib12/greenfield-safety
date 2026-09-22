@extends('layouts.admin')

@section('title', 'Blogs | Greenfield Admin')
@section('page-title', 'Blogs')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Greenfield Administration</span>

            <h1>Blogs</h1>

            <p>
                Manage blog articles published on the Greenfield website.
            </p>
        </div>

    </div>


    <div class="admin-table-card">

        @if(session('success'))

            <div class="admin-success-message">
                <i class="bi bi-check-circle-fill"></i>
                <span>{{ session('success') }}</span>
            </div>

        @endif


        <div class="admin-table-header">

            <div>

                <h2>All Blogs</h2>

                <span>
                    {{ $blogs->total() }} blog(s)
                </span>

            </div>


            <a
                href="{{ route('admin.blogs.create') }}"
                class="admin-add-btn"
            >
                <i class="bi bi-plus-lg"></i>
                Add Blog
            </a>

        </div>


        @if($blogs->count())

            <div class="admin-table-wrapper">
                <form
                    action="{{ route('admin.blogs') }}"
                    method="GET"
                    class="admin-blog-search"
                >
                    <div class="admin-blog-search-input">
                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            name="search"
                            value="{{ $search ?? '' }}"
                            placeholder="Search blogs by title or category..."
                        >
                    </div>

                    <button type="submit" class="admin-blog-search-btn">
                        Search
                    </button>

                    @if(!empty($search))
                        <a
                            href="{{ route('admin.blogs') }}"
                            class="admin-blog-search-clear"
                        >
                            Clear
                        </a>
                    @endif
                </form>

                <table class="admin-data-table">

                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>

                    </thead>


                    <tbody>

                        @foreach($blogs as $blog)

                            <tr>

                                <td>
                                    {{ $blogs->firstItem() + $loop->index }}
                                </td>


                                <td>

                                    @if($blog->image)

                                        <img
                                            src="{{ $blog->image }}"
                                            alt="{{ $blog->title }}"
                                            class="admin-blog-thumbnail"
                                        >

                                    @else

                                        <div class="admin-blog-no-image">
                                            <i class="bi bi-image"></i>
                                        </div>

                                    @endif

                                </td>


                                <td>

                                    <strong>
                                        {{ $blog->title }}
                                    </strong>

                                </td>


                                <td>
                                    {{ $blog->category }}
                                </td>


                                <td>

                                    <span class="admin-blog-slug">
                                        {{ $blog->slug }}
                                    </span>

                                </td>


                                <td>
                                    {{ $blog->created_at->format('d M Y') }}
                                </td>


                                <td>

                                    <div class="admin-table-actions">

                                        <a
                                            href="{{ route('admin.blogs.show', $blog) }}"
                                            class="admin-view-btn"
                                            title="View Blog"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>


                                        <a
                                            href="{{ route('admin.blogs.edit', $blog) }}"
                                            class="admin-edit-btn"
                                            title="Edit Blog"
                                        >
                                            <i class="bi bi-pencil"></i>
                                        </a>


                                        <form
                                            action="{{ route('admin.blogs.destroy', $blog) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this blog?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="admin-delete-btn"
                                                title="Delete Blog"
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
                    <i class="bi bi-file-text"></i>
                </div>

                <h3>No Blogs Yet</h3>

                <p>
                    Blogs added through the admin panel
                    will appear here.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection