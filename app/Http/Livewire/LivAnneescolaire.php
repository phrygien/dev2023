<?php

namespace App\Http\Livewire;

use App\Models\Anneescolaire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LivAnneescolaire extends Component
{
    public $annee_scolaire_id, $annee_name, $date_debut, $date_fin, $ecole_id, $status;
    public $updateMode = false;

    public function render()
    {
        $anneescolaire = Anneescolaire::where('ecole_id', Auth::user()->ecole_id)->get();
        return view('livewire.liv-anneescolaire',
        [
            'anneescolaires' => $anneescolaire
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

    public function store()
    {
        $validatedData = $this->validate([
            'annee_name' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'ecole_id' => 'nullable',
            'status' => 'nullable'
        ]);

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
            User::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}

