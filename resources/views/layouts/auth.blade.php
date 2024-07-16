<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
</head>

<body>
    {{-- <img src="{{ Vite::asset('resources/images/login/bg.png') }}" loading="lazy" /> --}}
    <div class='w-full h-screen flex justify-center items-center md:px-5 px-4 pt-8'>
        @yield('content')
    </div>
    @vite('resources/js/app.js')
    @stack('body')
</body>

</html>
