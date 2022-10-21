<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'         => $this->faker->text(30),
            'body'          => $this->faker->paragraph(2, true),
            'slug'          => $this->faker->unique()->slug,
            'author_id'     => rand(1,2),
            'category_id'   => rand(1, 8),
        ];
    }
}
