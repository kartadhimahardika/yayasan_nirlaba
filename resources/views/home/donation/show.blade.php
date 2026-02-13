<x-layout>
    <section id="programs" class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-blue-600 mb-6">DETAIL <span class="text-gray-900">DONASI</span>
            </h1>
            {{-- <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Halaman donasi ini menyediakan informasi dan sarana bagi masyarakat untuk berpartisipasi dalam mendukung
                kegiatan dan pembinaan anak asuh di Panti Asuhan Hindu Dharma Jati I</p> --}}
        </div>
    </section>
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
                        <p class="italic text-gray-800">{!! $donation->message !!}</p>
                    </div>

                </div>

                <div class="mt-8 text-center">
                    <a href="/donation"
                        class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg transition">
                        Kembali ke Daftar Donasi
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
