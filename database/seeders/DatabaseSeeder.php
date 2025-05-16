<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class); // Pastikan UserSeeder juga sudah ada
        $this->call(TodoSeeder::class);
    }
    
}
