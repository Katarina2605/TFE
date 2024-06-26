<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Application</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('styles')
</head>
<body>
<header>
    <!-- Header content -->
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Footer content -->
</footer>

<script src="{{ mix('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
