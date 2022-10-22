<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CentreFormation;
class FormationExterne extends Model
{
    use HasFactory;


 
    protected $fillable = [
        'Nom',
        'Duree',
        'ObjectifGlobale',
        'DateDebut',
        'DateFin',
        'centre_formations_id',
        'updated_at',
        'created_at'
    ];


    public function centreFormation()

    {
    
    return $this->belongsTo(CentreFormation::class);
    
    }
}
