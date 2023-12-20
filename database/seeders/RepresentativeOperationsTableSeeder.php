<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RepresentativeOperationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('representative_operations')->delete();
        
        \DB::table('representative_operations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'representative_id' => 1,
                'order_id' => 1552,
                'type' => 1,
                'price' => 3018.5,
                'status' => 1,
                'description' => 'اضافه فاتوره',
                'created_at' => '2023-07-27 04:45:26',
                'updated_at' => '2023-07-27 04:45:26',
            ),
        ));
        
        
    }
}