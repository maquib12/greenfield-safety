<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Greenfield Admin')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="admin-dashboard-page">

    <div class="admin-dashboard-wrapper">

        {{-- Sidebar --}}
        <aside class="admin-sidebar">

            <div class="admin-sidebar-logo">
                <img
                    src="{{ asset('images/GreenFieldLogo.jpeg') }}"
                    alt="Greenfield"
                >
            </div>

            <div class="admin-sidebar-title">
                Administration
            </div>

            <nav class="admin-sidebar-nav">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                >
                    <i class="bi bi-grid"></i>
                    Dashboard
                </a>

                <a
                    href="{{ route('admin.contact-messages') }}"
                    class="{{ request()->routeIs('admin.contact-messages') ? 'active' : '' }}"
                >
                    <i class="bi bi-envelope"></i>
                    Contact Messages
                </a>

                <a
                    href="{{ route('admin.certificates') }}"
                    class="{{ request()->routeIs('admin.certificates*') ? 'active' : '' }}"
                >
                    <i class="bi bi-patch-check"></i>
                    Certificates
                </a>

                <a
                    href="{{ route('admin.blogs') }}"
                    class="{{ request()->routeIs('admin.blogs*') ? 'active' : '' }}"
                >
                    <i class="bi bi-file-text"></i>
                    Blogs
                </a>
                <a href="{{ route('admin.certifications') }}"
                    class="{{ request()->routeIs('admin.certifications*') ? 'active' : '' }}">
                    <i class="bi bi-award"></i>
                    Certifications
                </a>

                <a
                    href="{{ route('admin.courses') }}"
                    class="{{ request()->routeIs('admin.courses*') ? 'active' : '' }}"
                >
                    <i class="bi bi-mortarboard"></i>
                    Courses
                </a>

            </nav>

            <div class="admin-sidebar-bottom">

                <a href="{{ route('home') }}" target="_blank">
                    <i class="bi bi-globe"></i>
                    View Website
                </a>

                <form
                    action="{{ route('admin.logout') }}"
                    method="POST"
                >
                    @csrf

                    <button type="submit">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </button>
                </form>

            </div>

        </aside>


        {{-- Main --}}
        <main class="admin-main">

            <header class="admin-topbar">

                <div>
                    <h1>
                        @yield('page-title', 'Dashboard')
                    </h1>

                    <p>
                        Greenfield Administration Panel
                    </p>
                </div>

                <div class="admin-user">
                    <i class="bi bi-person-circle"></i>
                    <span>Administrator</span>
                </div>

            </header>


            <section class="admin-content">

                @yield('content')

            </section>

        </main>

    </div>

</body>

</html>