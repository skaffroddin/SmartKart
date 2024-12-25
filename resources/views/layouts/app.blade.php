<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SmartKart')</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optionally, you can add custom CSS here -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS and Popper.js via CDN (optional, required for dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
