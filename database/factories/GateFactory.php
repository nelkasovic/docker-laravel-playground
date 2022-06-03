<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->randomDigitNotZero(),
            'international' => $this->faker->randomElement([0, 1, 1]),
            'state_free' => $this->faker->randomElement([0, 1, 0]),
            'size_small' => $this->faker->randomElement([0, 1, 1]),
        ];
    }
}
