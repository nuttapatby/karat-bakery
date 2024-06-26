@extends('layouts.app')
@section('title')
    Search
@endsection
@section('content')

    <style>
        .form-control:focus{border-color: #000000 !important; color: #000000 !important;}
    </style>

    <div class="container" style="margin-top: 7rem">

        <div class="row d-flex justify-content-start">
            <div class="col-md-6 col-12 mb-4">
                <h1>Search</h1>
                <form action="{{route('product.search')}}" method="GET">
                    <div class="input-group mt-2 mt-sm-4" style="height: 40px">
                        <input type="search" id="search" name="type" class="form-control rounded-0" placeholder="Search..." />
                        <button type="submit" class="btn btn-outline-dark"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>

            <hr>

            @if(isset($products))
                <div class="row ms-auto me-auto">
                    @if(count($products) > 0)
                        @foreach( $products as $item)
                            <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                                <div class="product-grid6 ">
                                    <a href="{{'products/'.$item->slug}}">
                                        <div class="product-image6">
                                            <img class="pic-1" src="{{asset('storage/'.$item->image)}}" style="height: 200px">
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title">{{$item->name}}</h3>
                                            <p>{{$item->detail}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, voluptas!</p>
                                            <div class="price">{{$item->price}}&#3647;
                                                <span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{'products/'.$item->slug}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                             </div>
                        @endforeach
                    @else
                        <div class="mt-2">
                            <p style="font-size: 20px; font-family: Kanit,sans-serif; ">ไม่พบสินค้าที่ค้นหา</p>
                        </div>

                    @endif
                </div>
                <div class="paginate-block d-flex justify-content-center mt-3 text-center">
                    {{ $products->links() }}
                </div>
            @endif
        </div>

    </div>


@endsection