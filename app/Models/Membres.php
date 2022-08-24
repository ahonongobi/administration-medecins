<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membres extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'membre_id',
        'user_email',
        'nom',
        'prenom',
        'email',
        'sexe',
        'age',
        'addresse',
        'departement',
        'tel',
        'tel2',
        'etablissement',
        'carte',
        'service',
        'nom_responsable',
        'valable',
        'arret',
        'disponible',
        'equipement',
        'effet',
        'date_update',
        'visite',
        'birthdate',
    ];
}
