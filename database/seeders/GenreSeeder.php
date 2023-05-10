<?php

namespace Database\Seeders;

use App\Models\Genre; // add this
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => "Baroque"
        ]);
        Genre::create([
            'name' => "Classical"
        ]);
        Genre::create([
            'name' => "Romantic"
        ]);
    }
}
