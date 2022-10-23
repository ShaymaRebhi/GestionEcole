<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;


class PostPolicy
{
    const UPDATE = 'update';
    const DELETE = 'delete';


    public function update(User $user, Post $post): bool
    {
        return $post->isAuthoredBy($user);
    }

    public function delete(User $user, Post $post): bool
    {
        return $post->isAuthoredBy($user);
    }

}
