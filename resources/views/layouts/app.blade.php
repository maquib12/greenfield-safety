<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

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

</body>

</html>