<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->middleware('role:admin');

Auth::routes();

Route::resource('product', ProductController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('cart', function(){
    return view('cart');
});

Route::get('contactus', function(){
    return view('contactus');
});

Route::get('product_details/{product?}', function($product = null){
    $product = Product::findOrFail($product);
    return view('product.product_details',['details' => $product]);
});

Route::get('about', function(){
    return view('about');
});

Route::get('createP', [App\Http\Controllers\AdminController::class, 'create'])->middleware(['auth','role:admin']);

