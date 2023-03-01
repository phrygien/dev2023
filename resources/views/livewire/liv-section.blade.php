<main class="main-content w-full px-[var(--margin-x)] pb-8">
@if($createMode)
    @include('livewire.comp_section.create')
@elseif($updateMode)
    @include('livewire.comp_section.update')
@else
    @include('livewire.comp_section.liste')
@endif
</main>
