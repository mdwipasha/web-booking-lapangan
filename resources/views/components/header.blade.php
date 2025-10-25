<header class="bg-transparent">
    <div class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-green-500 rounded flex items-center justify-center text-white font-bold hover:scale-105 transition">
                S
            </div>
            <span class="font-semibold text-lg tracking-tight">Sportly</span>
        </div>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="/" class="text-sm text-gray-700 dark:text-gray-200 hover:text-green-500 transition">Home</a>
            <a href="#" class="text-sm text-gray-700 dark:text-gray-200 hover:text-green-500 transition">Features</a>
            <a href="#" class="text-sm text-gray-700 dark:text-gray-200 hover:text-green-500 transition">Pricing</a>
            <a href="#" class="text-sm text-gray-700 dark:text-gray-200 hover:text-green-500 transition">Contact</a>
        </nav>

        <!-- Right Section -->
        <div class="flex items-center gap-3">
            <!-- Dark Mode Toggle -->
            <button id="darkToggle" aria-label="Toggle dark mode"
                class="p-2 rounded-md border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 hover:shadow-sm transition">
                <svg id="darkIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="moonPath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                </svg>
            </button>

            @auth
                <!-- Logged-in Dropdown (Desktop) -->
                <div x-data="{ open: false }" class="relative hidden md:block">
                    <button @click="open = !open" class="flex items-center gap-2 text-gray-700 dark:text-gray-200 font-medium">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg z-50">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Not logged-in (Desktop) -->
                <a href="{{ route('register') }}" class="hidden md:inline-block px-4 py-2 rounded bg-green-500 text-white hover:shadow-lg transition">Sign Up</a>
                <a href="{{ route('login') }}" class="hidden md:inline-block px-4 py-2 rounded bg-white dark:bg-gray-800 hover:shadow-md transition">Login</a>
            @endauth

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden p-2 rounded border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-6">
        <nav class="flex flex-col gap-3">
            <a href="/" class="text-sm transition hover:text-green-500 dark:text-gray-200">Home</a>
            <a href="#" class="text-sm transition hover:text-green-500 dark:text-gray-200">Features</a>
            <a href="#" class="text-sm transition hover:text-green-500 dark:text-gray-200">Pricing</a>
            <a href="#" class="text-sm transition hover:text-green-500 dark:text-gray-200">Contact</a>

            @auth
                <!-- Mobile User Section -->
                <div class="mt-4 border-t border-gray-200 dark:border-gray-700 pt-3">
                    <span class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-2">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-center px-3 py-2 rounded bg-red-500 text-white hover:bg-red-600 transition">Logout</button>
                    </form>
                </div>
            @else
                <!-- Mobile Login/SignUp -->
                <div class="flex gap-2 mt-4">
                    <a href="{{ route('register') }}" class="flex-1 text-center px-3 py-2 rounded bg-green-500 text-white hover:shadow-md transition">Sign Up</a>
                    <a href="{{ route('login') }}" class="flex-1 text-center px-3 py-2 rounded bg-white dark:bg-gray-800 hover:shadow-md transition">Login</a>
                </div>
            @endauth
        </nav>
    </div>
</header>