<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;

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
Route::middleware('auth')->group(function () {

    route::get('/category/{category_id}',[indexController::class ,'category'])->name('category');
    route::get('/allCategory',[indexController::class ,'allCategory'])->name('allCategory');
    route::get('/category/{category_id}/subcategory/{subcategory_id}',[indexController::class ,'subcategory'])->name('subcategory');
    route::get('/all-offers',[indexController::class ,'allOffer'])->name('allOffer');
    route::get('/recent-added',[indexController::class ,'recentAdded'])->name('recentAdded');
    Route::post('add-to-cart',[cartController::class, 'add'])->name('addToCart');
    Route::get('show-cart',[cartController::class,'show'])->name('showCart');
    Route::delete('delete-cart/{id}',[cartController::class, 'delete'])->name('deleteCart');
    
});
route::get('/home',[indexController::class ,'index'])->name('index');
route::get('/single-product/{product_id}',[indexController::class ,'single_product'])->name('single_product');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// add to cart 

// cheakout
Route::post('add-order',[checkoutController::class, 'add'])->name('addTorder');
Route::get('checkout',[checkoutController::class,'show'])->name('checkout');
// Route::delete('delete-cart/{id}',[cartController::class, 'delete'])->name('deleteCart');