<x-layout>
    <section id="programs" class="py-24 bg-gradient-to-br from-blue-50 via-white to-green-50" data-oid="j21plgo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-oid="l7f15nb">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6" data-oid="-vjvgc0">Our<!-- --> <span
                    class="text-blue-600" data-oid="7j_dfke">Programs</span></h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed" data-oid="37sqn87">
                Comprehensive initiatives designed to create sustainable change and empower communities worldwide
                through education, healthcare, and economic development.</p>
        </div>
    </section>


    <section class="py-20 bg-white" data-oid="programs-grid-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-oid="programs-grid-container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12" data-oid="programs-main-grid">

                @foreach ($programs as $program)
                    <!-- Program Card 1 -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow"
                        data-oid="program-card">

                        <!-- Foto -->
                        <div class="h-64 w-full overflow-hidden" data-oid="program-photo">
                            <img src="{{ $program->photo }}" alt="Education Program" class="w-full h-full object-cover">
                        </div>

                        <!-- Konten -->
                        <div class="p-8" data-oid="program-content">
                            <span
                                class="inline-block bg-blue-100 text-blue-700 text-sm font-medium px-3 py-1 rounded-full mb-3"
                                data-oid="program-category">
                                {{ $program->categoryProgram->name }}
                            </span>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4" data-oid="program-title">
                                {{ $program->title }}
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed" data-oid="program-description">
                                {!! Str::limit(strip_tags($program->description), 100) !!}
                            </p>
                            <button
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-medium transition-colors"
                                data-oid="program-button">
                                Learn More
                            </button>
                        </div>
                    </div>
                @endforeach
                {{ $programs->links() }}

            </div>
        </div>
    </section>
</x-layout>

{{-- <section class="py-20 bg-white" data-oid="programs-grid-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-oid="programs-grid-container">
            <div class="grid lg:grid-cols-2 gap-12" data-oid="programs-main-grid">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow"
                    data-oid="education-card">
                    <div class="h-64 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center"
                        data-oid="education-image">
                        <div class="text-center" data-oid="education-placeholder">
                            <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4"
                                data-oid="education-icon"><svg class="w-10 h-10 text-white" fill="currentColor"
                                    viewBox="0 0 20 20" data-oid="education-svg">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
                                        data-oid="o_5-xdz"></path>
                                </svg></div><span class="text-blue-700 font-medium" data-oid="education-label">Education
                                Program</span>
                        </div>
                    </div>
                    <div class="p-8" data-oid="education-content">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4" data-oid="education-title">Education Access
                        </h3>
                        <p class="text-gray-600 mb-6 leading-relaxed" data-oid="education-description">Building schools,
                            training teachers, and providing scholarships to ensure every child has access to quality
                            education. Our comprehensive approach includes infrastructure development, curriculum
                            design, and community engagement.</p><button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-medium transition-colors"
                            data-oid="education-button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

{{-- <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow"
        data-oid="healthcare-card">
        <div class="h-64 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center"
            data-oid="healthcare-image">
            <div class="text-center" data-oid="healthcare-placeholder">
                <div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4"
                    data-oid="healthcare-icon"><svg class="w-10 h-10 text-white" fill="currentColor"
                        viewBox="0 0 20 20" data-oid="healthcare-svg">
                        <path fill-rule="evenodd"
                            d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                            clip-rule="evenodd" data-oid="2y.n5f0"></path>
                    </svg></div><span class="text-green-700 font-medium"
                    data-oid="healthcare-label">Healthcare Program</span>
            </div>
        </div>
        <div class="p-8" data-oid="healthcare-content">
            <h3 class="text-2xl font-bold text-gray-900 mb-4" data-oid="healthcare-title">Healthcare Support
            </h3>
            <p class="text-gray-600 mb-6 leading-relaxed" data-oid="healthcare-description">Mobile clinics,
                health education, and medical supply distribution to underserved communities. We focus on
                preventive care, maternal health, and building local healthcare capacity for long-term
                sustainability.</p><button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-full font-medium transition-colors"
                data-oid="healthcare-button">Learn More</button>
        </div>
    </div>
    <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow"
        data-oid="economic-card">
        <div class="h-64 bg-gradient-to-br from-blue-200 to-green-200 flex items-center justify-center"
            data-oid="economic-image">
            <div class="text-center" data-oid="economic-placeholder">
                <div class="w-20 h-20 bg-gradient-to-r from-blue-600 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4"
                    data-oid="economic-icon"><svg class="w-10 h-10 text-white" fill="currentColor"
                        viewBox="0 0 20 20" data-oid="economic-svg">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" data-oid="r8vjg57"></path>
                        <path fill-rule="evenodd"
                            d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                            clip-rule="evenodd" data-oid=":qt6nck"></path>
                    </svg></div><span class="text-gray-700 font-medium" data-oid="economic-label">Economic
                    Program</span>
            </div>
        </div>
        <div class="p-8" data-oid="economic-content">
            <h3 class="text-2xl font-bold text-gray-900 mb-4" data-oid="economic-title">Economic Development
            </h3>
            <p class="text-gray-600 mb-6 leading-relaxed" data-oid="economic-description">Microfinance, job
                training, and small business support to create sustainable livelihoods. Our programs include
                financial literacy, entrepreneurship training, and access to capital for community-driven
                economic growth.</p><button
                class="bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 text-white px-6 py-3 rounded-full font-medium transition-all"
                data-oid="economic-button">Learn More</button>
        </div>
    </div>
    <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow"
        data-oid="emergency-card">
        <div class="h-64 bg-gradient-to-br from-red-200 to-orange-200 flex items-center justify-center"
            data-oid="emergency-image">
            <div class="text-center" data-oid="emergency-placeholder">
                <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4"
                    data-oid="emergency-icon"><svg class="w-10 h-10 text-white" fill="currentColor"
                        viewBox="0 0 20 20" data-oid="emergency-svg">
                        <path fill-rule="evenodd"
                            d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                            clip-rule="evenodd" data-oid="v9vtejd"></path>
                    </svg></div><span class="text-red-700 font-medium"
                    data-oid="emergency-label">Emergency Relief</span>
            </div>
        </div>
        <div class="p-8" data-oid="emergency-content">
            <h3 class="text-2xl font-bold text-gray-900 mb-4" data-oid="emergency-title">Emergency Relief
            </h3>
            <p class="text-gray-600 mb-6 leading-relaxed" data-oid="emergency-description">Rapid response
                to natural disasters and humanitarian crises. We provide immediate aid including food,
                water, shelter, and medical supplies, while also focusing on community resilience and
                disaster preparedness.</p><button
                class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-full font-medium transition-colors"
                data-oid="emergency-button">Learn More</button>
        </div>
    </div> --}}
