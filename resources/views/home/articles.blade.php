<x-layout>
    <section id="programs" class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">Berita <span class="text-blue-600">Kami</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Comprehensive initiatives designed to create sustainable change and empower communities worldwide
                through education, healthcare, and economic development.</p>
        </div>
    </section>


    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <form class="mb-8 max-w-md mx-auto">
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari Judul Berita" autocomplete="off" name="search" />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                @foreach ($articles as $article)
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="h-64 w-full overflow-hidden">
                            <img src="/images/unsplash.jpg" alt="{{ $article->title }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-8">
                            <div class="flex items-center space-x-4">
                                <a href="/articles?author={{ $article->author->username }}">
                                    <span class="font-medium dark:text-white text-xs hover:underline">
                                        Oleh {{ $article->author->name }}
                                    </span>
                                </a>
                                <span class="text-sm">pada {{ $article->created_at->format('d F Y') }}</span>
                            </div>
                            <a href="/articles/{{ $article->slug }}">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 hover:underline">
                                    {{ $article->title }}
                                </h3>
                            </a>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                {!! Str::limit(strip_tags($article->description), 100) !!}
                            </p>
                            <a href="/articles/{{ $article->slug }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-medium transition-colors">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        </div>
    </section>
</x-layout>
