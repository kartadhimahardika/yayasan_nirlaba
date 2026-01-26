{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout>
    <div
        class="max-w-md mx-auto bg-white dark:bg-neutral-900
                border border-gray-200 dark:border-gray-800
                rounded-xl shadow-md p-6">

        <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
            Lupa Password
        </h1>

        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Masukkan alamat email kamu. Kami akan mengirimkan link untuk
            mengatur ulang password.
        </p>

        {{-- Status sukses --}}
        @if (session('status'))
            <div
                class="mt-4 rounded-lg bg-green-50 border border-green-200
                        text-green-700 px-4 py-3 text-sm">
                {{ session('status') }}
            </div>
        @endif

        {{-- Error --}}
        @if ($errors->any())
            <div
                class="mt-4 rounded-lg bg-red-50 border border-red-200
                        text-red-700 px-4 py-3 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="mt-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Email
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 block w-full rounded-lg border-gray-300
                           focus:border-indigo-500 focus:ring-indigo-500
                           dark:bg-neutral-800 dark:border-gray-700 dark:text-white">
            </div>

            <div class="mt-6 flex items-center justify-between">
                <a href="{{ route('login') }}"
                    class="text-sm text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                    ← Kembali ke login
                </a>

                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5
                           rounded-lg bg-indigo-600 text-white
                           text-sm font-semibold
                           hover:bg-indigo-700
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Kirim Link Reset
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
