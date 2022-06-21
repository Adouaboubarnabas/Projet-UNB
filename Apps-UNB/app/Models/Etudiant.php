<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiants';
    protected $fillable = [
        'nom',
         'prenom',
         'email',
         'matricule',
         'cycle',
         'niveau_etude',
         'annee_academique',
         'photo'

    ];
}
