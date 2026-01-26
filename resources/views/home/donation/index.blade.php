<x-layout>

    <section id="programs" class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-blue-600 mb-6">DAFTAR <span class="text-gray-900">DONASI</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Comprehensive initiatives designed to create sustainable change and empower communities worldwide
                through education, healthcare, and economic development.</p>
        </div>
    </section>

    <div class="pt-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Donasi Terverifikasi</h2>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($donations as $donation)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold text-lg">IN</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-gray-900 truncate">{{ $donation->name }}</h3>
                                <p class="text-sm text-gray-500 truncate">{{ $donation->email }}</p>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-green-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586
                                    7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-xs text-green-600 font-medium">{{ $donation->status }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-blue-50 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-blue-600">Rp
                                    {{ number_format($donation->amount, 0, ',', '.') }}
                                </div>
                                <div class="text-sm text-blue-700 mt-1">Transfer Bank</div>
                            </div>

                            <div class="grid grid-cols-2 gap-3 text-sm">
                                <div>
                                    <span class="text-gray-500">Tanggal:</span>
                                    <div class="font-medium text-gray-900">{{ $donation->created_at->format('d F Y') }}
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-500">Diverifikasi Pada:</span>
                                    <div class="font-medium text-green-600">{{ $donation->updated_at->format('d F Y') }}
                                    </div>
                                </div>
                            </div>

                            <div class="text-sm">
                                <span class="text-gray-500">Pesan:</span>
                                <p class="text-gray-800 italic">{!! Str::limit(strip_tags($donation->message), 50) !!}</p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="/donation/{{ $donation->slug }}"
                                class="block w-full bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 text-white text-center px-4 py-3 rounded-lg text-sm font-medium transition-all transform hover:scale-105">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-12">
            {{ $donations->links() }}
        </div>

        <div class="flex justify-center my-16">
            <a href="/confirm"
                class="bg-green-500 hover:bg-green-600 text-white px-10 py-3 rounded-lg font-medium transition">
                Konfirmasi Donasi
            </a>
        </div>
    </div>


</x-layout>
