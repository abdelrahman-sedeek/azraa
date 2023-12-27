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
        // dd($productId);
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
                $cartItems = Cart::where('user_id', $user_id)
            ->where('main_pro_id', $productId)
            ->where('product_id', $product_branches_id)
            ->get();

        $totalQuantityInCart = $cartItems->sum('quantity');
        // dd($availableQuantity-$totalQuantityInCart );
        if($totalQuantityInCart!=null)
        {
            if($availableQuantity - $totalQuantityInCart - $quantity<0) {
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
        
            $quantity = $data['quantity'];
            $productId = $data['main_pro_id'];
            $product_branches_id = $data['product_id'];
            $user_id = auth()->id();
        
            $product = Product::find($productId);
            $productBranch = ProductBranch::find($product_branches_id);
        
            $calcStock = $product->stock / $productBranch->measurement;
        
            if ($calcStock <= $product->total_allowed_quantity) {
                $availableQuantity = $calcStock;
            } else {
                $availableQuantity = $product->total_allowed_quantity;
            }
        
            $cartItem = Cart::where('user_id', $user_id)
                ->where('main_pro_id', $productId)
                ->where('product_id', $product_branches_id)
                ->first();
        
            if (!$cartItem) {
                return back()->with('message', 'المنتج غير موجود في العربة');
            }
        
            $totalQuantityInCart = Cart::where('user_id', $user_id)
                ->where('main_pro_id', $productId)
                ->sum('quantity');
        
            // Check if the updated quantity exceeds the available stock
            if ($quantity > $availableQuantity) {
                return back()->with('message', 'الكمية غير متاحة لا يمكنك تحديث العربة');
            }
        
            // Check if the updated quantity exceeds the available stock in the cart
            if ($availableQuantity -  $quantity < 0) {
                return back()->with('message', 'الكمية غير متاحة لا يمكنك تحديث العربة');
            }
        
            // Update the quantity in the cart
            $cartItem->update([
                'quantity' => $quantity,
                'quantity_final' => $quantity,
            ]);
        
            return redirect()->back()->with('message', 'تم تحديث العربة بنجاح');
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
