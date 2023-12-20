<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_themes')->delete();
        
        \DB::table('app_themes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'theme' => 7,
                'created_at' => '2023-07-27 04:08:03',
                'updated_at' => '2023-10-14 11:27:47',
            ),
        ));
        
        
    }
}