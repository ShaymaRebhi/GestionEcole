<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class FormationInterne extends Model
{
    use HasFactory;
    protected $fillable = ['Nom', 'Duree', 'ObjectifGlobale', 'DateDebut', 'DateFin','Lieux'];

    public function users()
    {
        return $this->belongsToMany(User::class)->as('users');
    }
}
