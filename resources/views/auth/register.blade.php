<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div
            class="group flex max-w-sm flex-col overflow-hidden rounded-sm text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <div class="flex flex-col items-center gap-4 p-6">
                <div class="flex items-center justify-center text-center">
                    <h3 class="text-balance text-xl font-bold text-neutral-900 lg:text-2xl dark:text-white">
                        Register
                    </h3>
                </div>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="name"
                        class="@error('name')
                        text-red-500
                        @enderror flex w-fit items-center gap-1 pl-0.5 text-sm">

                        @error('name')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true"
                                fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                        @enderror
                        Name
                    </label>
                    <input id="name" type="text"
                        class="@error('name') border-red-500 @enderror w-full rounded-sm border bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                        name="name" value="{{ old('name') }}" />
                    @error('name')
                        <small class="pl-0.5 text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="username"
                        class="@error('username')
                        text-red-500
                        @enderror flex w-fit items-center gap-1 pl-0.5 text-sm">

                        @error('username')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true"
                                fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                        @enderror
                        Username
                    </label>
                    <input id="username" type="text"
                        class="@error('username') border-red-500 @enderror w-full rounded-sm border bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                        name="username" value="{{ old('username') }}" />
                    @error('username')
                        <small class="pl-0.5 text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="email"
                        class="@error('email')
                        text-red-500
                        @enderror flex w-fit items-center gap-1 pl-0.5 text-sm">

                        @error('email')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true"
                                fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                        @enderror
                        Email
                    </label>
                    <input id="email" type="text"
                        class="@error('email') border-red-500 @enderror w-full rounded-sm border bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                        name="email" value="{{ old('email') }}" />
                    @error('email')
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

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="password_confirmation"
                        class="@error('password_confirmation')
                        text-red-500
                        @enderror flex w-fit items-center gap-1 pl-0.5 text-sm">

                        @error('password_confirmation')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true"
                                fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                        @enderror
                        Password Confirmation
                    </label>
                    <input id="password_confirmation" type="password"
                        class="@error('password_confirmation') border-red-500 @enderror w-full rounded-sm border bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                        name="password_confirmation" />
                    @error('password_confirmation')
                        <small class="pl-0.5 text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="text-sm">
                    <span>Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-sky-500">
                            Login
                        </a>
                    </span>
                </div>

                <button type="submit"
                    class="cursor-pointer whitespace-nowrap rounded-sm border border-sky-500 bg-transparent px-4 py-2 text-center text-sm font-medium tracking-wide text-sky-500 transition hover:bg-sky-600 hover:text-white hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:border-sky-500 dark:text-sky-500 dark:focus-visible:outline-sky-500">
                    Register
                </button>
            </div>
        </div>

    </form>
</x-guest-layout>
