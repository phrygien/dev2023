<x-app-layout title="Permissions" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                {{ __('Permissions') }}
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">{{ __('Liste') }}</a>
                </li>
            </ul>
        </div>

        @if (\Session::has('success'))
        <div  class="alert flex bg-success/10 py-4 px-4 text-success dark:bg-success/15 sm:px-5">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif

        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6 mt-2">
            <!-- GridJS Advanced Example -->
            <div class="card pb-4">
                <div class="my-3 flex h-8 items-center justify-between px-4 sm:px-5">
                    <a href="{{ route('permissions/create') }}"
                    class="btn border border-secondary/30 bg-secondary/10 font-medium text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:border-secondary-light/30 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                  >
                    {{ __('Créer') }}
                </a>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>

                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                            Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                            else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                            Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                    <table class="w-full text-left">
                        <thead>
                          <tr
                            class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                          >
                            <th
                              class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                            >
                              {{ __('ID') }}
                            </th>
                            <th
                              class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                            >
                              {{ __('Permission Name') }}
                            </th>
                            <th width="220px"
                              class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                            >
                              {{ __('Action') }}
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key => $permission)
                          <tr
                            class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                          >
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $permission->id }}</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                              {{ $permission->name }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <a href="{{ route('permissions/edit',$permission->id) }}"
                                  class="btn border border-info/30 bg-info/10 font-medium text-info  hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                                >
                                    {{ __('Editer') }}
                              </a>
                              <span x-data="{showModal:false}">
                                <button @click="showModal = true"
                                class="btn border border-error/30 bg-error/10 font-medium text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25"
                                >
                                    {{ __('Supprimer') }}
                                </button>

                                <template x-teleport="#x-teleport-target">
                                  <div
                                    class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal"
                                    role="dialog"
                                    @keydown.window.escape="showModal = false"
                                  >
                                    <div
                                      class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                      @click="showModal = false"
                                      x-show="showModal"
                                      x-transition:enter="ease-out"
                                      x-transition:enter-start="opacity-0"
                                      x-transition:enter-end="opacity-100"
                                      x-transition:leave="ease-in"
                                      x-transition:leave-start="opacity-100"
                                      x-transition:leave-end="opacity-0"
                                    ></div>
                                    <div
                                      class="relative max-w-md rounded-lg bg-white pt-10 pb-4 text-center transition-all duration-300 dark:bg-navy-700"
                                      x-show="showModal"
                                      x-transition:enter="easy-out"
                                      x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                      x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                      x-transition:leave="easy-in"
                                      x-transition:leave-start="opacity-100 [transform:translate3d(0,0,0)]"
                                      x-transition:leave-end="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    >
                                      <div class="mt-4 px-4 sm:px-12">
                                        <h3 class="text-lg text-slate-800 dark:text-navy-50">
                                          {{ __('Suppression permission')}}
                                        </h3>
                                        <p class="mt-1 text-slate-500 dark:text-navy-200">
                                          {{ __('Vous etes sure ?')}}
                                        </p>
                                      </div>
                                      <div class="my-4 mt-16 h-px bg-slate-200 dark:bg-navy-500"></div>
                            
                                      <div class="space-x-3">
                                        <button
                                          @click="showModal = false"
                                          class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                        >
                                          {{ __('Annuler')}}
                                        </button>
                                        {!! Form::open(['method' => 'DELETE','route' => ['permissions/destroy', $permission->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90']) !!}
                                        {!! Form::close() !!}
                                      </div>
                                    </div>
                                  </div>
                                </template>
                              </span>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-2">
                        {{ $data->links('pagination::custom') }}
                      </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
