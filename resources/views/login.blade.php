@extends('partials.layouts.app')

@section('container')

<div class="py-32">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="w-full p-8 lg:pt-36 lg:px-8 lg:w-1/2">

            @if (session()->has('loginError'))
            <div class="bg-red-200 px-6 py-4 my-4 rounded-md text-lg flex items-center mx-auto max-w-lg">
                <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                    <path fill="currentColor"
                        d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                    </path>
                </svg>
                <span class="text-red-800"> {{ session('loginError') }} </span>
            </div>
            @endif

            <h2 class="text-2xl font-semibold text-gray-700 text-center">Welcome back!</h2>
            <p class="text-xl text-gray-600 text-center">Sign in here</p>

            {{-- Form --}}
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <div class="mt-4 relative">
                    <img src="{{ asset('assets/svg/user-svgrepo-com.svg') }}" alt="username"
                        class="w-5 absolute top-[18px] left-[18px]">
                    <input
                        class="bg-gray-50 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-full py-4 pl-12 pr-5 block w-full appearance-none"
                        type="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}" />
                    @error('email')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-4 relative">
                    <img src="{{ asset('assets/svg/key-svgrepo-com.svg') }}" alt="username"
                        class="w-5 absolute top-[18px] left-[18px]">
                    <input
                        class="bg-gray-50 b text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-full py-4 pl-12 pr-5 block w-full appearance-none"
                        type="password" name="password" placeholder="Password" />
                </div>

                <div class="mt-8">
                    <button
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
                </div>
            </form>
            {{-- End Form --}}

            <hr class="border-t border-gray-300 mt-6 mb-2">
            <div class="w-full text-center">
                <span class="text-xs text-gray-500 ">
                    No account?
                    <a href="{{ route('register.index') }}" class="text-blue-500">Sign up</a>
                </span>
            </div>

        </div>

        <div class="hidden lg:block lg:w-1/2 bg-cover">
            <img src="{{ asset('assets/img/image-ui-login.png') }}" alt="">
        </div>
    </div>
</div>

@endsection