<?php

namespace App\Http\Livewire;


use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class PostShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $mle = '';

    public function deletePost(int $post_id)
    {
        $this->post_id = $post_id;
    }
    public function destroyPost()
    {
        Post::find($this->post_id)->delete();
        session()->flash('success', 'Post Deleted!');
    }
    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';

    }
    public function render()
    {
        $name ='';
        $postsbytag = Post::whereHas('tags', function($query) use ($name) {
            $query->whereName($name);
        })->get();

        $counts = Tag::join('post_tag', 'tags.id', '=', 'post_tag.tag_id')
            ->groupBy('tags.id')
            ->select(['tags.*', DB::raw('COUNT(*) as cnt')])
            ->orderBy('cnt', 'desc')
            ->get()->count();
        $countPosts = Post::count();
        $LatestUser = User::latest('created_at')->first();
        $countUsers = User::count();
        $latest = Post::latest('created_at')->take(4)->get();
        $posts = Post::with(['tags'])->latest()->where('category_id', 'like', '%'.$this->search.'%')
       ->paginate(10);
        $tags = Tag::all();
        $categories =Category::all();
        return view('livewire.post.post-show', ['posts' =>$posts , 'tags'=>$tags ,'latest'=>$latest ,
            'LatestUser'=>$LatestUser ,'countUsers'=>$countUsers ,'countPosts'=>$countPosts ,'counts'=>$counts,'categories'=>$categories ]);
    }
}
