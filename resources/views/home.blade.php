@use('App\Enums\StatusSeries')

<x-layouts.app>
    <!-- Header -->

    <!-- Hero Section -->
    <section class="bg-hero py-48 h-svh">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <div class="bg-gradient-to-r from-purple-900 to-pink-700 inline-block rounded-xl px-3 py-1 mb-4 text-sm">
                    <i class="fas fa-shield-alt mr-2"></i> Website Resmi Anichin
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Anichin - Nonton Donghua Subtitle Indonesia Terbaru</h1>
                <p class="text-xl mb-8">Website asli ANICHIN hanya ini, selain website ini adalah website palsu. Bookmark
                    juga <span class="text-accent font-semibold">ANICHIN.CARE</span> sebagai direct ke website ANICHIN
                    asli</p>
                <a href="https://anichin.care/"
                    class="inline-block bg-accent hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full transition-all transform hover:scale-105">
                    Kunjungi Situs Resmi <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Donghua -->
    <section class="py-16 bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Series Pilihan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse ($items as $item)
                    <x-card :$item></x-card>
                @empty
                    No Items
                @endforelse
            </div>
        </div>
    </section>

    <!-- Today's Most Popular -->
    {{-- <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="section-title">Terpopuler Hari Ini</h2>
                <a href="#" class="text-accent hover:text-purple-400 flex items-center">
                    Lihat Semua <i class="fas fa-chevron-right ml-2 text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1543536448-1e76fc2795bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80"
                            alt="Tales of Herding Gods" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-2 right-2 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            EP 37</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Tales of Herding Gods</h3>
                        <p class="text-sm text-gray-400 mb-4">Tales of Herding Gods Episode 37 Subtitle Indonesia</p>
                        <a href="#"
                            class="block bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg text-center transition-colors">
                            Tonton Sekarang
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1558901357-ca41e027e43a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80"
                            alt="BTTH SEASON 5" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-2 right-2 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            EP 153</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">BTTH SEASON 5</h3>
                        <p class="text-sm text-gray-400 mb-4">BTTH SEASON 5 EPISODE 153 SUBTITLE INDONESIA</p>
                        <a href="#"
                            class="block bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg text-center transition-colors">
                            Tonton Sekarang
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80"
                            alt="Legend of Martial Immortal" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-2 right-2 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            EP 121</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Legend of Martial Immortal</h3>
                        <p class="text-sm text-gray-400 mb-4">Legend of Martial Immortal Episode 121 Subtitle Indonesia
                        </p>
                        <a href="#"
                            class="block bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg text-center transition-colors">
                            Tonton Sekarang
                        </a>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1511882150382-421056c89033?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80"
                            alt="Lord of The Mysteries" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-2 right-2 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            EP 02</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Lord of The Mysteries</h3>
                        <p class="text-sm text-gray-400 mb-4">Lord of The Mysteries Episode 02 Subtitle Indonesia</p>
                        <a href="#"
                            class="block bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg text-center transition-colors">
                            Tonton Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Latest Releases -->
    {{-- <section class="py-16 bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="section-title">Rilisan Terbaru</h2>
                <a href="#" class="text-accent hover:text-purple-400 flex items-center">
                    Lihat Semua <i class="fas fa-chevron-right ml-2 text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($items as $item)
                    <div class="bg-gray-900 rounded-xl overflow-hidden card-hover">
                        <div class="relative">
                            <img src="{{ $item->getMedia('posters')[0]->getUrl() }}" alt="The Emperor of Myriad Realms"
                                class="w-full h-40 object-cover">
                            <div
                                class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                {{ $item->status->getLabel() }}</div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-gray-400">Movie</span>
                                <span class="text-sm bg-purple-600 rounded-full px-2">{{ $item->countries }}</span>
                            </div>
                            <h3 class="font-bold mb-1">{{ $item->name }}</h3>
                            <p class="text-sm text-gray-400">Episode 230 Tamat</p>
                        </div>
                    </div>
                @endforeach
                <!-- Item 1 -->

                <!-- Item 2 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1450&q=80"
                            alt="Legend of Martial Immortal" class="w-full h-40 object-cover">
                        <div class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">
                            Ongoing</div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm text-gray-400">Donghua</span>
                            <span class="text-sm bg-purple-600 rounded-full px-2">Sub ID</span>
                        </div>
                        <h3 class="font-bold mb-1">Legend of Martial Immortal</h3>
                        <p class="text-sm text-gray-400">Episode 121</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1569271834187-79baedaa2e2f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1457&q=80"
                            alt="Martial Master" class="w-full h-40 object-cover">
                        <div class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">
                            Ongoing</div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm text-gray-400">Donghua</span>
                            <span class="text-sm bg-purple-600 rounded-full px-2">Sub ID</span>
                        </div>
                        <h3 class="font-bold mb-1">Martial Master</h3>
                        <p class="text-sm text-gray-400">Episode 559</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1556881288-2b1465833f38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1504&q=80"
                            alt="BTTH SEASON 5" class="w-full h-40 object-cover">
                        <div class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">
                            Ongoing</div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm text-gray-400">Donghua</span>
                            <span class="text-sm bg-purple-600 rounded-full px-2">Sub ID</span>
                        </div>
                        <h3 class="font-bold mb-1">BTTH SEASON 5</h3>
                        <p class="text-sm text-gray-400">Episode 153</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Popular Donghua -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Donghua Paling Populer</h2>

            <div class="flex justify-center mb-10 border-b border-gray-700">
                <button class="tab-button active px-6 py-3 border-b-2 border-accent font-medium">Mingguan</button>
                <button class="tab-button px-6 py-3 text-gray-500 font-medium">Bulanan</button>
                <button class="tab-button px-6 py-3 text-gray-500 font-medium">Semua</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Item 1 -->
                <div class="group relative">
                    <div
                        class="absolute -top-3 -left-3 bg-purple-600 rounded-full w-8 h-8 flex items-center justify-center text-white font-bold z-10">
                        1</div>
                    <div class="anime-card card-hover">
                        <img src="https://images.unsplash.com/photo-1543536448-1e76fc2795bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80"
                            alt="Renegade Immortal" class="w-full h-64 object-cover">
                        <div class="play-overlay">
                            <div class="bg-purple-600 rounded-full p-3">
                                <i class="fas fa-play text-white text-lg"></i>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-900">
                            <h3 class="font-bold mb-1">Renegade Immortal</h3>
                            <div class="flex items-center text-yellow-400 mb-3">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-300">8.83</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="genre-tag">Action</span>
                                <span class="genre-tag">Adventure</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="group relative">
                    <div
                        class="absolute -top-3 -left-3 bg-purple-600 rounded-full w-8 h-8 flex items-center justify-center text-white font-bold z-10">
                        2</div>
                    <div class="anime-card card-hover">
                        <img src="https://images.unsplash.com/photo-1511882150382-421056c89033?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80"
                            alt="BTTH SEASON 5" class="w-full h-64 object-cover">
                        <div class="play-overlay">
                            <div class="bg-purple-600 rounded-full p-3">
                                <i class="fas fa-play text-white text-lg"></i>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-900">
                            <h3 class="font-bold mb-1">BTTH SEASON 5</h3>
                            <div class="flex items-center text-yellow-400 mb-3">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-300">9.20</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="genre-tag">Action</span>
                                <span class="genre-tag">Fantasy</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="group relative">
                    <div
                        class="absolute -top-3 -left-3 bg-purple-600 rounded-full w-8 h-8 flex items-center justify-center text-white font-bold z-10">
                        3</div>
                    <div class="anime-card card-hover">
                        <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80"
                            alt="Perfect World" class="w-full h-64 object-cover">
                        <div class="play-overlay">
                            <div class="bg-purple-600 rounded-full p-3">
                                <i class="fas fa-play text-white text-lg"></i>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-900">
                            <h3 class="font-bold mb-1">Perfect World</h3>
                            <div class="flex items-center text-yellow-400 mb-3">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-300">8.00</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="genre-tag">Action</span>
                                <span class="genre-tag">Adventure</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="group relative">
                    <div
                        class="absolute -top-3 -left-3 bg-purple-600 rounded-full w-8 h-8 flex items-center justify-center text-white font-bold z-10">
                        4</div>
                    <div class="anime-card card-hover">
                        <img src="https://images.unsplash.com/photo-1509396536-1-40d1b1e627c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                            alt="Tales of Herding Gods" class="w-full h-64 object-cover">
                        <div class="play-overlay">
                            <div class="bg-purple-600 rounded-full p-3">
                                <i class="fas fa-play text-white text-lg"></i>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-900">
                            <h3 class="font-bold mb-1">Tales of Herding Gods</h3>
                            <div class="flex items-center text-yellow-400 mb-3">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-300">9.70</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="genre-tag">Action</span>
                                <span class="genre-tag">Adventure</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="group relative">
                    <div
                        class="absolute -top-3 -left-3 bg-purple-600 rounded-full w-8 h-8 flex items-center justify-center text-white font-bold z-10">
                        5</div>
                    <div class="anime-card card-hover">
                        <img src="https://images.unsplash.com/photo-1569271834187-79baedaa2e2f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1457&q=80"
                            alt="Jade Dynasty" class="w-full h-64 object-cover">
                        <div class="play-overlay">
                            <div class="bg-purple-600 rounded-full p-3">
                                <i class="fas fa-play text-white text-lg"></i>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-900">
                            <h3 class="font-bold mb-1">Jade Dynasty</h3>
                            <div class="flex items-center text-yellow-400 mb-3">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-300">9.20</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="genre-tag">Action</span>
                                <span class="genre-tag">Adventure</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
