<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stagiaire extends Model
{
    use HasFactory;
    protected  $fillable = ['nom', 'prenom', 'email', 'photo', 'cv', 'ville', 'datenaissance', 'filiere'];
}
