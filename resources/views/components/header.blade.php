@php
    $isActive = request()->is('jobs');
@endphp

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Nero Works</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')">
                Home
            </x-nav-link>
            <x-nav-link url="/jobs" :active="request()->is('jobs')">
                All jobs
            </x-nav-link>
            @auth
                <x-nav-link url="jobs/saved" :active="request()->is('jobs/saved')">
                    Saved jobs
                </x-nav-link>
                {{-- <x-nav-link url="dashboard" :active="request()->is('dashboard')" icon="gauge">
                    Dashboard
                </x-nav-link> --}}
                <x-logout-button />
                <x-button-link url='/jobs/create' icon='edit'>
                    Create Job
                </x-button-link>
                <div class="flex items-center space-x-3">
                    <a href="{{ route('dashboard') }}">
                        @if (Auth::user()->avatar)
                            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-10 h-10 rounded-full"
                                alt="{{ Auth::user()->avatar }}">
                        @else
                            <img alt="{{ Auth::user()->avatar }}" src="{{ asset('storage/avatars/default-avatar.png') }}"
                                class="w-10 h-10 rounded-full">
                        @endif
                    </a>
                </div>
            @else
                <x-nav-link url="login" :active="request()->is('login')">
                    Login
                </x-nav-link>
                <x-nav-link url="register" :active="request()->is('register')">
                    Register
                </x-nav-link>

            @endauth
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/jobs" :mobile=true :active="request()->is('jobs')">All jobs</x-nav-link>
        @auth
            <x-nav-link url="jobs/saved" :mobile=true :active="request()->is('jobs/saved')">Saved jobs</x-nav-link>
            <x-nav-link url="dashboard" :active="request()->is('dashboard')" :mobile=true icon="gauge">Dashboard</x-nav-link>
            <x-logout-button />
            <x-button-link url='/jobs/create' icon='edit' :block="true">
                Create Job
            </x-button-link>
        @else
            <x-nav-link url="login" :mobile=true :active="request()->is('login')">Login</x-nav-link>
            <x-nav-link url="register" :mobile=true :active="request()->is('register')">Register</x-nav-link>
        @endauth
    </nav>
</header>
