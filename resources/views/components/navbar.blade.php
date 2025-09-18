<nav x-data="{ open: false }" class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">YN</span>
                        </div>
                    </div>
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
                    Home
                </a>
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium flex items-center
        {{ request()->routeIs('about') || request()->routeIs('team') ? 'border-b-2 border-indigo-400 text-blue-600' : '' }}">
                        Tentang Kami
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" @click.outside="open = false"
                        class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg py-2 z-50">
                        <a href="{{ route('about') }}"
                            class="block px-4 py-2 text-sm 
            {{ request()->routeIs('about') ? 'bg-gray-100 text-blue-600 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                            Sejarah Yayasan
                        </a>
                        <a href="{{ route('team') }}"
                            class="block px-4 py-2 text-sm 
            {{ request()->routeIs('team') ? 'bg-gray-100 text-blue-600 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                            Tim Kami
                        </a>
                    </div>
                </div>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('programs') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('programs') }}">
                    Programs
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('articles') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('articles') }}">
                    Berita
                </a>
                <a class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'border-b-2 border-indigo-400' : '' }}"
                    href="{{ route('contact') }}">
                    Contact
                </a>
                <a href="/login"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
                    Login
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
            Home
        </a>
        <div x-data="{ openSub: false }" class="space-y-1">
            <button @click="openSub = !openSub"
                class="w-full flex justify-between items-center px-3 py-2 text-sm font-medium rounded
            {{ request()->routeIs('about') || request()->routeIs('team') ? 'bg-gray-100 text-blue-600 font-semibold border-l-4 border-indigo-500' : 'text-gray-600 hover:text-blue-600' }}">
                Tentang Kami
                <svg class="w-4 h-4 transform transition-transform" :class="openSub ? 'rotate-180' : ''" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openSub" x-transition class="pl-6 space-y-1">
                <a href="{{ route('about') }}"
                    class="block px-3 py-2 text-sm rounded 
                {{ request()->routeIs('about') ? 'bg-gray-100 text-blue-600 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                    Sejarah Yayasan
                </a>
                <a href="{{ route('team') }}"
                    class="block px-3 py-2 text-sm rounded 
                {{ request()->routeIs('team') ? 'bg-gray-100 text-blue-600 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                    Tim Kami
                </a>
            </div>
        </div>

        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('programs') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('programs') }}">
            Programs
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('articles') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('articles') }}">
            Berita
        </a>
        <a class="block text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'border-b-2 border-indigo-400' : '' }}"
            href="{{ route('contact') }}">
            Contact
        </a>
        <a href="/login"
            class="w-full bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
            Login
        </a>
    </div>
</nav>
