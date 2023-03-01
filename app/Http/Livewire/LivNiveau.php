<?php

namespace App\Http\Livewire;

use App\Models\Cycle;
use App\Models\Niveau;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class LivNiveau extends Component
{
    public $readyToLoad = false;
    public $createMode = false;
    public $updateMode = false;
    use WireToast;

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

    public function edit($id)
    {
        $this->updateMode = true;
        $niveau = Niveau::findOrFail($id);
        $this->niveau_id = $niveau->id;
        $this->libelle = $niveau->libelle;
        $this->code = $niveau->code;
        $this->cycle_id = $niveau->cycle_id;
        $this->ecole_id = $niveau->ecole_id;
    }

    public function cancelEdit()
    {
        $this->updateMode = false;
        $this->resetValidation();
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'libelle' => 'required',
            'code' => 'required|unique:niveaux,code,' . $this->niveau_id,
            'cycle_id' => 'nullable',
            'ecole_id' => 'nullable'
        ]);

        $validatedData['ecole_id'] = Auth::user()->ecole_id;
        if($this->niveau_id)
        {
            $niveau = Niveau::findOrFail($this->niveau_id);
            $niveau->update([
                'libelle' => $this->libelle,
                'code' => $this->code,
                'cycle_id' => $this->cycle_id,
                'ecole_id' => $this->ecole_id
            ]);
            $this->updateMode = false;

            toast()
            ->success('Modification bien enregistré!', 'Succée')
            ->push();

            $this->resetInputFields();
            $this->resetValidation();
        }

    }

    public function delete($id)
    {
        try {
            $niveau = Niveau::findOrFail($id);
            $niveau->delete();

            toast()
            ->success('Suppression avec succée', 'Succée')
            ->push();

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
