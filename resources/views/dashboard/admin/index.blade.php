<x-app-layout>

    @if (Session::has('success'))
        <div id="toast-success"
            class="fixed top-3 left-1/2 -translate-x-1/2 z-50
           bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-200
           px-5 py-3 rounded-xl shadow-lg
           flex items-center gap-3 border border-green-500/40
           transform transition-all duration-500
           opacity-0 -translate-y-5">

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

    <div class="min-h-screen ">

        <div class="bg-white shadow-sm  border-gray-200 dark:bg-zinc-800 rounded-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-4 md:flex-row md:justify-between md:items-center py-6">
                    <div data-oid="tsb2sel">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Manajemen Admin</h1>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Manajeman admin anda disini
                        </p>
                    </div>
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Cari</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" name="keyword"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Cari nama atau nama pengguna" autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <a href="/dashboard/admin/create"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"><svg
                            class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>Tambah Admin</a>
                </div>
            </div>
        </div>

        <div class=" dark:bg-zinc-800 rounded-lg mt-4">
            <div class="bg-white shadow-sm rounded-lg overflow-hidden dark:bg-zinc-800">
                <div class="overflow-x-auto" data-oid="_4ijd0l">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-zinc-700">
                            <tr data-oid="i2_h0xe">
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="-di1jy4">#</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="-di1jy4">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="v2ox1eh">Nama Pengguna</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="o84nb.r">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="wifi6iy">Bergabung Pada</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-zinc-800">
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50 transition-colors duration-150 dark:hover:bg-zinc-700">
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid="2965f5r">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white "
                                            data-oid="5we3dmo">
                                            {{ $loop->iteration }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid="2965f5r">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white "
                                            data-oid="5we3dmo">
                                            {{ $user->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid="_i:46x.">
                                        <div class="text-sm text-gray-500 dark:text-white" data-oid="i0r.h39">
                                            {{ $user->username }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid=":k_z81e">
                                        <div class="text-sm text-gray-500 dark:text-white">
                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid=":k_z81e">
                                        <div class="text-sm text-gray-500 dark:text-white">
                                            {{ $user->created_at->format('d F Y') }}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @if ($users->hasPages())
                <div class="bg-white px-4 py-3 mt-4 rounded-lg shadow-sm border border-gray-200 dark:bg-zinc-800">
                    {{ $users->onEachSide(1)->withQueryString()->links() }}
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
