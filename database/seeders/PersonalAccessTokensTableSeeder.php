<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'myToken',
                'token' => '8d485510f573d17fa0559e9a96a78680fb2545cf30a5efa6ecda846f612fe151',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2024-01-09 21:51:47',
                'updated_at' => '2024-01-09 21:51:47',
            ),
        ));
        
        
    }
}