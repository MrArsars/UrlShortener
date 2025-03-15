@extends('layouts.app')

@section('content')

    <div class="w-full h-full flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-lg p-6 w-full md:w-1/4 flex flex-col">
            <div class="flex flex-col justify-center items-center mb-8">
                <p class="font-bold text-2xl mb-4">Register a new Account</p>
                <p class="text-gray-700 text-sm font-semibold text-center">Get started with our app, just create an
                    account and enjoy the experience</p>
            </div>
            <div class="flex flex-col mb-6">
                <div class="flex flex-col mb-4">
                    <p class="text-gray-700 text-sm mb-1">Username</p>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="text"
                            placeholder="username"/>
                        <img src="/icons/user.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
                <div class="flex flex-col mb-4">
                    <p class="text-gray-700 text-sm mb-1">Email</p>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="email"
                            placeholder="name@mail.com"/>
                        <img src="/icons/email.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
                <div class="flex flex-col mb-4">
                    <p class="text-gray-700 text-sm mb-1">Password</p>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="password"
                            placeholder="password"/>
                        <img src="/icons/lock.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm mb-1">Confirnm password</p>
                    <div class="relative">
                        <input
                            class="bg-[#f9fafb] border-[#e5e7eb] border rounded-md w-full p-2 pl-12 outline-none"
                            type="password"
                            placeholder="confirm password"/>
                        <img src="/icons/lock.png" class="w-6 h-6 absolute top-1/2 left-3 -translate-y-1/2">
                    </div>
                </div>
            </div>
            <div>
                <button
                    class="bg-gradient-to-t hover:opacity-90 from-[#3a81f5] to-[#2563eb] text-white w-full font-semibold py-2 rounded-md flex flex-row justify-center text-nowrap items-center">
                    Sign up
                </button>
            </div>
        </div>
    </div>

@endsection
