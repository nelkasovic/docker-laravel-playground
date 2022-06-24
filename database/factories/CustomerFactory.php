<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'street_name' => $this->faker->streetName,
            'street_number' => $this->faker->randomDigitNotZero(),
            'zip' => $this->faker->randomNumber(4),
            'city' => $this->faker->city,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'user_id' => User::all()->random()->id
        ];
    }
}
