<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('regionals')->insert(array(
            1 => array(
                'description' => 'REGIONAL SUR',
            ),
            2=> array(
                'description' => 'REGIONAL CENTRO SUR',
            ),
            3=> array(
                'description' => 'REGIONAL ANTIOQUIA', 
            ),
            4=> array (
                'description' => 'REGIONAL CENTRO NORTE',
            ),
            5=>array (
                'description' => 'REGIONAL COSTA',
            )
        )
 
        );
    }
}
