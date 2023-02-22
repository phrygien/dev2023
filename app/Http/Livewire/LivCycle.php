<?php

namespace App\Http\Livewire;

use App\Models\Anneescolaire;
use App\Models\Cycle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\VarDumper\VarDumper;

class LivCycle extends Component
{
    public $readyToLoad = false;
    public $createMode = false;
    public $updateMode = false;
    use WithPagination;

    public $cycle_id, $cycle_name, $cycle_code, $ecole_id, $annee_id;

    public function loadCycles()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $ecole_id = Auth::user()->ecole_id;
        $anneeOuvert = Anneescolaire::where('ecole_id', $ecole_id)
                        ->where('statut', 1)
                        ->first();

        $annee_id = $anneeOuvert->id;

        return view('livewire.liv-cycle', [
            'cycles' => $this->readyToLoad
            ? Cycle::where('ecole_id', Auth::user()->ecole_id)->where('annee_id', $annee_id)->get()
            : [],
        ]);
    }

    public function resetInputFields()
    {
        $this->cycle_name = '';
        $this->cycle_code = '';
        $this->ecole_id = '';
        $this->annee_id = '';
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function cancelCreate()
    {
        $this->createMode = false;
        $this->resetInputFields();
    }

    public function store()
    {
        $validatedData = $this->validate([
            'cycle_name' => 'required',
            'cycle_code' => 'required|max:2|min:2',
            'ecole_id' => 'nullable',
            'annee_id' => 'nullable'
        ]);

        $ecole_id = Auth::user()->ecole_id;
        $anneeOuvert = Anneescolaire::where('ecole_id', $ecole_id)
                        ->where('statut', 1)
                        ->first();
        $annee_id = $anneeOuvert->id;

        $validatedData['ecole_id'] = $ecole_id;
        $validatedData['annee_id'] = $annee_id;

        Cycle::create($validatedData);
        session()->flash('message', 'Donnée bien enregistré');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $objectCycle = Cycle::findOrFail($id);
        $this->cycle_id = $id;
        $this->cycle_name= $objectCycle->cycle_name;
        $this->cycle_code = $objectCycle->cycle_code;
        $this->ecole_id = $objectCycle->ecole_id;
        $this->annee_id = $objectCycle->annee_id;
    }

    public function cancelUpdate()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'cycle_name' => 'required',
            'cycle_code' => 'required|unique:cycles,cycle_code,' . $this->cycle_id,
            'ecole_id' => 'nullable',
            'annee_id' => 'nullable'
        ]);

        if($this->cycle_id)
        {
            $objectCycle = Cycle::find($this->cycle_id);
            $objectCycle->update([
                'cycle_name' => $this->cycle_name,
                'cycle_code' => $this->cycle_code,
                'ecole_id' => $this->ecole_id,
                'annee_id' => $this->annee_id
            ]);
            $this->updateMode = false;
            session()->flash('message','Modification bien enregistré');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id)
        {
            Cycle::findOrFail($id)->delete();
            session()->flash('message', 'Suppression avec succée');
        }
    }
}
