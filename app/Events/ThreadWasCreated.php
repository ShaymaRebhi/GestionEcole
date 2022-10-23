<?php

namespace App\Events;

use App\Models\Post;
use Illuminate\Queue\SerializesModels;

class ThreadWasCreated
{
    use SerializesModels;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
}
