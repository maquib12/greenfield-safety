<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Greenfield Training & Consultancy Safety</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="admin-login-page">

    <div class="admin-login-wrapper">

        <div class="admin-login-card">

            <div class="admin-login-logo">
                <img
                    src="{{ asset('images/greenFieldLogo.jpeg') }}"
                    alt="Greenfield Training & Consultancy Safety"
                >
            </div>

            <div class="admin-login-heading">
                <h1>Admin Login</h1>

                <p>
                    Sign in to access the Greenfield administration panel.
                </p>
            </div>


            @if($errors->any())

                <div class="admin-login-error">

                    <i class="bi bi-exclamation-circle-fill"></i>

                    <div>
                        {{ $errors->first() }}
                    </div>

                </div>

            @endif


            <form
                action="{{ route('admin.login.submit') }}"
                method="POST"
            >

                @csrf

                <div class="admin-form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter admin email"
                        required
                    >

                </div>


                <div class="admin-form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter password"
                        required
                    >

                </div>


                <div class="admin-login-options">

                    <label class="admin-remember">

                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                        >

                        <span>Remember me</span>

                    </label>

                </div>


                <button
                    type="submit"
                    class="admin-login-btn"
                >
                    Sign In
                    <i class="bi bi-arrow-right"></i>
                </button>

            </form>


            <div class="admin-login-footer">

                <a href="{{ route('home') }}">
                    <i class="bi bi-arrow-left"></i>
                    Back to Website
                </a>

            </div>

        </div>

    </div>

</body>

</html>