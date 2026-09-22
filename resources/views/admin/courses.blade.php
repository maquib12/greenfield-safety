@extends('layouts.admin')

@section('title', 'Courses | Greenfield Admin')
@section('page-title', 'Courses')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Course Management</span>

            <h1>Courses</h1>

            <p>
                Manage training courses available on the Greenfield website.
            </p>
        </div>

        <a
            href="{{ route('admin.courses.create') }}"
            class="admin-add-btn"
        >
            <i class="bi bi-plus-lg"></i>
            Add Course
        </a>

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

                <h2>All Courses</h2>

                <span>
                    {{ $courses->count() }} course(s)
                </span>

            </div>

        </div>


        @if($courses->count())

            <div class="admin-table-wrapper">

                <table class="admin-data-table">

                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>

                    </thead>


                    <tbody>

                        @foreach($courses as $course)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <td>

                                    <strong>
                                        {{ $course->title }}
                                    </strong>

                                </td>


                                <td>
                                    {{ $course->category }}
                                </td>


                                <td>

                                    <span class="admin-blog-slug">
                                        {{ $course->slug }}
                                    </span>

                                </td>


                                <td>
                                    {{ $course->created_at->format('d M Y') }}
                                </td>


                                <td>

                                    <div class="admin-table-actions">

                                        <a href="{{ route('admin.courses.show', $course) }}"
                                        class="admin-view-btn"
                                        title="View Course">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.courses.edit', $course) }}"
                                        class="admin-edit-btn"
                                        title="Edit Course">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('admin.courses.destroy', $course) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this course?');"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="admin-delete-btn"
                                                    title="Delete Course">
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
                    <i class="bi bi-mortarboard"></i>
                </div>

                <h3>No Courses Yet</h3>

                <p>
                    Courses added through the admin panel
                    will appear here.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection