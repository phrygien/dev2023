<?php

namespace App\Http\Livewire;

use App\Models\Cycle;
use App\Models\Niveau;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LivNiveau extends Component
{
    public $readyToLoad = false;
    public $createMode = false;
    public $updateMode = false;

    public $niveau_id, $libelle, $code, $cycle_id, $ecole_id;

    public function loadNiveaus()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        //$niveaus = Niveau::where('ecole_id', Auth::user()->ecole_id)->get();
        $niveaus = DB::table('niveaux')
                    ->join('cycles', 'cycles.id', '=', 'niveaux.cycle_id')
                    ->select('niveaux.*','cycles.cycle_name')
                    ->where('niveaux.ecole_id','=', Auth::user()->ecole_id)
                    ->get();

        $cycles = Cycle::where('ecole_id', Auth::user()->ecole_id)->get();

        return view('livewire.liv-niveau', [
            'niveaus' => $this->readyToLoad
            ? $niveaus
            : [],
            'cycles' => $cycles
        ]);
    }

    public function resetInputFields()
    {
        $this->libelle = '';
        $this->code = '';
        $this->cycle_id = '';
        $this->ecole_id = '';
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function cancelCreate()
    {
        $this->createMode = false;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'libelle' => 'required',
            'code' => 'required|max:4',
            'cycle_id' => 'nullable',
            'ecole_id' => 'nullable'
        ]);

        $validatedData['ecole_id'] = Auth::user()->ecole_id;
        Niveau::create($validatedData);
        //session()->flash('message', 'Donnée bien enregistré');
        toast()
        ->success('Donée bien enregistré!', 'Succée')
        ->push();

        $this->resetInputFields();
        $this->resetValidation();
    }
}
