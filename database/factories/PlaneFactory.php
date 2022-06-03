<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'passengers' => $this->faker->randomNumber(3),
            'refuel_time' => $this->faker->randomFloat(2, 30, 300),
            'jet' => $this->faker->randomElement([0, 1]),
            'propeller' => $this->faker->randomElement([0, 1])
        ];
    }
}
