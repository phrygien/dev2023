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

    public function loadSections()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
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
        ->success('Donnée bien enregistré!', 'Succée')
        ->push();

        $this->resetInputFields();
        $this->resetValidation();
    }
}
