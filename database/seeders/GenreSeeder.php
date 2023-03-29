<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
        'code' => '5221430', 'name' => 'Acción',
       ]);
        Genre::create([
            'code' => '47583945', 'name' => 'Comedia'
        ]);
        Genre::create([
            'code' => '47395035', 'name' => 'Drama'
        ]);
        Genre::create([
            'code' => '59683205', 'name' => 'Terror'
        ]);
    }
}
