<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enseignant extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'enseignants';

    protected $fillable = [
        'nom',
        'prenom',
        'nationalite',
        'date_naissance',
        'lieu_naissance',
        'cin',
        'photo',
        'genre',
        'civilite',
        'ville',
        'adresse',
        'telephone',
        'email',
        'telephone_urgenece',
        'grade',
        'religion',
        'goup_sang',
        'copie_cin',
        'copie_diplome',
        'ecole_id'
    ];

    public function ecole()
    {
        return $this->belongsTo(Ecole::class, 'ecole_id');
    }
}
