<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Client' ])-> default;
    
    Permission::create(['name' => 'admin.Beneficio.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Beneficio.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Beneficio.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Beneficio.destroy'])->syncRoles([$role1]);

    Permission::create(['name' => 'admin.Combo.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Combo.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Combo.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Combo.destroy'])->syncRoles([$role1]);

    Permission::create(['name' => 'admin.Horario.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Horario.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Horario.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Horario.destroy'])->syncRoles([$role1]);

    Permission::create(['name' => 'admin.Peliculas.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Peliculas.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Peliculas.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Peliculas.destroy'])->syncRoles([$role1]);
    
    Permission::create(['name' => 'admin.Sala.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Sala.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Sala.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Sala.destroy'])->syncRoles([$role1]);
    
    Permission::create(['name' => 'admin.Entrada.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Entrada.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Entrada.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Entrada.destroy'])->syncRoles([$role1]);
    
    Permission::create(['name' => 'admin.Usuario.index'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Usuario.create'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Usuario.edit'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.Usuario.destroy'])->syncRoles([$role1]);
    
    Permission::create(['name' => 'admin.Comentario.index'])->syncRoles([$role1]);
    }
}

