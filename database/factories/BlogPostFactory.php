<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => '1',
            'title' => $title = fake()->sentence(),
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(),
            'image' => 'https://picsum.photos/1920/1080?random=' . fake()->unique()->numberBetween(1, 10000),
            'published' => fake()->numberBetween(0, 1)
        ];
    }
}
