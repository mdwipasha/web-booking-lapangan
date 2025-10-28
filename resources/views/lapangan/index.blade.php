<x-app-layout>
    <section class="max-w-6xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white">
                Find and Book Your Perfect Sports Field
            </h1>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Search for available fields by location, sport, date, and price.
            </p>
        </div>

        <!-- Search Filters -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4 mb-8">
            <div class="flex flex-col md:flex-row items-center gap-3">
                <div class="relative flex-1 w-full">
                    <input type="text" placeholder="Location (e.g., 'Downtown, Metro City')" 
                           class="w-full border border-gray-300 dark:border-gray-700 rounded-xl py-3 px-10 text-sm focus:ring-2 focus:ring-green-500 focus:outline-none dark:bg-gray-900 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1016.65 16.65z" />
                    </svg>
                </div>

                <select class="border border-gray-300 dark:border-gray-700 rounded-xl py-3 px-4 text-sm focus:ring-2 focus:ring-green-500 focus:outline-none dark:bg-gray-900 dark:text-gray-200">
                    <option>Sport Type</option>
                    <option>Football</option>
                    <option>Basketball</option>
                    <option>Tennis</option>
                </select>

                <div class="relative">
                    <input type="date" class="border border-gray-300 dark:border-gray-700 rounded-xl py-3 px-4 text-sm focus:ring-2 focus:ring-green-500 focus:outline-none dark:bg-gray-900 dark:text-gray-200">
                </div>

                <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl w-full md:w-auto transition">
                    Search
                </button>
            </div>

            <!-- Price Range -->
            <div class="mt-6">
                <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Price Range</label>
                <input type="range" min="0" max="200" value="100" class="w-full accent-green-500 mt-2">
                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                    <span>$0</span>
                    <span>$200</span>
                </div>
            </div>
        </div>

        <!-- Results Info -->
        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Showing 24 results</p>

        <!-- Grid of Fields -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['City Sports Complex - Field A', 'Downtown, Metro City', '$50', 4.5, 'https://placehold.co/600x400?text=Field+1'],
                ['Victory Arena - Court 2', 'Uptown District', '$60', 4.8, 'https://placehold.co/600x400?text=Field+2'],
                ['Greenfield Pitch', 'West Suburbs', '$45', 4.2, 'https://placehold.co/600x400?text=Field+3'],
                ['Metro Tennis Club - Court 1', 'Financial District', '$70', 4.9, 'https://placehold.co/600x400?text=Field+4'],
                ['Riverside Sports Ground', 'Riverside Area', '$55', 4.6, 'https://placehold.co/600x400?text=Field+5'],
                ['Highland Basketball Court', 'The Highlands', '$65', 4.7, 'https://placehold.co/600x400?text=Field+6'],
            ] as $field)
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden">
                    <div class="relative">
                        <img src="{{ $field[4] }}" alt="{{ $field[0] }}" class="w-full h-40 object-cover">
                        <div class="absolute top-2 right-2 bg-white dark:bg-gray-900 rounded-full px-2 py-1 text-xs flex items-center gap-1 shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.382 2.46a1 1 0 00-.364 1.118l1.287 3.967c.3.921-.755 1.688-1.54 1.118l-3.382-2.46a1 1 0 00-1.176 0l-3.382 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/>
                            </svg>
                            <span>{{ $field[3] }}</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-white text-sm mb-1">{{ $field[0] }}</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 11c0 1.657-1.343 3-3 3S6 12.657 6 11s1.343-3 3-3 3 1.343 3 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 11c0 1.657 1.343 3 3 3s3-1.343 3-3-1.343-3-3-3-3 1.343-3 3z" />
                            </svg>
                            {{ $field[1] }}
                        </p>
                        <p class="font-semibold text-green-500 text-sm mb-3">{{ $field[2] }}<span class="text-gray-500 dark:text-gray-400 text-xs">/hr</span></p>
                        <a href="{{ route('detail') }}">
                            <button class="w-full bg-green-500 hover:bg-green-600 text-white text-sm font-medium py-2 rounded-lg transition">Book Now</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
