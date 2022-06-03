<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numberBetween(999, 999999),
            'start_time' => $this->faker->dateTime,
            'landing_time' => $this->faker->dateTime,
        ];
    }
}
