@use('App\Enums\StatusSeries')

<header class="bg-dark sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-row justify-between py-4 lg:flex-row lg:items-center ">
            <div class="flex items-center">
                {{-- Logo or Site Name --}}
                <a href="#" class="text-white text-2xl font-bold">
                    @if (setting('app.visibility.logo', config('app.visibility.logo')) &&
                            setting('app.visibility.name', config('app.visibility.name')))
                        <img src="{{ setting('app.logo') }}" alt="Logo" class="h-10 inline-block mr-2">
                        <span class="mb-4">{{ setting('app.name', config('app.name')) }}</span>
                    @elseif (setting('app.visibility.logo', config('app.visibility.logo')))
                        <img src="{{ setting('app.logo') }}" alt="Logo" class="h-10 inline-block mr-2">
                    @elseif (setting('app.visibility.name', config('app.visibility.name')))
                        {{ setting('app.name', config('app.name')) }}
                    @else
                        Laravel
                    @endif
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:block">
                <ul class="flex space-x-4">
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li class="relative group mt-0">
                        <a href="#" class="nav-link flex items-center">Series List <i
                                class="fas fa-chevron-down ml-1 text-xs"></i></a>
                        <div
                            class="absolute left-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform -translate-y-2 group-hover:translate-y-0 text-gray-200 overflow-hidden">
                            @forelse (StatusSeries::cases() as $status)
                                <a href="#"
                                    class="block px-4 py-3 hover:bg-purple-900 nav-link">{{ $status->getLabel() }}</a>
                            @empty
                                <a href="#" class="block px-4 py-3 hover:bg-purple-900 nav-link">No Series
                                    Available</a>
                            @endforelse
                        </div>
                    </li>
                    <li><a href="#" class="nav-link">Bookmark</a></li>
                    {{-- <li><a href="#" class="nav-link">Schedule</a></li>
                    <li><a href="#" class="nav-link">Riwayat Menonton</a></li> --}}
                </ul>
            </nav>

            <!-- Search for Desktop -->
            <div class="hidden lg:block">
                <div class="relative">
                    <input type="text" placeholder="Cari..."
                        class="bg-gray-800 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center">
                <button id="mobile-menu-button" class="ml-4 text-gray-300 hover:text-white">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-navigation" class="hidden lg:hidden py-4 border-t border-gray-700 mt-4">
            <ul class="space-y-2">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Home</a></li>
                <li class="relative">
                    <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-800 rounded">
                        <span>Series List</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ml-4 mt-2 space-y-1 hidden">
                        @forelse (StatusSeries::cases() as $status)
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-700 rounded">{{ $status->getLabel() }}</a>
                        @empty
                        @endforelse
                    </div>
                </li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Bookmark</a></li>
                {{-- <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Schedule</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Riwayat Menonton</a></li> --}}
                <li>
                    <!-- Search for Mobile -->
                    <div class="lg:hidden w-full mt-2">
                        <div class="relative">
                            <input type="text" placeholder="Cari..."
                                class="w-full bg-gray-800 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
