<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
