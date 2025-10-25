<x-app-layout>
    <section class="min-h-[80vh] flex items-center justify-center bg-gray-50 dark:bg-gray-900 py-16 px-6">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition-all duration-300">
            <h1 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-100 mb-6">Create Your Account</h1>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" class="text-gray-700 dark:text-gray-200" />
                    <x-text-input id="name"
                        class="block mt-1 w-full bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 focus:border-green-500 focus:ring-green-500 rounded-lg"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-200" />
                    <x-text-input id="email"
                        class="block mt-1 w-full bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 focus:border-green-500 focus:ring-green-500 rounded-lg"
                        type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-200" />
                    <x-text-input id="password"
                        class="block mt-1 w-full bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 focus:border-green-500 focus:ring-green-500 rounded-lg"
                        type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                        class="text-gray-700 dark:text-gray-200" />
                    <x-text-input id="password_confirmation"
                        class="block mt-1 w-full bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 focus:border-green-500 focus:ring-green-500 rounded-lg"
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <div>
                    <x-primary-button
                        class="w-full justify-center bg-green-500 hover:bg-green-600 text-white rounded-lg py-2 text-sm font-semibold">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <div class="text-center mt-4 text-sm text-gray-500 dark:text-gray-400">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="text-green-600 hover:text-green-500 font-medium">
                        {{ __('Log in here') }}
                    </a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
