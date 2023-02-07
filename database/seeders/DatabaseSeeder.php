<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Butaca;
use App\Models\Codigo;
use App\Models\Comentario;
use App\Models\Entrada;
use App\Models\Horario;
use App\Models\Sala;
use App\Models\Sala_Butaca;
use Database\Factories\Sala_ButacaFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('image');
        Storage::makeDirectory('image');
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(ClasificacionSeeder::class); 
        $this->call(Diaseeder::class);
        $this->call(BeneficioSeeder::class);
        $this->call(TipoSeeder::class);
        Sala::factory(2)->create();
        $this->call(ButacaSeeder::class);
       $this->call(ComboSeeder::class);
       $this->call(PeliculaSeeder::class);
       Horario::factory(10)->create();
       Entrada::factory(2)->create();
    }
}
