<?php

namespace App\Http\Livewire;

use App\Models\Niveau;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Usernotnull\Toast\Concerns\WireToast;

class LivSection extends Component
{
    public $readyToLoad = false;
    public $createMode = false;
    public $updateMode = false;
    use WireToast;
    use WithPagination;

    public $section_id, $section_name, $section_code, $niveau_id, $section_statut;
    public $selectedItems = [];
    public $displayBtn = false;
    public $countCheckItem = 0;
    public function loadSections()
    {
        $this->readyToLoad = true;
    }

    public function mount()
    {
        foreach($this->selectedItems as $id)
        {
            $this->countCheckItem++;
        }
        if($this->countCheckItem > 0)
        {
            $this->displayBtn = true;
        }else
        {
            $this->displayBtn = false;
        }
    }

    public function render()
    {
        if($this->selectedItems){
            //var_dump(sizeof($this->selectedItems));die();
            foreach($this->selectedItems as $id)
            {
                $this->countCheckItem= sizeof($this->selectedItems);
            }
            if($this->countCheckItem > 0)
            {
                $this->displayBtn = true;
            }else
            {
                $this->displayBtn = false;
            }
        }
        $sections = DB::table('sections')
                    ->join('niveaux', 'niveaux.id','=','sections.niveau_id')
                    ->select('sections.*','niveaux.libelle')
                    ->where('niveaux.ecole_id','=', Auth::user()->ecole_id)
                    ->paginate(10);

        //$objectSections = json_decode(json_encode($sections));

        $niveaus = Niveau::where('ecole_id', Auth::user()->ecole_id)->get();
        return view('livewire.liv-section', [
            'sections' => $this->readyToLoad
            ?$sections
            : $sections,
            'niveaus' => $niveaus,
            'totalselected' => $this->countCheckItem,
        ]);
    }

    public function resetInputFields()
    {
        $this->section_name = '';
        $this->section_code = '';
        $this->niveau_id = '';
        $this->section_statut = '';
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function cancelCreate()
    {
        $this->createMode = false;
        $this->resetValidation();
    }

    public function store()
    {
        $validatedData = $this->validate([
            'section_name' => 'required',
            'section_code' => 'required',
            'niveau_id' => 'required',
            'section_statut' => 'required'
        ]);

        Section::create($validatedData);
        toast()
        ->success('Donn??e bien enregistr??!', 'Succ??e')
        ->push();

        $this->resetInputFields();
        $this->resetValidation();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $section = Section::findOrFail($id);
        $this->section_id = $section->id;
        $this->section_name = $section->section_name;
        $this->section_code = $section->section_code;
        $this->niveau_id = $section->niveau_id;
        $this->section_statut = $section->section_statut;
    }

    public function cancelEdit()
    {
        $this->updateMode = false;
        $this->resetInputFields();
        $this->resetValidation();
    }


    public function update()
    {
        $validatedData = $this->validate([
            'section_name' => 'required',
            'section_code' => 'required',
            'niveau_id' => 'required',
            'section_statut' => 'required',
        ]);

        if($this->section_id)
        {
            $section = Section::findOrFail($this->section_id);
            $section->update([
                'section_name' => $this->section_name,
                'section_code' => $this->section_code,
                'niveau_id' => $this->niveau_id,
                'section_statut' => $this->section_statut
            ]);

            $this->updateMode = false;

            toast()
            ->success('Modification bien enregistr??!')
            ->push();

            $this->resetInputFields();
            $this->resetValidation();
        }
    }

    public function delete($id)
    {
        $section = Section::findOrFail($id);
        $section->delete($id);

        toast()
        ->success('Donn??e bien supprim??!')
        ->push();

    }

    public function deleteSelectedData()
    {
        foreach ($this->selectedItems as $id)
        {
            Section::findOrFail($id)->delete();
        }
        $this->selectedItems = [];
        $this->displayBtn = false;
        toast()
        ->success('Selected items deleted successfuly!')
        ->push();
    }


}
