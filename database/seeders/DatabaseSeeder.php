<?php

namespace Database\Seeders;

use Database\Factories\AirportFactory;
use Database\Factories\FlightFactory;
use Database\Factories\GateFactory;
use Database\Factories\PlaneFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        GateFactory::times(5)->create();
        FlightFactory::times(5)->create();
        PlaneFactory::times(5)->create();
        AirportFactory::times(5)->create();
    }
}
