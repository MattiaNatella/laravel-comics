<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>

    @include('partials.header')
    <main class="position-relative">
        @yield('content')
    </main>

    {{-- @include('partials.footer') --}}

</body>

</html>