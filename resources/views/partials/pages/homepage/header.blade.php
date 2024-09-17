<header id="header" class="bg-white">

    <nav
        class="relative px-4 py-2 flex justify-between items-center bg-white sm:justify-around lg:justify-between lg:px-20 2xl:justify-around">

        {{-- Logo --}}
        <a class="text-2xl font-bold text-violet-600" href="/">
            Real Madrid
        </a>

        {{-- Hamburger menu --}}
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-violet-600 p-1" id="navbar_burger">
                <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Hamburger menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

        {{-- Search bar --}}
        <ul
            class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:items-center lg:w-auto lg:space-x-6">

            <li>
                <div class="relative text-gray-600">
                    <input
                        class="border border-gray-300 placeholder-current h-10 px-5 pr-10 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search">

                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>

                </div>
            </li>
        </ul>

        {{-- Container --}}
        <div class="hidden lg:flex">

            {{-- Cart button --}}
            <a href="{{ route('cart.index') }}" id="cart-toggle"
                class="hidden lg:inline-block lg:ml-auto py-1.5 px-3 m-1 text-center rounded-md hover:bg-gray-100">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

            </a>

            <span class="border-r border-gray-300 rounded mx-7 my-3"></span>

            {{-- @if (Route::currentRouteName() != 'register.index' && Route::currentRouteName() != 'login.index') --}}
            @if(auth()->check())
            {{-- button profile --}}
            <x-button-profile.dropdown-profile class="absolute right-10 2xl:right-96 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md
            z-50" />
            @else

            {{-- Sign up button --}}
            <a class="py-1.5 px-3 m-1 text-center border border-violet-700 rounded-md text-violet-700  hover:bg-gray-100 hidden lg:inline-block"
                href="{{ route('register.index') }}">
                Sign Up
            </a>

            {{-- Sign In Button --}}
            <a href="{{ route('auth.index') }}"
                class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 hidden lg:block">
                Sign in
            </a>
            @endif
            {{-- @endif --}}
        </div>

    </nav>
</header>