<x-app-layout title="Book Your Field" metaDescription="Book futsal, basketball, and tennis fields easily with Sportly.">

    <!-- HERO -->
    <main class="flex-1">
        <section class="max-w-6xl mx-auto px-6 pt-8" data-animate>
            <div class="relative rounded-xl overflow-hidden card-shadow bg-cover bg-center transform transition duration-500 hover:scale-102 hover:shadow-xl"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDU1knEBJBbdeALZnN2OJwr1S0W65r37SM3LSD4Rj6tOICms0AADqmwWY03wFG2_k2koXdtnkYcRiJPPBAY_uMVjGCdaX0TqqixVg8hgbeWy931NQ_oC2I904LBusuJhKnHkH3nXmBOiMzCgb5DQJFlqUPYiHIDcaorY0n8Eqma3hJwIIBek2Yzr95pg7YxRq7v20abTUAzik0MCymMYOAueCCWsyVqJ6tZtoMR3X-EQhhdBDGeakuBOdx6xIJXMnXsIRF_43kVMCM');">
                <div class="backdrop-blur-sm bg-gradient-to-b from-black/30 to-black/10 p-10 md:p-16 h-auto">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white drop-shadow-md">Book Your Next Game
                        with Ease</h1>
                    <p class="mt-3 text-sm md:text-base text-white/90">Find and book the best sports fields in your
                        area in just a few clicks.</p>

                    <!-- Search Card -->
                    <div class="mt-6">
                        <form
                            class="bg-white/90 dark:bg-gray-800/80 rounded-lg p-3 md:p-4 flex flex-col md:flex-row gap-3 items-center shadow-sm transform transition-all duration-300 hover:shadow-lg">
                            <div class="flex items-center gap-3 flex-1">
                                <div
                                    class="flex items-center gap-2 px-3 py-2 border rounded w-full md:max-w-sm bg-white dark:bg-gray-900 transition focus-within:shadow-outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1118 0z" />
                                    </svg>
                                    <input type="text" placeholder="Enter your location"
                                        class="w-full outline-none bg-transparent text-sm" />
                                </div>

                                <div
                                    class="flex items-center gap-2 px-3 py-2 border rounded bg-white dark:bg-gray-900 transition transform hover:scale-105">
                                    <input type="date" class="outline-none bg-transparent text-sm" />
                                </div>

                                <div
                                    class="flex items-center gap-2 px-3 py-2 border rounded bg-white dark:bg-gray-900 transition transform hover:scale-105">
                                    <input type="time" class="outline-none bg-transparent text-sm" />
                                </div>
                            </div>

                            <button
                                class="mt-2 md:mt-0 px-5 py-2 rounded bg-green-500 text-white font-semibold transition-transform transform hover:-translate-y-1 hover:shadow-lg">Book
                                Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Fields -->
        <section class="max-w-6xl mx-auto px-6 mt-12" data-animate>
            <div class="flex justify-between">
                <h3 class="text-lg font-semibold mb-4">Featured Fields</h3>
                <a href="{{ route('list-lapangan') }}" class="text-green-600 hover:text-green-500 underline">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach (['City Arena Futsal', 'Sunset Park Basketball', 'Maplewood Tennis Center'] as $i => $title)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg p-4 card-shadow group transform transition duration-300 hover:scale-105 hover:shadow-xl">
                        <div class="overflow-hidden rounded-md">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0C4yBkz--K-FWTRU3tlh8E4kvXgBkPP-6iunBa5z2QpGWGSq01BruTsDq4gyTlUYkxI-aot5uyfUqWmKEQ7xbJxlN-0EnBofQAhC6HEZIoSwZJGLBFlQBtrpfs9yHM57-4LlZDjSbp3yDYvVeYSU2NrtKL2ro790A3MRwQN-UoE2QLLlGZi6uGT8MMtX3sD9sDTG2gbL_S0SvHMXuGkYgES5auEK6IY7qPrmpav6SjPkoqSl58orreTWtbA6t7TbBtL3wg-vrMVM"
                                alt="{{ $title }}"
                                class="rounded-md w-full h-36 object-cover transition-transform duration-500 group-hover:scale-110" />
                        </div>
                        <div class="mt-3">
                            <h4 class="font-semibold text-sm">{{ $title }}</h4>
                            <p class="text-xs text-green-500">Downtown, Metropolis</p>
                            <div class="mt-3">
                                <a href="{{ route('detail') }}">
                                <button
                                    class="w-full py-2 rounded bg-green-100 dark:bg-gray-700 text-green-600 transition transform hover:-translate-y-1 hover:shadow-md">Book
                                    Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Testimonials -->
        <section class="max-w-6xl mx-auto px-6 mt-12" data-animate>
            <h3 class="text-lg font-semibold mb-4">What Our Users Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow transform transition hover:scale-105 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfXY2FTJlOHn72ZbVXS6MYD1WbThWRehfqVmvZSEzBiG0LqNeR7eEnnPFFtsjnSL0BTsl0kCaIjnvfefiiSudr1_Zhujawzr9ofqtC7LEI4mCZOLRsjNzoPdS2j0vgaF4vkZkM2P6su8zY7cNmvRDQLXxp4-GwO9PHH8vHUwZ7K4NVEu0xufbiBI4ldKYootk30mAty_aaM6TjjYLbtkIQBXMQy0dKAsMlHS74wGULsMcaz17PGLsMPVhd14eqvYG-TJCQIy0tGWI"
                            class="w-12 h-12 rounded-full transition-transform duration-300 hover:scale-110"
                            alt="">
                        <div>
                            <div class="font-semibold">John Doe</div>
                            <div class="text-xs text-green-500">Football Player</div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">"Booking a field has never been this
                        easy. Sportly's interface is intuitive and I found the perfect pitch in minutes."</p>
                </div>

                <div
                    class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow transform transition hover:scale-105 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfXY2FTJlOHn72ZbVXS6MYD1WbThWRehfqVmvZSEzBiG0LqNeR7eEnnPFFtsjnSL0BTsl0kCaIjnvfefiiSudr1_Zhujawzr9ofqtC7LEI4mCZOLRsjNzoPdS2j0vgaF4vkZkM2P6su8zY7cNmvRDQLXxp4-GwO9PHH8vHUwZ7K4NVEu0xufbiBI4ldKYootk30mAty_aaM6TjjYLbtkIQBXMQy0dKAsMlHS74wGULsMcaz17PGLsMPVhd14eqvYG-TJCQIy0tGWI"
                            class="w-12 h-12 rounded-full transition-transform duration-300 hover:scale-110"
                            alt="">
                        <div>
                            <div class="font-semibold">Jane Smith</div>
                            <div class="text-xs text-green-500">Tennis Enthusiast</div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">"A fantastic platform for sports
                        lovers. The variety of fields is great, and the booking process is seamless."</p>
                </div>

                <div
                    class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow transform transition hover:scale-105 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfXY2FTJlOHn72ZbVXS6MYD1WbThWRehfqVmvZSEzBiG0LqNeR7eEnnPFFtsjnSL0BTsl0kCaIjnvfefiiSudr1_Zhujawzr9ofqtC7LEI4mCZOLRsjNzoPdS2j0vgaF4vkZkM2P6su8zY7cNmvRDQLXxp4-GwO9PHH8vHUwZ7K4NVEu0xufbiBI4ldKYootk30mAty_aaM6TjjYLbtkIQBXMQy0dKAsMlHS74wGULsMcaz17PGLsMPVhd14eqvYG-TJCQIy0tGWI"
                            class="w-12 h-12 rounded-full transition-transform duration-300 hover:scale-110"
                            alt="">
                        <div>
                            <div class="font-semibold">Samuel Green</div>
                            <div class="text-xs text-green-500">Basketball Coach</div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">"As a coach, organizing practice
                        sessions is tough. Sportly simplifies finding and booking courts, saving me valuable time."
                    </p>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section class="max-w-6xl mx-auto px-6 mt-12" data-animate>
            <h3 class="text-lg font-semibold mb-6">Our Pricing Plans</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Pay-per-use -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow text-center transition transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="text-sm font-semibold">Pay-per-use</div>
                    <div class="mt-4 text-2xl font-extrabold text-green-600">$15<span
                            class="text-base font-medium">/hour</span></div>
                    <ul class="mt-4 text-left text-sm space-y-2 text-gray-600 dark:text-gray-300">
                        <li>Book any available field</li>
                        <li>Instant confirmation</li>
                        <li>Email support</li>
                    </ul>
                    <button
                        class="mt-6 w-full py-2 rounded bg-green-100 dark:bg-gray-700 text-green-600 transition transform hover:scale-105">Choose
                        Plan</button>
                </div>

                <!-- Monthly (popular) -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow border-2 border-green-300 transform md:-translate-y-4 relative transition hover:scale-105 hover:shadow-2xl">
                    <div
                        class="absolute -top-3 left-1/2 -translate-x-1/2 bg-green-500 text-white text-xs px-3 py-1 rounded-full hover-float">
                        Most Popular</div>
                    <div class="text-sm font-semibold">Monthly</div>
                    <div class="mt-4 text-2xl font-extrabold text-green-600">$50<span
                            class="text-base font-medium">/month</span></div>
                    <ul class="mt-4 text-left text-sm space-y-2 text-gray-600 dark:text-gray-300">
                        <li>10 hours of booking time</li>
                        <li>Priority booking</li>
                        <li>24/7 support</li>
                    </ul>
                    <button
                        class="mt-6 w-full py-2 rounded bg-green-500 text-white transition transform hover:-translate-y-1 hover:shadow-lg">Choose
                        Plan</button>
                </div>

                <!-- Annual -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow text-center transition transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="text-sm font-semibold">Annual</div>
                    <div class="mt-4 text-2xl font-extrabold text-green-600">$500<span
                            class="text-base font-medium">/year</span></div>
                    <ul class="mt-4 text-left text-sm space-y-2 text-gray-600 dark:text-gray-300">
                        <li>Unlimited booking</li>
                        <li>Exclusive access to premium fields</li>
                        <li>Dedicated account manager</li>
                    </ul>
                    <button
                        class="mt-6 w-full py-2 rounded bg-green-100 dark:bg-gray-700 text-green-600 transition transform hover:scale-105">Choose
                        Plan</button>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="max-w-6xl mx-auto px-6 mt-12 mb-12" data-animate>
            <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
            <form class="bg-white dark:bg-gray-800 rounded-lg p-6 card-shadow transition transform hover:shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Name"
                        class="border rounded px-4 py-2 bg-transparent outline-none transition focus:shadow-outline" />
                    <input type="email" placeholder="Email"
                        class="border rounded px-4 py-2 bg-transparent outline-none transition focus:shadow-outline" />
                    <input type="text" placeholder="Subject"
                        class="border rounded px-4 py-2 bg-transparent outline-none md:col-span-2 transition focus:shadow-outline" />
                    <textarea placeholder="Message"
                        class="border rounded px-4 py-2 bg-transparent outline-none md:col-span-2 h-36 transition focus:shadow-outline"></textarea>
                </div>
                <div class="mt-4">
                    <button
                        class="px-6 py-2 rounded bg-green-500 text-white transition transform hover:-translate-y-1 hover:shadow-lg">Send
                        Message</button>
                </div>
            </form>
        </section>
    </main>

</x-app-layout>
