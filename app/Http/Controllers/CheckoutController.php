<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Inventory;
use App\Models\OrderDetail;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use OmiseCharge;
use OmiseSource;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems = CartItem::where('user_id', Auth::id())->get();
        foreach ($old_cartitems as $item)
        {
            if (!DB::table('products')
                ->join('inventories','inventory_id','=','inventories.id')
                ->where('products.id',$item->product_id)
                ->where('inventories.quantity','>=',$item->quantity)
                ->exists())
            {
                $removeItem = CartItem::where('user_id',Auth::id())->where('product_id',$item->product_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = CartItem::where('user_id', Auth::id())->get();

        return view('checkout', compact('cartitems'));
    }

    public function checkoutOrder(Request $request)
    {
        require_once base_path('vendor/omise/omise-php/lib/Omise.php');
        define('OMISE_PUBLIC_KEY', 'pkey_test_5t2b96bzdsilxg00mll');
        define('OMISE_SECRET_KEY', 'skey_test_5t2b96ejm996ctc5jg9');

        $charge = OmiseCharge::create(array(
            'amount' => $_POST["total"],
            'currency' => 'thb',
            'card' => $_POST["omiseToken"],
        ));


        if ($charge['status'] == 'successful'){
            $order = new OrderDetail();
            $order->user_id = Auth::id();
            $order->firstname = $request->input('checkout_fname');
            $order->lastname = $request->input('checkout_lname');
            $order->address = $request->input('checkout_address');
            $order->province = $request->input('checkout_province');
            $order->postal_code = $request->input('checkout_zip');
            $order->country = $request->input('checkout_country');
            $order->phone = $request->input('checkout_phone_no');
            $latestOrder = OrderDetail::orderBy('created_at','DESC')->first();
            $order->order_no = date('ymd').str_pad($latestOrder->id + 1, 8, "0", STR_PAD_LEFT);
//            $order->tracking_no = $charge['id'];
            // Calculate total price
            $total_price = 0;
            $cartitems_total = CartItem::where('user_id', Auth::id())->get();
            foreach ($cartitems_total as $prod)
            {
                $total_price += $prod->products->price * $prod->quantity;
            }
            $order->total = $total_price;
            $order->save();

            $cartitems = CartItem::where('user_id', Auth::id())->get();
            foreach ($cartitems as $item)
            {
                OrderItem::create([
                    'order_detail_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->products->price,
                ]);

                $prod = Product::where('id',$item->product_id)->first();
                $inventory = Inventory::where('id',$prod->inventory_id)->first();
                $inventory->quantity = $inventory->quantity - $item->quantity;
                $inventory->update();
            }

            $useraddress = UserAddress::where('user_id',Auth::id())->exists();

            if ($useraddress == false){
                $address = new UserAddress();
                $address->user_id = Auth::id();
                $address->address_line1 = $request->input('checkout_address');
                $address->city = $request->input('checkout_province');
                $address->postal_code = $request->input('checkout_zip');
                $address->country = $request->input('checkout_country');
                $address->phone_no = $request->input('checkout_phone_no');
                $address->save();
            }

            $cartitems = CartItem::where('user_id', Auth::id())->get();
            CartItem::destroy($cartitems);

            return response()->json(["status" =>"Order placed successfully"]);
//            return redirect('/account')->with('status', 'Order placed successfully');
        }
        else{
//            return redirect('/checkout')->with('status', $charge['failure_message']);
            return response()->json(["status" => $charge['failure_message']]);

        }
//        $useraddress = UserAddress::where('user_id',Auth::id())->exists();

//        return redirect('/');
//        return redirect('/')->with('status', 'Order placed successfully');
    }

    public function omiseCheckout(Request $request){
        $cartitems = CartItem::where('user_id',Auth::id())->get();
        $total_price = 0;
        foreach ($cartitems as $item) {
            $total_price += $item->products->price * $item->quantity;
        }

        $c_firstname = $request->input('c_firstname');
        $c_lastname = $request->input('c_lastname');
        $c_address = $request->input('c_address');
        $c_city = $request->input('c_city');
        $c_zip = $request->input('c_zip');
        $c_country = $request->input('c_country');
        $c_phone = $request->input('c_phone');

        return response()->json([
            'c_firstname'=> $c_firstname,
            'c_lastname'=> $c_lastname,
            'c_address'=> $c_address,
            'c_city'=> $c_city,
            'c_zip'=> $c_zip,
            'c_country'=> $c_country,
            'c_phone'=> $c_phone,
            'total_price' => $total_price,
        ]);
    }
}
