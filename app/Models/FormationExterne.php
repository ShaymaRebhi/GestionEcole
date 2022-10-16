<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationExterne extends Model
{
    use HasFactory;


    public function CentreFormation()

{

return $this->belongsTo(CentreFormation::class);

}

   
}
