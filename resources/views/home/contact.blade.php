<x-layout>

    <section class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">Contact <span class="text-blue-600">Us</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Ready to make a difference? Get in touch with us to learn more about our programs, volunteer
                opportunities,
                or partnership possibilities.</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Send Us a Message
                    </h2>
                    <form id="contactForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name
                                    *</label>
                                <input id="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="Your full name" autocomplete="off" type="text" name="name">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address
                                    *</label>
                                <input id="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="your.email@example.com" autocomplete="off" type="email"
                                    name="email">
                            </div>
                        </div>

                        <!-- SUBJECT DIUBAH MENJADI INPUT TEXT -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <input id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                placeholder="Enter the subject of your message..." autocomplete="off" type="text">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-vertical"
                                placeholder="Tell us how we can help you or how you'd like to get involved..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 text-white px-8 py-4 rounded-lg font-medium transition-all transform hover:scale-105">
                            Send Message
                        </button>
                    </form>

                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Hubungi Kami</h2>
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
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                                <p class="text-sm text-gray-500 mt-1">Monday - Friday,
                                    9:00
                                    AM - 6:00 PM EST</p>
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
                                <p class="text-gray-600">info@hopeforward.org</p>
                                <p class="text-sm text-gray-500 mt-1">We typically
                                    respond within 24 hours</p>
                            </div>
                        </div>
                        {{-- <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                                    Follow Us</h3>
                                <div class="flex space-x-4"><a href="#"
                                        class="w-10 h-10 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center text-white transition-colors"><svg
                                            class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                                clip-rule="evenodd"></path>
                                        </svg></a><a href="#"
                                        class="w-10 h-10 bg-blue-400 hover:bg-blue-500 rounded-full flex items-center justify-center text-white transition-colors"><svg
                                            class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">
                                            </path>
                                        </svg></a><a href="#"
                                        class="w-10 h-10 bg-blue-700 hover:bg-blue-800 rounded-full flex items-center justify-center text-white transition-colors"><svg
                                            class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                clip-rule="evenodd"></path>
                                        </svg></a><a href="#"
                                        class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center text-white transition-colors"><svg
                                            class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                                clip-rule="evenodd"></path>
                                        </svg></a></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Visit Our Office
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Located in the heart of New York City, our office is open for meetings,
                    volunteer orientations, and community events.
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
