<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 56,
                'name' => 'ابو عوف',
                'image' => 'admin/img/upload/1697768379.png',
                'id_subcategory' => 9,
                'created_at' => '2023-10-20 05:19:39',
                'updated_at' => '2023-10-20 05:19:39',
            ),
            1 => 
            array (
                'id' => 57,
                'name' => 'رشيدي الميزان',
                'image' => 'admin/img/upload/1697768396.png',
                'id_subcategory' => 14,
                'created_at' => '2023-10-20 05:19:56',
                'updated_at' => '2023-10-20 05:19:56',
            ),
        ));
        
        
    }
}