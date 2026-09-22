@extends('layouts.admin')

@section('title', $course->title . ' | Greenfield Admin')
@section('page-title', 'Course Details')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">
        <div>
            <span class="section-eyebrow">Course Management</span>
            <h1>{{ $course->title }}</h1>
            <p>View complete course information.</p>
        </div>

        <a href="{{ route('admin.courses') }}" class="admin-form-cancel-btn">
            <i class="bi bi-arrow-left"></i>
            Back to Courses
        </a>
    </div>


    <div class="admin-table-card">

        <div class="admin-course-detail">

            <div class="admin-course-detail-header">
                <div>
                    <span class="admin-course-category">
                        {{ $course->category }}
                    </span>

                    <h2>{{ $course->title }}</h2>

                    @if($course->short_title)
                        <p>{{ $course->short_title }}</p>
                    @endif
                </div>

                <div class="admin-course-detail-actions">
                    <a href="{{ route('admin.courses.edit', $course) }}"
                       class="admin-form-submit-btn">
                        <i class="bi bi-pencil"></i>
                        Edit Course
                    </a>
                </div>
            </div>


            <div class="admin-course-detail-grid">

                <div class="admin-course-detail-item">
                    <span>Category</span>
                    <strong>{{ $course->category }}</strong>
                </div>

                <div class="admin-course-detail-item">
                    <span>Slug</span>
                    <strong>{{ $course->slug }}</strong>
                </div>

                <div class="admin-course-detail-item">
                    <span>Created</span>
                    <strong>{{ $course->created_at->format('d M Y') }}</strong>
                </div>

                <div class="admin-course-detail-item">
                    <span>Last Updated</span>
                    <strong>{{ $course->updated_at->format('d M Y') }}</strong>
                </div>

            </div>


            @if($course->overview)
                <div class="admin-course-detail-section">
                    <h3>Overview</h3>
                    <p>{{ $course->overview }}</p>
                </div>
            @endif


            @if($course->description)
                <div class="admin-course-detail-section">
                    <h3>Description</h3>
                    <p>{{ $course->description }}</p>
                </div>
            @endif


            @if(is_array($course->topics) && count($course->topics))
                <div class="admin-course-detail-section">
                    <h3>Topics Covered</h3>

                    <ul class="admin-course-topics">
                        @foreach($course->topics as $topic)
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>{{ $topic }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @if($course->audience)
                <div class="admin-course-detail-section">
                    <h3>Target Audience</h3>
                    <p>{{ $course->audience }}</p>
                </div>
            @endif

        </div>

    </div>

</div>

@endsection