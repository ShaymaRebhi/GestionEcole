<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Jobs\CreatePost;
use App\Jobs\UpdatePost;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


class PostController extends Controller
{

    public function create()
    {
        $tags = Tag::all();
        return view('module.posts.create',compact('tags'), [ 'categories'    => Category::all()]);
    }

    public function store(PostStoreRequest $request)
    {
        $this->dispatchSync(CreatePost::fromRequest($request));
        return redirect()->route('posts.index')->with('success', 'Post created!');

    }

    public function show(Category $category, Post $post)
    {
        $id=$post->author_id;
        $user= User::find($id);
        $related = $post->relatedPostsByTag();
        return view('module.posts.show', compact('post', 'category' , 'user','related'));

    }


    public function edit(Post $post)
    {
//        $this->authorize(PostPolicy::UPDATE, $post);

        $oldTags = $post->tags()->pluck('tag_id')->toArray();
        $selectedCategory = $post->category;

        return view('module.posts.edit', [
            'post'            => $post,
            'tags'              => Tag::all(),
            'oldTags'           => $oldTags,
            'categories'        => Category::all(),
            'selectedCategory'  => $selectedCategory,
        ]);
    }


    public function update(PostStoreRequest $request, Post $post)
    {
//        $this->authorize(PostPolicy::UPDATE, $post);

        $this->dispatchSync(UpdatePost::fromRequest($post, $request));

        return redirect()->route('posts.index')->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        //
    }

    public function index()
    {
        return view('module.posts.index');
    }
}
