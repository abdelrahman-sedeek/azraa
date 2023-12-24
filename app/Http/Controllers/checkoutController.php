<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function show()
        {
            return view('home.checkout');
        }
    public function add(Request $request){
            
    }
}
