<x-guest-layout>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div
            class="group flex max-w-sm flex-col overflow-hidden rounded-sm text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <div class="flex flex-col items-center gap-4 p-6">
                <h3 class="text-balance text-xl font-bold text-neutral-900 lg:text-2xl dark:text-white">
                    Login
                </h3>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="name"
                        class="@error('user_cred')
                        text-red-500
                        @enderror flex w-fit items-center gap-1 pl-0.5 text-sm">

                        @error('user_cred')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true" fill="currentColor"
                                class="h-4 w-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                        @enderror
                        Email
                        atau
                        Username
                    </label>
                    <input id="name" type="text"
                        class="@error('user_cred') border-red-500 @enderror w-full rounded-sm border bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                        name="user_cred" />
                    @error('user_cred')
                        <small class="pl-0.5 text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="password"
                        class="@error('password')
                        text-red-500
                    @enderror flex w-fit items-center gap-1 pl-0.5 text-sm">

                        @error('password')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true"
                                fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                        @enderror
                        Password
                    </label>
                    <input id="password" type="password"
                        class="@error('password') border-red-500 @enderror w-full rounded-sm border bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                        name="password" />
                    @error('password')
                        <small class="pl-0.5 text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mt-4 flex w-full items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="shadow-xs rounded-sm border-gray-300 text-indigo-600 focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="focus:outline-hidden rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            href="{{ route('password.request') }}">
                            Lupa
                            Password?
                        </a>
                    @endif
                </div>

                <button type="submit"
                    class="cursor-pointer whitespace-nowrap rounded-sm border border-sky-500 bg-transparent px-4 py-2 text-center text-sm font-medium tracking-wide text-sky-500 transition hover:bg-sky-600 hover:text-white hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:border-sky-500 dark:text-sky-500 dark:focus-visible:outline-sky-500">
                    Login
                </button>

                {{-- <div class="text-sm">
                    <span>Belum Punya Akun? <a href="{{ route('register') }}" class="text-sky-500">Daftar</a></span>
                </div> --}}

            </div>
        </div>

    </form>
</x-guest-layout>
