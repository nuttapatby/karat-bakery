<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */


    public function search(Request $request) {

        if (isset($_GET['type'])){
            $search_text = $_GET['type'];
            $products = DB::table('products')
//                ->leftJoin('categories','categories.id','=','products.category_id')
                ->where('name', 'LIKE', '%'.$search_text.'%')
                ->paginate(12);
            $products->appends($request->all());
            return view('search',['products'=>$products]);
        }else {
            return view('search');
        }
    }

//    public function search(Request $request)
//    {
//        if ($request->ajax()) {
//            $output='';
//
//            $products= DB::table('products')
//                ->where('name', 'LIKE', '%'.$request->search.'%')
//                ->get();
//
//            if ($products) {
//                foreach ($products as $product) {
//                    $output .=
//                    '
//                        <div class="col-12 col-sm-6 col-lg-3 col-md-4">
//                             <div class="product-grid6 ">
//                                 <a href="'."products/".''.$product->slug.'">
//                                     <div class="product-image6">
//                                         <img class="pic-1" src="'."storage/".''.$product->image.'" style="height: 200px">
//                                     </div>
//                                     <div class="product-content">
//                                         <h3 class="title">'.$product->name.'</h3>
//                                         <p>'.$product->detail.'</p>
//                                         <div class="price">'.$product->price.'&#3647;
//                                             <span></span>
//                                         </div>
//                                     </div>
//                                 </a>
//                                 <ul class="social">
//                                     <li><a href="'."products/".''.$product->slug.'" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
//                                     <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
//                                     <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
//                                 </ul>
//                             </div>
//                         </div>
//
//                    ';
//                }
//                return response()->json($output);
//            }
//        }
//        return view('search');
//    }

}
