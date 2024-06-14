<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 2),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'skill_level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced', 'Expert']),
        ];
    }
}
