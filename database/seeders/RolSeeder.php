<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name' => 'Admin']);
        $role_generalist = Role::create(['name' => 'Generalist']);
        $role_boss = Role::create(['name' => 'Boss']);

        $permission_index_answers = Permission::create(['name' => 'index.answers'])->syncRoles([$role_admin,$role_generalist]);
        $permission_show_answers = Permission::create(['name' => 'show.answers'])->syncRoles([$role_admin,$role_generalist]);
        $permission_update_answers = Permission::create(['name' => 'update.answers'])->syncRoles([$role_admin,$role_generalist]);
        $permission_delete_answers = Permission::create(['name' => 'delete.answers'])->syncRoles([$role_admin,$role_generalist]);
        $permission_store_answers = Permission::create(['name' => 'store.answers'])->assignRole($role_boss);

        // $permission_index_headers = Permission::create(['name' => 'index.headers'])->assignRole($role_generalist);
        // $permission_show_headers = Permission::create(['name' => 'show.headers'])->assignRole($role_generalist);
        // $permission_update_headers = Permission::create(['name' => 'update.headers'])->assignRole($role_generalist);

        // $permission_index_questions = Permission::create(['name' => 'index.questions'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_show_questions = Permission::create(['name' => 'show.questions'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_update_questions = Permission::create(['name' => 'update.questions'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_delete_questions = Permission::create(['name' => 'delete.questions'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_store_questions = Permission::create(['name' => 'store.questions'])->syncRoles([$role_admin,$role_generalist]);

        // $permission_index_regionals = Permission::create(['name' => 'index.regionals'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_show_regionals = Permission::create(['name' => 'show.regionals'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_update_regionals = Permission::create(['name' => 'update.regionals'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_delete_regionals= Permission::create(['name' => 'delete.regionals'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_store_regionals = Permission::create(['name' => 'store.regionals'])->syncRoles([$role_admin,$role_generalist]);

        // $permission_index_stores = Permission::create(['name' => 'index.stores'])->assignRole($role_generalist);
        // $permission_show_stores = Permission::create(['name' => 'show.stores'])->assignRole($role_generalist);
        // $permission_update_stores = Permission::create(['name' => 'update.stores'])->assignRole($role_generalist);
        // $permission_delete_stores = Permission::create(['name' => 'delete.stores'])->assignRole($role_generalist);
        // $permission_store_stores = Permission::create(['name' => 'store.stores'])->assignRole($role_generalist);

        // $permission_index_users = Permission::create(['name' => 'index.users'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_show_users = Permission::create(['name' => 'show.users'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_update_users = Permission::create(['name' => 'update.users'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_delete_users = Permission::create(['name' => 'delete.users'])->syncRoles([$role_admin,$role_generalist]);
        // $permission_store_users = Permission::create(['name' => 'store.users'])->syncRoles([$role_admin,$role_generalist]);
        

       
    }
}
