<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startYear = fake()->numberBetween(2002, 2023);
        $endYear = fake()->numberBetween($startYear, 2024);
        $duration = $startYear . '-' . $endYear;
        return [
            'company' => fake()->company,
            'order' => fake()->unique()->word,
            'field' => fake()->word,
            'duration' => $duration,
        ];
    }
}
