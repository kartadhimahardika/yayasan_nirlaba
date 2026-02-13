<nav x-data="{ open: false }" class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}">
                <div class="flex items-center">
                    <div class="ml-3 leading-tight">
                        <span class="block text-sm font-semibold text-gray-900">Panti Asuhan Hindu</span>
                        <span class="block text-sm font-semibold text-gray-900">Dharma Jati I</span>
                    </div>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('home') }}">
                    Beranda
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('about') }}">
                    Tentang Kami
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('programs.*') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('programs.index') }}">
                    Program
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('articles.*') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('articles.index') }}">
                    Artikel
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('donation.*') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('donation.index') }}">
                    Donasi
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('contact') }}">
                    Kontak
                </a>
                <a href="/login"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
                    Masuk
                </a>
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
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('home') }}">
            Beranda
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('about') }}">
            Tentang Kami
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('programs') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('programs.index') }}">
            Program
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('articles') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('articles.index') }}">
            Artikel
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('donation.*') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('donation.index') }}">
            Donasi
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('contact') }}">
            Kontak
        </a>
        <a href="/login"
            class="w-full bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
            Masuk
        </a>
    </div>
</nav>
