<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()){
            $prod_check = Product::where('id', $product_id)->first();

            if ($prod_check){
                if (CartItem::where('product_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(["status" =>  $prod_check->name." Already added to cart"]);
                } else {
                    $cartItem = new CartItem();
                    $cartItem->user_id = Auth::id();
                    $cartItem->product_id = $product_id;
                    $cartItem->quantity = $product_qty;
                    $cartItem->save();
                    return response()->json(["status" =>  $prod_check->name." Added to cart"]);
                }
            }
        } else {
            return response()->json(["status" => "Please login to continue" ]);
        }
    }

    public function shopAddToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()){
            $prod_check = Product::where('id', $product_id)->first();

            if ($prod_check){
                if (CartItem::where('product_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(["status" =>  $prod_check->name." Already added to cart"]);
                } else {
                    $cartItem = new CartItem();
                    $cartItem->user_id = Auth::id();
                    $cartItem->product_id = $product_id;
                    $cartItem->quantity = $product_qty;
                    $cartItem->save();
                    return response()->json(["status" =>  $prod_check->name." Added to cart"]);
                }
            }
        } else {
            return response()->json(["status" => "Please login to continue" ]);
        }
    }

    public function welcomeAddToCart(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()){
            $prod_check = Product::where('id', $product_id)->first();

            if ($prod_check){
                if (CartItem::where('product_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(["status" =>  $prod_check->name." Already added to cart"]);
                } else {
                    $cartItem = new CartItem();
                    $cartItem->user_id = Auth::id();
                    $cartItem->product_id = $product_id;
                    $cartItem->quantity = $product_qty;
                    $cartItem->save();
                    return response()->json(["status" =>  $prod_check->name." Added to cart"]);
                }
            }
        } else {
            return response()->json(["status" => "Please login to continue" ]);
        }
    }

    public function cartView() {

        $cartitems = CartItem::where('user_id', Auth::id())->get();
        return view('cart', compact('cartitems'));
    }

    public function updateCart(Request $request) {
        $prod_id = $request->input('product_id');
        $prod_qty = $request->input('quantity');

        if (Auth::check())
        {
            if (CartItem::where('product_id', $prod_id)->where('user_id', Auth::id())->exists())
            {
                $cart = CartItem::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
                $cart->quantity = $prod_qty;
                $cart->update();

                return response()->json(["status" => "Quantity Updated"]);
            }
        }
    }

    public function deleteProduct( Request $request){

        if (Auth::check()){
            $prod_id = $request->input('prod_id');
            if (CartItem::where('product_id', $prod_id)->where('user_id', Auth::id())->exists()){

                $cartItem = CartItem::where('product_id',$prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();

                return response()->json(["status"=> "Product Deleted Successfully"]);
            }
        } else{
            return response()->json(["status" => "Please login to continue" ]);
        }
    }

    public function cartCount(){
        $cartcount = CartItem::where('user_id', Auth::id())->count();
        return response()->json(['count' => $cartcount]);
    }


}
