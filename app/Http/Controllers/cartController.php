<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductBranch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function add(Request $request){
        // $cart= new Cart();
       
        $data = $request->all();
      
        $quantity = $data['quantity'];
        $productId = $data['main_pro_id'];
        $product_branches_id = $data['product_id'];
        $user_id = auth()->id();

        $product = Product::find($productId);
        $productBranch = ProductBranch::find($product_branches_id);
        $calcStock = $product->stock / $productBranch->measurement;
      
       
        if($calcStock <= $product->total_allowed_quantity)
        {
            $availableQuantity = $calcStock;
        }
        else
        {
            $availableQuantity = $product->total_allowed_quantity;
        }
       
        if ($quantity > $availableQuantity)
        {
            return back()->with('message', 'الكميه غير متاحه لا يمكنك اضافه هذا المنتج');
        }
        $existingCartItem = Cart::where('user_id', $user_id)
        ->where('main_pro_id', $productId)
        ->where('product_id', $product_branches_id)
        ->first();
        // dd($existingCartItem);
        if($existingCartItem!=null)
        {
            if($availableQuantity - $existingCartItem->quantity) {
                return back()->with('message', 'الكميه غير متاحه لا يمكنك اضافه هذا المنتج');
    
            }

        }

        $cart=Cart::create([

            'user_id'=>$user_id,
            'main_pro_id'=>$productId,
            'product_id'=>$product_branches_id,
            'quantity'=>$quantity,
            'quantity_final'=>$quantity,
         
        ]);
        $cart->save();
        return redirect()->back()->with('message', 'تم الاضافة في العربة');
        // if($request->ajax())
        // {
        // // return response('تم الاضافة بنجاح');
        // }
        
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
        //    dd($cartItems) ;
       
            return response($cartItems);
        
    }
    public function delete_ajax($id){
        $cart = Cart::find($id);
        $cart->delete();
        return ($cart);
    }
        
}
