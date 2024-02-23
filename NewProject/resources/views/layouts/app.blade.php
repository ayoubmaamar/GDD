<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    

</head>
<body>
    <header>
        <!-- Navigation bar here -->
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

