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
    {{--    <header class="container-fluid">--}}
    {{--        <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">--}}
    {{--            <div class="carousel-indicators">--}}
    {{--                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
    {{--                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
    {{--                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
    {{--            </div>--}}
    {{--            <div class="carousel-inner">--}}
    {{--                <div class="carousel-item active">--}}
    {{--                    <img src="{{asset('image/banner1.jpg')}}" class="d-block w-100" alt="Dessert 1">--}}
    {{--                    <div class="carousel-caption d-none d-sm-block d-block">--}}
    {{--                        <h5 style="text-shadow: 0 0 2px">First slide label</h5>--}}
    {{--                        <p style="text-shadow: 0 0 2px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, sapiente!</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="carousel-item">--}}
    {{--                    <img src="{{asset('image/banner1.jpg')}}" class="d-block w-100" alt="Dessert 2">--}}
    {{--                    <div class="carousel-caption d-none d-sm-block">--}}
    {{--                        <h5 style="text-shadow: 0 0 2px">Second slide label</h5>--}}
    {{--                        <p style="text-shadow: 0 0 2px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, distinctio.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="carousel-item">--}}
    {{--                    <img src="{{asset('image/banner1.jpg')}}" class="d-block w-100" alt="Dessert 3">--}}
    {{--                    <div class="carousel-caption d-none d-sm-block">--}}
    {{--                        <h5 style="text-shadow: 0 0 2px">Third slide label</h5>--}}
    {{--                        <p style="text-shadow: 0 0 2px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, natus!</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <botton class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">--}}
    {{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--                <span class="visually-hidden">Previous</span>--}}
    {{--            </botton>--}}
    {{--            <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">--}}
    {{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--                <span class="visually-hidden">Next</span>--}}
    {{--            </button>--}}
    {{--        </div>--}}
    {{--    </header>--}}

    <section>

    </section>


    {{--    <section id="newItems">--}}
    {{--        <div class="container mt-5">--}}
    {{--            <div>--}}
    {{--                <h3>Items</h3>--}}
    {{--            </div>--}}
    {{--            <hr>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-3 col-md-6 d-flex justify-content-center pt-3 pb-3 ">--}}
    {{--                    <div class="card" style="width: 25rem; height: 30rem;">--}}
    {{--                        <a href="#" class="d-flex" style="text-decoration: none; color: #000000; height: 300px;">--}}
    {{--                            <img src="{{asset('image/product1.jpeg')}}" class="card-img-top img-fluid" alt="..." >--}}
    {{--                        </a>--}}

    {{--                        <div class="card-body ">--}}
    {{--                            <a href="#" style="text-decoration: none; color: #000000">--}}
    {{--                                <h5 class="card-title">Card title</h5>--}}
    {{--                            </a>--}}
    {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
    {{--                                                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-md-6 d-flex justify-content-center pt-3 pb-3">--}}
    {{--                    <div class="card" style="width: 25rem; height: 30rem">--}}
    {{--                        <a href="#" class="d-flex" style="text-decoration: none; color: #000000; height: 300px;">--}}
    {{--                            <img src="{{asset('image/product2.jpeg')}}" class="card-img-top img-fluid" alt="..." >--}}
    {{--                        </a>--}}

    {{--                        <div class="card-body">--}}
    {{--                            <a href="#" style="text-decoration: none; color: #000000">--}}
    {{--                                <h5 class="card-title">Card title</h5>--}}
    {{--                            </a>--}}
    {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
    {{--                                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-md-6 d-flex justify-content-center pt-3 pb-3">--}}
    {{--                    <div class="card" style="width: 25rem; height: 30rem">--}}
    {{--                        <a href="#" class="d-flex" style="text-decoration: none; color: #000000; height: 300px;">--}}
    {{--                            <img src="{{asset('image/product3.jpeg')}}" class="card-img-top img-fluid" alt="...">--}}
    {{--                        </a>--}}

    {{--                        <div class="card-body">--}}
    {{--                            <a href="#" style="text-decoration: none; color: #000000">--}}
    {{--                                <h5 class="card-title">Card title</h5>--}}
    {{--                            </a>--}}
    {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
    {{--                                                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-md-6 d-flex justify-content-center pt-3 pb-3">--}}
    {{--                    <div class="card" style="width: 25rem; height: 30rem">--}}
    {{--                        <a href="#" class="d-flex" style="text-decoration: none; color: #000000; height: 300px;">--}}
    {{--                            <img src="{{asset('image/product4.jpeg')}}" class="card-img-top img-fluid" alt="..." >--}}
    {{--                        </a>--}}

    {{--                        <div class="card-body">--}}
    {{--                            <a href="#" style="text-decoration: none; color: #000000">--}}
    {{--                                <h5 class="card-title">Card title</h5>--}}
    {{--                            </a>--}}
    {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
    {{--                                                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-md-6 d-flex justify-content-center pt-3 pb-3">--}}
    {{--                    <div class="card" style="width: 25rem; height: 30rem">--}}
    {{--                        <a href="#" class="d-flex" style="text-decoration: none; color: #000000; height: 300px;">--}}
    {{--                            <img src="{{asset('image/product5.jpeg')}}" class="card-img-top img-fluid" alt="..." >--}}
    {{--                        </a>--}}

    {{--                        <div class="card-body">--}}
    {{--                            <a href="#" style="text-decoration: none; color: #000000">--}}
    {{--                                <h5 class="card-title">Card title</h5>--}}
    {{--                            </a>--}}
    {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
    {{--                                                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section id="newItems">
        <div class="container position-relative mt-5">
            <h3 class="h3" style="color: #fefefe;background: #aa706a; width: 150px;height: 40px; text-align: center;border-radius: 3px;padding-top: 5px;"> New Items </h3>
            <hr style="margin-top: 0px">
            <div class="owl-carousel owl-theme owl-loaded owl-product-show">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="product-grid6" style="">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reiciendis?</p>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 200px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">ไม้พายซิลิโคลน</a></h3>
                                    <div class="price">$8.00
                                        <span>$12.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 300px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 300px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 300px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">ช้อนตวง</a></h3>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product5.jpeg')}}" style="height: 300px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">คือไรไม่รู้</a></h3>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 300px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">ช้อนตวง</a></h3>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="product-grid6" style="height: 400px">
                                <div class="product-image6">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('image/product5.jpeg')}}" style="height: 300px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">คือไรไม่รู้</a></h3>
                                    <div class="price">$11.00
                                        <span>$14.00</span>
                                    </div>
                                </div>
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

    <section id="category-gallery" class="category-gallery">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-4 mt-3">
                    <a href="">
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
                    <a href="">
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
                    <a href="">
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
                    <a href="">
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
                    <a href="">
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
