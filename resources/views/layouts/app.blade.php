<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Min.io</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="w-screen h-svh bg-gradient-to-b from-[#EFF6FF] to-white min-h-screen flex flex-col justify-start items-center">
<header class="py-6 px-4 md:py-8 md:px-8 flex justify-between w-full items-center max-w-5xl">
    <a class="logo flex items-center cursor-pointer" href="{{ url('/') }}">
        <img src="icons/link.png" class="logo_img h-7 mr-2">
        <div class="logo_title text-2xl md:text-3xl font-bold">Min.io</div>
    </a>
    <div class="navigation hidden md:flex flex-row">
        @guest
            <a class="nav_button text-base hover:text-black text-gray-700 cursor-pointer mr-4" href="{{url('/login')}}">Login</a>
            <a class="nav_button text-base hover:text-black text-gray-700 cursor-pointer mr-4"
               href="{{url('/register')}}">Register</a>
        @endguest
        
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav_button text-base hover:text-black text-gray-700 cursor-pointer">Logout
                </button>
            </form>
        @endauth
    </div>
</header>
@yield('content')
</body>
</html>
