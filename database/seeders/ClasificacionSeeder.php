<?php

namespace Database\Seeders;

use App\Models\clasificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clasificacion::create([
            'nombre' => 'Todas las edades',
            'slug' => 'todas-las-edades',
            'descripcion' => 'Para el público en general.'
        ]);

        Clasificacion::create([
            'nombre' => '+13 años',
            'slug' => '+13-anos',
            'descripcion' => 'Apta para mayores de 13 años.'
        ]);

        Clasificacion::create([
            'nombre' => '+16 años',
            'slug' => '+16-anos',
            'descripcion' => 'Apta para mayores de 16 años.'
        ]);

        clasificacion::create([
            'nombre' => '+18 años',
            'slug' => '+18-anos',
            'descripcion' => 'Apta para mayores de 18 años.'
        ]);

        Clasificacion::create([
            'nombre' => 'Desconocido',
            'slug' => 'desconocido',
            'descripcion' => 'no se encuentra clasificada aún'
        ]);
    }
}
