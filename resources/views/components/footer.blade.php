<footer class="bg-dark py-12 border-t border-purple-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <a href="/" class="text-white text-2xl font-bold">
                    @if (setting('app.visibility.logo', config('app.visibility.logo')) &&
                            setting('app.visibility.name', config('app.visibility.name')))
                        <img src="{{ setting('app.logo') }}" alt="Anichin Logo" class="h-12" />
                        <span class="mb-4">{{ setting('app.name', config('app.name')) }}</span>
                    @elseif (setting('app.visibility.logo', config('app.visibility.logo')))
                        <img src="{{ setting('app.logo') }}" alt="Anichin Logo" class="h-12 mb-4">
                    @elseif (setting('app.visibility.name', config('app.visibility.name')))
                        {{ setting('app.name', config('app.name')) }}
                    @else
                        Laravel
                    @endif
                </a>
                <p class="text-gray-400 mb-4">
                    {{ setting('app.description', config('app.description')) }}
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-4 text-purple-400">Navigasi</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Donghua List</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Bookmark</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Schedule</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Riwayat Menonton</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-4 text-purple-400">Kategori</h3>
                <div class="grid grid-cols-2 gap-2">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Action</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Adventure</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Comedy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Drama</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Fantasy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Romance</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Sci-fi</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Supernatural</a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-4 text-purple-400">Kontak</h3>
                <p class="text-gray-400 mb-4">
                    Untuk iklan: <span class="text-accent">ADM.ANICHIN@GMAIL.COM</span>
                </p>
                <h3 class="text-lg font-bold mb-4 text-purple-400">Dukung Kami</h3>
                <a href="#"
                    class="inline-block bg-purple-700 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded transition-colors">
                    <i class="fas fa-heart mr-1"></i> Trakteer
                </a>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-6 text-center text-gray-500">
            <p>Copyright © 2025 Anichin. All Rights Reserved</p>
            <p class="mt-2 text-sm">
                Disclaimer: This site <span class="italic">Anichin</span> does not store any files on its server. All
                contents are provided by non-affiliated third parties.
            </p>
        </div>
    </div>
</footer>
