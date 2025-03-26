@extends('layouts.app')
@section('content')
    <div class="main flex flex-col my-12 w-full px-4 md:px-0 items-center max-w-5xl">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 text-center">Shorten your links with style</h1>
        <h3 class="text-gray-700 text-base md:text-lg font-semibold text-center">Transform long URLs into beautiful,
            memorable links</h3>
        <form action="{{ route('shorten') }}" method="POST" class="input_container mt-10 w-full flex justify-center">
            @csrf
            <div
                class="bg-white rounded-2xl shadow-lg p-6 md:p-8 box-border w-full md:w-[100%] flex flex-col md:flex-row justify-between gap-4">
                <input class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full md:w-[74%] p-3 outline-none"
                       placeholder="Paste your long URL here"
                       required
                       type="url"
                       name="url"/>
                <button type="submit"
                        class="bg-gradient-to-t hover:opacity-90 from-[#3a81f5] to-[#2563eb] text-white w-full md:w-[24%] font-semibold py-4 px-3 rounded-2xl flex flex-row justify-center text-nowrap items-center">
                    <img src="icons/magic-wand.png" class="h-4 mr-2">
                    Shorten URL
                </button>
            </div>
        </form>

        @if(session('short_url'))
            <div class="mt-5 text-lg font-semibold text-center flex flex-row">
                Shortened URL:
                <a href="{{ session('short_url') }}" target="_blank" id="shortenedUrl"
                                  class="text-blue-600 break-all ml-2">{{ session('short_url') }}</a>
                <img src="icons/copy.png" class="w-6 h-6 cursor-pointer ml-3 hover:opacity-90" onclick="function copyDivText() {
                    let link = document.getElementById('shortenedUrl').textContent;
                    navigator.clipboard.writeText(link)
                        .catch(err => console.error('Failed to copy: ', err));
                }
                copyDivText()"/>
            </div>
        @endif

        <div class="flex md:flex-row flex-col md:max-w-7xl w-full md:bottom-1/4 bottom-5 absolute justify-between">
            <div class="card bg-white shadow-lg flex flex-col p-6 rounded-2xl mx-auto md:max-w-[30%] md:m-0 w-full max-w-[85%] md:my-0 mb-4">
                <img src="icons/lightning.png" class="w-8 h-8 mb-4" />
                <p class="font-bold text-2xl mb-2">Lightning Fast</p>
                <p class="text-gray-700 text-xl">Shorten URLs instantly with our optimized system</p>
            </div>
            <div class="card bg-white shadow-lg flex flex-col p-6 rounded-2xl mx-auto md:max-w-[30%] md:m-0 w-full max-w-[85%] md:my-0 mb-4">
                <img src="icons/shield.png" class="w-8 h-8 mb-4" />
                <p class="font-bold text-2xl mb-2">Secure Links</p>
                <p class="text-gray-700 text-xl">Your URLs are safe and protected with us</p>
            </div>
            <div class="card bg-white shadow-lg flex flex-col p-6 rounded-2xl mx-auto md:max-w-[30%] md:m-0 w-full max-w-[85%]">
                <img src="icons/graph.png" class="w-8 h-8 mb-4" />
                <p class="font-bold text-2xl mb-2">Analytics</p>
                <p class="text-gray-700 text-xl">Track your link performance easily</p>
            </div>
        </div>
    </div>
@endsection
