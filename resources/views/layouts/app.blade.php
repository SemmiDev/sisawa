<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <noscript>
        <style>
            body {
                opacity: 1;
            }
        </style>
    </noscript>
    
    <!-- Pustaka Ikon Lucide -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.min.js"></script>

        <!-- Include SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/css/app.css')
    @stack('head')
</head>

<body style="opacity: 0; transition: opacity 500ms ease-in-out;">
    @yield('navbar')
    @stack('content')
    @vite('resources/js/app.js')
    
    <!-- Inisialisasi Ikon Lucide -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            lucide.createIcons();
        });
    </script>
    
    @stack('body')
</body>

</html>
