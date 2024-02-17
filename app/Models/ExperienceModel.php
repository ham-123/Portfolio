<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'poste',
        'description',
        'entreprise',
        'date_debut',
        'date_fin'
        
    ];
    protected $table = 'experiences';


}
