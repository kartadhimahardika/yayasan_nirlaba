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


        <footer class="bg-gray-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3"><span
                                    class="text-white font-bold text-sm">YN</span></div><span
                                class="text-xl font-semibold">Yayasan Nirlaba</span>
                        </div>
                        <p class="text-gray-400 mb-6">Building a better tomorrow through
                            sustainable community development.</p>
                        <div class="flex space-x-4">
                            <div
                                class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 cursor-pointer transition-colors">
                                <span class="text-xs">f</span>
                            </div>
                            <div
                                class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 cursor-pointer transition-colors">
                                <span class="text-xs">t</span>
                            </div>
                            <div
                                class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 cursor-pointer transition-colors">
                                <span class="text-xs">in</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Nirlaba Info</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="/" class="hover:text-white">Home</a></li>
                            <li><a href="/about" class="hover:text-white">About</a></li>
                            <li><a href="/programs" class="hover:text-white">Program</a></li>
                            <li><a href="/articles" class="hover:text-white">Berita</a></li>
                            <li><a href="/contact" class="hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Get Involved</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white">Donate</a></li>
                            <li><a href="#" class="hover:text-white">Volunteer</a></li>
                            <li><a href="#" class="hover:text-white">Partner</a></li>
                            <li><a href="#" class="hover:text-white">Fundraise</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contact</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li>info@hopeforward.org</li>
                            <li>+1 (555) 123-4567</li>
                            <li>123 Hope Street<br>New York, NY 10001</li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                    <p>© 2024 HopeForward. All rights reserved. | Privacy Policy | Terms of Service
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
