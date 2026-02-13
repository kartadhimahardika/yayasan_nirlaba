<x-app-layout>

    {{-- Header --}}
    <div class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">

            {{-- Kembali --}}
            <a href="{{ route('dashboard.program') }}"
                class="flex items-center px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-zinc-700 rounded-lg transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>

            {{-- Edit & Delete --}}
            <div class="flex space-x-3">

                {{-- Edit --}}
                <a href="{{ route('dashboard.program.edit', $program->slug) }}"
                    class="inline-flex items-center px-3 py-1.5 text-xs font-medium rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200 dark:bg-transparent dark:text-blue-400 dark:border dark:border-blue-400/40 dark:hover:bg-white/10 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </a>

                {{-- Delete --}}
                <form id="delete-form-{{ $program->id }}" action="{{ route('program.destroy', $program->slug) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="showConfirm({{ $program->id }})"
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

    {{-- Konten --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        {{-- Foto Program --}}
        <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm overflow-hidden">

            <div class="relative aspect-[16/9]">

                @if ($program->photo)
                    <img src="{{ asset($program->photo) }}" alt="{{ $program->title }}"
                        class="h-full w-full object-cover" />
                @else
                    <div class="text-center">
                        <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
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

            {{-- Judul & Kategori --}}
            <div class="p-6 flex justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                        {{ $program->title }}
                    </h1>
                    <span
                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 rounded-full text-sm font-medium">
                        {{ $program->category->name }}
                    </span>
                </div>
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm p-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Deskripsi Program</h2>
            <div class="prose prose-lg max-w-none text-gray-800 dark:text-gray-300">
                {!! $program->description !!}
            </div>
        </div>
    </div>

    {{-- popup --}}
    <div id="confirm-popup" class="fixed inset-0 flex hidden items-center justify-center z-50">

        <div class="bg-white rounded-lg p-6 max-w-sm w-full text-center">
            <h2 class="text-lg font-bold mb-4">Hapus program?</h2>
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
