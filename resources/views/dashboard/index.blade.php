<x-app-layout>

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

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <a href="/dashboard/category"
                class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:underline">Kategori
                Program</a>
            <p class="mt-2 text-3xl font-bold text-indigo-600">{{ $jumlahKategori }}</p>
        </div>

        <!-- Card 2 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <a href="/dashboard/programs"
                class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:underline">Program</a>
            <p class="mt-2 text-3xl font-bold text-green-600">{{ $jumlahProgram }}</p>
        </div>

        <!-- Card 3 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <a href="/dashboard/articles"
                class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:underline">Artikel</a>
            <p class="mt-2 text-3xl font-bold text-yellow-600">{{ $jumlahArtikel }}</p>
        </div>

        <!-- Card 4 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Donasi</h2>
            <p class="mt-2 text-3xl font-bold text-blue-600">{{ $jumlahDonation }}</p>
        </div>

        <!-- Card 5 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <a href="/dashboard/admin"
                class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:underline">Admin</a>
            <p class="mt-2 text-3xl font-bold text-red-600">{{ $jumlahAdmin }}</p>
        </div>
    </div>

    <!-- Table dummy -->
    {{-- <div class="mt-8 rounded-xl border border-gray-200 bg-white shadow-md dark:border-gray-800 dark:bg-neutral-900">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Recent Activities</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600 dark:text-gray-300">
                <thead class="bg-gray-50 text-gray-700 dark:bg-neutral-800 dark:text-gray-200">
                    <tr>
                        <th class="px-4 py-3">User</th>
                        <th class="px-4 py-3">Action</th>
                        <th class="px-4 py-3">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">John Doe</td>
                        <td class="px-4 py-3">Created a new project</td>
                        <td class="px-4 py-3">2025-09-07</td>
                    </tr>
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">Jane Smith</td>
                        <td class="px-4 py-3">Updated profile</td>
                        <td class="px-4 py-3">2025-09-06</td>
                    </tr>
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">Alex Johnson</td>
                        <td class="px-4 py-3">Completed a task</td>
                        <td class="px-4 py-3">2025-09-05</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
</x-app-layout>
