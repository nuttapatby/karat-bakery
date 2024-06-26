@extends('layouts.app')
@section('title')
    Shop
@endsection
@section('content')
    @php

        $countProduct = \App\Models\Product::count('id');

    @endphp
    <section id="category" >
        <div class="container-fluid">
            <div class="row d-flex">
                <!-- Categories sidebar -->
                <div class="col-lg-2 col-md-3 col-12" id="category-mobile">
                    <nav class="category w-auto" >
                        <button class="openbtn d-sm-block d-md-none" onclick="openNav()">☰</button>
                        <!-- Mobile view -->
                        <div class="category-panel" id="categoryPanel">
                            <div class="category-text"> Categories </div>
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                            <ul>
                                @foreach($maincategories as $maincategory)
                                    <li><a href="javascript:void(0)" class="category-item"> <span>{{$maincategory->name}}</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                        <ul class="category-sub-manu">
                                            @foreach($categories as $category)
                                                @if($maincategory->id == $category->main_category_id)
                                                    <li><a href="{{url('category/'.$category->slug)}}" class="category-sub-item"><span>{{$category->name}}</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Desktop view -->
                        <div class="d-md-block d-sm-none d-none">
                            <div class="category-text"> Categories </div>
                            <ul>
                                @foreach($maincategories as $maincategory)
                                    <li><a href="javascript:void(0)" class="category-item"> <span>{{$maincategory->name}}</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                        <ul class="category-sub-manu">
                                            @foreach($categories as $category)
                                                @if($maincategory->id == $category->main_category_id)
                                                    <li><a href="{{url('category/'.$category->slug)}}" class="category-sub-item"><span>{{$category->name}}</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
{{--                        <!-- Mobile view -->--}}
{{--                        <div class="category-panel" id="categoryPanel">--}}
{{--                            <div class="category-text"> Categories </div>--}}
{{--                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>--}}
{{--                            <ul>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <li><a href="javascript:void(0)" class="category-item"> <span>{{$category->name}}</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>--}}
{{--                                        <ul class="category-sub-manu">--}}
{{--                                            @foreach($products as $product)--}}
{{--                                                @if($category->id == $product->category_id)--}}
{{--                                                    <li><a href="{{url('products/'.$product->slug)}}" class="category-sub-item"><span>{{$product->name}}</span></a></li>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!-- Desktop view -->--}}
{{--                        <div class="d-md-block d-sm-none d-none">--}}
{{--                            <div class="category-text"> Categories </div>--}}
{{--                            <ul>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <li><a href="javascript:void(0)" class="category-item"> <span>{{$category->name}}</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>--}}
{{--                                        <ul class="category-sub-manu">--}}
{{--                                            @foreach($products as $product)--}}
{{--                                                @if($category->id == $product->category_id)--}}
{{--                                                    <li><a href="{{url('products/'.$product->slug)}}" class="category-sub-item"><span>{{$product->name}}</span></a></li>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </nav>
                </div>

                <!-- Product items show -->
                <div class="col-12 col-md-9 col-lg-10">
                    <p class="mt-3 me-4 text-end"><span>{{$countProduct}}</span> Products</p> <!-- Show number of product -->

                    <div class="d-flex row ms-auto me-auto ">

                        @foreach( $products as $item)
                            <div class="col-12 col-sm-6 col-lg-3 col-md-4 ">
                                <div class="product-grid6 product_data">
                                    <a href="{{'products/'.$item->slug}}">
                                        <div class="product-image6">
                                            <img class="pic-1" src="{{asset('storage/'.$item->image)}}" style="height: 200px">
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title">{{$item->name}}</h3>
                                            <p>{{$item->detail}}</p>
                                            <div class="price">{{$item->price}}&#3647;
                                                <span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="social">
                                        <input type="hidden" value="{{$item->id}}" class="prod_id">
                                        <li><a href="{{'products/'.$item->slug}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li><a href="javascript:void(0)" class="shopAddToCartBtn" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="py-3 d-flex justify-content-center ">
                        {{$products->onEachSide(1)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
