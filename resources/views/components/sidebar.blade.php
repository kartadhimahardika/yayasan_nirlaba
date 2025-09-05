<div class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg">

    <!-- Logo / Title -->
    <div class="flex items-center justify-center h-16 px-4 border-b border-gray-200">
        <h1 class="text-xl font-semibold text-gray-800">Admin Panel</h1>
    </div>

    <!-- Navigation -->
    <nav class="mt-8">
        <a href="{{ route('dashboard') }}"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition">
            <span class="text-lg mr-3">📊</span>
            <span class="font-medium">Dashboard</span>
        </a>
        <a href="{{ url('/dashboard/programs') }}"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition">
            <span class="text-lg mr-3">📚</span>
            <span class="font-medium">Programs</span>
        </a>
        <a href="#"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition">
            <span class="text-lg mr-3">👥</span>
            <span class="font-medium">Users</span>
        </a>
        <a href="#"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition">
            <span class="text-lg mr-3">⚙️</span>
            <span class="font-medium">Settings</span>
        </a>
        <a href="#"
            class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition">
            <span class="text-lg mr-3">🚪</span>
            <span class="font-medium">Logout</span>
        </a>
    </nav>
</div>
