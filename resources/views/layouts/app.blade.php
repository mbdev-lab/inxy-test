<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
