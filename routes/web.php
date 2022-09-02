<?php

use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('welcome');
});
Route::get('/contact', function (){
    return view('contact');
});

//Route::get('/account', function (){
//    return view('auth.account');
//});


Auth::routes();


Route::post('add-to-cart',[CartItemController::class, 'addProduct']);
Route::post('shop-add-to-cart',[CartItemController::class,'shopAddToCart']);
Route::post('delete-cart-item',[CartItemController::class,'deleteProduct']);
Route::post('update-cart',[CartItemController::class,'updateCart']);

Route::middleware(['auth'])->group(function(){
    Route::get('cart', [CartItemController::class, 'cartView']);
    Route::get('checkout',[CheckoutController::class,'index']);
    Route::post('checkout-order',[CheckoutController::class,'checkoutOrder']);
    Route::post('create-address',[UserController::class,'createAddress']);
    Route::get('edit-address/{id}',[UserController::class,'editAddress']);
    Route::put('update-address',[UserController::class,'updateAddress']);
    Route::get('account/order/{id}',[UserController::class,'viewOrder']);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop',[ProductController::class, 'index']);
Route::get('products/{prod_slug}',[ProductController::class, 'productView']);
Route::get('/search',[SearchController::class,'search'])->name('product.search');

Route::get('/account',[UserController::class,'index']);

/* Facebook Login */
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('login.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
/* Google Login */
Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('login.google');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

