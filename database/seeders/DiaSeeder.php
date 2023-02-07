<?php

namespace Database\Seeders;

use App\Models\Dia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dia::create([
            'dia' => 'Lunes',
            'slug' => 'lunes'
        ]);

        Dia::create([
            'dia' => 'Martes',
            'slug' => 'martes'
        ]);

        Dia::create([
            'dia' => 'Miercoles',
            'slug' => 'miercoles'
        ]);

        Dia::create([
            'dia' => 'Jueves',
            'slug' => 'jueves'
        ]);

        Dia::create([
            'dia' => 'Viernes',
            'slug' => 'viernes'
        ]);

        Dia::create([
            'dia' => 'Sabado',
            'slug' => 'sabado'
        ]);

        Dia::create([
            'dia' => 'Domingo',
            'slug' => 'domingo'
        ]);
        
        Dia::create([
            'dia' => 'Dias',
            'slug' => 'dias'
        ]);
    }
}
