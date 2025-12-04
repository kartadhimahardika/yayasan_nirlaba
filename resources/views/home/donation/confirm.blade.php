<x-layout>
    <div class="pt-24 px-6 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-sm p-8">
            <h3 class="text-2xl font-semibold text-gray-900 mb-6 text-center">
                Konfirmasi Donasi
            </h3>

            <form action="#" method="POST" enctype="multipart/form-data" class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Donatur</label>
                        <input type="text" id="name" name="name" placeholder="Tulis nama lengkap"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email</label>
                        <input type="email" id="email" name="email" placeholder="contoh@email.com"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div>
                        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Donasi</label>
                        <input type="number" id="amount" name="amount"
                            placeholder="Masukkan nominal (contoh: 100000)"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>


                </div>

                <div class="space-y-4">
                    <div>
                        <label for="proof" class="block mb-2 text-sm font-medium text-gray-900">Upload Bukti
                            Transfer</label>
                        <input type="file" id="proof" name="proof"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                        <p class="mt-2 text-xs text-gray-500">Format: JPG, PNG, atau PDF (maks. 2MB)</p>
                    </div>

                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Pesan / Doa</label>
                        <textarea id="message" name="message" rows="6" placeholder="Tulis pesan atau doa untuk penerima donasi"
                            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <div class="flex gap-2 pt-2">
                        <button type="submit"
                            class="text-white inline-flex items-center bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 12.414l4.707-4.707z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Kirim Konfirmasi
                        </button>

                        <a href="/donation"
                            class="text-white inline-flex items-center bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">
                            Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
