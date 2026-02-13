<x-app-layout>

    @push('style')
        <link href="filepond.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @endpush
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow-sm dark:bg-zinc-800">
        <!-- Modal header -->
        <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Edit Berita
            </h3>
        </div>
        <!-- Modal body -->
        <form action="/dashboard/articles/{{ $article->slug }}" method="POST" class="p-4 md:p-5" id="article-form">
            @csrf
            @method('PATCH')
            <div class="mb-4 col-span-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" name="title" id="title"
                    class="@error('title')
                       bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Tulis judul artikel" autofocus autocomplete="off"
                    value="{{ old('title') ?? $article->title }}">
                @error('title')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                    Artikel</label>
                <textarea id="description" name="description" rows="4"
                    class="hidden @error('description')
                       bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tulis deskripsi article disini">{{ old('description') ?? $article->description }}</textarea>
                <div id="editor">{!! old('description') ?? $article->description !!}</div>
                @error('description')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                </div>
            @enderror

            <div>
                <label class="block mb-2.5 text-sm font-medium text-heading">Upload Gambar</label>
                <input type="hidden" name="photo" id="photo-hidden">
                <input
                    class=" @error('photo') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                    id="photo" name="photo" type="file" accept="image/*">
                @error('photo')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4 flex gap-2">
                <button type="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
                    Simpan
                </button>
                <a href="/dashboard/articles"
                    class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 cursor-pointer">
                    Batal
                </a>
            </div>
        </form>
    </div>

    @push('script')
        {{-- Quill --}}
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

        <script>
            const quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Tulis deskripsi article disini'
            });

            const articleFrom = document.querySelector('#article-form');
            const articleBody = document.querySelector('#description');
            const quillEditor = document.querySelector('#editor');

            articleFrom.addEventListener('submit', function(e) {
                e.preventDefault();

                const content = quillEditor.children[0].innerHTML;
                articleBody.value = content;

                this.submit();
            })
        </script>

        {{-- Gambar --}}
        <script>
            const input = document.getElementById('photo');
            const previewPhoto = () => {
                const file = input.files;
                if (file) {
                    const fileReader = new FileReader();
                    const preview = document.getElementById('photo-preview');
                    fileReader.onload = function(event) {
                        preview.setAttribute('src', event.target.result);
                    }
                    fileReader.readAsDataURL(file[0]);
                }
            }
            input.addEventListener("change", previewPhoto);
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const inputElement = document.querySelector('#photo');

                if (!inputElement) return;

                FilePond.create(inputElement, {
                    server: {
                        process: {
                            url: "{{ route('article.upload') }}",
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            onload: (response) => {
                                const data = JSON.parse(response);
                                document.getElementById('photo-hidden').value = data.path;
                                return data.path;
                            }
                        }
                    }
                });

            });
        </script>
    @endpush
</x-app-layout>
