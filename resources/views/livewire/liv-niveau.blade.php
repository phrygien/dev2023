<main class="main-content w-full px-[var(--margin-x)] pb-8">
    @if($createMode)
    @include('livewire.comp_niveau.create')
    @elseif($updateMode)
    @else
        @include('livewire.comp_niveau.liste')
    @endif
</main>
