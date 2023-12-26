<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductBranch;
use Illuminate\Support\Facades\DB;

class checkoutController extends Controller
{
    public function show()
        {
            return view('home.checkout');
        }
    public function add(Request $request){
        $data = $request->all();
        $user_id = auth()->id();
        $discount = $data['price'];
        $total = $data['total'];
    
        $cartItems = Cart::where('user_id', $user_id)->get();
     DB::beginTransaction();
    
        try {
            foreach ($cartItems as $cartItem) {
                $productId = $cartItem->main_pro_id;
                $productBranchId = $cartItem->product_id;
                $quantity = $cartItem->quantity;
    
                $product = Product::find($productId);
                $productBranch = ProductBranch::find($productBranchId);
    
                $product->stock -= $quantity * $productBranch->measurement;
                $product->save();
            }
      $order = Order::create([
                'user_id' => $user_id,
                'total_discounted_price' => $discount,
                'total_price' => $total,
            ]);
    
            $order->save();
    
            if ($order) {
                Cart::where('user_id', $user_id)->delete();
    
                DB::commit();
    
                return redirect()->back()->with('message', 'تم اكمال الطلب بنجاح');
            }
        } catch (\Exception $e) {
           DB::rollBack();
    
            return redirect()->back()->with('message', 'حدث خطأ أثناء معالجة الطلب. يرجى المحاولة مرة أخرى.');
        }
    }
}
