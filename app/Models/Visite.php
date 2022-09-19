<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $table = 'visites';
    protected $fillable = [
        'id_user',
        'nom',
        'prenom',
        'type_visite',
        'date_visite',
        'lieu_visite',
        'dose',
    ];
}
