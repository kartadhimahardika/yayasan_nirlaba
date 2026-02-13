<x-layout>

    @if (Session::has('success'))
        <div id="toast-success"
            class="fixed top-3 left-1/2 -translate-x-1/2 z-50 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-200 px-5 py-3 rounded-xl shadow-lg flex items-center gap-3 border border-green-500/40 transform transition-all duration-500 opacity-0 -translate-y-5">

            <!-- Circle with check -->
            <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <span class="font-medium">{{ Session::get('success') }}</span>

            <button onclick="document.getElementById('toast-success').remove()"
                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 ml-2">
                ✕
            </button>
        </div>
    @endif

    <section class="bg-gradient-to-br from-blue-50 to-green-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Panti Asuhan Hindu
                    <span class="text-blue-600">
                        Dharma Jati I
                    </span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Membina dengan kasih sayang, mendidik dengan nilai moral, demi masa depan yang lebih baik!
                </p>

            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-2xl font-bold text-gray-900 mb-6">Sekilas Panti Asuhan Hindu
                        Dharma jati
                        I
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">Panti Asuhan Hindu Dharma Jati I berdiri pada 15 Oktober 1985
                        di Desa Bakas, Klungkung, di bawah naungan Yayasan Dharma Jati yang dipimpin oleh Drs. I Wayan
                        Nika, M.Si. Panti asuhan ini hadir sebagai wujud kepedulian terhadap anak-anak yatim piatu,
                        miskin, dan terlantar agar mereka dapat memperoleh pendidikan dan pembinaan yang layak.</p>
                    <p class="text-lg text-gray-600 mb-8">Berawal dari tekad mulia pendirinya sejak masa mahasiswa,
                        Panti Asuhan Hindu Dharma Jati terus berkembang hingga memiliki dua panti asuhan dan telah
                        membina banyak anak dari berbagai daerah di Bali maupun luar Bali. Banyak anak asuh yang kini
                        telah menyelesaikan pendidikan dan hidup mandiri sebagai pribadi yang rajin, jujur, berbudaya,
                        dan bermoral agama.</p>
                </div>

                <div class="rounded-lg h-96 overflow-hidden">
                    <img src="{{ asset('images/beranda.jpg') }}" alt="Misi Panti Asuhan Hindu Dharma Jati"
                        class="w-full h-full object-cover">
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-start">
                    <a href="{{ route('about') }}"
                        class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-3 rounded-full text-lg font-medium transition-colors">Selengkapnya
                    </a>
                </div>


            </div>
        </div>
    </section>



</x-layout>
