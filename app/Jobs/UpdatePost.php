<?php

namespace App\Jobs;


use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class UpdatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $post;
    private $attributes;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Post $post, array $attributes = [])
    {
        $this->post = $post;
        $this->attributes = Arr::only($attributes, [
            'title', 'slug', 'body', 'category_id', 'tags'
        ]);
    }

    public static function fromRequest(Post $post, PostStoreRequest $request): self
    {
        return new static($post, [
            'title'         => $request->title(),
            'body'          => $request->body(),
            'category_id'   => $request->category(),
            'slug'          => Str::slug($request->title()),
            'tags'          => $request->tags(),
        ]);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->post->update($this->attributes);

        if (Arr::has($this->attributes, 'tags')) {
            $this->post->syncTags($this->attributes['tags']);
        }

        $this->post->save();

        return $this->post;
    }
}
