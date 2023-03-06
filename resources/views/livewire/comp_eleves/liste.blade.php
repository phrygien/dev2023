<div class="flex items-center justify-between py-5 lg:py-6">
    <div class="flex items-center space-x-1">
        <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >{{ __('Eleves')}}</a
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
            <li>{{ __('Liste')}}</li>
          </ul>
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
            @if($trashedData)
            <button wire:click="restorAll"
                x-tooltip.primary="'restaurer tous'"
                class="ml-2 btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>
            @else
            <button wire:click="displayTrashedData"
                x-tooltip.primary="'voir corbeille'"
                class="ml-2 btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>
            @endif
        </div>
    </div>



</div>

<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

<!-- Collapsible  Table -->
<div>
@if($trashedData)
<div class="card mt-3">
    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
    <table class="is-zebra is-hoverable w-full text-left">
        <thead>
        <tr>
            <th
            class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Identifiant')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Photo')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Nom et prenom')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Appélation')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Date de naissance')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Sexe')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Status')}}
            </th>
            <th
            class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Details')}}
            </th>
        </tr>
        </thead>
        @foreach ($eleves as $eleve)
        <tbody x-data="{expanded:false}">
        <tr class="border-y border-transparent">
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $eleve->id }}</td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <div class="avatar flex">
                <img
                class="rounded-full"
                src="{{asset('images/200x200.png')}}"
                alt="avatar"
                />
            </div>
            </td>
            <td
            class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
            >
            {{ $eleve->nom_prenom }}
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            {{ $eleve->appelation }}
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            {{ $eleve->date_naissance }}
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            @if($eleve->sexe ==0)
                {{ __('Homme')}}
                @else
                    {{ __('Femme')}}
                @endif
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <div class="flex space-x-2">
                @if($eleve->statut_eleve ==0)
                <div
                class="badge rounded-full border border-error text-error"
                >
                {{ __('desactivé')}}
                </div>
                @else
                <div
                class="badge rounded-full border border-success text-success"
                >
                {{ __('activé')}}
                </div>
                @endif
            </div>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <button
                @click="expanded = !expanded"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            >
                <i
                :class="expanded && '-rotate-180'"
                class="fas fa-chevron-down text-sm transition-transform"
                ></i>
            </button>
            </td>
        </tr>
        <tr
            class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
        >
            <td colspan="100" class="p-0">
            <div x-show="expanded" x-collapse>
                <div class="px-4 pb-4 sm:px-5">
                <div
                    class="is-scrollbar-hidden min-w-full overflow-x-auto"
                >
                <table class="is-hoverable w-full text-left">
                    <thead>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Lieu de naissance')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Age')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('CIN')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Acte de naissance')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Ville')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Adresse')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Télèphone')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Email')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Religion')}}
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->lieu_naissance }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->age}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->cin }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                        <button
                            class="btn bg-info/10 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                            {{ __('Voir')}}
                        </button>
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->ville}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->adresse}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->telephone}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->email}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->religion}}
                        </td>
                        </tr>

                    </tbody>
                    </table>
                    <div class="my-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>{{ __('Infos parent') }}</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    </div>
                    <table class="mt-2 is-hoverable w-full text-left">
                    <thead>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Nom pére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Fonction pére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Nom mére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Fonction mére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Ville parent')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Adresse parent')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Télèphone')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Email')}}
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->nom_prenom_pere }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->fonction_pere}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->nom_prenom_mere }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->fonction_mere}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->ville_parent}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->adresse_parent}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->telephone_parent}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->email_parent}}
                        </td>
                        </tr>

                    </tbody>
                    </table>
                </div>
                <div class="text-right">
                <button
                    class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90"
                >
                    {{ __('modifier') }}
                </button>
                @if($eleve->statut_eleve ==0)
                <button wire:click="activer({{ $eleve->id }})"
                    class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                >
                    {{ __('activer')}}
                </button>
                @else
                <button wire:click="desactiver({{ $eleve->id }})"
                    class="btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90"
                >
                    {{ __('desactiver')}}
                </button>
                @endif
                <button wire:click="delete({{ $eleve->id }})"
                    class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                >
                    {{ __('supprimer')}}
                </button>
                    <button
                    @click="expanded = false"
                    class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                    ><i
                :class="expanded && '-rotate-180'"
                class="fas fa-chevron-down text-sm transition-transform"
                ></i>
                    </button>
                </div>
                </div>
            </div>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    </div>

    <div
    class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
    >
    <div class="text-xs+">1 - 10 of 10 entries</div>

    <ol class="pagination">
        <li class="rounded-l-full bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
        >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 19l-7-7 7-7"
            />
            </svg>
        </a>
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >1</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >2</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >3</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >4</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >5</a
        >
        </li>
        <li class="rounded-r-full bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
        >
            <svg
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
        </a>
        </li>
    </ol>
    </div>
