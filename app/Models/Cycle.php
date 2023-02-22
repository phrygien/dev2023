<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;

    protected $table = "cycles";

    protected $fillable = [
        'cycle_name',
        'cycle_code',
        'ecole_id',
        'annee_id'
    ];

    public function ecole()
    {
        return $this->belongsTo(Ecole::class, 'ecole_id');
    }

    public function anneescolaire()
    {
        return $this->belongsTo(Anneescolaire::class, 'annee_id');
    }
}
