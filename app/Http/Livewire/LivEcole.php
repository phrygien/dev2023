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
        $ecoles = Ecole::paginate(2);
        return view('livewire.liv-ecole', [
            'ecoles' => $ecoles
        ]);
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function cancelCreate()
    {
        $this->createMode = false;
    }
    public function resetInputFields()
    {
        $this->ecole_name = '';
        $this->ecole_code = '';
        $this->ecole_logo = '';
        $this->telephone_ecole = '';
        $this->ecole_email = '';
        $this->ville = '';
        $this->adresse = '';
        $this->responsable = '';
        $this->telephone_responsable = '';
        $this->email_responsable = '';
        $this->type_ecole = '';
        $this->status = '';
        $this->ecole_description ='';
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'ecole_name' => 'required',
            'ecole_code' => 'required',
            'ecole_logo' => 'nullable|mimes:png,jpg,jpeg,gif',
            'telephone_ecole' => 'required|unique:ecoles',
            'ecole_email' => 'required|unique:ecoles',
            'ville' => 'required',
            'adresse' => 'required',
            'responsable' => 'required',
            'telephone_responsable' => 'required|unique:ecoles',
            'email_responsable' => 'required|unique:ecoles',
            'type_ecole' => 'required',
            'ecole_description' => 'required',
            'status' => 'required'
        ]);

        $logoName = $this->ecole_logo->store("images", 'public');
        $validatedData['ecole_logo'] = $logoName;
        Ecole::create($validatedData);

        session()->flash('message', 'Ecole bien enregistré!');
        //return redirect()->to('/ecoles');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $objet_ecole = Ecole::findOrFail($id);
        $this->ecole_id = $id;

        $this->ecole_name = $objet_ecole->ecole_name;
        $this->ecole_code = $objet_ecole->ecole_code;
        $this->ecole_logo = $objet_ecole->ecole_logo;
        $this->telephone_ecole = $objet_ecole->telephone_ecole;
        $this->ecole_email = $objet_ecole->ecole_email;
        $this->ville = $objet_ecole->ville;
        $this->adresse = $objet_ecole->adresse;
        $this->responsable = $objet_ecole->responsable;
        $this->telephone_responsable = $objet_ecole->telephone_responsable;
        $this->email_responsable = $objet_ecole->email_responsable;
        $this->type_ecole = $objet_ecole->type_ecole;
        $this->status = $objet_ecole->status;
        $this->ecole_description = $objet_ecole->ecole_description;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'ecole_name' => 'required',
            'ecole_code' => 'required',
            'ecole_logo' => 'nullable|image|mimes:jpeg,png,svg,jpg,gif',
            'telephone_ecole' => 'required|unique:ecoles,telephone_ecole, ' . $this->ecole_id,
            'ecole_email' => 'required|unique:ecoles,ecole_email,' .$this->ecole_id,
            'ville' => 'required',
            'adresse' => 'required',
            'responsable' => 'required',
            'telephone_responsable' => 'required|unique:ecoles,telephone_responsable, ' . $this->ecole_id,
            'email_responsable' => 'nullable|unique:ecoles,email_responsable, ' . $this->ecole_id,
            'type_ecole' => 'required',
            'ecole_description' => 'nullable'
        ]);

        $ecole = Ecole::find($this->ecole_id);
        $logoName = $this->ecole_logo->store("images", 'public');
        $validatedData['ecole_logo'] = $logoName;
        $ecole->update($validatedData);

        session()->flash('message', 'Modification école bien enregistré');
        return redirect()->to('/ecoles');
    }

    public function delete($id)
    {
        Ecole::find($id)->delete();

        session()->flash('message', 'Suppression avec succée');
    }

    public function activeEcole($ecole_id)
    {
        $ecoleObject = Ecole::find($ecole_id)->update(['status' => 1]);
        session()->flash('message', 'Ecole bien activé!');
        return redirect()->to('/ecoles');
    }

    public function desactiveEcole($ecole_id)
    {
        $ecoleObject = Ecole::find($ecole_id)->update(['status'=>0]);
        session()->flash('message', 'Ecole desactivé');
        return redirect()->to('/ecoles');
    }
}
