@extends('layouts.app')

@section('title')
    Checkout
@endsection

@section('content')
    <section style="margin-top: 7rem">
        <div class="container">
            <form id="checkoutForm" action="{{ url('checkout-order')}}" method="POST">
                @csrf
                <input type="hidden" name="omiseToken">
                <input type="hidden" name="omiseSource">
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            <span class="badge badge-secondary badge-pill">3</span>
                        </h4>
                        <ul class="list-group mb-3">
                            @php
                                $total = 0;
                            @endphp
                            @foreach($cartitems as $item)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{$item->products->name}}</h6>
                                        <small class="text-muted">จำนวน : {{$item->quantity}}</small>
                                    </div>
                                    <span class="text-muted">{{$item->products->price * $item->quantity}}&#3647;</span>
                                </li>
                                @php
                                    $total += $item->products->price * $item->quantity;
                                @endphp
                            @endforeach
    {{--                        <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
    {{--                            <div>--}}
    {{--                                <h6 class="my-0">Product name</h6>--}}
    {{--                                <small class="text-muted">Brief description</small>--}}
    {{--                            </div>--}}
    {{--                            <span class="text-muted">$12</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
    {{--                            <div>--}}
    {{--                                <h6 class="my-0">Second product</h6>--}}
    {{--                                <small class="text-muted">Brief description</small>--}}
    {{--                            </div>--}}
    {{--                            <span class="text-muted">$8</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
    {{--                            <div>--}}
    {{--                                <h6 class="my-0">Third item</h6>--}}
    {{--                                <small class="text-muted">Brief description</small>--}}
    {{--                            </div>--}}
    {{--                            <span class="text-muted">$5</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="list-group-item d-flex justify-content-between bg-light">--}}
    {{--                            <div class="text-success">--}}
    {{--                                <h6 class="my-0">Promo code</h6>--}}
    {{--                                <small>EXAMPLECODE</small>--}}
    {{--                            </div>--}}
    {{--                            <span class="text-success">-$5</span>--}}
    {{--                        </li>--}}
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (THB)</span>
                                <strong>{{$total}}&#3647;</strong>
                            </li>
                        </ul>
                        <div class="d-flex flex-column">
                            <button class="btn btn-success btn-lg btn-block float-lg-end float-start mt-2 d-none d-md-block" type="submit">Checkout</button>
                            <button class="btn btn-outline-primary btn-lg btn-block float-lg-end float-start mt-2 d-none d-md-block omise-btn">Checkout Omise</button>
                        </div>


                    </div>
                    @php
                    $user = \App\Models\User::find(Auth::id());
                    $address = \App\Models\UserAddress::where('user_id',Auth::id())->first();
                    @endphp
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Shipping Address</h4>
                            <div class="row mt-4 checkout-form">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">ชื่อ</label>
                                    <input type="text" class="form-control c_firstname" id="checkout_fname" name="checkout_fname" value="{{$user->firstname}}" placeholder="ชื่อ" required="">
                                    <span id="fname_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">นามสกุล</label>
                                    <input type="text" class="form-control c_lastname" id="checkout_lname" name="checkout_lname" value="{{$user->lastname}}" placeholder="นามสกุล" required="">
                                    <span id="lname_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="row checkout-form">
                                <div class="mb-3">
                                    <label for="address">ที่อยู่</label>
                                    <textarea type="text" class="form-control c_address" id="checkout_address" name="checkout_address" placeholder="ที่อยู่" required=""> {{$address->address_line1}}</textarea>
                                    <span id="address_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>
                            </div>

                            <div class="row checkout-form">
                                <div class="col-md-6 mb-3">
                                    <label for="province">จังหวัด</label>
                                    <input type="text" class="form-control c_city" id="checkout_province" name="checkout_province" value="{{$address->city}}"  placeholder="จังหวัด" required="">
                                    <span id="city_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Province required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zip">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control c_zip" id="checkout_zip" name="checkout_zip" value="{{$address->postal_code}}"  placeholder="รหัสไปรษณีย์" required="">
                                    <span id="zip_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country">ประเทศ</label>
                                    <input type="text" class="form-control c_country" id="checkout_country" name="checkout_country" value="{{$address->country}}"  placeholder="ประเทศ" required="">
                                    <span id="country_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Country required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone_no">โทรศัพท์</label>
                                    <input type="tel" class="form-control c_phone" id="checkout_phone_no" name="checkout_phone_no" value="{{$address->phone_no}}"  placeholder="โทรศัพท์" required="">
                                    <span id="phone_error" class="text-danger"></span>
                                    <div class="invalid-feedback">
                                        Phone number required.
                                    </div>
                                </div>
                            </div>
    {{--                        <hr class="mb-4">--}}
    {{--                        <div class="custom-control custom-checkbox">--}}
    {{--                            <input type="checkbox" class="custom-control-input" id="same-address">--}}
    {{--                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>--}}
    {{--                        </div>--}}
    {{--                        <div class="custom-control custom-checkbox">--}}
    {{--                            <input type="checkbox" class="custom-control-input" id="save-info">--}}
    {{--                            <label class="custom-control-label" for="save-info">Save this information for next time</label>--}}
    {{--                        </div>--}}
    {{--                        <hr class="mb-4">--}}

    {{--                        <h4 class="mb-3">Payment</h4>--}}

    {{--                        <div class="d-block my-3">--}}
    {{--                            <div class="custom-control custom-radio">--}}
    {{--                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">--}}
    {{--                                <label class="custom-control-label" for="credit">Credit card</label>--}}
    {{--                            </div>--}}
    {{--                            <div class="custom-control custom-radio">--}}
    {{--                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">--}}
    {{--                                <label class="custom-control-label" for="debit">Debit card</label>--}}
    {{--                            </div>--}}
    {{--                            <div class="custom-control custom-radio">--}}
    {{--                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">--}}
    {{--                                <label class="custom-control-label" for="paypal">PayPal</label>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-6 mb-3">--}}
    {{--                                <label for="cc-name">Name on card</label>--}}
    {{--                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">--}}
    {{--                                <small class="text-muted">Full name as displayed on card</small>--}}
    {{--                                <div class="invalid-feedback">--}}
    {{--                                    Name on card is required--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6 mb-3">--}}
    {{--                                <label for="cc-number">Credit card number</label>--}}
    {{--                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">--}}
    {{--                                <div class="invalid-feedback">--}}
    {{--                                    Credit card number is required--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-3 mb-3">--}}
    {{--                                <label for="cc-expiration">Expiration</label>--}}
    {{--                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">--}}
    {{--                                <div class="invalid-feedback">--}}
    {{--                                    Expiration date required--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-3 mb-3">--}}
    {{--                                <label for="cc-cvv">CVV</label>--}}
    {{--                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">--}}
    {{--                                <div class="invalid-feedback">--}}
    {{--                                    Security code required--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <hr class="mb-4">--}}
                            <button class="btn btn-primary btn-lg btn-block float-end me-4 mt-3 d-block d-md-none" type="submit">Checkout</button>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.omise.co/omise.js"></script>
@endsection