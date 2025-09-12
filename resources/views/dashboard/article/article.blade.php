<x-app-layout>
    <section class="py-20 bg-gray-50 dark:bg-zinc-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ $article->title }}
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-start mb-16">
                <div>
                    <div class="flex items-center justify-start space-x-3 mb-6">
                        <a href="/dashboard/articles"
                            class="inline-flex items-center px-4 py-2 border border-green-300 text-sm font-medium rounded-md text-green-700 bg-white hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200 cursor-pointer">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali
                        </a>

                        <button
                            class="inline-flex items-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200 cursor-pointer">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit
                        </button>

                        <button
                            class="inline-flex items-center px-4 py-2 border border-red-300 text-sm font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200 cursor-pointer">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete
                        </button>
                    </div>

                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        {{ $article->description }}
                    </p>

                    <div class="flex items-center space-x-4">
                        <span class="font-medium text-gray-800 dark:text-gray-200 text-medium">
                            Oleh : {{ $article->author->name }}
                        </span>
                        <span class="text-medium text-gray-500 dark:text-gray-400">
                            pada {{ $article->created_at->format('d F Y') }}
                        </span>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="h-96 flex items-center justify-center rounded-2xl overflow-hidden shadow-xl 
                               bg-gradient-to-br from-blue-100 to-green-100 
                               dark:from-zinc-700 dark:to-zinc-800">
                        <img src="/images/unsplash.jpg" alt="{{ $article->title }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
