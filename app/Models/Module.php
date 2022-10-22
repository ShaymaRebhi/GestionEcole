<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cours;
class Module extends Model
{
    use HasFactory;
     protected $fillable = ['nom_modules', 'image_modules'];
     public function courss(){
             return $this->hasMany(Cours::class);
         }

}
