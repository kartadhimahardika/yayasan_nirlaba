<x-app-layout>
    <div class="relative bg-white rounded-lg shadow-sm dark:bg-zinc-800">
        <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Edit Kategori
            </h3>
        </div>

        <form action="/dashboard/category/{{ $category->slug }}" method="POST" class="p-4 md:p-5">
            @csrf
            @method('PATCH')
            <div class="mb-4 col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Kategori</label>
                <input type="text" name="name" id="name"
                    class="@error('name')
                       bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Tulis judul program" autofocus autocomplete="off"
                    value="{{ old('name') ?? $category->name }}">
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

    </div>
    <div class="mt-4 flex gap-2">
        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 text-sm font-medium rounded-lg bg-blue-700 text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-colors duration-200 cursor-pointer dark:bg-transparent dark:text-blue-400 dark:border dark:border-blue-400/40 dark:hover:bg-white/10 dark:focus:ring-blue-800">
            Simpan
        </button>

        <a href="/dashboard/category"
            class="text-white inline-flex items-center gap-1 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-transparent dark:text-red-400 dark:border dark:border-red-400/40 dark:hover:bg-white/10 dark:focus:ring-red-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            Batal
        </a>
    </div>
    </form>
    </div>
</x-app-layout>
