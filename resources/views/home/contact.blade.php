<x-layout>

    <section class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50" data-oid="contact-hero-section"
        id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-oid="contact-hero-container">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6" data-oid="contact-hero-title">Contact <span
                    class="text-blue-600" data-oid="8-p.25o">Us</span></h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed"
                data-oid="contact-hero-subtitle">
                Ready to make a difference? Get in touch with us to learn more about our programs, volunteer
                opportunities,
                or partnership possibilities.</p>
        </div>
    </section>

    <section class="py-20 bg-white" data-oid="contact-main-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-oid="contact-main-container">
            <div class="grid lg:grid-cols-2 gap-16" data-oid="contact-main-grid">
                <div data-oid="contact-form-section">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8" data-oid="contact-form-title">Send Us a Message
                    </h2>
                    <form class="space-y-6" data-oid="contact-form">
                        <div class="grid md:grid-cols-2 gap-6" data-oid="contact-form-name-email">
                            <div data-oid="contact-form-name"><label for="name"
                                    class="block text-sm font-medium text-gray-700 mb-2"
                                    data-oid="contact-name-label">Full
                                    Name *</label><input id="name" required=""
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="Your full name" data-oid="contact-name-input" type="text"
                                    name="name"></div>
                            <div data-oid="contact-form-email"><label for="email"
                                    class="block text-sm font-medium text-gray-700 mb-2"
                                    data-oid="contact-email-label">Email Address *</label><input id="email"
                                    required=""
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="your.email@example.com" data-oid="contact-email-input" type="email"
                                    name="email"></div>
                        </div>
                        <div data-oid="contact-form-subject"><label for="subject"
                                class="block text-sm font-medium text-gray-700 mb-2"
                                data-oid="contact-subject-label">Subject *</label><select id="subject" name="subject"
                                required=""
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                data-oid="contact-subject-select">
                                <option value="" data-oid="contact-subject-default">Select a subject</option>
                                <option value="volunteer" data-oid="contact-subject-volunteer">Volunteer Opportunities
                                </option>
                                <option value="donation" data-oid="contact-subject-donation">Donation Inquiry</option>
                                <option value="partnership" data-oid="contact-subject-partnership">Partnership</option>
                                <option value="programs" data-oid="contact-subject-programs">Program Information
                                </option>
                                <option value="media" data-oid="contact-subject-media">Media Inquiry</option>
                                <option value="other" data-oid="contact-subject-other">Other</option>
                            </select></div>
                        <div data-oid="contact-form-message"><label for="message"
                                class="block text-sm font-medium text-gray-700 mb-2"
                                data-oid="contact-message-label">Message *</label>
                            <textarea id="message" name="message" rows="6" required=""
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-vertical"
                                placeholder="Tell us how we can help you or how you'd like to get involved..." data-oid="contact-message-textarea"></textarea>
                        </div><button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 text-white px-8 py-4 rounded-lg font-medium transition-all transform hover:scale-105"
                            data-oid="contact-submit-button">Send Message</button>
                    </form>
                </div>
                <div data-oid="contact-info-section">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8" data-oid="contact-info-title">Get in Touch</h2>
                    <div class="space-y-8" data-oid="contact-info-details">
                        <div class="flex items-start space-x-4" data-oid="contact-address">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0"
                                data-oid="contact-address-icon"><svg class="w-6 h-6 text-blue-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" data-oid="contact-address-svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                        data-oid="uv:__0d"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" data-oid="_j7a04w"></path>
                                </svg></div>
                            <div data-oid="contact-address-details">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2" data-oid="contact-address-title">
                                    Our
                                    Address</h3>
                                <p class="text-gray-600 leading-relaxed" data-oid="contact-address-text">123 Hope
                                    Street<br data-oid="8kw0.-1">New York, NY 10001<br data-oid="3pi9u0z">United
                                    States
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4" data-oid="contact-phone">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0"
                                data-oid="contact-phone-icon"><svg class="w-6 h-6 text-green-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" data-oid="contact-phone-svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                        data-oid="g-zm_ao"></path>
                                </svg></div>
                            <div data-oid="contact-phone-details">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2" data-oid="contact-phone-title">
                                    Phone
                                    Number</h3>
                                <p class="text-gray-600" data-oid="contact-phone-text">+1 (555) 123-4567</p>
                                <p class="text-sm text-gray-500 mt-1" data-oid="contact-phone-hours">Monday - Friday,
                                    9:00
                                    AM - 6:00 PM EST</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4" data-oid="contact-email">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0"
                                data-oid="contact-email-icon"><svg class="w-6 h-6 text-blue-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" data-oid="contact-email-svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        data-oid="7bd7lwp"></path>
                                </svg></div>
                            <div data-oid="contact-email-details">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2" data-oid="contact-email-title">
                                    Email
                                    Address</h3>
                                <p class="text-gray-600" data-oid="contact-email-text">info@hopeforward.org</p>
                                <p class="text-sm text-gray-500 mt-1" data-oid="contact-email-response">We typically
                                    respond within 24 hours</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4" data-oid="contact-social">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0"
                                data-oid="contact-social-icon"><svg class="w-6 h-6 text-green-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" data-oid="contact-social-svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                                        data-oid="-i6o73f"></path>
                                </svg></div>
                            <div data-oid="contact-social-details">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4" data-oid="contact-social-title">
                                    Follow Us</h3>
                                <div class="flex space-x-4" data-oid="contact-social-links"><a href="#"
                                        class="w-10 h-10 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center text-white transition-colors"
                                        data-oid="contact-facebook"><svg class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" data-oid="contact-facebook-svg">
                                            <path fill-rule="evenodd"
                                                d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                                clip-rule="evenodd" data-oid="1lvy49."></path>
                                        </svg></a><a href="#"
                                        class="w-10 h-10 bg-blue-400 hover:bg-blue-500 rounded-full flex items-center justify-center text-white transition-colors"
                                        data-oid="contact-twitter"><svg class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" data-oid="contact-twitter-svg">
                                            <path
                                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                                                data-oid="100c:i5"></path>
                                        </svg></a><a href="#"
                                        class="w-10 h-10 bg-blue-700 hover:bg-blue-800 rounded-full flex items-center justify-center text-white transition-colors"
                                        data-oid="contact-linkedin"><svg class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" data-oid="contact-linkedin-svg">
                                            <path fill-rule="evenodd"
                                                d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                clip-rule="evenodd" data-oid="bg9dyd2"></path>
                                        </svg></a><a href="#"
                                        class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center text-white transition-colors"
                                        data-oid="contact-instagram"><svg class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" data-oid="contact-instagram-svg">
                                            <path fill-rule="evenodd"
                                                d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                                clip-rule="evenodd" data-oid="j_vi8s."></path>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50" data-oid="contact-map-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-oid="contact-map-container">
            <div class="text-center mb-12" data-oid="contact-map-header">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" data-oid="contact-map-title">Visit Our
                    Office</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-oid="contact-map-subtitle">Located in the
                    heart of
                    New York City, our office is open for meetings, volunteer orientations, and community events.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-oid="contact-map-wrapper">
                <div class="h-96 bg-gradient-to-br from-blue-100 to-green-100 flex items-center justify-center"
                    data-oid="contact-map-placeholder">
                    <div class="text-center" data-oid="contact-map-placeholder-content">
                        <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4"
                            data-oid="contact-map-icon"><svg class="w-10 h-10 text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" data-oid="contact-map-svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    data-oid="35b8tvx"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" data-oid="ikplleu"></path>
                            </svg></div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2" data-oid="contact-map-placeholder-title">
                            Interactive Map</h3>
                        <p class="text-gray-600" data-oid="contact-map-placeholder-text">Google Maps integration would
                            be
                            embedded here</p>
                        <p class="text-sm text-gray-500 mt-2" data-oid="contact-map-placeholder-address">123 Hope
                            Street,
                            New York, NY 10001</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
