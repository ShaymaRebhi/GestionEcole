<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etablissement;

class Departement extends Model
{
    use HasFactory;
    public function etablissement (){
        return $this->belongsTo(Etablissement::class);
    }
    protected $fillable = ['Nom', 'Chef_Departement', 'Bloc', 'Etage', 'etablissement_id'];
}
