<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)" class="relative h-[70vh] bg-gray-900 overflow-hidden">
    <!-- Background image with gradient overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-bg.png') }}" alt="Anime Background" class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-4 text-center">
            <div x-show="show" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-fade-in-up">
                    Jelajahi Dunia Anime
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto">
                    Temukan koleksi anime terlengkap dengan rating tertinggi. Mulai petualangan menontonmu sekarang!
                </p>
                <a href="#trending"
                    class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Mulai Menjelajah
                </a>
            </div>
        </div>
    </div>
</div>
