<x-layout>

    <section class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">Kontak <span class="text-blue-600">Kami</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Halaman ini memuat informasi
                kontak Panti Asuhan Hindu Dharma Jati serta sarana komunikasi bagi masyarakat yang ingin menghubungi
                kami.</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Hubungi Kami
                    </h2>
                    <form id="contactForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap
                                </label>
                                <input id="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="Nama Lengkap" autocomplete="off" type="text" name="name">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email
                                </label>
                                <input id="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="email@gmail.com" autocomplete="off" type="email" name="email">
                            </div>
                        </div>

                        <!-- SUBJECT DIUBAH MENJADI INPUT TEXT -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                            <input id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                placeholder="Subjek pesan" autocomplete="off" type="text">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-vertical"
                                placeholder="Tulis Pesan Disini"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 text-white px-8 py-4 rounded-lg font-medium transition-all transform hover:scale-105">
                            Kirim
                        </button>
                    </form>

                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi</h2>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-crosshairs fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                    Alamat</h3>
                                <p class="text-gray-600 leading-relaxed">Desa Bakas, Kecamatan Banjarangkan, Klungkung,
                                    Bali
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-brands fa-whatsapp fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                    WhatsApp</h3>
                                <p class="text-gray-600">6281937004568</p>

                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-regular fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                    Email</h3>
                                <p class="text-gray-600">pantiasuhanhindudharmajatii@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Alamat
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berlokasi di Desa Bakas, Kecamatan Banjarangkan, Klungkung, Bali
                </p>
            </div>

            <!-- Map Wrapper -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.6823417383985!2d115.36333117589594!3d-8.530188286429391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd216c5710a4953%3A0xc258bd9c49fbe020!2sPanti%20Asuhan%20Hindu%20Dharma%20Jati%201!5e0!3m2!1sid!2sid!4v1758290217341!5m2!1sid!2sid"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


</x-layout>
