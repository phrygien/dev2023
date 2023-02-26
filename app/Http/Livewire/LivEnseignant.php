<?php

namespace App\Http\Livewire;

use App\Models\Enseignant;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class LivEnseignant extends Component
{
    public $createMode = false;
    public $updateMode = false;

    use WithFileUploads;
    use WithPagination;

    public $enseignant_id, $nom, $prenom, $nationalite, $date_naissance, $lieu_naissance,
    $cin, $photo, $genre, $civilite, $ville, $adresse, $telephone, $email,
    $telephone_urgenece, $grade, $religion, $goup_sang, $copie_cin, $copie_diplome,
    $ecole_id;

    public $trashedData = false;

    public $readyToLoad = false;
    public $readyToLoadTrasehData = false;

    public function loadEnseignants()
    {
        $this->readyToLoad = true;
    }

    public function loadTrashedEnseignants()
    {
        $this->readyToLoadTrasehData = true;
    }

    public function render(Request $request)
    {
        $dataInTrash = Enseignant::onlyTrashed()->get();
        if($request->has('trashed_data'))
        {
            $this->trashedData = true;
        }

        $enseignants = Enseignant::where('ecole_id', Auth::user()->ecole_id)->get();

        return view('livewire.liv-enseignant', [
            'enseignants' => $this->readyToLoad
            ? $enseignants
            : [],

            'trashedDatas' => $this->readyToLoadTrasehData
            ? $dataInTrash
            : [],
        ]);
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

    public function resetInputFields()
    {
        $this->nom = '';
        $this->prenom = '';
        $this->nationalite = '';
        $this->date_naissance = '';
        $this->lieu_naissance = '';
        $this->cin = '';
        $this->photo = '';
        $this->genre = '';
        $this->civilite = '';
        $this->ville = '';
        $this->adresse = '';
        $this->telephone = '';
        $this->grade = '';
        $this->goup_sang = '';
        $this->religion = '';
        $this->copie_cin = '';
        $this->copie_diplome = '';
        $this->ecole_id = '';

    }

    public function store()
    {
        $validatedData = $this->validate([
            'nom' => 'required',
            'prenom' => 'nullable',
            'nationalite' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'cin' => 'required',
            'photo' => 'nullable',
            'genre' => 'required',
            'civilite' => 'required',
            'ville' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|unique:enseignants',
            'email' => 'required|unique:enseignants',
            'telephone_urgenece' => 'required|unique:enseignants',
            'grade' => 'nullable',
            'religion' => 'nullable',
            'goup_sang' => 'nullable',
            'copie_cin' => 'required',
            'copie_diplome' => 'nullable',
            'ecole_id' => 'nullable'
        ]);

        $photo = $this->photo->store("images/enseigant_photos", 'public');
        $copie_cin = $this->copie_cin->store('images/copies_cin', 'public');
        $copie_diplome = $this->copie_diplome->store('images/copies_diplome', 'public');

        $validatedData['photo'] = $photo;
        $validatedData['copie_cin'] = $copie_cin;
        $validatedData['copie_diplome'] = $copie_diplome;
        $validatedData['ecole_id'] = Auth::user()->ecole_id;

        Enseignant::create($validatedData);

        session()->flash('message', 'Donnée bien enregistré');
        $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $objectEnseignant = Enseignant::findOrFail($id);
        $this->enseignant_id = $id;
        $this->nom = $objectEnseignant->nom;
        $this->prenom = $objectEnseignant->prenom;
        $this->date_naissance = $objectEnseignant->date_naissance;
        $this->lieu_naissance = $objectEnseignant->lieu_naissance;
        $this->nationalite = $objectEnseignant->nationalite;
        $this->cin = $objectEnseignant->cin;
        $this->genre = $objectEnseignant->genre;
        $this->civilite = $objectEnseignant->civilite;
        $this->ville = $objectEnseignant->ville;
        $this->adresse = $objectEnseignant->adresse;
        $this->telephone = $objectEnseignant->telephone;
        $this->email = $objectEnseignant->email;
        $this->telephone_urgenece = $objectEnseignant->telephone_urgenece;
        $this->grade = $objectEnseignant->grade;
        $this->religion = $objectEnseignant->religion;
        $this->goup_sang = $objectEnseignant->goup_sang;
        $this->photo = $objectEnseignant->photo;
        $this->copie_cin = $objectEnseignant->copie_cin;
        $this->copie_diplome = $objectEnseignant->copie_diplome;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nom' => 'required',
            'prenom' => 'nullable',
            'nationalite' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'cin' => 'required',
            'photo' => 'nullable',
            'genre' => 'required',
            'civilite' => 'required',
            'ville' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|unique:enseignants,telephone,' .$this->enseignant_id,
            'email' => 'required|unique:enseignants,email,' .$this->enseignant_id,
            'telephone_urgenece' => 'required|unique:enseignants,telephone_urgenece,' .$this->enseignant_id,
            'grade' => 'nullable',
            'religion' => 'nullable',
            'goup_sang' => 'nullable',
            'copie_cin' => 'required',
            'copie_diplome' => 'nullable',
            'ecole_id' => 'nullable'
        ]);

        //var_dump($validatedData);die();
        $enseignants = Enseignant::findOrFail($this->enseignant_id);
        $photo = $this->photo->store("images/enseigant_photos", 'public');
        $copie_cin = $this->copie_cin->store('images/copies_cin', 'public');
        $copie_diplome = $this->copie_diplome->store('images/copies_diplome', 'public');

        $validatedData['photo'] = $photo;
        $validatedData['copie_cin'] = $copie_cin;
        $validatedData['copie_diplome'] = $copie_diplome;
        $validatedData['ecole_id'] = Auth::user()->ecole_id;

        $enseignants->update($validatedData);

        session()->flash('message', 'Modification bien enregistre');
        $this->resetInputFields();
    }

    public function cancelEdit()
    {
        $this->updateMode = false;
        $this->resetValidation();
    }

    public function delete($id)
    {
        Enseignant::find($id)->delete();
        session()->flash('message', 'Suppression avec succée!');

        //return redirect()->back();
    }

    public function restore($id)
    {
        Enseignant::withTrashed()->find($id)->restore();
        //return redirect()->back();
        session()->flash('message', 'Eelement bien recuperé');
    }

    public function restoreAll()
    {
        Enseignant::onlyTrashed()->restore();
        session()->flash('message', 'All Trashed Data Restored');
    }
}
