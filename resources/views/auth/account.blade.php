@extends('layouts.app')
@section('content')
    <section id="accountProfile" class="account_profile" style="margin-top: 7rem">
        <div class="container">
            <div class="col-12 d-flex justify-content-between">
                <h3>สวัสดีคุณ <span>{{ Auth::user()->firstname }}.</span></h3>

                <div class="sign-out"> {{-- Sign out--}}
                    <form method="POST" action="{{route("logout")}}">
                        @csrf
                        <button type="submit" class="btn logout" style="text-decoration: underline; border: none">Logout</button>
                    </form>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="row d-flex">
                    <div class="col-md-5 " style="height: 200px; border: 1px solid red">
                        <h1>Information</h1>
                    </div>

                    <div class="col-md-7 " style="height: 200px; border: 1px solid blue">
                        <div class="account-cart" style="">
                            <h1>Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
