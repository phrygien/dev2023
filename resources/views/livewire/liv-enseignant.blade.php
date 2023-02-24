<main class="main-content w-full px-[var(--margin-x)] pb-8">

    <div class="mt-2">
        @if (session()->has('message'))
        <div  class="alert flex bg-success/10 py-4 px-4 text-success dark:bg-success/15 sm:px-5 mb-2">
            {{ session('message') }}
        </div>
        @endif

    </div>

    @if($createMode)
    <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
            <div class="flex items-center space-x-1">
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                    <a
                        class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#"
                        >{{ __('Enseignant') }}</a
                    >
                    <svg
                        x-ignore
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5l7 7-7 7"
                        />
                    </svg>
                    </li>
                    <li>{{ __('Créer') }}</li>
                </ul>
            </div>
            <div class="flex justify-center space-x-2">
            <button wire:click="cancelCreate()"
                    class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                    {{ __('annuler')}}
                </button>
                <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div wire:loading>
                <button
                    class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    {{ __('création en cours...')}}
                </button>
                </div>
                <div wire:loading.remove>
                <button
                    class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    {{ __('enregistrer')}}
                </button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 lg:col-span-6">
                <div class="card">
                    <div class="tabs flex flex-col">
                        <div class="tab-content p-4 sm:p-5">
                            <div class="space-y-5">
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nom')}}</span>
                                    <input wire:model="nom"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('nom') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Prénoms')}}</span>
                                    <input wire:model="prenom"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('prenom') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nationalité')}}</span>
                                    <input wire:model="nationalite"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('nationalite') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Date naissance')}}</span>
                                    <input wire:model="date_naissance"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('date_naissance') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Lieu naissance')}}</span>
                                    <input wire:model="lieu_naissance"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('lieu_naissance') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Numéro CIN')}}</span>
                                    <input wire:model="cin"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('cin') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>
                                <label
                                    class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                >
                                    <input wire:model="photo"
                                    tabindex="-1"
                                    type="file"
                                    class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                                    />
                                    <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                                    <span>{{ __('Photo')}}</span>
                                    </div>
                                </label>
                                <div wire:loading wire:target="photo">Uploading...</div>
                                @error('photo') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror

                                <br>
                                <label class="inline-flex items-center space-x-2">
                                    <input wire:model="genre"
                                    class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                    type="radio" value="0"
                                    />
                                    <p>{{ __('Homme')}}</p>
                                </label>

                                <label class="inline-flex items-center space-x-2">
                                    <input wire:model="genre"
                                    class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-success checked:!bg-success hover:!border-success focus:!border-success dark:border-navy-500 dark:bg-navy-900"
                                    type="radio" value="1"
                                    />
                                    <p>{{ __('Femme')}}</p>
                                </label>
                                @error('genre') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror

                                <br>
                                <label class="inline-flex items-center space-x-2">
                                    <input wire:model="civilite"
                                    class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                    type="radio" value="0"
                                    />
                                    <p>{{ __('Mr')}}</p>
                                </label>

                                <label class="inline-flex items-center space-x-2">
                                    <input wire:model="civilite"
                                    class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-success checked:!bg-success hover:!border-success focus:!border-success dark:border-navy-500 dark:bg-navy-900"
                                    type="radio" value="1"
                                    />
                                    <p>{{ __('Mlle')}}</p>
                                </label>

                                <label class="inline-flex items-center space-x-2">
                                    <input wire:model="civilite"
                                        class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary dark:border-navy-500 dark:bg-navy-900 dark:checked:border-secondary-light dark:checked:bg-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light"
                                        type="radio" value="2"
                                        />
                                    <p>{{ __('Mme')}}</p>
                                </label>
                                @error('genre') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror

                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Ville')}}</span>
                                    <input wire:model="ville"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('ville') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>

                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Adresse permenant')}}</span>
                                    <input wire:model="adresse"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('adresse') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>

                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Télèphone')}}</span>
                                    <input wire:model="telephone"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('telephone') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>

                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Email')}}</span>
                                    <input wire:model="email"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('email') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>

                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Télèphone urgence')}}</span>
                                    <input wire:model="telephone_urgenece"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="" type="text" />
                                        @error('telephone_urgenece') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                                </label>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="card space-y-5 p-4 sm:p-5">
                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Grade')}}</span>
                        <input wire:model="grade"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('grade') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Religion')}}</span>
                        <input wire:model="religion"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('religion') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Groupe sagain')}}</span>
                        <input wire:model="goup_sang"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('goup_sang') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label
                    class="btn block bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                        >
                    <input wire:model="copie_cin"
                    tabindex="-1"
                    type="file"
                    class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                    />
                    <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                    <span>{{ __('Copie CIN')}}</span>
                    </div>
                </label>
                @error('copie_cin') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror


                    <label
                    class="btn block bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                >
                    <input wire:model="copie_diplome"
                    tabindex="-1"
                    type="file"
                    class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                    />
                    <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                    <span>{{ __('Copie diplome')}}</span>
                    </div>
                </label>
                @error('copie_diplome') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror


                </div>
            </div>
