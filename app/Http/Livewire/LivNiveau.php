<?php

namespace App\Http\Livewire;

use App\Models\Niveau;
use Illuminate\Support\Facades\Auth;
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
        $niveaus = Niveau::where('ecole_id', Auth::user()->ecole_id)->get();

        return view('livewire.liv-niveau', [
            'niveaus' => $this->readyToLoad
            ? $niveaus
            : [],
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
}
