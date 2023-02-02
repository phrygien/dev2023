@if ($paginator->hasPages())
<div
class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
>
<div class="text-xs+">
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
</div>
<ol class="pagination space-x-1.5">
  {{-- Previous Page Link --}}
  @if ($paginator->onFirstPage())
  <li>
    <a
      href="{{ $paginator->previousPageUrl() }}"
      class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-150 text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
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
  @endif
{{-- Pagination Elements --}}
@foreach ($elements as $element)
  {{-- Array Of Links --}}
  @if (is_array($element))
  @foreach ($element as $page => $url)
      
  <li>
    @if ($page == $paginator->currentPage())
    <a
      href="{{ $url }}"
      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-warning px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
      >{{ $page }}</a
    >
    @else
    <a
    href="{{ $url }}"
    class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-gray-300 px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-gray-700 dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
    >{{ $page }}</a>
  </li>
  @endif
  @endforeach
@endif
  @endforeach

  {{-- Next Page Link --}}
  @if ($paginator->hasMorePages())
  <li>
    <a
      href="{{ $paginator->nextPageUrl() }}"
      class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-150 text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
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
  @endif
</ol>
</div>
@endif