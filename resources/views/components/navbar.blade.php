<nav class="navbar navbar-expand-lg main-navbar">

    <div class="container">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="navbar-brand">
            <img
                src="{{ asset('images/greenFieldLogo.jpeg') }}"
                alt="Greenfield Training & Consultancy Safety"
                class="site-logo"
            >
        </a>


        {{-- Mobile Toggle --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">


                {{-- HOME --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>
                </li>


                {{-- ABOUT --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}"
                    >
                        About
                    </a>
                </li>


                {{-- TRAINING --}}
                <li class="nav-item training-dropdown">
                    <a
                        class="nav-link {{ request()->routeIs('training') || request()->routeIs('course.details') ? 'active' : '' }}"
                        href="{{ route('training') }}"
                    >
                        Training
                        <i class="bi bi-chevron-down training-dropdown-icon"></i>
                    </a>

                    <div class="training-dropdown-menu">

                        @forelse($trainingCourses as $category => $courses)

                            <div class="training-dropdown-group">

                                <div class="training-dropdown-category">
                                    {{ $category }}
                                </div>

                                @foreach($courses as $course)

                                    <a
                                        href="{{ route('course.details', $course->slug) }}"
                                        class="training-dropdown-course"
                                    >
                                        {{ $course->short_title ?: $course->title }}
                                    </a>

                                @endforeach

                            </div>

                        @empty

                            <div class="training-dropdown-empty">
                                No training courses available.
                            </div>

                        @endforelse

                    </div>
                </li>


                {{-- CONSULTANCY --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('consultancy') ? 'active' : '' }}"
                        href="{{ route('consultancy') }}"
                    >
                        Consultancy
                    </a>
                </li>


                {{-- BLOGS --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('blogs') || request()->routeIs('blog.details') ? 'active' : '' }}"
                        href="{{ route('blogs') }}"
                    >
                        Blogs
                    </a>
                </li>


                {{-- CONTACT --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}"
                    >
                        Contact
                    </a>
                </li>


                {{-- VERIFY CERTIFICATE --}}
                <li class="nav-item ms-lg-3">

                    <a
                        href="{{ route('certificate.verify') }}"
                        class="btn btn-primary nav-btn"
                    >
                        Verify Certificate
                    </a>

                </li>


            </ul>

        </div>

    </div>

</nav>