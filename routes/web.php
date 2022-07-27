<?php

use App\Http\Controllers\HomeController;
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

Route::get('/shop', function (){
    return view('shop');
});

Route::get('/products', function (){
    return view('product');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::post('logout', [UserController::class, 'logout'])->name('logout');
