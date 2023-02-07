<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'nombre' => 'Terror',
            'slug' => 'terror'
        ]);

        Genero::create([
            'nombre' => 'Comedia',
            'slug' => 'comedia'
        ]);
        Genero::create([
            'nombre' => 'Accion',
            'slug' => 'accion'
        ]);

        Genero::create([
            'nombre' => 'Drama',
            'slug' => 'drama'
        ]);

        Genero::create([
            'nombre' => 'Ciencia ficcion',
            'slug' => 'ciencia-ficcion'
        ]);

        Genero::create([
            'nombre' => 'Romance',
            'slug' => 'romance'
        ]);

        Genero::create([
            'nombre' => 'Animado',
            'slug' => 'animado'
        ]);
    }
    }
