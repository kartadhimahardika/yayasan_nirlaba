<x-app-layout>
    <div class="min-h-screen ">

        <div class="bg-white shadow-sm  border-gray-200 dark:bg-zinc-800 rounded-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div data-oid="tsb2sel">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Program Management</h1>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Manage and organize your educational
                            programs
                        </p>
                    </div>
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
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
                                    placeholder="Search" autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <a href="/dashboard/programs/create"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
                        data-oid="7okjt1-"><svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" data-oid="5bg9z1f">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" data-oid="f0.pu5-"></path>
                        </svg>Add New Program</a>
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
                                    data-oid="wifi6iy">Role</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="wifi6iy">Bergabung Pada</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="wifi6iy">Aksi</th>
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
                                    <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-mediu">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid=":k_z81e">
                                        <div class="text-sm text-gray-500 dark:text-white">
                                            {{ $user->created_at->format('d F Y') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex items-center justify-start space-x-2" data-oid="nd2:jl1">

                                            <button
                                                class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"><svg
                                                    class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" data-oid="zt4q211">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                                        data-oid="xrq.ppx"></path>
                                                </svg>
                                                Edit
                                            </button>

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
