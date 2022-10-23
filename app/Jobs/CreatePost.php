<?php

namespace App\Jobs;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use App\Events\ThreadWasCreated;
use App\Http\Requests\PostStoreRequest;

class CreatePost
{
    private $title;
    private $body;
    private $category;
    private $tags;
    private $author;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $title, string $body,string $category, array $tags, User $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->category = $category;
        $this->tags = $tags;
        $this->author = $author;
    }


    public static function fromRequest(PostStoreRequest $request): self
    {
        return new static(
            $request->title(),
            $request->body(),
            $request->category(),
            $request->tags(),
            $request->author(),

        );
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Post
    {
        $post = new Post([
            'title'         => $this->title,
            'slug'          => Str::slug($this->title),
            'body'          => $this->body,
             'tags'         =>$this->tags,
            'category_id'   => $this->category,
        ]);

        $post->authoredBy($this->author);
        $post->syncTags($this->tags);
        $post->save();

        event(new ThreadWasCreated($post));

        return $post;
    }
}
