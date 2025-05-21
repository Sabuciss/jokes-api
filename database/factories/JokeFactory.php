<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joke>
 */
class JokeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
        {
            return [
                'type' => $this->faker->randomElement(['programming', 'general', 'dad', 'dark']),
                'setup' => $this->faker->sentence(6),
                'punchline' => $this->faker->sentence(8),
            ];

            return $this->faker->randomElement($jokes);
        }

}
