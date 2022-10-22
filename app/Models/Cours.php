<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
class Cours extends Model
{
    use HasFactory;
    protected $fillable = ['nom_cours', 'image_cours', 'typeCours'];

    public function module(){
        return $this->belongsTo(Module::class);
    }
}