<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceModel extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'niveau'];

    protected $table = 'competences';
}
