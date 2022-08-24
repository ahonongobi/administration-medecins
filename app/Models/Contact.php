<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'tel', 'etablissement', 'statut', 'name', 'user_id'];
    protected $table= 'contacts';
}
