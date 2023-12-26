<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function index($category_id, Request $request)
    {
        $user_id = auth()->id();

        $cartItems = DB::table('carts')
        ->join('products', 'carts.main_pro_id', '=', 'products.id')
        ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
        ->where('carts.user_id', $user_id)
        ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
        ->get();
        $request->validate([
            'search' => '',
        ]);
        $category = Category::findOrFail($category_id);
       
        $query = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')
        ->orderBy('products.date_added', 'desc')->where('products.status','=',1)->Where('products.category_id', $category_id);
        
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('products.name', 'like', '%' . $search . '%');
        }
        $products = $query->paginate(10);
        $subcategories=Subcategory::where('id_category', $category_id)->get();
        // dd($subcategories);
        return view('home.categoy',compact(['products','category', 'subcategories','cartItems']));
    }
    public function show(Request $request)
    {
        $user_id = auth()->id();

        $cartItems = DB::table('carts')
        ->join('products', 'carts.main_pro_id', '=', 'products.id')
        ->join('product_branches', 'carts.product_id', '=', 'product_branches.id')
        ->where('carts.user_id', $user_id)
        ->select('carts.id', 'products.*', 'product_branches.*', 'carts.*')
        ->get();
        $query = Category::query();
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('categories.name', 'like', '%' . $search . '%');
            
        }
        
        $allCategory= $query->paginate(15);
    
        return view('home.allCategory',compact(['allCategory','cartItems']));
    }
    public function categorySearch(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
    
        
        $searchResults =  DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')
        ->where('products.status', '=', 1)
        ->where('product_branches.offer', '=', 1)
        ->orderBy('products.date_added', 'desc')
        ->where('products.name', 'like', '%' . $search . '%')
        ->where('products.category_id','=',$category_id)->get();
        return response($searchResults);

    }
}
