<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table = 'eleves';

    protected $fillable = [
        'nom_prenom',
        'appelation',
        'date_naissance',
        'lieu_naissance',
        'age',
        'sexe',
        'photo',
        'cin',
        'acte_naissance',
        'parent_id',
        'ecole_id',
        'ville',
        'adresse',
        'telephone',
        'email',
        'religion',
        'group_sang',
    ];

    public function parent()
    {
        return $this->belongsTo(ParentEleve::class, 'parent_id');
    }

    public function ecole()
    {
        return $this->belongsTo(Ecole::class, 'ecole_id');
    }
}
