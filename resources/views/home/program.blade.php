<x-layout>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $program->title }}
                </h2>
            </div>
            <div class="grid lg:grid-cols-2 gap-16 items-start mb-16">
                <div>
                    <div class="mb-6">
                        <a href="/programs"
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-medium transition-colors">
                            &laquo; Kembali
                        </a>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        {{ $program->categoryProgram->name }}</h3>
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