</form>
        </div>
    @elseif($updateMode)
        update mode set to true
    @else
    <div class="flex items-center justify-between py-5 lg:py-6">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
        <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
        <li class="flex items-center space-x-2">
            <a
            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
            href="#"
            >{{ __('Enseignants') }}</a
            >
            <svg
            x-ignore
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7"
            />
            </svg>
        </li>
        <li>{{ __('Liste') }}</li>
        </ul>
    </div>
    @if(request()->has('view_deleted'))
    <a href="{{ route('educations/enseignant', ['view_deleted' => 'DeletedRecords']) }}"
        class="btn bg-secondary/10 font-medium text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
    >
        {{ __('Restor deleted data')}}
    </a>
    @else
    <a href="{{ route('educations/enseignant', ['trashed_data' => 'trash']) }}"
    class="btn bg-primary/10 font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
    >
        {{ __('corbeille')}}
    </a>
    <button
        wire:click="create()"
        class="btn bg-secondary/10 font-medium text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
    >
        {{ __('Créer')}}
    </button>
    @endif
    </div>
    @if($trashedData)
    <div
    class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 mb-2"
    >
        <div
        class="badge bg-info/10 text-info dark:bg-accent-light/15 dark:text-accent-light"
        >
            {{ count($trashedDatas)}} {{ __('elements')}}
        </div>
        @if(count($trashedDatas) > 0)
        <button
        wire:click="restoreAll()"
        class="btn font-medium text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
        >
            {{ __('recuperer tous')}}
        </button>
        @endif
    </div>
    <div wire:init="loadTrashedEnseignants" class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">

        @foreach ($trashedDatas as $enseignant)
        <div class="card">
            <div class="p-2 text-right">
                <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                    class="inline-flex">
                </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                <div class="avatar h-20 w-20">
                    <img class="rounded-full "  src="{{ asset('storage/'.$enseignant->photo) }}" alt="avatar" />
                </div>
                <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                    {{ $enseignant->nom }}
                </h3>
                <p class="text-xs+">Tél: {{ $enseignant->telephone_urgenece }}</p>
                <div class="inline-space mt-3 flex grow flex-wrap items-start">
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-success/20 active:bg-success/25">
                        PHP
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-success/20 active:bg-success/25">
                        Nodejs
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-success/20 active:bg-success/25">
                        ReactJS
                    </a>
                </div>
                <div class="mt-6 grid w-full grid-cols-2 gap-2">
                    <button wire:click="restore({{ $enseignant->id }})"
                    class="btn bg-success/10 font-medium text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                        <span> {{ __('recuperer')}} </span>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    @else
    <div wire:init="loadEnseignants" class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
        @foreach ($enseignants as $enseignant)
        <div class="card">
            <div class="p-2 text-right">
                <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                    class="inline-flex">
                </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                <div class="avatar h-20 w-20">
                    <img class="rounded-full "  src="{{ asset('storage/'.$enseignant->photo) }}" alt="avatar" />
                </div>
                <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                    {{ $enseignant->nom }}
                </h3>
                <p class="text-xs+">Tél: {{ $enseignant->telephone_urgenece }}</p>
                <div class="inline-space mt-3 flex grow flex-wrap items-start">
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-success/20 active:bg-success/25">
                        PHP
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-success/20 active:bg-success/25">
                        Nodejs
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-success/20 active:bg-success/25">
                        ReactJS
                    </a>
                </div>
                <div class="mt-6 grid w-full grid-cols-2 gap-2">
                    <button wire:click="edit({{ $enseignant->id }})"
                    class="btn bg-success/10 font-medium text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">

                        <span>{{ __('editer')}}</span>
                    </button>
                    <button wire:click="delete({{ $enseignant->id }})"
                    class="btn bg-error/10 font-medium text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                        <span> {{ __('supprimer')}} </span>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    </div>
    @endif
</main>
