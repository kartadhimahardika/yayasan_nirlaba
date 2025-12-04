<x-layout>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 pt-28">
        <div class="max-w-6xl mx-auto px-6 py-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

                <div class="relative h-80 overflow-hidden">
                    <img src="/images/unsplash.jpg" alt="{{ $program->title }}"
                        class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

                    <div class="absolute top-6 left-6">
                        <a href="/programs?categoryProgram={{ $program->categoryProgram->slug }}">
                            <span
                                class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-blue-100 text-blue-800 backdrop-blur-sm">
                                {{ $program->categoryProgram->name }}
                            </span>
                        </a>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        {{ $program->title }}
                    </h1>

                    <div class="prose prose-lg max-w-none">
                        <div class="text-gray-700 leading-relaxed text-lg whitespace-pre-line">
                            {{ $program->description }}
                        </div>

                        <div class="mt-6">
                            <a href="/programs"
                                class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-md hover:shadow-lg">
                                <span>Kembali</span>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
