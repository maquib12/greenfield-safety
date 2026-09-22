@extends('layouts.admin')

@section('title', 'Add Course | Greenfield Admin')
@section('page-title', 'Add Course')

@section('content')

<div class="admin-page-wrapper">

    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">Course Management</span>

            <h1>Add Course</h1>

            <p>
                Create a new training course for the Greenfield website.
            </p>
        </div>

        <a
            href="{{ route('admin.courses') }}"
            class="admin-back-btn"
        >
            <i class="bi bi-arrow-left"></i>
            Back to Courses
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
            action="{{ route('admin.courses.store') }}"
            method="POST"
        >

            @csrf


            <div class="row g-4">


                {{-- Title --}}

                <div class="col-md-8">

                    <div class="admin-form-group">

                        <label for="title">
                            Course Title <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Enter course title"
                            required
                        >

                    </div>

                </div>


                {{-- Short Title --}}

                <div class="col-md-4">

                    <div class="admin-form-group">

                        <label for="short_title">
                            Short Title
                        </label>

                        <input
                            type="text"
                            id="short_title"
                            name="short_title"
                            value="{{ old('short_title') }}"
                            placeholder="e.g. Fire Safety"
                        >

                    </div>

                </div>


                {{-- Category --}}

                <div class="col-md-6">

                    <div class="admin-form-group">

                        <label for="category">
                            Category <span>*</span>
                        </label>

                        <select
                            id="category"
                            name="category"
                            required
                        >
                            <option value="">Select category</option>

                            <option
                                value="Health & Safety"
                                {{ old('category') === 'Health & Safety' ? 'selected' : '' }}
                            >
                                Health & Safety
                            </option>

                            <option
                                value="Highfield"
                                {{ old('category') === 'Highfield' ? 'selected' : '' }}
                            >
                                Highfield
                            </option>

                            <option
                                value="PASMA"
                                {{ old('category') === 'PASMA' ? 'selected' : '' }}
                            >
                                PASMA
                            </option>

                            <option
                                value="IPAF"
                                {{ old('category') === 'IPAF' ? 'selected' : '' }}
                            >
                                IPAF
                            </option>

                        </select>

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
                            placeholder="e.g. fire-safety"
                        >

                        <small class="admin-form-help">
                            Leave blank to generate automatically from the title.
                        </small>

                    </div>

                </div>


                {{-- Overview --}}

                <div class="col-12">

                    <div class="admin-form-group">

                        <label for="overview">
                            Overview
                        </label>

                        <textarea
                            id="overview"
                            name="overview"
                            rows="4"
                            placeholder="Enter a short course overview..."
                        >{{ old('overview') }}</textarea>

                    </div>

                </div>


                {{-- Description --}}

                <div class="col-12">

                    <div class="admin-form-group">

                        <label for="description">
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="6"
                            placeholder="Enter the complete course description..."
                        >{{ old('description') }}</textarea>

                    </div>

                </div>


                {{-- Topics --}}

                <div class="col-md-7">

                    <div class="admin-form-group">

                        <label for="topics">
                            Course Topics
                        </label>

                        <textarea
                            id="topics"
                            name="topics"
                            rows="8"
                            placeholder="Enter one topic per line..."
                        >{{ old('topics') }}</textarea>

                        <small class="admin-form-help">
                            Enter each topic on a separate line.
                        </small>

                    </div>

                </div>


                {{-- Audience --}}

                <div class="col-md-5">

                    <div class="admin-form-group">

                        <label for="audience">
                            Target Audience
                        </label>

                        <textarea
                            id="audience"
                            name="audience"
                            rows="8"
                            placeholder="Describe who this course is intended for..."
                        >{{ old('audience') }}</textarea>

                    </div>

                </div>

            </div>


            <div class="admin-form-actions">

                <a
                    href="{{ route('admin.courses') }}"
                    class="admin-form-cancel-btn"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="admin-form-submit-btn"
                >
                    <i class="bi bi-check-lg"></i>
                    Create Course
                </button>

            </div>

        </form>

    </div>

</div>

@endsection