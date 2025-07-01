<header class="bg-dark sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between items-center py-4">
            <div class="flex items-center">
                <img src="https://anichin.club/wp-content/uploads/2025/02/ANICHIN.CARE_.png" alt="Anichin Logo"
                    class="h-12 mr-4">
            </div>

            <!-- Search for Mobile -->
            <div class="lg:hidden w-full mt-2">
                <div class="relative">
                    <input type="text" placeholder="Cari Donghua..."
                        class="w-full bg-gray-800 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:block">
                <ul class="flex space-x-4">
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li class="relative group mt-0">
                        <a href="#" class="nav-link flex items-center">Donghua List <i
                                class="fas fa-chevron-down ml-1 text-xs"></i></a>
                        <div
                            class="absolute left-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform -translate-y-2 group-hover:translate-y-0 text-gray-200 overflow-hidden">
                            <a href="#" class="block px-4 py-3 hover:bg-purple-900 nav-link">Drop</a>
                            <a href="#" class="block px-4 py-3 hover:bg-purple-900 nav-link">Ongoing</a>
                            <a href="#" class="block px-4 py-3 hover:bg-purple-900 nav-link">Upcoming</a>
                            <a href="#" class="block px-4 py-3 hover:bg-purple-900 nav-link">Completed</a>
                        </div>
                    </li>
                    <li><a href="#" class="nav-link">Bookmark</a></li>
                    <li><a href="#" class="nav-link">Schedule</a></li>
                    <li><a href="#" class="nav-link">Riwayat Menonton</a></li>
                </ul>
            </nav>

            <!-- Search for Desktop -->
            <div class="hidden lg:block">
                <div class="relative">
                    <input type="text" placeholder="Cari Donghua..."
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
                        <span>Donghua List</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ml-4 mt-2 space-y-1 hidden">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700 rounded">Drop</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700 rounded">Ongoing</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700 rounded">Upcoming</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700 rounded">Completed</a>
                    </div>
                </li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Bookmark</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Schedule</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800 rounded">Riwayat Menonton</a></li>
            </ul>
        </nav>
    </div>
</header>