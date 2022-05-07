<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween($min = 18, $max = 70),
            'amount' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 20, $max = 500), // 48.8932
            'direction' => $this->faker->address(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'executive_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
