<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    const TABLE = 'events';

    protected $table = self::TABLE;

    protected $fillable = [
        'nom',
        'type',
        'date',
        'time',
        'nbPersonnes',
        'nbPersonnesMax',
        'lieu',
        'club_id'
    ];

    public function club()
    {
        return $this->belongsTo(club::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->as('users');
    }
}
