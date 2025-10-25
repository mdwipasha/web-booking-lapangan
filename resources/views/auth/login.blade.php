<x-app-layout>
    <section class="min-h-[80vh] flex items-center justify-center bg-gray-50 dark:bg-gray-900 py-16 px-6">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition-all duration-300">
            <h1 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-100 mb-6">Welcome Back</h1>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-200" />
                    <x-text-input id="email"
                        class="block mt-1 w-full bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 focus:border-green-500 focus:ring-green-500 rounded-lg"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-200" />
                    <x-text-input id="password"
                        class="block mt-1 w-full bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 focus:border-green-500 focus:ring-green-500 rounded-lg"
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-green-600 hover:text-green-500 font-medium">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <x-primary-button
                        class="w-full justify-center bg-green-500 hover:bg-green-600 text-white rounded-lg py-2 text-sm font-semibold">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="text-center mt-4 text-sm text-gray-500 dark:text-gray-400">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-green-600 hover:text-green-500 font-medium">
                        {{ __('Sign up here') }}
                    </a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
