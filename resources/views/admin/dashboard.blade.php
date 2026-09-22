@extends('layouts.admin')

@section('title', 'Dashboard | Greenfield Admin')

@section('page-title', 'Dashboard')

@section('content')

    <div class="row g-4">

        {{-- Messages --}}
        <div class="col-lg-4 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-envelope"></i>
                </div>

                <div>
                    <span>Total Messages</span>
                    <strong>{{ $contactCount }}</strong>
                </div>

            </div>

        </div>


        {{-- Certificates --}}
        <div class="col-lg-4 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-patch-check"></i>
                </div>

                <div>
                    <span>Total Certificates</span>
                    <strong>{{ $certificateCount }}</strong>
                </div>

            </div>

        </div>


        {{-- Blogs --}}
        <div class="col-lg-4 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-file-text"></i>
                </div>

                <div>
                    <span>Blog Posts</span>
                    <strong>{{ $blogCount }}</strong>
                </div>

            </div>

        </div>

    </div>


    <div class="admin-welcome-card">

        <div>

            <span class="section-eyebrow">
                Greenfield Administration
            </span>

            <h2>
                Manage Your Website
            </h2>

            <p>
                Use the administration panel to manage contact
                enquiries, certificates and website content.
            </p>

        </div>

    </div>

    <div class="admin-dashboard-grid">

        {{-- Recent Contact Messages --}}
        <div class="admin-dashboard-card">

            <div class="admin-dashboard-card-header">

                <div>
                    <h2>Recent Messages</h2>
                    <span>Latest contact enquiries</span>
                </div>

                <a href="{{ route('admin.contact-messages') }}">
                    View All
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            @if($recentMessages->count())

                <div class="admin-dashboard-list">

                    @foreach($recentMessages as $message)

                        <a
                            href="{{ route('admin.contact-messages.show', $message) }}"
                            class="admin-dashboard-list-item"
                        >

                            <div class="admin-dashboard-list-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div class="admin-dashboard-list-content">

                                <strong>
                                    {{ $message->name }}
                                </strong>

                                <span>
                                    {{ $message->subject ?: 'No subject' }}
                                </span>

                            </div>

                            <div class="admin-dashboard-list-date">
                                {{ $message->created_at->format('d M') }}
                            </div>

                        </a>

                    @endforeach

                </div>

            @else

                <div class="admin-dashboard-empty">
                    <i class="bi bi-envelope-open"></i>
                    <span>No contact messages yet.</span>
                </div>

            @endif

        </div>


        {{-- Recent Certificates --}}
        <div class="admin-dashboard-card">

            <div class="admin-dashboard-card-header">

                <div>
                    <h2>Recent Certificates</h2>
                    <span>Latest issued certificates</span>
                </div>

                <a href="{{ route('admin.certificates') }}">
                    View All
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            @if($recentCertificates->count())

                <div class="admin-dashboard-list">

                    @foreach($recentCertificates as $certificate)

                        <a
                            href="{{ route('admin.certificates.show', $certificate) }}"
                            class="admin-dashboard-list-item"
                        >

                            <div class="admin-dashboard-list-icon">
                                <i class="bi bi-patch-check"></i>
                            </div>

                            <div class="admin-dashboard-list-content">

                                <strong>
                                    {{ $certificate->participant_name }}
                                </strong>

                                <span>
                                    {{ $certificate->certificate_number }}
                                </span>

                            </div>

                            <div class="admin-dashboard-list-date">
                                {{ $certificate->created_at->format('d M') }}
                            </div>

                        </a>

                    @endforeach

                </div>

            @else

                <div class="admin-dashboard-empty">
                    <i class="bi bi-patch-check"></i>
                    <span>No certificates yet.</span>
                </div>

            @endif

        </div>

    </div>

    <div class="admin-dashboard-card admin-dashboard-recent-blogs">

        <div class="admin-dashboard-card-header">

            <div>
                <h2>Recent Blogs</h2>
                <span>Latest published articles</span>
            </div>

            <a href="{{ route('admin.blogs') }}">
                View All
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>


        @if($recentBlogs->count())

            <div class="admin-dashboard-blog-list">

                @foreach($recentBlogs as $blog)

                    <a
                        href="{{ route('admin.blogs.show', $blog) }}"
                        class="admin-dashboard-blog-item"
                    >

                        @if($blog->image)

                            <img
                                src="{{ $blog->image }}"
                                alt="{{ $blog->title }}"
                            >

                        @else

                            <div class="admin-dashboard-blog-placeholder">
                                <i class="bi bi-file-text"></i>
                            </div>

                        @endif


                        <div class="admin-dashboard-blog-content">

                            <strong>
                                {{ $blog->title }}
                            </strong>

                            <span>
                                {{ $blog->category }}
                            </span>

                        </div>


                        <div class="admin-dashboard-blog-date">
                            {{ $blog->created_at->format('d M Y') }}
                        </div>

                    </a>

                @endforeach

            </div>

        @else

            <div class="admin-dashboard-empty">

                <i class="bi bi-file-text"></i>

                <span>
                    No blogs yet.
                </span>

            </div>

        @endif

    </div>

@endsection