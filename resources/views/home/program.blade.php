<x-layout>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $program->title }}
                </h2>
            </div>
            <div class="grid lg:grid-cols-2 gap-16 items-start mb-16">
                <div>

                    <div class="flex items-center justify-start space-x-4 mb-8">
                        <a href="/programs"
                            class="inline-flex items-center px-5 py-2.5 border border-blue-300 text-sm font-medium rounded-md text-blue-700 bg-blue-200 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200 cursor-pointer shadow-sm 
                        dark:bg-zinc-800 dark:border-blue-600 dark:text-blue-400 dark:hover:bg-zinc-700 dark:focus:ring-blue-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali
                        </a>
                    </div>


                    <a href="/programs?categoryProgram={{ $program->categoryProgram->slug }}">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 hover:underline">
                            {{ $program->categoryProgram->name }}
                        </h3>
                    </a>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">{{ $program->description }}
                    </p>
                </div>
                <div class="relative">
                    <div
                        class="h-96 flex items-center justify-center rounded-2xl overflow-hidden shadow-xl bg-gradient-to-br from-blue-100 to-green-100">
                        <div class="w-full h-full">
                            <img src="/images/unsplash.jpg" alt="{{ $program->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
