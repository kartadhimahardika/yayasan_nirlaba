<x-layout>
    @push('style')
        <link href="filepond.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @endpush

    <div class="pt-24 px-6 md:px-16 lg:px-24">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-6">

            <h3 class="text-lg font-semibold text-gray-900 mb-6 text-center">
                Konfirmasi Donasi
            </h3>

            <form action="{{ route('donation.store') }}" method="POST" id="donation-form">
                @csrf

                {{-- NAMA --}}
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Nama Donatur</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('name') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- NO HP --}}
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Nomor HP</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('phone') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- EMAIL --}}
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('email') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- JUMLAH --}}
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Jumlah Donasi</label>
                    <input type="number" name="amount" value="{{ old('amount') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('amount') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('amount')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PESAN --}}
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Pesan / Doa</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full p-2.5 text-sm rounded-lg border
                        hidden @error('message') border-red-500 bg-red-50 @else border-gray-300 @enderror">{{ old('message') }}</textarea>
                    <div id="editor"></div>

                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- UPLOAD BUKTI --}}
                <div>
                    <label class="block mb-2.5 text-sm font-medium text-heading">Upload Bukti Transfer</label>
                    <input type="hidden" name="proof" id="proof-hidden">
                    <input
                        class=" @error('proof') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                        id="proof" name="proof" type="file" accept="image/*">
                    @error('proof')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <div class="flex gap-2">
                    <button type="submit"
                        class="px-6 py-2.5 bg-green-600 hover:bg-green-700 text-white text-sm rounded-lg">
                        Kirim
                    </button>

                    <a href="/donation" class="px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white text-sm rounded-lg">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>

    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

        {{-- Quill --}}
        <script>
            const quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Tulis pesan disini'
            });

            const donationFrom = document.querySelector('#donation-form');
            const donationBody = document.querySelector('#message');
            const quillEditor = document.querySelector('#editor');

            donationFrom.addEventListener('submit', function(e) {
                e.preventDefault();

                const content = quillEditor.children[0].innerHTML;
                donationBody.value = content;

                this.submit();
            })
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const input = document.querySelector('#proof');

                FilePond.create(input, {
                    server: {
                        process: {
                            url: "{{ route('donation.upload') }}",
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            onload: (response) => {
                                const data = JSON.parse(response);
                                document.getElementById('proof-hidden').value = data.path;
                                return data.path;
                            }
                        }
                    }
                });
            });
        </script>
    @endpush
</x-layout>
