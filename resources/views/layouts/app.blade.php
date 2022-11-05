<!doctype html>
<html lang="en">
<head>
    <title>Check In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 background-animate">
<nav class="bg-slate-700 px-2 py-0.5 fixed top-0 left-0 w-full">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <div class="w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 text-white text-lg rounded transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" aria-current="page">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
@livewireScripts
</body>
</html>
