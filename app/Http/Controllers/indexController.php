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
        
        $recentoffers = DB::table('products')
                    ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
                    ->select('*')
                    ->where('products.status', '=', 1)
                    ->where('product_branches.offer', '=', 1)
                    ->orderBy('products.date_added', 'desc')
                    ->take(8)
                    ->get();
         
        return view('home.index',compact(['recentProducts','category','recentoffers']));
    }
    public function category($category_id, Request $request)
    {
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
        return view('home.categoy',compact(['products','category', 'subcategories']));
    }
    public function subcategory($category_id, $subcategory_id, Request $request)
{
    $category = Category::findOrFail($category_id);
    $subcategory = Subcategory::findOrFail($subcategory_id);

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

    return view('home.subcategory', compact(['products', 'subcategory', 'category']));
}
public function single_product($product_id)
    {
        $products = Product::find($product_id);
        // dd($products);
        $product = DB::table('products')
        ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
        ->select('*')->where('products.id',  $products->id)->first();
        // dd($product);
        return view('home.single_product', compact('product'));
    }
    public function allCategory(Request $request)
    {
        $query = Category::query();
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('categories.name', 'like', '%' . $search . '%');
            
        }
        
        $allCategory= $query->paginate(15);
    
        return view('home.allCategory',compact('allCategory'));
    }
    public function allOffer(Request $request)
    {
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
            return view('home.allOffer',compact('offers'));

    }
    public function recentAdded(Request $request){
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
        dd($recentAdded);
       
            return view('home.recentAdded',compact('recentAdded'));
    }
}
