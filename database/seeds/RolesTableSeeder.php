<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // ADMIN ROLE
        $adminRole = Role::create(['name' => 'admin']);
        // USER - ROLE
        $userRole = Role::create(['name' => 'user']);

        // CONSULTA AS PERMISSOES
        $permission = Permission::get();

        // Associa Todas as Permissoes para o Admin
        foreach ($permission as $key => $value) {
            $adminRole->givePermissionTo($value);
        }

        // Define uma Lista de Permissões que serão associadas ao usuário
        $lstPermissToUser = ['user-list', 'role-list'];

        foreach ($lstPermissToUser as $value) {
            $userRole->givePermissionTo($value);
        }

    }
}