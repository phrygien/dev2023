<?php
class LiveSearch{
    public $searchTerm = '';

    public function updatedSearchTerm($value)
    {
        $this->searchTerm = $value;
    }

    public function render()
    {
        $results = MyModel::where('field_name', 'like', '%' . $this->searchTerm . '%')
                    ->get();
        return view('livewire.search-component', [
            'searchResults' => $results
        ]);
    }

    <div>
    <input wire:model="searchTerm" type="text" placeholder="Search...">
</div>

<ul>
    @foreach ($searchResults as $result)
        <li>{{ $result->name }}</li>
    @endforeach
</ul>

}
