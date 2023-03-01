<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';

    protected $fillable = [
        'section_name',
        'section_code',
        'niveau_id',
        'section_statut',
    ];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'niveau_id');
    }
}
