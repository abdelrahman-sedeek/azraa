<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartReturnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_returns')->delete();
        
        
        
    }
}