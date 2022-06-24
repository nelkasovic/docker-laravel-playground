<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //CustomerFactory::times(2)->create();
        ArticleFactory::times(20)->create();
    }
}
