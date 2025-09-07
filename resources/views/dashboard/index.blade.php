<x-app-layout>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Users</h2>
            <p class="mt-2 text-3xl font-bold text-indigo-600">1,250</p>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Compared to last month: +12%</p>
        </div>

        <!-- Card 2 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Active Projects</h2>
            <p class="mt-2 text-3xl font-bold text-green-600">32</p>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Ongoing this week</p>
        </div>

        <!-- Card 3 -->
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-md dark:border-gray-800 dark:bg-neutral-900">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Revenue</h2>
            <p class="mt-2 text-3xl font-bold text-yellow-600">$8,640</p>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">This quarter</p>
        </div>
    </div>

    <!-- Table dummy -->
    <div class="mt-8 rounded-xl border border-gray-200 bg-white shadow-md dark:border-gray-800 dark:bg-neutral-900">
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
    </div>
</x-app-layout>
