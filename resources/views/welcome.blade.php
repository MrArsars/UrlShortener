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
<body class="w-screen h-svh bg-gradient-to-b from-[#EFF6FF] to-white min-h-screen flex flex-col justify-start items-center">
<header class="py-6 px-4 md:py-8 md:px-8 flex justify-between w-full items-center max-w-5xl">
    <div class="logo flex items-center cursor-pointer">
        <img src="icons/link.png" class="logo_img h-7 mr-2">
        <div class="logo_title text-2xl md:text-3xl font-bold">Min.io</div>
    </div>
    <div class="navigation hidden md:flex flex-row">
        <div class="nav_button text-base hover:text-black text-gray-700 cursor-pointer mr-4">About</div>
        <div class="nav_button text-base hover:text-black text-gray-700 cursor-pointer mr-4">API</div>
        <div class="nav_button text-base hover:text-black text-gray-700 cursor-pointer">Pricing</div>
    </div>
</header>
<div class="main flex flex-col my-12 w-full px-4 md:px-0 items-center max-w-5xl">
    <h1 class="text-3xl md:text-4xl font-bold mb-2 text-center">Shorten your links with style</h1>
    <h3 class="text-gray-700 text-base md:text-lg font-semibold text-center">Transform long URLs into beautiful, memorable links</h3>
    <form action="{{ route('shorten') }}" method="POST" class="input_container mt-10 w-full flex justify-center">
        @csrf
        <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 box-border w-full md:w-[100%] flex flex-col md:flex-row justify-between gap-4">
            <input class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full md:w-[74%] p-3 outline-none"
                   placeholder="Paste your long URL here"
                   required
                   type="url"
                   name="url" />
            <button type="submit"
                    class="bg-gradient-to-t hover:opacity-90 from-[#3a81f5] to-[#2563eb] text-white w-full md:w-[24%] font-semibold py-4 px-3 rounded-2xl flex flex-row justify-center text-nowrap items-center">
                <img src="icons/magic-wand.png" class="h-4 mr-2">
                Shorten URL
            </button>
        </div>
    </form>

    @if(session('short_url'))
        <div class="mt-5 text-lg font-semibold text-center">
            Shortened URL: <a href="{{ session('short_url') }}" target="_blank"
                              class="text-blue-600 break-all">{{ session('short_url') }}</a>
        </div>
    @endif
</div>
</body>
</html>
