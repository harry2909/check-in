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
<div class="container">
    @yield('content')
</div>
@livewireScripts
</body>
</html>
