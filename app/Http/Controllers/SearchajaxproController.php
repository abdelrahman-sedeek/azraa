<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PHPUnit\TextUI\Configuration\Php;

class SearchajaxproController extends Controller
{
    public function search(Request $request)
    {
 
         if($request->ajax())
         {
                $output=""; 
              
             
                  
                    $query = DB::table('products')
                    ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
                    ->select('*')
                    ->orderBy('products.date_added', 'desc')->where('products.status','=',1);
                    $products= $query->where('name','LIKE', $request->search . ' ' ."%")->get();
                    
                    if($products){
                        foreach ($products as $key => $product) {
                            
                            $output=$output.'<div class="ssaa ">
                            <div class="box item" 
                            data-product-id="'.$product->product_id.'"
                            data-product-branch-id="'.$product->id.'"
                            data-product-name="'.$product->name.'"
                            data-product-image="'.asset('' .$product->image).'"
                            data-product-price="'.$product->price.'"
                            data-product-discounted-price="'.$product->discounted_price.'"
                            data-product-unit="'.$product->unit.'"
                            data-product-discrption="'.$product->description.'"
                            data-product-quantity="'.$product->total_allowed_quantity.'"
                            data-product-stock="'.$product->stock.'"
                            data-product-measurement="'.$product->measurement.'">
                            
                                
                                    <img src=" '.asset(''.$product->image) .'" alt="">
                                    <a href="'.route('single_product',['product_id'=>$product->product_id]).' ">'. $product->name. '</a>
                                    <span>  '.$product->discounted_price.'جم بدلا من <del> '.$product->price.' جم</del> </span>
                                    
                            </div>
                         </div>';    
                       
                            }

                        return Response($output);
    
                     }                    
                }
            }
        
    
        }
    