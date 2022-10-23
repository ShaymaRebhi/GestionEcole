<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormationExterne;
class CentreFormation extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomCentreFormation',
        'Formateur',
        'Lieux',
        'logo_centre',
        'updated_at',
        'created_at'
    ];

    
   

    public function formationExternes()

{

return $this->hasMany(FormationExterne::class);

} 
}
