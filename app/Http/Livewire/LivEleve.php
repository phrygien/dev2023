<?php

namespace App\Http\Livewire;

use App\Models\Anneescolaire;
use App\Models\Ecole;
use App\Models\Eleve;
use App\Models\Inscription;
use App\Models\ParentEleve;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Usernotnull\Toast\Concerns\WireToast;

class LivEleve extends Component
{
    public $createMode = false;
    public $updateMode = false;
    public $detailMode = false;

    use WithFileUploads;
    use WithPagination;
    use WireToast;

    public $eleve_id, $nom_prenom, $appelation, $date_naissance, $lieu_naissance,
    $age, $sexe, $photo, $cin, $acte_naissance, $parent_id, $ecole_id, $ville, $adresse,
    $telephone, $email, $religion, $group_sang, $statut_eleve, $nationalite,
    $nom_prenom_pere, $nom_prenom_mere, $fonction_pere, $fonction_mere,
    $ville_parent, $adresse_parent, $telephone_parent, $email_parent;

    public $trashedData = false;

    public function render()
    {
        if($this->trashedData == true)
        {
            $eleves = DB::table('eleves')
            ->join('parents','parents.id', '=', 'eleves.parent_id')
            ->join('ecoles', 'ecoles.id', '=', 'eleves.ecole_id')
            ->select('eleves.*', 'parents.*', 'ecoles.ecole_name')
            ->where('eleves.deleted_at', '!=', null)
            ->paginate(10);
        }else{

        $eleves = DB::table('eleves')
                    ->join('parents','parents.id', '=', 'eleves.parent_id')
                    ->join('ecoles', 'ecoles.id', '=', 'eleves.ecole_id')
                    ->select('eleves.*', 'parents.*', 'ecoles.ecole_name')
                    ->where('eleves.deleted_at', '=', null)
                    ->paginate(10);
        }

        return view('livewire.liv-eleve', [
            'eleves' => $eleves
        ]);
    }

    public function displayTrashedData()
    {
        $this->trashedData = true;
    }

    public function resetInputFields()
    {
        $this->nom_prenom = '';
        $this->appelation = '';
        $this->date_naissance = '';
        $this->lieu_naissance = '';
        $this->telephone = '';
        $this->age = '';
        $this->sexe = '';
        $this->photo = '';
        $this->cin = '';
        $this->acte_naissance = '';
        $this->ville = '';
        $this->adresse = '';
        $this->nom_prenom_pere = '';
        $this->nom_prenom_mere = '';
        $this->fonction_pere = '';
        $this->fonction_mere = '';
        $this->ville_parent = '';
        $this->adresse_parent = '';
        $this->telephone_parent = '';
        $this->email_parent = '';
        $this->nationalite = '';
        $this->statut_eleve = '';
        $this->group_sang = '';
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function cancelCreate()
    {
        $this->createMode = false;
        $this->resetInputFields();
        $this->resetValidation();
    }

    public function store()
    {
        $validatedData = $this->validate([
            'nom_prenom' => 'required',
            'appelation' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'nullable',
            'age' => 'nullable',
            'sexe' => 'required',
            'photo' => 'required',
            'cin' => 'nullable',
            'acte_naissance' => 'nullable',
            'parent_id' => 'nullable',
            'ecole_id' => 'nullable',
            'ville' => 'required',
            'adresse' => 'required',
            'telephone' => 'nullable|unique:eleves,telephone',
            'email' => 'nullable|unique:eleves,email',
            'religion' => 'nullable',
            'group_sang' => 'nullable',
            'nationalite' => 'nullable',
            'statut_eleve' => 'required',
            'telephone_parent' => 'required|unique:parents,telephone_parent',
            'email_parent' => 'required|unique:parents,email_parent'
        ]);
        DB::beginTransaction();
        //create parent
        $parent = new ParentEleve();
        $parent->nom_prenom_pere = $this->nom_prenom_pere;
        $parent->nom_prenom_mere = $this->nom_prenom_mere;
        $parent->fonction_pere = $this->fonction_pere;
        $parent->fonction_mere = $this->fonction_mere;
        $parent->ville_parent = $this->ville_parent;
        $parent->adresse_parent = $this->adresse_parent;
        $parent->telephone_parent = $this->telephone_parent;
        $parent->email_parent = $this->email_parent;
        $parent->save();

        //create eleve
        $findCreatedParent = ParentEleve::where('email_parent', $this->email_parent)->where('telephone_parent', $this->telephone_parent)->first();

        $validatedData['parent_id'] = $findCreatedParent->id;
        $validatedData['ecole_id'] = Auth::user()->ecole_id;
        $photoName = $this->photo->store("images/eleves_photo", 'public');
        $acteNaissance = $this->acte_naissance->store("images/eleves_acte_naissances", 'public');

        $validatedData['photo'] = $photoName;
        $validatedData['acte_naissance'] = $acteNaissance;
        //Eleve::create();
        if(Eleve::create($validatedData)){
        DB::commit();
        toast()
        ->success('Donnée bien enregistré!')
        ->push();
        $this->resetInputFields();
        $this->resetValidation();

        }else{
            DB::rollBack();
            toast()
            ->danger('Donnée non enregistré!')
            ->push();

        }
    }

    public function detail($id)
    {
        $this->detailMode = true;
    }

    public function activer($id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->statut_eleve = 1;
        $eleve->save();

        toast()
        ->success('Activation avec succée!')
        ->push();
    }

    public function desactiver($id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->statut_eleve = 0;
        $eleve->save();
        toast()
        ->success('Desactivation avec succée!')
        ->push();
    }

    public function delete($id)
    {

        $anneeOuvert = Anneescolaire::where('ecole_id', Auth::user()->ecole_id)
                        ->where('statut',1)
                        ->first();

        $inscrived = Inscription::where('eleve_id', $id)
                    ->where('ecole_id', Auth::user()->ecole_id)
                    ->where('annee_id', $anneeOuvert->annee_id)
                    ->first();
        if($inscrived ==null){
            Eleve::find($id)->delete();
            toast()
            ->success('Suppression avec succée')
            ->push();
        }else{
            toast()
            ->warning('Eleve lié a une inscription')
            ->push();
        }
    }

    public function restore($id)
    {
        Eleve::withTrashed()->findOrFail($id)->restore();
        toast()
        ->success('Restauration avec succée')
        ->push();
        $this->trashedData = false;
    }

    public function restorAll()
    {
        Eleve::onlyTrashed()->restore();
        toast()
        ->success('Restauration avec succée')
        ->push();
        $this->trashedData = false;
    }
}
