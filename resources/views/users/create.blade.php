<x-app-layout title="Créer users" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        {!! Form::open(array('route' => 'users/store','method'=>'POST')) !!}
        <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
            <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    {{ __('Utilisateur')}}
                </h2>
            </div>
            <div class="flex justify-center space-x-2">
                <button type="reset"
                class="btn border border-warning/30 bg-warning/10 font-medium text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                    {{ __('Annuler') }}
                </button>
                <button
                class="btn border border-success/30 bg-success/10 font-medium text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                    {{ __('Enregistrer') }}
                </button>
            </div>
        </div>
        @if (count($errors) > 0)
            <div  class="alert bg-error/10 py-4 px-4 text-error dark:bg-error/15 sm:px-5">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6 mt-2">
            <div class="col-span-12 lg:col-span-8">
                <div class="card">
                    <div class="tabs flex flex-col">
                        <div class="tab-content p-4 sm:p-5">
                            <div class="space-y-5">
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nom et prenoms')}}</span>
                                        {!! Form::text('name', null, array('placeholder' => 'Entrer nom et prenom','class' => 'form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Adresse email')}}</span>
                                        {!! Form::text('email', null, array('placeholder' => 'Entrer email','class' => 'form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                                </label>
                                <div>
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Avatar')}}</span>
                                    <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                                        <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div class="card space-y-5 p-4 sm:p-5">
                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Mot de passe')}}</span>
                            {!! Form::password('password', array('placeholder' => 'Entrer mot de passe','class' => 'form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                    </label>
                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Confirmer')}}</span>
                            {!! Form::password('password_confirmation', array('placeholder' => 'Confirmer mot de passe','class' => 'form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                    </label>
                    <label class="block">
                        <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Role(s)')}}</span>
                            {!! Form::select('roles[]', $roles,[],array('multiple','class' => 'form-multiselect mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                    </label>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </main>
</x-app-layout>
