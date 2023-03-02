<div class="flex items-center justify-between py-5 lg:py-6">
    <div class="flex items-center space-x-1">
        <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
            User Card
        </h2>
        <div x-data="usePopper({ placement: 'bottom-start', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false" class="inline-flex">
            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                <i class="fas fa-chevron-down"></i>
            </button>

            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                    <ul>
                        <li>
                            <a href="#"
                                class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                                <span> New User</span></a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span>Export Users</span></a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Setting</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center space-x-2">
        <label class="relative hidden sm:flex">
            <input
                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Search users..." type="text" />
            <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                </svg>
            </span>
        </label>

        <div class="flex">
            <button
                x-tooltip.success="'importer éleves'"
                class="mr-2 btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
            </svg>
            </button>
            <button wire:click="create"
                x-tooltip.secondary="'créer'"
                class="mr-2 btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            </button>
            <button
                x-tooltip.primary="'corbeille'"
                class="ml-2 btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>
        </div>
    </div>
</div>
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Konnor Guzman
        </h3>
        <p class="text-xs+">Senior Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(01) 22 888 4444</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>konnor@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.konnor.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Travis Fuller
        </h3>
        <p class="text-xs+">Web designer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(095)-800-8313</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>travis@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.travis-fuller.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Alfredo Elliott
        </h3>
        <p class="text-xs+">React Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(374)-961-6674</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>alfredo@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.alfredo.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Derrick Simmons
        </h3>
        <p class="text-xs+">React Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(350)-813-3861</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>derrick@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.derrick-sims.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Katrina West
        </h3>
        <p class="text-xs+">Android Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(052)-747-5542</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>katrina@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.katrina.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Henry Curtis
        </h3>
        <p class="text-xs+">Laravel Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(675)-975-0083</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>henry@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.henry.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Raul Bradley
        </h3>
        <p class="text-xs+">Laravel Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(381)-627-2351</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>raul-brad@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.bradley.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Samantha Shelton
        </h3>
        <p class="text-xs+">Backed Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(727)-810-3880</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>saman2@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.samantha.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Corey Evans
        </h3>
        <p class="text-xs+">Frontend Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(723)-756-2206</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>corey@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.corey-evans.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Lance Tucker
        </h3>
        <p class="text-xs+">NodeJs Developer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(040)-129-7702</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>lance@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.lance.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Anthony Jensen
        </h3>
        <p class="text-xs+">Web Designer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(631)-475-8183</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>jensen@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.jensen.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
    <div class="card grow items-center p-4 sm:p-5">
        <div class="avatar h-20 w-20">
            <img class="rounded-full " src="{{asset('images/200x200.png')}}" alt="avatar" />
            <div
                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
            </div>
        </div>
        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
            Joe Perkins
        </h3>
        <p class="text-xs+">UI/UX Designer</p>
        <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
        <div class="grow space-y-4">
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-phone text-xs"></i>
                </div>
                <p>(832)-013-3691</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-envelope text-xs"></i>
                </div>
                <p>perkins@example.com</p>
            </div>
            <div class="flex items-center space-x-4">
                <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <i class="fa fa-link text-xs"></i>
                </div>
                <p>www.joe-perkins.com</p>
            </div>
        </div>
        <button
            class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span> Profile </span>
        </button>
    </div>
</div>
