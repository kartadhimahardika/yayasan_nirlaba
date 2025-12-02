<x-layout>

    <div class="pt-20 max-w-3xl mx-auto px-6 py-12">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Detail Donasi</h2>

                <div class="space-y-4 text-gray-700">
                    <div class="grid grid-cols-2 gap-4">
                        <p>
                            <span class="font-semibold">Nama Donatur:</span>
                            {{ $donation->name }}
                        </p>
                        <p>
                            <span class="font-semibold">Email:</span>
                            {{ $donation->email }}
                        </p>
                        <p>
                            <span class="font-semibold">Nomor HP:</span>
                            {{ $donation->phone }}
                        </p>
                        <p>
                            <span class="font-semibold">Jumlah Donasi:</span>
                            Rp {{ number_format($donation->amount, 0, ',', '.') }}
                        </p>
                        <p><span class="font-semibold">Metode:</span>
                            Transfer Bank
                        </p>
                        <p>
                            <span class="font-semibold">Status:</span>
                            <span class="text-green-600 font-medium">{{ $donation->status }}</span>
                        </p>
                        <p>
                            <span class="font-semibold">Tanggal Donasi:</span>
                            {{ $donation->created_at->format('d F Y') }}
                        </p>
                        <p>
                            <span class="font-semibold">Diverifikasi:</span>
                            {{ $donation->updated_at->format('d F Y') }}
                        </p>
                    </div>

                    <div class="mt-4">
                        <p class="font-semibold">Pesan / Doa:</p>
                        <p class="italic text-gray-800">{{ $donation->message }}</p>
                    </div>

                    <div class="mt-6">
                        <p class="font-semibold mb-2">Bukti Transfer:</p>
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <img src="/images/unsplash.jpg" alt="Bukti" class="w-full object-cover">
                        </div>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <a href="/donation"
                        class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg transition">
                        ← Kembali ke Daftar Donasi
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
