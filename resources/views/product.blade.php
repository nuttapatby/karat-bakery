@extends('layouts.app')
@section('content')
    <section id="productPage" style="margin-top: 8rem;">
        <div class="container-fluid">
            <div class="row d-flex position-relative">
{{--                left side--}}
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center product-image">
                    <div class="main_image">
                        <img src="{{asset('image/product1.jpeg')}}" class="img-fluid" id="main_product_image" alt="">
                    </div>
                    <div class="thumbnail_image ms-auto me-auto">
                        <ul id="thumbnail">
                            <li><img onclick="changeImage(this)" src="{{asset('image/product2.jpeg')}}" alt=""></li>
                            <li><img onclick="changeImage(this)" src="{{asset('image/product3.jpeg')}}" alt=""></li>
                            <li><img onclick="changeImage(this)" src="{{asset('image/product4.jpeg')}}" alt=""></li>
                            <li><img onclick="changeImage(this)" src="{{asset('image/product5.jpeg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>

{{--                Right side--}}
                <div class="col-12 col-md-6 product-data">
                    <div class="product-header">
                        <h2>Product name</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio illo impedit optio pariatur quia. Ab architecto dicta ducimus earum exercitationem illum impedit inventore iure molestias nam nemo nesciunt nobis odit officia optio perferendis perspiciatis, quae, quas, vel velit veritatis.</p>
                    </div>
                    <div class="product-data-block d-flex flex-column">
                        <h5>ราคา</h5>
                        <p class="product-price mt-1"> 1000.00฿ <span></span></p>
                        <p class="mt-4"><span class="product-status">สินค้าพร้อมส่ง</span></p>

                        <div class="row d-flex">
                            <button class="add_to_cart product_button" type="submit"> Add to cart</button>
                            <button class="buy_it_now product_button" type="submit"> Buy it now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 product_description">
                <h3>Description</h3>
                <p class="description_detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam atque beatae blanditiis consectetur consequuntur cupiditate delectus deleniti, dolore eligendi esse, fuga fugit harum hic id illum in inventore iure laudantium minus natus necessitatibus neque nostrum nulla officiis perferendis praesentium quaerat quas quia quibusdam quisquam ratione saepe sed soluta, temporibus veniam voluptate. A animi debitis eius eos error explicabo harum, in maiores maxime minima, praesentium qui quibusdam quos reiciendis sequi sunt, velit veritatis? Animi at aut blanditiis corporis cumque delectus earum esse facere fugiat hic inventore iusto nisi nostrum odit pariatur quidem repellendus repudiandae saepe tempora temporibus vel veniam, vero.</p>
            </div>


            <div class="col-12 mt-5 product_suggestion">
                <section id="newItems">
                    <div class="container position-relative mt-5">
                        <h3 class="h3" style="color: #fefefe;background: #aa706a; width: 150px;height: 40px; text-align: center;border-radius: 3px;padding-top: 5px;"> สินค้าแนะนำ </h3>
                        <hr style="margin-top: 0px">
                        <div class="owl-carousel owl-theme owl-loaded">
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