@extends('layouts.app')
@section('title')
    Cart
@endsection

@section('content')


    <section style="margin-top: 7rem">
        <div class="container">

                <div class="row">
                    <div class="col-lg-9 cart">
                        <div class="card shadow-sm ">
                            <div class="card-body" >
                                <div class="title">
                                    <div class="row pt-2">
                                        <div class="col-8 text-start px-3"><h3><b>Shopping Cart</b></h3></div>
                                        <div class="col-4 align-self-center text-end text-muted px-4">3 items</div>
                                    </div>
                                    <hr>
                                </div>

                                @php
                                    $total = 0;
                                 @endphp
                                @if($cartitems->count() > 0)
                                    @foreach($cartitems as $item)
                                        <div class="row mt-3 mb-3 product_data">
                                            <div class="col-2 d-flex justify-content-center ps-3">
                                                <img src="{{asset('storage/'.$item->products->image)}}" width="70px" height="70px" alt="Image Here">
                                            </div>
                                            <div class="col-3 align-self-center px-3">
                                                <h6>{{ $item->products->name }}</h6>
                                            </div>
                                            <div class="col-2 align-self-center text-end">
                                                <h6>{{$item->products->price}}</h6>
                                            </div>
                                            <div class="col-3 d-flex align-self-center justify-content-end">
                                                <input type="hidden" value="{{$item->product_id}}" class="prod_id">
                                                @if( $item->products->inventories->quantity >= $item->quantity)
                                                    @if($item->quantity < $item->products->inventories->quantity)
                                                        <div class="input-group"  style="width: 120px;">
                                                            <button class="input-group-text decrement-btn change-quantity">-</button>
                                                            <input type="text" name="quantity" class="form-control text-center qty-input" value="{{$item->quantity}}">
                                                            <button class="input-group-text increment-btn change-quantity">+</button>
                                                        </div>
                                                    @else
                                                        <div class="input-group"  style="width: 120px;">
                                                            <button class="input-group-text decrement-btn change-quantity">-</button>
                                                            <input type="text" name="quantity" class="form-control text-center qty-input" value="{{$item->quantity}}">
                                                            <button class="input-group-text increment-btn change-quantity" disabled>+</button>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $total += $item->products->price * $item->quantity;
                                                    @endphp
                                                @else
                                                    <h6 class="pe-1 pe-lg-3">Out of Stork</h6>
                                                @endif
                                            </div>
                                            <div class="col-2 d-flex align-self-center justify-content-end px-4">
                                                <button class="btn delete-cart-item">
                                                    <i class="bi bi-trash3"></i>
                                                </button>

                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center pt-3">
                                        <h4>Your <i class="bi bi-cart"></i> cart is empty</h4>
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div class="ms-3 mb-3">
                                <a href="/shop" style="text-decoration: none; color: #5c636a;"><i class="bi bi-arrow-left"><b> Back to shop</b></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 summary" >
                        <div class="card">
                            <div class="card-body" style="background-color: #efefef">
                                <div class="row">
                                    <div class="title mt-2">
                                        <div class="px-2"><h4><b>Summary</b></h4></div>
                                        <hr>
                                    </div>
                                    <div class="col-12 row mx-1">
                                        <div class="col-8"><h5>Total Price : </h5></div>
                                        <div class="col-4 text-end px-2">{{$total}}&#3647;</div>

                                        <div class="d-flex align-items-end justify-content-center mt-3 ">
                                            <a href="{{url('checkout')}}" class="btn btn-outline-dark ">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>
@endsection