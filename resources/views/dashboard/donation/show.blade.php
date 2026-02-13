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
                        <img src="{{ $donation->proof }}" alt="{{ $donation->name }}"
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

                    <form action="/dashboard/donation/{{ $donation->slug }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="border rounded px-2 py-1">
                            @foreach (\App\Models\Donation::getStatuses() as $status)
                                <option value="{{ $status }}"
                                    {{ $donation->status === $status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded ml-2">Update</button>

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
