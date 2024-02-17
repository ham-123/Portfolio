<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'formation',
        'ecole',
        'diplome',
        'annee_debut',
        'annee_fin',
        
    ];
    protected $table = 'educations';
}
