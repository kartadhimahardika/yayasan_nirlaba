<nav x-data="{ open: false }" class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-sm">H</span>
                    </div>
                </div>
                <div class="ml-3">
                    <span class="text-xl font-semibold text-gray-900">HopeForward</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/">Home</a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/about">About</a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/program">Programs</a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/contact">Contact</a>
                <button
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
                    Donate
                </button>
            </div>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <!-- hamburger icon -->
                    <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- close icon -->
                    <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="md:hidden px-4 pb-4 space-y-2">
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/">Home</a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/about">About</a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/program">Programs</a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium" href="/contact">Contact</a>
        <button
            class="w-full bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
            Donate
        </button>
    </div>
</nav>
