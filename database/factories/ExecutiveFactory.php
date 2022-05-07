<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Executive>
 */
class ExecutiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dui' => $this->faker->numerify("##########"),
            'category' => $this->faker->text($maxNbChars = 5),
            'user_id' => $this->faker->numberBetween(2, 5),
        ];
    }
}
