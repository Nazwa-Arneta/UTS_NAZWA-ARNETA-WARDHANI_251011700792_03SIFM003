<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'TERRAVA | Outdoor Gear Rental')</title>

    <meta
        name="description"
        content="@yield('meta_description', 'Sewa perlengkapan camping bersama TERRAVA.')">

    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>