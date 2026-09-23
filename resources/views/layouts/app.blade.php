<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/greenFieldLogo.jpeg') }}">

    <meta name="description" content="@yield('meta_description', 'Greenfield Training & Consultancy Safety provides professional safety training, HSE consultancy, risk assessment and workplace safety solutions.')">

    <meta name="keywords" content="@yield('meta_keywords', 'safety training, HSE consultancy, risk assessment, workplace safety, safety courses, UAE')">

    <meta name="robots" content="index, follow">

    <title>
        @yield('title', 'Greenfield Training & Consultancy Safety')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include('components.header')

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
    @include('components.floating-contact')

</body>

</html>