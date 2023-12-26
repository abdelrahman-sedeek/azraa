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
        public function add(Request $request)
        {
            $data = $request->all();
            $user_id = auth()->id();
            $discount = $data['price'];
            $total = $data['total'];
        
            $cartItems = Cart::where('user_id', $user_id)->get();
            DB::beginTransaction();
        
            try {
                $unavailableProducts = [];
        
                foreach ($cartItems as $cartItem) {
                    $productId = $cartItem->main_pro_id;
                    $productBranchId = $cartItem->product_id;
                    $quantity = $cartItem->quantity;
        
                    $product = Product::find($productId);
                    $productBranch = ProductBranch::find($productBranchId);
        
                    // Check if there is enough stock
                    if ($quantity * $productBranch->measurement > $product->stock) {
                        $unavailableProducts[] = $product->name;
        
                        // Skip updating stock for this product, move on to the next one
                        continue;
                    }
        
                    $product->stock -= $quantity * $productBranch->measurement;
                    $product->save();
                }
        
                if (!empty($unavailableProducts)) {
                    $unavailableProductsList = implode(', ', $unavailableProducts);
                    $errorMessage = "الكمية المطلوبة غير متاحة للمنتجات التالية: {$unavailableProductsList}. الرجاء اختيار كمية صحيحة.";
                    return back()->with('message', $errorMessage);
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
        
                return redirect()->back()->with('error', 'حدث خطأ أثناء معالجة الطلب. ' . $e->getMessage() . ' يرجى المحاولة مرة أخرى.');
            }
        }
        
}
