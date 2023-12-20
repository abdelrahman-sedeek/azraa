<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_settings')->delete();
        
        \DB::table('app_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'app_version' => '6',
                'app_status' => 1,
                'minimum_price' => 4000.0,
                'created_at' => '2023-03-11 02:37:13',
                'updated_at' => '2023-11-23 07:14:49',
                'stock_low' => 10,
            ),
        ));
        
        
    }
}