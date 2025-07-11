<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Biblioteca Virtual</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles / Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    @livewireStyles
</head>
<body class="bg-gray-50 min-h-screen">

    @yield('content')

    @stack('scripts')

    @livewireScripts
</body>
</html>
