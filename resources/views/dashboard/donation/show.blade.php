{{-- <x-app-layout>

    <div class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">

                <a href="/dashboard/donation"
                    class="flex items-center px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-zinc-700 rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-3xl space-y-8">

                <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm overflow-hidden">
                    <div
                        class="h-64 bg-gradient-to-br from-blue-200 to-green-200 dark:from-zinc-700 dark:to-zinc-600 flex items-center justify-center">

                        @if ($donation->proof)
                            <img src="/images/unsplash.jpg" alt="{{ $donation->name }}"
                                class="h-full w-full object-cover" />
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
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                                    {{ $donation->name }}
                                </h1>
                                <span
                                    class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 rounded-full text-sm font-medium">
                                    {{ $donation->phone }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm p-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Deskripsi Program</h2>

                    <div class="prose prose-lg max-w-none text-gray-800 dark:text-gray-300">
                        {!! $donation->message !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout> --}}

<x-app-layout>

    {{-- Header --}}
    <div class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <a href="/dashboard/donation"
                class="inline-flex items-center px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-zinc-700 rounded-lg transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
        </div>
    </div>

    {{-- Content --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="space-y-8">

            {{-- CARD INFO DONASI --}}
            <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm overflow-hidden">

                {{-- Foto --}}
                <div
                    class="h-64 bg-gradient-to-br from-blue-200 to-green-200 dark:from-zinc-700 dark:to-zinc-600 flex items-center justify-center">
                    @if ($donation->proof)
                        <img src="/images/unsplash.jpg" alt="{{ $donation->name }}"
                            class="h-full w-full object-cover" />
                    @else
                        <span class="text-gray-500 dark:text-gray-300">Tidak ada foto</span>
                    @endif
                </div>

                {{-- Detail --}}
                <div class="p-6 space-y-4">

                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                        {{ $donation->name }}
                    </h1>

                    <p class="text-gray-600 dark:text-gray-300">
                        📞 {{ $donation->phone }}
                    </p>

                    {{-- JUMLAH --}}
                    <div>
                        <span class="text-sm text-gray-500">Jumlah Donasi</span>
                        <p class="text-2xl font-semibold text-green-600">
                            Rp {{ number_format($donation->amount, 0, ',', '.') }}
                        </p>
                    </div>

                    {{-- STATUS (DROPDOWN) --}}
                    <form action="" method="POST" class="max-w-xs">
                        @csrf
                        @method('PUT')

                        <label class="block text-sm text-gray-500 mb-1">Status Donasi</label>

                        <select name="status"
                            class="w-full rounded-lg border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white">
                            <option value="pending" {{ $donation->status == 'pending' ? 'selected' : '' }}>
                                Pending
                            </option>
                            <option value="confirmed" {{ $donation->status == 'confirmed' ? 'selected' : '' }}>
                                Dikonfirmasi
                            </option>
                            <option value="rejected" {{ $donation->status == 'rejected' ? 'selected' : '' }}>
                                Ditolak
                            </option>
                        </select>

                        <button type="submit"
                            class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">
                            Simpan Status
                        </button>
                    </form>

                </div>
            </div>

            {{-- DESKRIPSI --}}
            <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm p-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                    Pesan Donatur
                </h2>

                <div class="prose max-w-none dark:prose-invert">
                    {!! $donation->message !!}
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
