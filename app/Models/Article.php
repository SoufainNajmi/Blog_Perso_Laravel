<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    //
       use HasFactory;// Permet de générer des données factices pour les tests

    // Autoriser ces champs à être remplis en masse
    protected $fillable = [ // Permet de spécifier les champs qui peuvent être remplis en masse
        'title',
        'content',
        'author'
    ];

    // Définir la relation avec les commentaires

}
