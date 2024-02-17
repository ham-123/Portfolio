<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'nationalite',
        'freelance',
        'adresse',
        'telephone',
        'email',
        'linkedin',
        'skype',
        'languages',
        'annee_experience',
        'complet_project',
        'prix_remporte',
    ];
    protected $table = 'abouts';
    
}
