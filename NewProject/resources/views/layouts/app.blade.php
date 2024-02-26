<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
    <!-- Lien vers Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-7z4D5F4yUGF+qTz4hrB/49tgR4y2osNkM8tmEgAdky1ElGW3af2uDGy5YI5NBqJr4MrLW5oWQcPjy/EYkmQfVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Tous droits réservés.
    </footer>

    <script src="{{ mix('resources/js/app.js') }}"></script>
</body>
</html