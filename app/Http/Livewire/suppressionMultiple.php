@foreach($records as $record)
    <input type="checkbox" wire:model="selectedRecords" value="{{ $record->id }}">
@endforeach

<button wire:click="deleteSelectedRecords">Delete Selected Records</button>

public function deleteSelectedRecords()
{
    foreach ($this->selectedRecords as $id) {
        Record::find($id)->delete();
    }

    $this->selectedRecords = [];
}
