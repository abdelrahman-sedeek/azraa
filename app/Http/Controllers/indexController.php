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
        $recentProducts = DB::table('products')
                    ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
                    ->select('*')
                    ->orderBy('products.date_added', 'desc')
                    ->take(8)->where('products.status','=',1)
                    ->get();
        
        return view('home.index',compact(['category','recentProducts']));
    }
    public function category($category_id)
    {
        $category = Category::findOrFail($category_id);
        
        $products = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')
        ->orderBy('products.date_added', 'desc')->where('products.status','=',1)->Where('products.category_id', $category_id)
        ->paginate(10);
        $subcategories=Subcategory::where('id_category', $category_id)->get();
        // dd($subcategories);
        return view('home.categoy',compact(['products','category', 'subcategories']));
    }
}
