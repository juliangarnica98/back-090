<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrador',
                'last_name' => 'General',
                'email' => 'admin@fastmoda.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zXGHp4AnhtvU2SUBk7/b7OoBmYkt9EEBHFMT7sSaoAf7orUJXmHBq',
                'status' => 1,
                'remember_token' => NULL,
                'store_id' => null,
                'created_at' => '2024-01-09 21:51:47',
                'updated_at' => '2024-01-09 21:51:47',
            ),
        ));
        
        
    }
}