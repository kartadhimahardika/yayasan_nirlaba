<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="min-h-screnn bg-white">
        <x-navbar />


        {{ $slot }}


        <footer class="bg-gray-900 text-white py-16" data-oid="cbcqr59">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-oid="4vs:e28">
                <div class="grid md:grid-cols-4 gap-8" data-oid="7aiv55n">
                    <div data-oid="4hw2:.k">
                        <div class="flex items-center mb-4" data-oid="-3-9pif">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3"
                                data-oid="m:ixdjg"><span class="text-white font-bold text-sm"
                                    data-oid="we6xo1i">H</span></div><span class="text-xl font-semibold"
                                data-oid="6tps3zl">HopeForward</span>
                        </div>
                        <p class="text-gray-400 mb-6" data-oid="7x3ruta">Building a better tomorrow through
                            sustainable community development.</p>
                        <div class="flex space-x-4" data-oid="jwlq6qt">
                            <div class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 cursor-pointer transition-colors"
                                data-oid=":i:i75-"><span class="text-xs" data-oid="_.711lp">f</span></div>
                            <div class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 cursor-pointer transition-colors"
                                data-oid="rv-8kw_"><span class="text-xs" data-oid="_d:3d:c">t</span></div>
                            <div class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 cursor-pointer transition-colors"
                                data-oid="-fizrdb"><span class="text-xs" data-oid=".f:mrhk">in</span></div>
                        </div>
                    </div>
                    <div data-oid="p:y_b4i">
                        <h3 class="text-lg font-semibold mb-4" data-oid="yw8mhdm">Programs</h3>
                        <ul class="space-y-2 text-gray-400" data-oid="21k7dbn">
                            <li data-oid="k-5b8h."><a href="#" class="hover:text-white"
                                    data-oid="5_wh3uh">Education</a></li>
                            <li data-oid="zf18:ox"><a href="#" class="hover:text-white"
                                    data-oid="kj__k1j">Healthcare</a></li>
                            <li data-oid="i-cdbyz"><a href="#" class="hover:text-white"
                                    data-oid="-3cjf9x">Economic Development</a></li>
                            <li data-oid="r.f9acn"><a href="#" class="hover:text-white"
                                    data-oid="fpgtluf">Emergency Relief</a></li>
                        </ul>
                    </div>
                    <div data-oid="hjk2s_s">
                        <h3 class="text-lg font-semibold mb-4" data-oid="nwnjhvn">Get Involved</h3>
                        <ul class="space-y-2 text-gray-400" data-oid="vjk3de3">
                            <li data-oid="nhkonfs"><a href="#" class="hover:text-white"
                                    data-oid="x5oxubj">Donate</a></li>
                            <li data-oid="9u1x222"><a href="#" class="hover:text-white"
                                    data-oid="g1:8:9z">Volunteer</a></li>
                            <li data-oid="t7ow4rj"><a href="#" class="hover:text-white"
                                    data-oid="m7j68n6">Partner</a></li>
                            <li data-oid="h77_e1:"><a href="#" class="hover:text-white"
                                    data-oid="n0hpbn8">Fundraise</a></li>
                        </ul>
                    </div>
                    <div data-oid=":oiee70">
                        <h3 class="text-lg font-semibold mb-4" data-oid="zs6so36">Contact</h3>
                        <ul class="space-y-2 text-gray-400" data-oid="k4w0.8d">
                            <li data-oid="ntpfv0-">info@hopeforward.org</li>
                            <li data-oid="_9ax8a-">+1 (555) 123-4567</li>
                            <li data-oid="wdlkl.1">123 Hope Street<br data-oid="80_fpm-">New York, NY 10001</li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400" data-oid="03m80f9">
                    <p data-oid="q.qg:3x">© 2024 HopeForward. All rights reserved. | Privacy Policy | Terms of Service
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
