<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Formation;
class FormationInterne extends Model
{
    use HasFactory;
    protected $fillable = ['Nom', 'Duree', 'ObjectifGlobale', 'DateDebut', 'DateFin'];
}
