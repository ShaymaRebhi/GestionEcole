<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;

class Etablissement extends Model
{
    use HasFactory;
    public function departements (){
        return $this->hasMany(Departement::class);
    }
    protected $fillable = ['Nom', 'Type', 'Adresse'];
}
