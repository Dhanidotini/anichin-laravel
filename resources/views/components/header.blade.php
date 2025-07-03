@use('App\Enums\StatusSeries')

<header class="bg-dark/95 backdrop-blur-md sticky top-0 z-50 border-b border-white/10 transition-all duration-300">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                @if (setting('app.visibility.logo', config('app.visibility.logo')))
                    <img src="{{ setting('app.logo') }}" alt="Logo"
                        class="h-9 w-9 rounded-lg transition-transform duration-300 group-hover:scale-105">
                @endif
                <span class="text-xl font-bold text-white">{{ setting('app.name', config('app.name')) }}</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-6">
                <a href="#"
                    class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition-colors font-medium">
                    Home
                </a>
                <div class="relative group">
                    <button
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition-colors font-medium flex items-center gap-1">
                        Series
                        <svg class="w-4 h-4 mt-0.5 transform transition-transform" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div
                        class="absolute top-full left-0 w-48 mt-1 bg-gray-800/95 backdrop-blur-md rounded-lg p-2 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        @foreach (StatusSeries::cases() as $status)
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5 rounded-md transition-colors">
                                {{ $status->getLabel() }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </nav>

            <!-- Right Section -->
            <div class="flex items-center gap-4">
                <div class="relative">
                    <input type="text" placeholder="Search..."
                        class="w-48 px-4 pl-10 py-2 bg-white/5 rounded-full border border-white/10 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-300 transition-all">
                    <svg class="w-4 h-4 absolute left-3 top-3 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <!-- Mobile Menu -->
                <button
                    class="lg:hidden p-2 text-gray-300 hover:text-white rounded-md hover:bg-white/5 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
