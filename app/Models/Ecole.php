<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    protected $table = "ecoles";

    protected $fillable = [
        'ecole_name',
        'ecole_code',
        'ecole_logo',
        'telephone_ecole',
        'ecole_email',
        'ville',
        'adresse',
        'responsable',
        'telephone_responsable',
        'email_responsable',
        'type_ecole',
        'status',
        'ecole_description'
    ];
}
