<x-layout>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dedicated professionals working tirelessly to create positive change in communities worldwide.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($teams as $team)
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-8 text-center">
                        <div class="w-40 h-52 mx-auto mb-6">
                            <img src="/images/unsplash.jpg" alt="{{ $team->name }}"
                                class="w-full h-full object-cover mx-auto shadow rounded-lg">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $team->name }}</h3>
                        <p class="text-blue-600 font-medium mb-4">{{ $team->position }}</p>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $team->bio }}</p>
                    </div>
                @endforeach
            </div>
            <div class="mt-12">
                {{ $teams->links() }}
            </div>
        </div>
    </section>
</x-layout>
