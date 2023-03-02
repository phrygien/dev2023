<div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
            <div class="flex items-center space-x-1">
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                    <a
                        class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#"
                        >{{ __('Eleves') }}</a
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
            class="btn bg-error/10 font-medium text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
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
                class="btn bg-primary/10 font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
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
                                    <input x-init="$el._x_flatpickr = flatpickr($el)" wire:model="date_naissance"
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
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nom et prénom pere')}}</span>
                        <input wire:model="nom_prenom_pere"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('nom_prenom_pere') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nom et prénom mere')}}</span>
                        <input wire:model="nom_prenom_mere"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('nom_prenom_mere') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Fonction pere')}}</span>
                        <input wire:model="fonction_pere"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('fonction_pere') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Fonction mere')}}</span>
                        <input wire:model="fonction_mere"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('fonction_mere') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Ville de parent')}}</span>
                        <input wire:model="ville_parent"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('ville_parent') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Adresse du parent')}}</span>
                        <input wire:model="adresse_parent"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('adresse_parent') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Numéro télèphone parent')}}</span>
                        <input wire:model="telephone_parent"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('telephone_parent') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Email parent')}}</span>
                        <input wire:model="email_parent"
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="" type="text" />
                            @error('email_parent') <p class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">{{ $message }}</p> @enderror
                    </label>

                </div>
            </div>
            </form>
        </div>
