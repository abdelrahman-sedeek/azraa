<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\SearchajaxproController;

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
// authentication routes
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
});
Route::middleware('userStatus')->group(function () {
    
    route::get('/category/{category_id}',[categoryController::class ,'index'])->name('category');
    route::get('/search-category',[categoryController::class ,'categorySearch'])->name('categorySearch');
    route::get('/allCategory',[categoryController::class ,'show'])->name('allCategory');
    
    route::get('/category/{category_id}/subcategory/{subcategory_id}',[indexController::class ,'subcategory'])->name('subcategory');
    route::get('/all-offers',[indexController::class ,'allOffer'])->name('allOffer');
    route::get('/recent-added',[indexController::class ,'recentAdded'])->name('recentAdded');
    //  cart 
    Route::post('add-to-cart',[cartController::class, 'add'])->name('addToCart');
    Route::get('show-cart',[cartController::class,'show'])->name('showCart');
    Route::get('show-cart-ajax',[cartController::class,'show_ajax'])->name('showCartAjax');
    Route::post('update-cart',[cartController::class, 'update'])->name('updateCart');
    Route::post('delete-cart-ajax/{id}',[cartController::class, 'delete'])->name('deleteCart');
    Route::post('update-cart',[cartController::class, 'update'])->name('updateCart');
    route::get('/single-product/{product_id}',[indexController::class ,'single_product'])->name('single_product');
    route::get('/',[indexController::class ,'index'])->name('index');
    Route::post('add-order',[checkoutController::class, 'add'])->name('addOrder');
    Route::get('checkout',[checkoutController::class,'show'])->name('checkout');
    
    // search
    Route::get('search',[SearchajaxproController::class,'search']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('pending',[AuthController::class, 'pending'])->name('pending');

// cheakout
// Route::delete('delete-cart/{id}',[cartController::class, 'delete'])->name('deleteCart');