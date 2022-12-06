<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        $body = collect(fake()->paragraphs(mt_rand(5, 10)))
            ->map(fn (string $p) => "<p class=\"lead\"/>{$p}</p>");

        return [
            'category_id' => fake()->numberBetween(1, Category::count()),
            'author_id' => fake()->numberBetween(1, Author::count()),
            'title' => fake()->sentence(mt_rand(2, 6)),
            'slug' => fake()->unique()->slug(),
            'excerpt' => $body->slice(0, 3)->implode(''),
            'body' => $body->implode(''),
        ];
    }
}
