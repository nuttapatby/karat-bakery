<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialController;
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

Route::get('/account', function (){
    return view('auth.account');
});


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop',[ProductController::class, 'index']);
Route::get('products/{prod_slug}',[ProductController::class, 'productView']);
Route::get('/search',[SearchController::class,'search'])->name('product.search');


//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('login.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('login.google');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

