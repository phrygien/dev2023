<main class="main-content w-full px-[var(--margin-x)] pb-8">
    @if($createMode)
        @include('livewire.comp_eleves.create')
    @elseif ($updateMode)
        @include('livewire.comp_eleves.update')
    @elseif ($detailMode)
        @include('livewire.comp_eleves.details')
    @else
        @include('livewire.comp_eleves.liste')
    @endif
</main>
