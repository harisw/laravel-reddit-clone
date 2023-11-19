<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
</head>
<body class="antialiased">
<header class="px-10 py-5">
    <nav class="flex justify-between">
        <div class="flex gap-10">
            <h3 class="text-3xl font-semibold tracking-wider">
                MyReddit
            </h3>
        </div>
        <div class="flex gap-8">
            @auth
                <a class="px-4 py-2 font-semibold bg-slate-200 hover:bg-slate-300 border-2 rounded-lg" href="/logout">Log
                    out</a>
            @endauth
            @guest
                <a class="text-white px-4 py-2 font-semibold bg-orange-500 hover:bg-orange-700 rounded-lg"
                   href="/login">Log
                    in</a>
                <a class="px-4 py-2 font-semibold bg-slate-500 text-white hover:bg-slate-700 rounded-lg"
                   href="/register">Register</a>
            @endguest
        </div>
    </nav>
</header>
<div
    class="relative sm:flex sm:justify-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @yield('content')
</div>
</body>
</html>
