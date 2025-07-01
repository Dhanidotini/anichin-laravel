<div class="anime-card card-hover group">
    <img src="{{ $item->getMedia('posters')[0]->getUrl() }}" alt="Stellar Transformation" class="w-full h-72 object-cover">
    <div class="play-overlay">
        <div class="bg-purple-600 rounded-full p-3">
            <i class="fas fa-play text-white text-lg"></i>
        </div>
    </div>
    <div class="p-4 bg-gray-900 h-42 flex flex-col">
        <h3 class="font-bold text-lg mb-2">{{ $item->name }}</h3>
        <p class="text-sm text-gray-400 mb-4 flex-grow overflow-auto text-clip">
            {{ str()->of($item->description)->limit(150) }}</p>
        <a href="#"
            class="bg-secondary hover:bg-primary text-white font-medium py-2 px-4 rounded transition-colors block text-center">
            Tonton <i class="fas fa-play ml-1"></i>
        </a>
    </div>
</div>
