@extends('layouts.app')

@section('content')

    <div class="w-full h-full flex justify-center items-center">
        <form action="{{ route('register') }}" method="POST"
              class="bg-white rounded-2xl shadow-lg p-6 w-full md:w-1/4 flex flex-col">
            @csrf
            <div class="flex flex-col justify-center items-center mb-8">
                <p class="font-bold text-2xl mb-4">Register a new Account</p>
                <p class="text-gray-700 text-sm font-semibold text-center">Get started with our app, just create an
                    account and enjoy the experience</p>
            </div>
            <div class="flex flex-col mb-6">
                <div class="flex flex-col mb-4">
                    <label for="name" class="text-gray-700 text-sm mb-1">Username</label>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="text"
                            name="name"
                            placeholder="username"
                            required
                            value="{{ old('name') }}"/>
                        <img src="/icons/user.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="email" class="text-gray-700 text-sm mb-1">Email</label>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="email"
                            name="email"
                            placeholder="name@mail.com"
                            required
                            value="{{ old('email') }}"/>
                        <img src="/icons/email.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="password" class="text-gray-700 text-sm mb-1">Password</label>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="password"
                            name="password"
                            placeholder="password"
                            required/>
                        <img src="/icons/lock.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="password_confirmation" class="text-gray-700 text-sm mb-1">Confirm password</label>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="password"
                            name="password_confirmation"
                            placeholder="confirm password"
                            required/>
                        <img src="/icons/lock.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
            </div>
            <div>
                <button
                    type="submit"
                    class="bg-gradient-to-t hover:opacity-90 from-[#3a81f5] to-[#2563eb] text-white w-full font-semibold py-2 rounded-md flex flex-row justify-center text-nowrap items-center">
                    Sign up
                </button>
            </div>

            @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100 mt-4">
                    @foreach ($errors->all() as $error)
                        <li class="my-2 text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </form>
    </div>

@endsection
