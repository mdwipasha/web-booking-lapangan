<x-app-layout>

    <section class="max-w-6xl mx-auto px-6 py-10">
        <div class="grid lg:grid-cols-3 gap-10">

            <!-- Left Section -->
            <div class="lg:col-span-2" x-data="{
                activeImage: 0,
                images: [
                    'https://placehold.co/900x400?text=Main+Field',
                    'https://placehold.co/900x400?text=Side+Court',
                    'https://placehold.co/900x400?text=Entrance',
                    'https://placehold.co/900x400?text=Parking+Area'
                ]
            }">

                <!-- Main Image -->
                <div class="relative">
                    <template x-for="(img, index) in images" :key="index">
                        <img x-show="activeImage === index" :src="img" alt="Sports Field"
                            class="rounded-2xl mb-3 w-full object-cover transition-all duration-300 ease-in-out">
                    </template>
                </div>

                <!-- Thumbnails -->
                <div class="flex gap-3 overflow-x-auto p-1">
                    <template x-for="(thumb, index) in images" :key="index">
                        <img :src="thumb" @click="activeImage = index"
                            :class="{ 'ring-2 ring-green-500': activeImage === index }"
                            class="w-24 h-16 object-cover rounded-lg cursor-pointer hover:opacity-80 transition-all duration-150">
                    </template>
                </div>

                <!-- Title -->
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-6 mb-2">
                    Grand Park Sports Field
                </h1>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    A premier, multi-purpose sports facility located in the heart of the city, offering a
                    state-of-the-art playing surface for a variety of sports.
                </p>

                <!-- Rating -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-5 mb-8">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <div class="flex items-center gap-3 mb-3 sm:mb-0">
                            <div class="text-3xl font-bold text-gray-900 dark:text-white">4.5</div>
                            <div>
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 {{ $i <= 4 ? 'text-yellow-400' : 'text-gray-300 dark:text-gray-600' }}"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.382 2.46a1 1 0 00-.364 1.118l1.287 3.967c.3.921-.755 1.688-1.54 1.118l-3.382-2.46a1 1 0 00-1.176 0l-3.382 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z" />
                                        </svg>
                                    @endfor
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400">250 reviews</p>
                            </div>
                        </div>

                        <!-- Rating bars -->
                        <div class="w-full sm:w-1/2 space-y-1">
                            @foreach ([5 => 50, 4 => 35, 3 => 10, 2 => 3, 1 => 2] as $star => $percent)
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-xs text-gray-600 dark:text-gray-400 w-4">{{ $star }}</span>
                                    <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full h-2 overflow-hidden">
                                        <div class="bg-green-500 h-2" style="width: {{ $percent }}%"></div>
                                    </div>
                                    <span
                                        class="text-xs text-gray-500 dark:text-gray-400 w-8 text-right">{{ $percent }}%</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Facilities -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Facilities</h2>
                <div class="flex flex-wrap gap-3 mb-10">
                    @foreach (['Restrooms', 'Parking', 'Lighting', 'Water Fountain'] as $facility)
                        <div
                            class="border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800">
                            {{ $facility }}
                        </div>
                    @endforeach
                </div>

                <!-- Availability -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Availability</h2>
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-5 w-full max-w-md">
                    <div class="flex items-center justify-between mb-3">
                        <button class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <span class="font-medium text-gray-700 dark:text-gray-300">October 2023</span>
                        <button class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Calendar grid -->
                    <div class="grid grid-cols-7 text-center text-sm font-medium text-gray-700 dark:text-gray-300">
                        @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                            <div class="py-1">{{ $day }}</div>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-7 text-center mt-2 text-sm text-gray-600 dark:text-gray-400">
                        @for ($i = 24; $i <= 30; $i++)
                            <div class="py-2 text-gray-400">{{ $i }}</div>
                        @endfor
                        @for ($i = 1; $i <= 31; $i++)
                            <div
                                class="py-2 rounded-full {{ $i == 10 ? 'bg-green-500 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer' }}">
                                {{ $i }}
                            </div>
                        @endfor
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="py-2 text-gray-400">{{ $i }}</div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Right Section (Booking Card) -->
            <div class="lg:col-span-1" x-data="bookingHandler({ fieldId: {{ $loop?->iteration ?? 1 }} })">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-5 sticky top-24">

                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Book this field</h3>

                    <div class="space-y-4">
                        <div>
                            <label class="text-sm font-medium text-gray-700 dark:text-gray-300 block mb-1">Date</label>
                            <input type="date"
                                class="w-full border border-gray-300 dark:border-gray-700 rounded-lg py-2 px-3 text-sm dark:bg-gray-900 dark:text-gray-200 focus:ring-2 focus:ring-green-500">
                        </div>
                        <div>
                            <label class="text-sm font-medium text-gray-700 dark:text-gray-300 block mb-1">Time</label>
                            <select
                                class="w-full border border-gray-300 dark:border-gray-700 rounded-lg py-2 px-3 text-sm dark:bg-gray-900 dark:text-gray-200 focus:ring-2 focus:ring-green-500">
                                <option>4:00 PM - 5:00 PM</option>
                                <option>5:00 PM - 6:00 PM</option>
                                <option>6:00 PM - 7:00 PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 dark:border-gray-700 my-5"></div>

                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Total</span>
                        <span class="text-lg font-bold text-green-600">$45.00</span>
                    </div>

                    <!-- Tombol booking -->
                    <button @click="pay"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2.5 rounded-lg transition relative"
                        :disabled="loading">
                        <template x-if="!loading">
                            <span>Book Now</span>
                        </template>
                        <template x-if="loading">
                            <span class="flex items-center justify-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                </svg>
                            </span>
                        </template>
                    </button>
                </div>
            </div>
        </div>

        <!-- Toast Notification -->
        <div id="toast" x-data="{ show: false, message: '', type: 'info' }" x-show="show" x-transition
            :class="{
                'bg-green-500': type === 'success',
                'bg-yellow-500': type === 'pending',
                'bg-red-500': type === 'error',
                'bg-gray-800': type === 'info'
            }"
            class="fixed top-5 right-5 text-white px-4 py-3 rounded-lg shadow-lg flex items-center gap-2"
            style="display: none;" x-text="message">
        </div>

    </section>

    <!-- Midtrans -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Payment Logic -->
    <script>
        document.addEventListener('alpine:init', () => {

            // ✅ Toast store
            Alpine.store('toast', {
                show(message, type = 'info') {
                    let retries = 0;

                    const tryShow = () => {
                        const toast = document.querySelector('#toast');
                        if (!toast || !toast.__x) {
                            if (retries++ < 5) {
                                console.warn(`⚠️ Toast belum siap (${retries}/5), retry...`);
                                return setTimeout(tryShow, 150);
                            }
                            return console.error("❌ Toast gagal muncul setelah 5x percobaan");
                        }

                        toast.__x.$data.show = true;
                        toast.__x.$data.message = message;
                        toast.__x.$data.type = type;

                        setTimeout(() => (toast.__x.$data.show = false), 3000);
                    };

                    tryShow();
                }
            });

            // ✅ Booking Handler
            Alpine.data('bookingHandler', ({
                fieldId
            }) => ({
                loading: false,

                async pay() {
                    this.loading = true;

                    try {
                        const response = await fetch(`/snap-token/${fieldId}`, {
                            redirect: "manual"
                        });

                        if (response.status === 401) {
                            const data = await response.json().catch(() => ({}));
                            window.location.href = data.redirect || '/login';
                            return;
                        }

                        const contentType = response.headers.get("content-type") || "";
                        if (!contentType.includes("application/json")) {
                            window.location.href = '/login';
                            return;
                        }

                        const data = await response.json();
                        if (!data.token) throw new Error("Token Midtrans tidak ditemukan");

                        window.snap.pay(data.token, {
                            onSuccess: (result) => {
                                Alpine.store('toast').show('✅ Pembayaran sukses!',
                                    'success');
                                console.log(result);
                            },
                            onPending: (result) => {
                                Alpine.store('toast').show('⌛ Menunggu pembayaran...',
                                    'pending');
                                console.log(result);
                            },
                            onError: (result) => {
                                Alpine.store('toast').show('❌ Pembayaran gagal.',
                                    'error');
                                console.error(result);
                            },
                            onClose: () => {
                                this.loading = false;
                                Alpine.store('toast').show(
                                    '⚠️ Popup ditutup sebelum selesai.', 'info');
                                console.log('Popup ditutup user');
                            }
                        });

                    } catch (err) {
                        console.error("Error detail:", err);
                        Alpine.store('toast').show('❌ Terjadi kesalahan saat membuat transaksi.',
                            'error');
                    } finally {
                        setTimeout(() => this.loading = false, 400);
                    }
                }
            }));
        });
    </script>

</x-app-layout>
