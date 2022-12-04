<?php

namespace Database\Factories;

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
        $i = 0;
        $body = '';
        while ($i < rand(1, 5)) {
            $body .= '<p class="lead">' . fake()->paragraph(rand(2, 6)) . '</p>';
            $i++;
        }

        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'image' => fake()->imageUrl(640, 480, 'herbs'),
            'body' => $body,
        ];
    }
}
