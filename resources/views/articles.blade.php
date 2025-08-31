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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                @foreach ($articles as $article)
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="h-64 w-full overflow-hidden">
                            <img src="/images/unsplash.jpg" alt="Education Program" class="w-full h-full object-cover">
                        </div>
                        <div class="p-8">
                            <div class="flex items-center space-x-4">
                                <a href="">
                                    <span class="font-medium dark:text-white text-xs">
                                        Oleh {{ $article->author->name }}
                                    </span>
                                </a>
                                <span class="text-sm">pada {{ $article->created_at->format('d F Y') }}</span>
                            </div>
                            <a href="" class="hover:underline">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">
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
