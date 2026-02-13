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

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Nama Donatur</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('name') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Nomor HP</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('phone') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('email') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Pilih Bank Tujuan</label>

                    <select name="bank_id" id="bank-select"
                        class="w-full p-2.5 text-sm rounded-lg border cursor-pointer @error('bank_id') border-red-500 bg-red-50 @else border-gray-300 @enderror">

                        <option value="">-- Pilih Bank --</option>

                        @foreach ($banks as $bank)
                            <option value="{{ $bank->id }}" data-number="{{ $bank->number }}"
                                data-holder="{{ $bank->holder }}">
                                {{ $bank->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('bank_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div id="bank-detail" class="hidden bg-gray-50 border rounded-lg p-4 mb-4 text-sm">

                    <p class="mb-2">
                        <strong>No Rekening:</strong>
                        <span id="bank-number" class="text-blue-600">
                        </span>
                        <button type="button" id="copy-btn"
                            class="ml-2 text-xs bg-gray-200 px-2 py-1 rounded hover:bg-gray-300  cursor-pointer">
                            Salin
                        </button>
                    </p>

                    <p><strong>Atas Nama:</strong> <span id="bank-holder"></span></p>

                    <p id="copy-message" class="text-green-600 text-xs mt-2 hidden">
                        Nomor rekening berhasil disalin
                    </p>
                </div>



                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Jumlah Donasi</label>
                    <input type="number" name="amount" value="{{ old('amount') }}"
                        class="w-full p-2.5 text-sm rounded-lg border
                        @error('amount') border-red-500 bg-red-50 @else border-gray-300 @enderror">
                    @error('amount')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium">Pesan / Doa</label>

                    <textarea id="message" name="message" rows="4" class="hidden">{{ old('message') }}</textarea>

                    <div id="editor" class="bg-white"></div>

                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>

                    <label class="block mb-2.5 text-sm font-medium text-heading">Upload Gambar</label>

                    <input type="hidden" name="proof" id="proof-hidden">

                    <input
                        class=" @error('proof') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                    @enderror cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                        id="proof" name="proof" type="file" accept="image/*">
                    @error('proof')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mt-4 hidden" id="camera-wrapper">
                    <video id="video" autoplay class="w-full max-w-md rounded-lg border"></video>
                    <canvas id="canvas" class="hidden"></canvas>
                </div>

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
        @vite(['resources/js/donation/confirm.js'])
    @endpush
</x-layout>
