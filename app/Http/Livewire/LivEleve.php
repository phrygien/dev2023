<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class LivEleve extends Component
{
    public $createMode = false;
    public $updateMode = false;

    use WithFileUploads;
    use WithPagination;

    public $eleve_id, $nom_prenom, $appelation, $date_naissance, $lieu_naissance,
    $age, $sexe, $photo, $cin, $acte_naissance, $parent_id, $ecoleid, $ville, $adresse,
    $telephone, $email, $religion, $group_sang,
    $nom_prenom_pere, $nom_prenom_mere, $fonction_pere, $fonction_mere,
    $ville_parent, $adresse_parent, $telephone_parent, $email_parent;

    public function render()
    {
        $eleves = DB::table('eleves')
                    ->join('parents','parents.id', '=', 'eleves.parent_id')
                    ->join('ecoles', 'ecoles.id', '=', 'eleves.ecole_id')
                    ->select('eleves.*', 'parents.*', 'ecoles.ecole_name')
                    ->paginate(10);

        return view('livewire.liv-eleve', [
            'eleves' => $eleves
        ]);
    }
}
