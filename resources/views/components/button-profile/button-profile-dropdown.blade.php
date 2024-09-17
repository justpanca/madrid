<!-- dropdown profile -->
<div {{ $attributes }} id="profile-dropdown" style="display: none;">
    <div class="flex items-center space-x-2 p-2">
        <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" class="h-9 w-9 rounded-full" />
        <div class="font-medium">
            {{ auth()->user()->name }}
        </div>
    </div>

    <div class="flex flex-col space-y-3 p-2">
        @can('IsAdmin')
        <a href="/dashboard" class="transition hover:text-blue-600">Dashboard</a>
        <a href="/" class="transition hover:text-blue-600">Homepage</a>
        @endcan
        @can('IsUser')
        <a href="#" class="transition hover:text-blue-600">Transactions</a>
        @endcan
    </div>

    <div class="p-2">
        <form action="{{ route('auth.logout') }}" method="post">
            @csrf
            <button class="flex items-center space-x-2 transition hover:text-blue-600">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                <div>Log Out</div>
            </button>
        </form>
    </div>
</div>