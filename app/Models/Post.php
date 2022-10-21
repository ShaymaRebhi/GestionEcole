<?php

namespace App\Models;

use App\Traits\HasTags;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;
    use HasTags;

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
//    public function tagsRelation() : MorphToMany
//    {
//        return $this->morphToMany(Tag::class,'taggables')->withTimestamps();
//    }
}
