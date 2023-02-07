<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $peliculas = Pelicula::factory(3)->create();

        foreach($peliculas as $pelicula) 
         Image::factory(1)->create([
             'imageable_id' => $pelicula->id,
             'imageable_type' => Pelicula::class]);
    }
}
