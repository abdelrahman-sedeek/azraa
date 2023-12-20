<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RepresentativesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('representatives')->delete();
        
        \DB::table('representatives')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'تجربة',
                'image' => 'admin/img/upload/1679830518.jpg',
                'mobile' => '01153165841',
                'balance' => 0.0,
                'created_at' => '2023-03-26 13:35:19',
                'updated_at' => '2023-03-26 13:35:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'تجربة',
                'image' => 'admin/img/upload/1690421320.jpg',
                'mobile' => '01025261892',
                'balance' => 0.0,
                'created_at' => '2023-07-27 04:28:41',
                'updated_at' => '2023-07-27 04:28:41',
            ),
        ));
        
        
    }
}