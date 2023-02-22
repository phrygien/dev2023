<?php

namespace App\Http\Livewire;

use App\Models\Anneescolaire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class LivAnneescolaire extends Component
{
    public $annee_scolaire_id, $annee_name, $date_debut, $date_fin, $ecole_id, $status;
    public $updateMode = false;
    public $createMode = false;

    use WithPagination;

    // defer loading
    public $readyToLoad = false;

    public function loadAnneescolaires()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        //$anneescolaire = Anneescolaire::where('ecole_id', Auth::user()->ecole_id)->get();
        return view('livewire.liv-anneescolaire',
        [
            'anneescolaires' => $this->readyToLoad
            ? Anneescolaire::all()
            : [],
        ]
    );
    }

    public function resetInputFields()
    {
        $this->annee_name = '';
        $this->date_debut = '';
        $this->date_fin = '';
        $this->status = '';
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
            'annee_name' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'ecole_id' => 'nullable',
            'status' => 'nullable'
        ]);

        $ecole_id = Auth::user()->ecole_id;
        $validatedData['ecole_id'] = $ecole_id;
        Anneescolaire::create($validatedData);
        session()->flash('message', 'Donée bien enregistré');
        $this->resetInputFields();

        $this->emit('anneescolaireStore'); // fermer modal
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $anneescolaire = Anneescolaire::find($id);
        $this->annee_scolaire_id = $id;
        $this->annee_name = $anneescolaire->annee_name;
        $this->date_debut = $anneescolaire->date_debut;
        $this->date_fin = $anneescolaire->date_fin;
        $this->ecole_id = $anneescolaire->ecole_id;
        $this->status = $anneescolaire->status;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'annee_name' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'ecole_id' => 'nullable',
            'status' => 'nullable'
        ]);
        if ($this->annee_scolaire_id) {
            $anneescolaire = Anneescolaire::find($this->annee_scolaire_id);
            $anneescolaire->update([
                'date_debut' => $this->date_debut,
                'date_fin' => $this->date_fin,
                'annee_name' => $this->annee_name,
                'ecole_id' => $this->ecole_id
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Modification enregistré.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Anneescolaire::where('id',$id)->delete();
            session()->flash('message', 'Suppression avec succée.');
        }
    }

    public function ouvrir($id)
    {
        $countAnneOuvert = Anneescolaire::where('ecole_id',Auth::user()->ecole_id)->where('statut',1)->first();

        if($countAnneOuvert ==null)
        {
            $anneeObject = Anneescolaire::find($id);
            $anneeObject->statut = 1;
            $anneeObject->save();

            session()->flash('message', 'Ouverture avec succée.');
        }else{
            session()->flash('errors', 'Erreur, Un autre année déjà ouvert.');
        }
    }

    public function fermer($id)
    {
        $anneeObject = Anneescolaire::find($id);
        $anneeObject->statut = 0;
        $anneeObject->save();

        session()->flash('message', 'Année bien fermer.');
    }
}

