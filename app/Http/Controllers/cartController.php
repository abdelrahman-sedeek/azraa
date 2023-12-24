<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function add(Request $request){
        // $cart= new Cart();
        $quantity = $request->input('quantity');
        $productId = $request->input('main_pro_id');
        $product_branches_id= $request->input('product_id');
        $user_id= auth()->id();
        $quantity=$request->input('quantity');
        // if($user_id==null)
        //     {
        //         return view('auth.login')
        //     }
        $cart=Cart::updateOrCreate([

            'user_id'=>$user_id,
            'main_pro_id'=>$productId,
            'product_id'=>$product_branches_id,
            'quantity'=>$quantity,
            'quantity_final'=>$quantity,
         
        ]);
        $cart->save();
        return redirect()->back()->with('message', 'تم الاضافة في العربة');
    }
    public function Show(){
        $user_id = auth()->id();

    $cartItems = DB::table('carts')
        ->join('products', 'carts.main_pro_id', '=', 'products.id')
        ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
        ->where('carts.user_id', $user_id)
        ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
        ->get();
        // dd($cartItems);
        return view('home.cart',compact('cartItems'));
    }
    public function delete($id)
        {
            // dd($id);
                $cart = Cart::find($id);
            
                    $cart->delete();
                    return redirect()->back()->with('message', 'تم الحذف بنجاح');
                
            }
        
}
