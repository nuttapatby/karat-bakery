@extends('layouts.app')
@section('title', $products->name)
@php
$inventories = \App\Models\Inventory::all();
@endphp
@section('content')
    <section id="productPage" style="margin-top: 8rem;">
        <div class="container-fluid">
            <div class="row d-flex position-relative product_data">
{{--                left side--}}
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center product-image">
                    <div class="main_image">
                        <img src="{{asset('storage/'.$products->image)}}" class="img-fluid" id="main_product_image" alt="">
                    </div>
                    <div class="thumbnail_image col-12 ms-auto me-auto" id="thumbnail_image">
                        <div class="owl-carousel owl-theme owl-loaded owl-alt-image">
                            <div class="owl-stage-outer" >
                                <div class="owl-stage">
                                    <div class="owl-item" id="owl-alt">
                                        <img onclick="changeImage(this)" src="{{asset('storage/'.$products->image)}}" alt="">
                                    </div>
                                    @if(is_array($products->alt_image) ? count($products->alt_image) : 0)
                                        @for($i=0;count($products->alt_image)-1 >= $i ;$i++)
                                            <div class="owl-item" id="owl-alt">
                                                <img onclick="changeImage(this)" src="{{asset('storage/'.$products->alt_image[$i])}}" alt="">
                                            </div>
                                        @endfor
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                Right side--}}
                <div class="col-12 col-md-6 product-data">
                    <div class="product-header">
                        <h2>{{$products->name}}</h2>
                        <p class="mt-3">{{$products->detail}}</p>
                    </div>
                    <div class="product-data-block d-flex flex-column">
                        <h5>ราคา</h5>
                        <p class="product-price"> {{$products->price}}&#3647; <span></span></p>
                        @foreach($inventories as $inventoryQty)
                            @if($inventoryQty->id == $products->inventory_id)
                                @if($inventoryQty->quantity > 0)
                                    <p class="mt-3 mb-1"><span class="product-status">สินค้าพร้อมส่ง</span></p>
                                @else
                                    <p class="mt-3 mb-1"><span class="product-status">สินค้าหมด</span></p>
                                @endif
                            @endif
                        @endforeach

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <input type="hidden" value="{{$products->id}}" class="prod_id">
                                <label for="Quantity">จำนวน :</label>
                                <div class="input-group mt-2"  style="width: 120px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control text-center qty-input" value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-8 mt-2 p-0 ms-auto me-auto row justify-content-start">
                                <button class="add_to_wishlist product_button" type="submit"> Add to Wishlist</button>
                                @if($products->inventories->quantity > 0)
                                    <button class="add_to_cart product_button addToCartBtn" type="submit" > Add to Cart</button>
                                @else
                                    <button class="add_to_cart product_button" style="background-color: #cccccc; border: none; text-decoration: none" disabled type="submit" > Out of stork</button>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 product_description">
                <h3>Description</h3>
                <p class="description_detail">{{$products->description}}</p>
            </div>


            <div class="col-12 mt-5 product_suggestion">
                <section id="newItems">
                    <div class="container position-relative mt-5">
                        <h3 class="h3" style="color: #fefefe;background: #aa706a; width: 150px;height: 40px; text-align: center;border-radius: 3px;padding-top: 5px;"> สินค้าแนะนำ </h3>
                        <hr style="margin-top: 0px">
                        <div class="owl-carousel owl-theme owl-loaded owl-product-show">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product5.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="product-grid6" style="height: 400px">
                                            <a href="#">
                                                <div class="product-image6">
                                                    <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 300px">
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title">ถาดซิลิโคลน</h3>
                                                    <div class="price">$11.00
                                                        <span>$14.00</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="social">
                                                <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection