<footer class="bg-transparent border-t border-gray-100 dark:border-gray-800 mt-12">
    <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <div class="font-semibold">Sportly</div>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                The easiest way to book your favorite sports fields.
            </p>
        </div>

        <div class="text-sm text-gray-600 dark:text-gray-300">
            <div class="font-semibold mb-2">Quick Links</div>
            <ul class="space-y-1">
                <li class="hover:text-green-500 transition">About Us</li>
                <li class="hover:text-green-500 transition">FAQ</li>
                <li class="hover:text-green-500 transition">Terms of Service</li>
                <li class="hover:text-green-500 transition">Privacy Policy</li>
            </ul>
        </div>

        <div class="text-sm text-gray-600 dark:text-gray-300">
            <div class="font-semibold mb-2">Follow Us</div>
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:scale-110 transition">f</div>
                <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:scale-110 transition">t</div>
                <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:scale-110 transition">in</div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-4 text-xs text-gray-500 dark:text-gray-400">
        © {{ now()->year }} Sportly. All rights reserved.
    </div>
</footer>
