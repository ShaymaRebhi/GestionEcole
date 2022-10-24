<?php

namespace App\Events;

use App\Models\Post;
use Illuminate\Queue\SerializesModels;

class PostWasCreated
{
    use SerializesModels;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
}
