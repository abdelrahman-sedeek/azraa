<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductBranch;
use Illuminate\Http\Request;
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

        // Create the order
        $order = Order::create([
            'user_id' => $user_id,
            'total_discounted_price' => $discount,
            'total_price' => $total,
        ]);

        foreach ($cartItems as $cartItem) {
            $productId = $cartItem->main_pro_id;
            $productBranchId = $cartItem->product_id;
            $quantity = $cartItem->quantity;

            $product = Product::find($productId);
            $productBranch = ProductBranch::find($productBranchId);

            // Check if there is enough stock
            if ($quantity * $productBranch->measurement > $product->stock) {
                $unavailableProducts[] = $product->name;
                if (!empty($unavailableProducts)) {
                    $unavailableProductsList = implode(', ', $unavailableProducts);
                    $errorMessage = "الكمية المطلوبة غير متاحة للمنتجات التالية: {$unavailableProductsList}. الرجاء اختيار كمية صحيحة.";
                    return back()->with('message', $errorMessage);
                }
                // Skip updating stock for this product, move on to the next one
                continue;
            }

            // Reduce stock for the product
            $product->stock -= $quantity * $productBranch->measurement;
            $product->save();

            // Create order item
            OrderItem::create([
                'order_id' => $order->id,
                'user_id' => $user_id,
                'product_id' => $productId,
                'variant_id' => $productBranchId,
                'price' => $productBranch->price,
                'seller_price' => $productBranch->seller_price,
                'total_seller_price' => $productBranch->seller_price * $cartItem->quantity,
                'discounted_price' => $productBranch->discounted_price,
                'total_discounted_price' =>  $productBranch->discounted_price * $cartItem->quantity,
                'quantity' => $cartItem->quantity, // You may need to adjust this based on your data model
            ]);
        }

       

        // Commit the transaction
        DB::commit();

        // Clear the cart after successful order
        Cart::where('user_id', $user_id)->delete();

        return redirect()->back()->with('message', 'تم اكمال الطلب بنجاح');
    } catch (\Exception $e) {
        // Rollback the transaction in case of an exception
        DB::rollBack();

        return redirect()->back()->with('message', 'حدث خطأ أثناء معالجة الطلب. ' . $e->getMessage() . ' يرجى المحاولة مرة أخرى.');
    }
}

        
}
