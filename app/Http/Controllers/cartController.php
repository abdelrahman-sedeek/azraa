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
        
        if($request->ajax())
        {
            $data = $request->all();
        // dd($request->ajax());
      
        $quantity = $data['quantity'];
        $productId = $data['main_pro_id'];
        $product_branches_id = $data['product_id'];
        $user_id = auth()->id();
        
        $cart=Cart::create([

            'user_id'=>$user_id,
            'main_pro_id'=>$productId,
            'product_id'=>$product_branches_id,
            'quantity'=>$quantity,
            'quantity_final'=>$quantity,
         
        ]);
        $cart->save();
        return response('تم الاضافة بنجاح');
        }
        
        // return redirect()->back()->with('message', 'تم الاضافة في العربة');
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
        
        $cart = Cart::find($id);
    
        $cart->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
            
        }


    
    public function update(Request $request){
        $data = $request->all();
        
        $id = $data['id'];
        $quantity = $data['quantity'];
    
        // Find the cart record based on user_id, main_pro_id, and product_id
        $cart = Cart::where([
            'id' => $id,
          
        ])->first();
    
        // Check if the cart record exists
        if ($cart) {
            // Update only the quantity field
            $cart->update(['quantity' => $quantity]);
    
            return response()->json(['message' => 'تم تحديث الكمية في العربة']);
        } else {
            return response()->json(['error' => 'Record not found'], 404);
        }
    }
    public function Show_ajax(){
        $user_id = auth()->id();

        $cartItems = DB::table('carts')
            ->join('products', 'carts.main_pro_id', '=', 'products.id')
            ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
            ->where('carts.user_id', $user_id)
            ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
            ->get();
        if($cartItems->count()==0)
        {
            $cartItems='لايوجد منتجات في العربة';
        }
            return response($cartItems);
        
    }
        
}
