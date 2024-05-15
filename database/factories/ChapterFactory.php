<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'book_id' => Book::factory(),
            'name' => fake()->streetName(),
            'excerpt' => Arr::join(fake()->sentences(), ' ', ''),
            'sequence' => fake()->numberBetween(1, 50)
        ];
    }
}
