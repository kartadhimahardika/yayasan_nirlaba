<x-layout>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 pt-28">
        <div class="max-w-6xl mx-auto px-6 py-8">

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

                <div class="relative h-80 overflow-hidden">
                    <img src="/images/unsplash.jpg" alt="{{ $article->title }}"
                        class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

                    <div class="absolute top-6 left-6">
                        <span
                            class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white/80 text-gray-800 backdrop-blur-sm">
                            Dibuat pada: {{ $article->created_at->format('d M Y') }}
                        </span>
                    </div>
                </div>


                <div class="p-8 md:p-12">

                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $article->title }}
                    </h1>

                    <p class="text-gray-600 mb-6 text-lg">
                        Ditulis oleh
                        <a href="/articles?author={{ $article->author->username }}"><span
                                class="font-semibold text-gray-800">{{ $article->author->name }}</span></a>
                    </p>

                    <div class="prose prose-lg max-w-none">
                        <div class="text-gray-700 leading-relaxed text-lg whitespace-pre-line">
                            {!! $article->description !!}
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="/articles"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-md hover:shadow-lg">
                            <span>Kembali</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</x-layout>
