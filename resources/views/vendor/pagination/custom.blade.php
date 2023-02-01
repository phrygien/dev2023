@if ($paginator->hasPages())

<div class="m-2">
    <p class="text-sm text-warning leading-5">
        {!! __('Affichage de') !!}
        @if ($paginator->firstItem())
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            {!! __('à') !!}
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
        @else
            {{ $paginator->count() }}
        @endif
        {!! __('de') !!}
        <span class="font-medium">{{ $paginator->total() }}</span>
        {!! __('résultats') !!}
    </p>
</div>

<ol class="pagination m-2">

    <li class="rounded-l-lg bg-slate-150 dark:bg-navy-500">
      <a
      href="{{ $paginator->previousPageUrl() }}"
        class="flex h-7 w-7 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="none"
          viewbox="0 0 24 24"
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

    @foreach ($elements as $element)

    @if (is_array($element))
    @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="bg-slate-150 dark:bg-navy-500">
            <a
                href="{{ $url }}"
                class="flex h-7 min-w-[1.75rem] items-center justify-center rounded-lg px-2 text-xs+ leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                >{{ $page }}</a
            >
            </li>
        @else
            <li class="bg-slate-150 dark:bg-navy-500">
            <a
                href="{{ $url }}"
                class="flex h-7 min-w-[1.75rem] items-center justify-center rounded-lg px-2 text-xs+ leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                >{{ $page }}</a
            >
            </li>
    @endif
    @endforeach
    @endif
    @endforeach
    <li class="bg-slate-150 dark:bg-navy-500" hidden>
        <a
          href="#"
          class="flex h-7 min-w-[1.75rem] items-center justify-center rounded-lg bg-primary px-2 text-xs+ leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-secondary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
          >2</a
        >
      </li>
      @if ($paginator->hasMorePages())
    <li class="rounded-r-lg bg-slate-150 dark:bg-navy-500">
      <a
      href="{{ $paginator->nextPageUrl() }}"
        class="flex h-7 w-7 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="none"
          viewbox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 5l7 7-7 7"
          ></path>
        </svg>
      </a>
    </li>
    @endif
  </ol>
@endif
                                    
            
            