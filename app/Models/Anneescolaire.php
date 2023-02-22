<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anneescolaire extends Model
{
    use HasFactory;

    protected $table = "anneescolaires";

    protected $fillable = [
        'annee_name',
        'date_debut',
        'date_fin',
        'ecole_id'
    ];

    public function ecole()
    {
        return $this->belongsTo(Ecole::class);
    }
}
