<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Livewire\str;

class UserController extends Controller
{
    public function index(){

//        $user = User::where('users.id', Auth::id())
//            ->join('user_addresses','users.id','=','user_addresses.user_id')
//            ->get();
        $user = DB::table('users')
            ->join('user_addresses','users.id','=','user_addresses.user_id')
            ->where('users.id',Auth::id())
            ->get();
        $order = DB::table('order_details')
            ->where('user_id',Auth::id())->get();
        return view('auth.account', compact('user'), compact('order'));
    }

    public function viewOrder($id){
        $orders = OrderDetail::where('id',$id)->where('user_id',Auth::id())->first();
        return view('orderview', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createAddress(Request $request)
    {
        $user_id = DB::table('users')->where('id',Auth::id())->get('id');
        $address = new UserAddress();
        foreach ($user_id as $item){
            $address->user_id = $item->id;
        }
        $address->address_line1 = $request->input('address');
        $address->city = $request->input('province');
        $address->postal_code = $request->input('zip');
        $address->country = $request->input('country');
        $address->phone_no = $request->input('phone');
        $address->save();

        return redirect('account')->with('status', 'Create address successfully.');
    }

    public function editAddress($id)
    {
        $user = DB::table('users')->find($id);
        $address = DB::table('user_addresses')->where('user_id',$id)->first();
        return response()->json([
           'status' => 200,
            'user' =>$user,
            'address' => $address,
        ]);
    }

    public function updateAddress(Request $request)
    {
        $user_id = $request->input('user_id');
        $user = User::find($user_id);
        $address = UserAddress::where('user_id',$user_id)->first();

        $user->firstname = $request->input('e_fname');
        $user->lastname = $request->input('e_lname');
        $address->address_line1 = $request->input('e_address');
        $address->city = $request->input('e_city');
        $address->postal_code = $request->input('e_zip');
        $address->country = $request->input('e_country');
        $address->phone_no = $request->input('e_phone');
        $user->update();
        $address->update();

        return redirect('account')->with('status', 'Update address successfully.');

    }

    /**
     * Store a newly created resource in storage.=
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param UserAddress $userAddress
     * @return Response
     */
    public function show(UserAddress $userAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserAddress $userAddress
     * @return Response
     */
    public function edit(UserAddress $userAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param UserAddress $userAddress
     * @return Response
     */
    public function update(Request $request, UserAddress $userAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserAddress $userAddress
     * @return Response
     */
    public function destroy(UserAddress $userAddress)
    {
        //
    }


}
