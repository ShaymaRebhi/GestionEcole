<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    const TABLE = 'clubs';

    protected $table = self::TABLE;

    protected $fillable = [
        'nom',
        'type',
        'nbPersonnes',
        'dateCreation',
        'description',
    ];
    

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->as('users');
    }
}
