<?php

namespace App\Models;

use App\Traits\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Tag extends Model
{
    use HasFactory;
    use HasTimestamps;

    protected $table = 'tags';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function Posts()
    {
        return $this->belongsToMany(Post::class);
    }

}
