<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\WithPagination;
class PostController extends Controller
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function index()
    {

        $posts = Post::with(['tags'])->latest()->paginate(10);
        return view('module.posts.index', [
            'posts' => Post::orderBy('id', 'desc')->paginate(5),
        ]);
    }


    public function create()
    {
        $tags = Tag::all();
        return view('module.posts.index', compact('tags'),[
            'categories'    => Category::all(),
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'body' => 'required'
        ]);
        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
        ]);

        if ($request->has('tags')) {
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');

    }

    public function show(Post $post)
    {

    }


    public function edit(Post $post)
    {
        //
    }


    public function update(Request $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
