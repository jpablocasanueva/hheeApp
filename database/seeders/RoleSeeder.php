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
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Imputador']);
        $role3 = Role::create(['name' => 'RRHH']);

        Permission::create(['name' => 'createLocal'])->assignRole($role1);
        Permission::create(['name' => 'createColaborador'])->assignRole($role1);
        Permission::create(['name' => 'createRegistro'])->syncRoles([$role1, $role2]);
    }
}
