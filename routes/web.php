<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[indexController::class ,'index'])->name('index');
route::get('/category/{category_id}',[indexController::class ,'category'])->name('category');
route::get('/allCategory',[indexController::class ,'allCategory'])->name('allCategory');
route::get('/category/{category_id}/subcategory/{subcategory_id}',[indexController::class ,'subcategory'])->name('subcategory');
route::get('/single-product/{product_id}',[indexController::class ,'single_product'])->name('single_product');
route::get('/all-offers',[indexController::class ,'allOffer'])->name('allOffer');
route::get('/recent-added',[indexController::class ,'recentAdded'])->name('recentAdded');