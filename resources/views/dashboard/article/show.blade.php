<x-app-layout>

    <div class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center" <!-- Back Button -->
                <a href="/dashboard/articles"
                    class="flex items-center px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-zinc-700 rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali
                </a>

                <div class="flex space-x-3">
                    <a href="/dashboard/articles/{{ $article->slug }}/edit"
                        class="flex items-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        Edit
                    </a>

                    <form id="delete-form-{{ $article->id }}" action="{{ route('article.destroy', $article->slug) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="showConfirm({{ $article->id }})"
                            class="inline-flex items-center px-6 py-2 text-sm font-medium rounded-lg bg-red-600 text-white hover:bg-red-700 transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="w-full max-w-3xl mx-auto space-y-10">

            <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm overflow-hidden">
                <div class="relative aspect-[16/9]">

                    @if ($article->photo)
                        <img src="{{ $article->photo ?? asset('images/avatar.jpg') }}"
                            class="h-full w-full object-cover" alt="{{ $article->title }}">
                    @else
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300 font-medium">Tidak ada foto</span>
                        </div>
                    @endif
                </div>

                <div class="p-6">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-3">
                        {{ $article->title }}
                    </h1>

                    <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm space-x-4">
                        <span>Penulis: <b>{{ $article->user->username }}</b></span>
                        <span>•</span>
                        <span>Dibuat pada: {{ $article->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm p-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Deskripsi Artikel</h2>

                <div class="prose prose-lg max-w-none text-gray-800 dark:text-gray-300 leading-relaxed">
                    {!! $article->description !!}
                </div>
            </div>
        </div>
    </div>

    {{-- popup --}}
    <div id="confirm-popup" class="fixed inset-0 flex hidden items-center justify-center z-50">

        <div class="bg-white rounded-lg p-6 max-w-sm w-full text-center">
            <h2 class="text-lg font-bold mb-4">Hapus Artikel?</h2>
            <p class="mb-6">Data akan terhapus permanen!</p>
            <div class="flex justify-center space-x-4">
                <button id="cancel-btn" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <button id="confirm-btn" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            let formToSubmit = null;

            function showConfirm(id) {
                formToSubmit = document.getElementById('delete-form-' + id);
                document.getElementById('confirm-popup').classList.remove('hidden');
            }

            document.getElementById('cancel-btn').addEventListener('click', function() {
                document.getElementById('confirm-popup').classList.add('hidden');
            });

            document.getElementById('confirm-btn').addEventListener('click', function() {
                if (formToSubmit) formToSubmit.submit();
            });
        </script>
    @endpush


</x-app-layout>
