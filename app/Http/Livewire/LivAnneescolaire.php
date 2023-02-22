<?php

namespace App\Http\Livewire;

use App\Models\Anneescolaire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LivAnneescolaire extends Component
{
    public $annee_scolaire_id, $annee_name, $date_debut, $date_fin, $ecole_id, $status;
    public $updateMode = false;
    public $createMode = false;

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
        session()->flash('message', 'Année scolaire bien enregistré');
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
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Anneescolaire::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
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

            session()->flash('message', 'Année bien ouvert.');
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

