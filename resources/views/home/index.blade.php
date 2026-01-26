<x-layout>

    @if (Session::has('success'))
        <div id="toast-success"
            class="fixed top-3 left-1/2 -translate-x-1/2 z-50
           bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-200
           px-5 py-3 rounded-xl shadow-lg
           flex items-center gap-3 border border-green-500/40
           transform transition-all duration-500
           opacity-0 -translate-y-5">

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
                    Membina dengan cinta, Mewujudkan masa depan cerah!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-medium transition-colors">Get
                        Involved
                    </button>
                    <button
                        class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-3 rounded-full text-lg font-medium transition-colors">Learn
                        More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mission
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">We believe every person deserves access
                        to education, healthcare, and opportunities for growth. Our mission is to break the cycle of
                        poverty through sustainable community-driven solutions.</p>
                    <p class="text-lg text-gray-600 mb-8">Since 2010, we've partnered with local
                        communities to create lasting impact through innovative programs that address root causes,
                        not just symptoms.</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">50K+</div>
                            <div class="text-gray-600">Lives Impacted</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600">25</div>
                            <div class="text-gray-600">Countries</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center"><span
                        class="text-gray-500">Mission Image</span></div>
            </div>
        </div>
    </section>

    {{-- <section id="programs" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Programs</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive initiatives
                    designed to create sustainable change in communities around the world.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-sm p-8 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6"
                        data-oid="p61dji9">
                        <div class="w-6 h-6 bg-blue-600 rounded" data-oid="8sw2tzn"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4" data-oid="6hbyqy1">Education Access</h3>
                    <p class="text-gray-600 mb-6" data-oid="q9k0x3r">Building schools, training teachers, and
                        providing scholarships to ensure every child has access to quality education.</p><a
                        href="#" class="text-blue-600 font-medium hover:text-blue-700" data-oid="g_iw877">Learn
                        More →</a>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-8 hover:shadow-md transition-shadow" data-oid="koukj4f">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6"
                        data-oid="m76c.pz">
                        <div class="w-6 h-6 bg-green-600 rounded" data-oid="6gb6bhn"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4" data-oid="w_1b9vm">Healthcare Support
                    </h3>
                    <p class="text-gray-600 mb-6" data-oid="bwvy3to">Mobile clinics, health education, and medical
                        supply distribution to underserved communities.</p><a href="#"
                        class="text-green-600 font-medium hover:text-green-700" data-oid="clp7.v:">Learn More
                        →</a>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-8 hover:shadow-md transition-shadow" data-oid="hd.v347">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6"
                        data-oid="ks6euld">
                        <div class="w-6 h-6 bg-blue-600 rounded" data-oid="34xcahh"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4" data-oid="uf-tx.6">Economic Development
                    </h3>
                    <p class="text-gray-600 mb-6" data-oid="4ibkg.-">Microfinance, job training, and small
                        business support to create sustainable livelihoods.</p><a href="#"
                        class="text-blue-600 font-medium hover:text-blue-700" data-oid="-f.78k0">Learn More →</a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="impact" class="py-20 bg-white" data-oid="4toro0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-oid="56qvnkd">
            <div class="text-center mb-16" data-oid="o:35mtl">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" data-oid="0a8n0v1">Real Impact, Real
                    Stories</h2>
                <p class="text-xl text-gray-600" data-oid="irhhk2t">Hear from the communities we serve</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12" data-oid="yjrux_3">
                <div class="bg-blue-50 rounded-lg p-8" data-oid="rk57h3q">
                    <div class="flex items-center mb-6" data-oid="oato2cl">
                        <div class="w-12 h-12 bg-blue-200 rounded-full mr-4" data-oid="77ge8u0"></div>
                        <div data-oid="mbz:h5a">
                            <div class="font-semibold text-gray-900" data-oid="69ve_6g">Maria Santos</div>
                            <div class="text-gray-600" data-oid="1a33x-5">Teacher, Guatemala</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic" data-oid="0k68ybh">"Thanks to HopeForward's education program,
                        I was able to complete my teaching certification. Now I'm helping 30 children in my village
                        get the education they deserve."</p>
                </div>
                <div class="bg-green-50 rounded-lg p-8" data-oid="lu4vkrb">
                    <div class="flex items-center mb-6" data-oid="050go35">
                        <div class="w-12 h-12 bg-green-200 rounded-full mr-4" data-oid="ot6bbks"></div>
                        <div data-oid="dz47gp9">
                            <div class="font-semibold text-gray-900" data-oid="13cb2gc">James Ochieng</div>
                            <div class="text-gray-600" data-oid="eoxnxzh">Entrepreneur, Kenya</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic" data-oid="p27-bgp">"The microfinance program helped me start
                        my farming business. I've been able to provide for my family and employ five people from my
                        community."</p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="py-20 bg-gradient-to-r from-blue-600 to-green-600" data-oid="3l5pylw">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-oid="6pklz_-">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4" data-oid="6tqi619">Stay Connected</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto" data-oid="9:5hnv3">Get updates on our
                programs, success stories, and ways you can make a difference.</p>
            <form class="max-w-md mx-auto flex gap-4" data-oid="w6qg7li"><input type="email"
                    placeholder="Enter your email"
                    class="flex-1 px-4 py-3 rounded-full text-gray-900 placeholder-gray-500" required=""
                    data-oid="eux.by:" value=""><button type="submit"
                    class="bg-white text-blue-600 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition-colors"
                    data-oid="xws88:s">Subscribe</button></form>
        </div>
    </section> --}}



</x-layout>
