<x-app-layout title="Création permission" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        {!! Form::open(array('route' => 'permissions/store','method'=>'POST')) !!}
        <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
            <div class="flex items-center space-x-1">
                <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    {{ __('Permission') }} /
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                  </div>
                  <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li>{{ __('Création') }}</li>
                  </ul>
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
            <div class="col-span-12 lg:col-span-12">
                <div class="card">
                    <div class="tabs flex flex-col">
                        <div class="tab-content p-4 sm:p-5">
                            <div class="space-y-5">
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nom permission') }}</span>
                                        {!! Form::text('name', null, array('placeholder' => '','class' => 'form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                                </label>

                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nom permission') }}</span>
                                    <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        value="web-guard" disabled type="text" />
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </main>
</x-app-layout>
