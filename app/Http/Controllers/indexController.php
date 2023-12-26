<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {
        $category=Category::all();
        $user_id = auth()->id();

        $recentProducts = DB::table('products')
                    ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
                    ->select('*')
                    ->orderBy('products.date_added', 'desc')
                    ->take(8)->where('products.status','=',1)
                    ->get();
        
        $recentoffers = DB::table('products')
                    ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
                    ->select('*')
                    ->where('products.status', '=', 1)
                    ->where('product_branches.offer', '=', 1)
                    ->orderBy('products.date_added', 'desc')
                    ->take(8)
                    ->get();
        $cartItems = DB::table('carts')
            ->join('products', 'carts.main_pro_id', '=', 'products.id')
            ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
            ->where('carts.user_id', $user_id)
            ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
            ->get();
         
        return view('home.index',compact(['recentProducts','category','recentoffers','cartItems']));
    }
   
    public function subcategory($category_id, $subcategory_id, Request $request)
{
    $category = Category::findOrFail($category_id);
    $subcategory = Subcategory::findOrFail($subcategory_id);
    $user_id = auth()->id();

    $cartItems = DB::table('carts')
    ->join('products', 'carts.main_pro_id', '=', 'products.id')
    ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
    ->where('carts.user_id', $user_id)
    ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
    ->get();

    $query = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')
        ->orderBy('products.date_added', 'desc')
        ->where('products.status', '=', 1)
        ->where('products.subcategory_id', $subcategory->id);

    // Check if a search query is provided
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('products.name', 'like', '%' . $search . '%');
    }

    $products = $query->paginate(10);

    return view('home.subcategory', compact(['products', 'subcategory', 'category',' cartItems']));
}
public function single_product($product_id)
    {
        $user_id = auth()->id();

        $cartItems = DB::table('carts')
        ->join('products', 'carts.main_pro_id', '=', 'products.id')
        ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
        ->where('carts.user_id', $user_id)
        ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
        ->get();
        $products = Product::find($product_id);
        // dd($products);
        $product = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')->where('products.id',  $products->id)->first();
        // dd($product);
        return view('home.single_product', compact(['product','cartItems']));
    }
   
    public function allOffer(Request $request)
    {
        $user_id = auth()->id();

        $cartItems = DB::table('carts')
        ->join('products', 'carts.main_pro_id', '=', 'products.id')
        ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
        ->where('carts.user_id', $user_id)
        ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
        ->get();
        $query = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')
        ->where('products.status', '=', 1)
        ->where('product_branches.offer', '=', 1)
        ->orderBy('products.date_added', 'desc');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('products.name', 'like', '%' . $search . '%');
            
        }
        $offers= $query->paginate(10);
            return view('home.allOffer',compact(['offers','cartItems']));

    }
    public function recentAdded(Request $request){
        $user_id = auth()->id();

        $cartItems = DB::table('carts')
        ->join('products', 'carts.main_pro_id', '=', 'products.id')
        ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
        ->where('carts.user_id', $user_id)
        ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
        ->get();
        $query = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')
        ->where('products.status', '=', 1)
        ->orderBy('products.date_added', 'desc');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('products.name', 'like', '%' . $search . '%');
            
        }
        $recentAdded= $query->take(20)->get();
        // dd($recentAdded);
       
            return view('home.recentAdded',compact(['recentAdded','cartItems']));
    }
}
