<!doctype html>
<html lang="en">
<head>
    <title>Check In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 background-animate">
<nav class="bg-slate-700 px-2 py-2 fixed top-0 left-0 w-full">
    <div class="container flex flex-wrap justify-start items-center mx-auto w-full">
        <a href="{{ Auth::check() ? '/' : '/login' }}"
           class="block py-2 pr-4 pl-3 text-white text-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">{{ Auth::check() ? 'Dashboard' : 'Login' }}</a>
        @if(!Auth::check())
            <a href="/register"
               class="block py-2 pr-4 pl-3 text-white text-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Register</a>
        @else
            <a href="/logout"
               class="block py-2 pr-4 pl-3 text-white text-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Logout</a>
        @endif
        <div
            class="block py-2 pr-4 pl-3 text-white text-lg ml-auto"
            aria-current="page">{{ Carbon\Carbon::now()->toFormattedDateString() }}</div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
@livewireScripts
</body>
</html>
