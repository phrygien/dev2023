<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Ecole;

class LivEcole extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $ecole_id, $ecole_name,$ecole_code, $ecole_logo, $telephone_ecole, $ecole_email, $ville, $adresse, $responsable, $telephone_responsable, $email_responsable, $type_ecole, $status, $ecole_description;
    public $updateMode = false;
    public $createMode = false;

    public function render()
    {
        $ecoles = Ecole::paginate(10);
        return view('livewire.liv-ecole', [
            'ecoles' => $ecoles
        ]);
    }

    public function create()
    {
        $this->createMode = true;
    }
}
