<?php

namespace App\Models;

use App\Traits\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Model
{
    use HasFactory;
    use HasTimestamps;

    protected $fillable = ['name', 'slug'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

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

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
}
