{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-10">



            {{-- Update Profile --}}
            <div class="bg-white shadow-md rounded-xl p-8">
                <h3 class="text-lg font-semibold mb-6">Informasi Profil</h3>
                @include('profile.partials.update-profile-information-form')
            </div>

            {{-- Update Password --}}
            <div class="bg-white shadow-md rounded-xl p-8">
                <h3 class="text-lg font-semibold mb-6">Ubah Password</h3>
                @include('profile.partials.update-password-form')
            </div>

            {{-- Delete User --}}
            <div class="bg-white shadow-md rounded-xl p-8">
                <h3 class="text-lg font-semibold mb-6 text-red-600">Hapus Akun</h3>
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>
</x-app-layout>
