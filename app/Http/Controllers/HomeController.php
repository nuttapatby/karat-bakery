<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->take(10)->get();
        return view('welcome')->with('products',$products);
    }

    /**
     * Show the application dashboard Admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function adminHome()
//    {
//        return view('admin/adminHome');
//    }
}
