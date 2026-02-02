@push('style')
    <link href="filepond.css" rel="stylesheet" />
    {{-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" /> --}}
    {{-- <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" /> --}}
@endpush

<form method="post" action="{{ route('profile.update') }}" class="space-y-6" enctype="multipart/form-data">
    @csrf
    @method('patch')

    <div>
        <label for="name" class="block font-medium text-gray-700">Nama</label>
        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="name" class="block font-medium text-gray-700">Username</label>
        <input id="username" name="username" type="text" value="{{ old('username', $user->username) }}"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('username')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="block font-medium text-gray-700">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- upload avatar --}}
    <div>

        <label class="block mb-2.5 text-sm font-medium text-heading" for="avatar">Upload avatar</label>
        <input
            class=" @error('avatar')
                       bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
            id="avatar" name="avatar" type="file" accept="image/*">
        @error('avatar')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <img class="w-14 h-14 rounded-full" src="{{ $user->avatar ?? asset('images/avatar.jpg') }}"
            alt="{{ $user->name }}" id="avatar-preview">
    </div>

    <div class="flex justify-end">
        <button type="submit" class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            Simpan Perubahan
        </button>
    </div>
</form>

@push('script')
    <script>
        const input = document.getElementById('avatar');
        const previewPhoto = () => {
            const file = input.files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('avatar-preview');
                fileReader.onload = function(event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }
        input.addEventListener("change", previewPhoto);
    </script>
    {{-- <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script> --}}
    {{-- <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script> --}}
    {{-- <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script> --}}
    {{-- <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script> --}}
    {{-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> --}}
    {{-- <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script> --}}

    {{-- <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        FilePond.registerPlugin(FilePondPluginFileValidateType);
        FilePond.registerPlugin(FilePondPluginFileValidateSize);
        FilePond.registerPlugin(FilePondPluginImageTransform);
        FilePond.registerPlugin(FilePondPluginImageResize);
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputElement = document.querySelector('#avatar');

            if (!inputElement) return;

            FilePond.create(inputElement, {
                acceptedFileTypes: ['image/*'],
                maxFileSize: '5MB',
                imageResizeTargetWidth: 600,
                imageResizeMode: 'contain',
                imageResizeUpscale: false,
                server: {
                    url: "{{ route('profile.upload') }}",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            });
        });
    </script>
@endpush
