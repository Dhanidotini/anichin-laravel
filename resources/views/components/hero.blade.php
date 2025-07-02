<!-- Hero Section -->
<section class="bg-hero py-48 h-svh">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="bg-gradient-to-r from-purple-900 to-pink-700 inline-block rounded-xl px-3 py-1 mb-4 text-sm">
                <i class="fas fa-shield-alt mr-2"></i> Website Resmi
                {{ setting('app.name', env('app.name')) }}
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                {{ setting('app.description', config('app.description')) }}</h1>
            <p class="text-xl mb-8">Website asli {{ setting('app.name', config('app.name')) }} hanya ini, selain website
                ini
                adalah website
                palsu.</p>
            <a href="#"
                class="inline-block bg-accent hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full transition-all transform hover:scale-105">
                Tonton sekarang <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
