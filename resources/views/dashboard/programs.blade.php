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
                    <button
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
                        data-oid="7okjt1-"><svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" data-oid="5bg9z1f">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" data-oid="f0.pu5-"></path>
                        </svg>Add New Program</button>
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
                                    data-oid="-di1jy4">Judul Program</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="v2ox1eh">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="o84nb.r">Dibuat Pada</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="wifi6iy">Isi</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                                    data-oid="7agcw93">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-zinc-800">
                            @foreach ($programs as $program)
                                <tr class="hover:bg-gray-50 transition-colors duration-150 dark:hover:bg-zinc-700">
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid="2965f5r">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white "
                                            data-oid="5we3dmo">
                                            {!! Str::limit(strip_tags($program->title), 30) !!}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid="_i:46x.">
                                        <div class="text-sm text-gray-500 dark:text-white" data-oid="i0r.h39">
                                            {{ $program->categoryProgram->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap" data-oid=":k_z81e">
                                        <div class="text-sm text-gray-500 dark:text-white">
                                            {{ $program->created_at->format('d F Y') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-mediu">
                                            {!! Str::limit(strip_tags($program->description), 50) !!}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex items-center justify-end space-x-2" data-oid="nd2:jl1"><button
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
                                            <button
                                                class="inline-flex items-center px-3 py-1.5 border border-red-300 text-xs font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200"
                                                data-oid="_k-fdfx"><svg class="w-4 h-4 mr-1" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24" data-oid=".6sy:0y">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                        data-oid="8qabq-x"></path>
                                                </svg>Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="bg-white px-4 py-3 flex items-center justify-between  border-gray-200 sm:px-6 mt-4 rounded-lg shadow-sm dark:bg-zinc-800">
                {{ $programs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
