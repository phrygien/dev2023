<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParentEleve extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'parents';

    protected $fillable = [
        'nom_prenom_pere',
        'nom_prenom_mere',
        'fonction_pere',
        'fonction_mere',
        'ville_parent',
        'adresse_parent',
        'telephone_parent',
        'email_parent'
    ];

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }
}
