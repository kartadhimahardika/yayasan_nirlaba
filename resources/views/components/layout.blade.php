<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panti Asuhan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @stack('style')

    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/contact.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body>
    <div class="min-h-screnn bg-white">
        <x-navbar />


        {{ $slot }}


        <footer class="bg-gray-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center mb-4">
                            <span class="text-xl font-semibold">Panti Asuhan Hindu Dharma Jati I</span>
                        </div>
                        <p class="text-gray-400 mb-6">Membina dengan kasih sayang, mendidik dengan nilai moral, demi
                            masa depan yang lebih baik!</p>

                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Informasi</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="/" class="hover:text-white">Beranda</a></li>
                            <li><a href="/about" class="hover:text-white">Tentang</a></li>
                            <li><a href="/programs" class="hover:text-white">Program</a></li>

                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2 text-gray-400 mt-12">
                            <li><a href="/articles" class="hover:text-white">Artikel</a></li>
                            <li><a href="/donation" class="hover:text-white">Donasi</a></li>
                            <li><a href="/contact" class="hover:text-white">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Alamat</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li>Desa Bakas, Kecamatan Banjarangkan, Klungkung, Bali</li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>
    </div>
    @stack('script')
</body>

</html>
