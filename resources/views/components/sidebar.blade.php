<div
    class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center h-16 px-4 border-b border-gray-200">
        <h1 class="text-xl font-semibold text-gray-800">Yayasan Nirlaba</h1>
    </div>
    <nav class="mt-8">
        <a href="/dashboard"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200 group { {{ Route::is('dashboard') ? 'bg-gray-200 text-gray-900 font-semibold' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}">
            <span class="text-lg mr-3 group-hover:scale-110 transition-transform duration-200">📊</span>
            <span class="font-medium">Dashboard</span>
        </a>
        <a href="/dashboard/programs"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200 group  {{ Route::is('dashboardPrograms') ? 'bg-gray-200 text-gray-900 font-semibold' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}">
            <span class="text-lg mr-3 group-hover:scale-110 transition-transform duration-200">📚</span><span
                class="font-medium">Programs</span>
        </a>
        <a href="#"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200 group">
            <span class="text-lg mr-3 group-hover:scale-110 transition-transform duration-200">👥</span>
            <span class="font-medium">Users</span>
        </a>
        <a href="#"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-200 group"><span
                class="text-lg mr-3 group-hover:scale-110 transition-transform duration-200">⚙️</span><span
                class="font-medium">Settings</span>
        </a>
    </nav>
</div>
