<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')

    
</head>

<body>

    @include('partials/header')

    @yield('content')

    @include('partials/footer')
    
</body>

</html>