</div>
@else
<div class="card mt-3">
    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
    <table class="is-zebra is-hoverable w-full text-left">
        <thead>
        <tr>
            <th
            class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Identifiant')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Photo')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Nom et prenom')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Appélation')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Date de naissance')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Sexe')}}
            </th>
            <th
            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Status')}}
            </th>
            <th
            class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            >
            {{ __('Details')}}
            </th>
        </tr>
        </thead>
        @foreach ($eleves as $eleve)
        <tbody x-data="{expanded:false}">
        <tr class="border-y border-transparent">
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $eleve->id }}</td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <div class="avatar flex">
                <img
                class="rounded-full"
                src="{{asset('images/200x200.png')}}"
                alt="avatar"
                />
            </div>
            </td>
            <td
            class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
            >
            {{ $eleve->nom_prenom }}
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            {{ $eleve->appelation }}
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            {{ $eleve->date_naissance }}
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            @if($eleve->sexe ==0)
                {{ __('Homme')}}
                @else
                    {{ __('Femme')}}
                @endif
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <div class="flex space-x-2">
                @if($eleve->statut_eleve ==0)
                <div
                class="badge rounded-full border border-error text-error"
                >
                {{ __('desactivé')}}
                </div>
                @else
                <div
                class="badge rounded-full border border-success text-success"
                >
                {{ __('activé')}}
                </div>
                @endif
            </div>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <button
                @click="expanded = !expanded"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            >
                <i
                :class="expanded && '-rotate-180'"
                class="fas fa-chevron-down text-sm transition-transform"
                ></i>
            </button>
            </td>
        </tr>
        <tr
            class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
        >
            <td colspan="100" class="p-0">
            <div x-show="expanded" x-collapse>
                <div class="px-4 pb-4 sm:px-5">
                <div
                    class="is-scrollbar-hidden min-w-full overflow-x-auto"
                >
                <table class="is-hoverable w-full text-left">
                    <thead>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Lieu de naissance')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Age')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('CIN')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Acte de naissance')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Ville')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Adresse')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Télèphone')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Email')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Religion')}}
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->lieu_naissance }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->age}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->cin }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                        <button
                            class="btn bg-info/10 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                            {{ __('Voir')}}
                        </button>
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->ville}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->adresse}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->telephone}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->email}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->religion}}
                        </td>
                        </tr>

                    </tbody>
                    </table>
                    <div class="my-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>{{ __('Infos parent') }}</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    </div>
                    <table class="mt-2 is-hoverable w-full text-left">
                    <thead>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Nom pére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Fonction pére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Nom mére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Fonction mére')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Ville parent')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Adresse parent')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Télèphone')}}
                        </th>
                        <th
                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                            {{ __('Email')}}
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->nom_prenom_pere }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->fonction_pere}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->nom_prenom_mere }}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->fonction_mere}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->ville_parent}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->adresse_parent}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->telephone_parent}}
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >
                            {{ $eleve->email_parent}}
                        </td>
                        </tr>

                    </tbody>
                    </table>
                </div>
                <div class="text-right">
                <button
                    class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90"
                >
                    {{ __('inscriver') }}
                </button>
                @if($eleve->statut_eleve ==0)
                <button wire:click="activer({{ $eleve->id }})"
                    class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                >
                    {{ __('activer')}}
                </button>
                @else
                <button wire:click="desactiver({{ $eleve->id }})"
                    class="btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90"
                >
                    {{ __('desactiver')}}
                </button>
                @endif
                <button wire:click="delete({{ $eleve->id }})"
                    class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                >
                    {{ __('supprimer')}}
                </button>
                    <button
                    @click="expanded = false"
                    class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                    ><i
                :class="expanded && '-rotate-180'"
                class="fas fa-chevron-down text-sm transition-transform"
                ></i>
                    </button>
                </div>
                </div>
            </div>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    </div>

    <div
    class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
    >
    <div class="text-xs+">1 - 10 of 10 entries</div>

    <ol class="pagination">
        <li class="rounded-l-full bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
        >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 19l-7-7 7-7"
            />
            </svg>
        </a>
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >1</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >2</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >3</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >4</a
        >
        </li>
        <li class="bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
            >5</a
        >
        </li>
        <li class="rounded-r-full bg-slate-150 dark:bg-navy-500">
        <a
            href="#"
            class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
        >
            <svg
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
        </a>
        </li>
    </ol>
    </div>
</div>
@endif
</div>
</div>
