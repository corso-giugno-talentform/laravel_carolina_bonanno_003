<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->words(2, true),
            'year' => fake()->numberBetween(1800, 2025),
            'pages' => fake()->numberBetween(100, 1000),
            'author_id' => Author::factory(),
        ];
    }
}
