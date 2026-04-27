<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = \App\Models\Category::inRandomOrder()->first();
        $author = \App\Models\Author::inRandomOrder()->first();
        return [
            'category_id' => $category->id,
            'author_id' => $author->id,
            'name' => fake()->word(),
            'price' => fake()->numberBetween(30,350),
            'code' => fake()->randomLetter(),
            'like_count' => fake()->numberBetween(30,300 ),   
        ];
    }
}
