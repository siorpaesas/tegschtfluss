<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Build>
 */
class BuildFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'chapter_id' => Chapter::factory(),
            'words' => fake()->numberBetween(8000, 14000),
            'length' => fake()->numberBetween(6, 29),
            'message' => Arr::join(fake()->sentences(), ' ', ''),
        ];
    }
}
