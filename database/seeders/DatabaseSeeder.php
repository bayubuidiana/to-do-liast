<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Menggunakan Faker untuk membuat data palsu

        foreach (range(1, 10) as $index) { // Membuat 10 data palsu
            DB::table('todos')->insert([
                'title' => $faker->sentence, // Judul todo acak
                'description' => $faker->paragraph, // Deskripsi todo acak
                'is_completed' => $faker->boolean, // Status selesai (true/false) acak
                'due_date' => $faker->date, // Tanggal tenggat acak
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
