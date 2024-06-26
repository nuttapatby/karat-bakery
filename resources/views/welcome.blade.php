@extends('layouts.app')

@section('title')
    Karat Bakery
@endsection

@section('content')
    <!-- Header Section -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style=" background-image: url('{{asset('image/banner1.jpg')}}');" >
                    <div class="carousel-container">
                        <div class="container">
                            <h2>Welcome to <span>Karat Bakery</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur aut, commodi ea excepturi exercitationem hic modi rem suscipit ullam?</p>
                            <a href="/shop" class="btn-get-started">Shop</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style=" background-image: url('{{asset('image/banner2.jpg')}}');">
                    <div class="carousel-container">
                        <div class="container">
                            <h2>Lorem ipsum.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at consequuntur dolorem, et eum ex maiores, molestias mollitia necessitatibus numquam ratione, reprehenderit vel! Consequatur laborum modi officiis recusandae voluptas voluptatem!</p>
                            <a href="/shop" class="btn-get-started">Shop</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style=" background-image: url('{{asset('image/banner3.jpg')}}');">
                    <div class="carousel-container">
                        <div class="container">
                            <h2>Lorem ipsum dolor.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias culpa deleniti dicta doloribus impedit, incidunt itaque labore mollitia nulla officiis quia, reiciendis rem unde.</p>
                            <a href="/shop" class="btn-get-started">Shop</a>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#heroCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a href="#heroCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>


    <section id="newItems">
        <div class="container position-relative mt-5">
            <h3 class="h3" style="color: #fefefe;background: #aa706a; width: 150px;height: 40px; text-align: center;border-radius: 3px;padding-top: 5px;"> New Items </h3>
            <hr style="margin-top: 0px">
            <div class="owl-carousel owl-theme owl-loaded owl-product-show">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach($products as $item)
                        <div class="owl-item">
                            <div class="product-grid6 product_data" style="">
                                <div class="product-image6">
                                    <a href="{{'products/'.$item->slug}}">
                                        <img class="pic-1" src="{{asset('storage/'.$item->image)}}" style="height: 200px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="{{'products/'.$item->slug}}">{{$item->name}}</a></h3>
                                    <p>{{$item->detail}}</p>
                                    <div class="price">{{$item->price}}&#3647;
                                        <span></span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <input type="hidden" value="{{$item->id}}" class="prod_id">
                                    <li><a href="{{'products/'.$item->slug}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="javascript:void(0)" class="welcomeAddToCartBtn" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 200px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">ไม้พายซิลิโคลน</a></h3>--}}
{{--                                    <div class="price">$8.00--}}
{{--                                        <span>$12.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 300px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>--}}
{{--                                    <div class="price">$11.00--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 300px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>--}}
{{--                                    <div class="price">$11.00--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 300px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">ช้อนตวง</a></h3>--}}
{{--                                    <div class="price">$11.00--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product5.jpeg')}}" style="height: 300px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">คือไรไม่รู้</a></h3>--}}
{{--                                    <div class="price">$11.00--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 300px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">ช้อนตวง</a></h3>--}}
{{--                                    <div class="price">$11.00--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item">--}}
{{--                            <div class="product-grid6" style="height: 400px">--}}
{{--                                <div class="product-image6">--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="pic-1" src="{{asset('image/product5.jpeg')}}" style="height: 300px">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3 class="title"><a href="#">คือไรไม่รู้</a></h3>--}}
{{--                                    <div class="price">$11.00--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="social">--}}
{{--                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="category-gallery" class="category-gallery">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-4 mt-3">
                    <a href="{{url('categories/กลอง')}}">
                        <div class="card overflow-hidden category-gallery-picture category-gallery-wrap">
                            <img src="{{asset('image/category1.jpeg')}}" class="position-relative top-50 start-50 translate-middle" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                <div class="h3">กล่อง</div>
                                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eius fugiat ipsa iusto quae veritatis.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-3">
                    <a href="{{url('categories/ถาด')}}">
                        <div class="card text-white overflow-hidden category-gallery-picture category-gallery-wrap">
                            <img src="{{asset('image/category2.jpeg')}}" class="position-relative top-50 start-50 translate-middle" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                <div class="h3">ถาด</div>
                                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eius fugiat ipsa iusto quae veritatis.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-3">
                    <a href="{{url('categories/แมพมพ')}}">
                        <div class="card text-white overflow-hidden category-gallery-picture category-gallery-wrap">
                            <img src="{{asset('image/category3.jpeg')}}" class="position-relative top-50 start-50 translate-middle" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                <div class="h3">แม่พิมพ์</div>
                                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eius fugiat ipsa iusto quae veritatis.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3">
                    <a href="{{url('categories/กระทง')}}">
                        <div class="card text-white overflow-hidden category-gallery-picture category-gallery-wrap">
                            <img src="{{asset('image/category4.jpeg')}}" class="position-relative top-50 start-50 translate-middle" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                <div class="h3">กระทง</div>
                                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eius fugiat ipsa iusto quae veritatis.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 mt-3">
                    <a href="{{url('categories/อปกรณทำขนม')}}">
                        <div class="card text-white overflow-hidden category-gallery-picture category-gallery-wrap">
                            <img src="{{asset('image/category5.jpeg')}}" class="position-relative top-50 start-50 translate-middle" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                <div class="h3">อุปกรณ์ทำขนม</div>
                                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eius fugiat ipsa iusto quae veritatis.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container position-relative">

        </div>
    </section>
@endsection
