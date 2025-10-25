<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? ' - Sportly' }}</title>

    {{-- SEO --}}
    <meta name="description" content="{{ $metaDescription ?? 'Book your next futsal, basketball, or tennis field easily with Sportly.' }}">
    <meta name="keywords" content="sport field booking, futsal, basketball court, tennis court, Sportly">
    <meta name="author" content="Sportly Team">

    {{-- OpenGraph (untuk share ke sosial media) --}}
    <meta property="og:title" content="{{ $title ?? 'Sportly - Book Your Field' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Book your next futsal, basketball, or tennis field easily with Sportly.' }}">
    {{-- <meta property="og:image" content="{{ asset('images/og-preview.png') }}"> --}}
    <meta property="og:type" content="website">

    {{-- TailwindCSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#38e07b",
                        "secondary": "#3498DB",
                        "background-light": "#f6f8f7",
                        "background-dark": "#122017",
                        "text-light": "#333333",
                        "text-dark": "#ffffff"
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    }
                },
            },
        }
    </script>
    <style>
        .card-shadow { box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06); }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 560ms cubic-bezier(.22, .9, .25, 1) both; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100 transition-colors duration-200 font-display">
    <div id="app" class="min-h-screen flex flex-col">

        {{-- Header --}}
        <x-header />

        {{-- Main Content --}}
        <main class="flex-1">
            {{ $slot }}
        </main>

        {{-- Footer --}}
        <x-footer />

    </div>

    {{-- Global JS --}}
    <script>
        (function() {
            const html = document.documentElement;
            const darkToggle = document.getElementById('darkToggle');
            const mobileBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');

            const stored = localStorage.getItem('sportly-dark');
            if (stored === 'true' || (!stored && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }

            darkToggle?.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('sportly-dark', html.classList.contains('dark') ? 'true' : 'false');
            });

            mobileBtn?.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            const animated = Array.from(document.querySelectorAll('[data-animate]'));
            animated.forEach((el, idx) => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(12px)';
                const delay = 120 * idx;
                setTimeout(() => {
                    el.classList.add('animate-fade-in-up');
                    el.style.opacity = '';
                    el.style.transform = '';
                }, delay);
            });
        })();
    </script>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}
