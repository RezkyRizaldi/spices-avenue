<?php

namespace Database\Factories;

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
        return [
            'category_id' => fake()->numberBetween(1, Category::count()),
            'title' => fake()->sentence(mt_rand(2, 8)),
            'slug' => fake()->slug(),
            'image' => fake()->imageUrl(640, 480, 'herbs'),
            'body' => collect(fake()->paragraphs(mt_rand(5, 10)))
                ->map(fn (string $p) => "<p class=\"lead\"/>{$p}</p>")
                ->implode(''),
        ];
    }
}
