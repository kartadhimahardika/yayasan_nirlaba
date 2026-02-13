<x-layout>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 pt-28">
        <div class="max-w-6xl mx-auto px-6 py-8">

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

                <div class="relative aspect-[16/9] overflow-hidden">
                    <img src="{{ $article->photo }}" alt="{{ $article->title }}"
                        class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

                    <div class="absolute top-6 left-6">
                        <span
                            class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white/80 text-gray-800 backdrop-blur-sm">
                            Dibuat pada: {{ $article->created_at->format('d M Y') }}
                        </span>
                    </div>
                </div>


                <div class="p-8 md:p-12">

                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $article->title }}
                    </h1>

                    <p class="text-gray-600 mb-6 text-lg">
                        Ditulis oleh
                        <a href="/articles?user={{ $article->user->username }}"><span
                                class="font-semibold text-gray-800 hover:underline">{{ $article->user->name }}</span></a>
                    </p>

                    <div class="prose prose-lg max-w-none">
                        <div class="text-gray-700 leading-relaxed text-lg whitespace-pre-line">
                            {!! $article->description !!}
                        </div>
                    </div>



                    <div class="mt-6">
                        <button onclick="copyLink()"
                            class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">
                            Salin Link
                        </button>

                        <button
                            class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">
                            <a href="https://api.whatsapp.com/send?text={{ urlencode('Cek halaman ini: ' . url()->current()) }}"
                                target="_blank">
                                Share ke WhatsApp
                            </a>
                        </button>
                        <a href="/articles"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-md hover:shadow-lg">
                            <span>Kembali</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    @push('script')
        <script>
            function copyLink() {
                var input = document.createElement("input");
                input.value = "{{ url()->current() }}";
                document.body.appendChild(input);
                input.select();
                document.execCommand("copy");
                document.body.removeChild(input);

                var toast = document.createElement("div");
                toast.innerText = "Link berhasil disalin!";
                toast.className =
                    toast.className =
                    "fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-600 text-white px-6 py-3 rounded-xl shadow-lg opacity-0 transition-opacity duration-300";

                document.body.appendChild(toast);

                setTimeout(() => toast.classList.remove("opacity-0"), 10);
                setTimeout(() => toast.remove(), 2000);
            }
        </script>
    @endpush

</x-layout>
