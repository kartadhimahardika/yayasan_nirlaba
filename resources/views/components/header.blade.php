<nav class="sticky top-0 z-10 flex items-center justify-between border-b border-neutral-300 bg-neutral-50 px-4 py-2 dark:border-neutral-700 dark:bg-neutral-900"
    aria-label="top navibation bar">

    <!-- sidebar toggle button for small screens  -->
    <button type="button" class="md:hidden inline-block text-neutral-600 dark:text-neutral-300"
        x-on:click="sidebarIsOpen = true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5" aria-hidden="true">
            <path
                d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z" />
        </svg>
        <span class="sr-only">sidebar toggle</span>
    </button>

    <!-- breadcrumbs  -->
    <nav class="hidden md:inline-block text-sm font-medium text-neutral-600 dark:text-neutral-300"
        aria-label="breadcrumb">
        <ol class="flex flex-wrap items-center gap-1">
            <li class="flex items-center gap-1">
                <a href="#" class="hover:text-neutral-900 dark:hover:text-white">Dashboard</a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                    stroke-width="2" class="size-4" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </li>
        </ol>
    </nav>

    {{-- Dark mode toggle --}}
    <div class="flex items-end gap-2">
        <div x-data="{ isOpen: false, openedWithKeyboard: false }" x-on:keydown.esc.window="isOpen = false, openedWithKeyboard = false"
            class="relative w-fit">
            <!-- Toggle Button -->
            <button type="button" x-on:click="isOpen = ! isOpen" x-on:keydown.space.prevent="openedWithKeyboard = true"
                x-on:keydown.enter.prevent="openedWithKeyboard = true"
                x-on:keydown.down.prevent="openedWithKeyboard = true"
                x-bind:class="isOpen || openedWithKeyboard ? 'text-neutral-900 dark:text-white' :
                    'text-neutral-600 dark:text-neutral-300'"
                x-bind:aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true"
                class="cursor-pointer inline-flex justify-center items-center aspect-square whitespace-nowrap rounded-full border border-primary bg-primary p-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
                <!-- Icon Light -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6" x-show="darkMode === 'light'">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>

                <!-- Icon Dark -->
                <svg x-show="darkMode === 'dark'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>
            <!-- Dropdown Menu -->
            <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard"
                x-on:click.outside="isOpen = false, openedWithKeyboard = false"
                x-on:keydown.down.prevent="$focus.wrap().next()" x-on:keydown.up.prevent="$focus.wrap().previous()"
                class="absolute top-11 flex w-fit min-w-32 flex-col divide-y divide-neutral-300 overflow-hidden rounded-sm border border-neutral-300 bg-neutral-50 dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-900"
                role="menu">
                <!-- Dropdown Section -->
                <div class="flex flex-col py-1.5">

                    <button x-on:click="darkMode = 'light'"
                        class="flex items-center gap-2 px-2 py-1.5 cursor-pointer dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            x-bind:class="{ 'border-2 border-red/50': darkMode === 'light' }"
                            class="w-6 h-6 p-1 text-gray-700 transition rounded-full cursor-pointer bg-gray-50 hover:bg-gray-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Light
                        <span class="sr-only">light</span>
                    </button>
                    <button x-on:click="darkMode = 'dark'"
                        class="flex items-center gap-2 px-2 py-1.5 cursor-pointer dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            x-bind:class="{ 'border-2 border-red/50': darkMode === 'dark' }"
                            class="w-6 h-6 p-1 text-gray-100 transition bg-gray-700 rounded-full cursor-pointer dark:hover:bg-gray-600"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                        Dark
                        <span class="sr-only">dark</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Profile Menu  -->
        <div x-data="{ userDropdownIsOpen: false }" class="relative" x-on:keydown.esc.window="userDropdownIsOpen = false">
            <button type="button"
                class="cursor-pointer flex w-full items-center rounded-sm gap-2 p-2 text-left text-neutral-600 hover:bg-black/5 hover:text-neutral-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-white dark:focus-visible:outline-white"
                x-bind:class="userDropdownIsOpen ? 'bg-black/10 dark:bg-white/10' : ''" aria-haspopup="true"
                x-on:click="userDropdownIsOpen = ! userDropdownIsOpen" x-bind:aria-expanded="userDropdownIsOpen">
                <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-7.webp"
                    class="size-8 object-cover rounded-sm" alt="avatar" aria-hidden="true" />
                <div class="hidden md:flex flex-col">
                    <span class="text-sm font-bold text-neutral-900 dark:text-white">
                        {{ Auth::user()->name }}
                    </span>
                    <span class="text-xs" aria-hidden="true">
                        {{ Auth::user()->username }}
                    </span>
                    <span class="sr-only">profile settings</span>
                </div>
            </button>

            <!-- menu -->
            <div x-cloak x-show="userDropdownIsOpen"
                class="absolute top-14 right-0 z-20 h-fit w-48 border divide-y divide-neutral-300 border-neutral-300 bg-white dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-950 rounded-sm"
                role="menu" x-on:click.outside="userDropdownIsOpen = false"
                x-on:keydown.down.prevent="$focus.wrap().next()" x-on:keydown.up.prevent="$focus.wrap().previous()"
                x-transition="" x-trap="userDropdownIsOpen">

                <div class="flex flex-col py-1.5">
                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-neutral-900 focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-white"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 shrink-0" aria-hidden="true">
                            <path
                                d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                        </svg>
                        <span>Profile</span>
                    </a>
                </div>

                <div class="flex flex-col py-1.5">
                    <a href="#"
                        class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-neutral-900 focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-white"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 shrink-0" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Settings</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-neutral-900 focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-white"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 shrink-0" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Payments</span>
                    </a>
                </div>

                <div class="flex flex-col py-1.5">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-neutral-900 focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-white"
                            role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="size-5 shrink-0" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Sign Out</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</nav>
