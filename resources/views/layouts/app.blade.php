<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>



    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">--}}


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,500;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500&display=swap" rel="stylesheet">


</head>
<body>

    <!-- Navbar -->
    <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
        <div class="container d-flex align-items-center">

            <!-- LOGO -->
            <div class="logo me-auto">
                <a class="text-decoration-none" href="/">Karat bakery</a>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" aria-current="page" href="/">Home</a></li>
                    <li><a href="/shop">Shop</a></li>
                    <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Location</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact</a></li>



                    <div class="navbar_user row justify-content-between">
                        <!-- Authentication Links -->

                        <div class="col">
                            @guest
                                <li><a href="{{ route('login') }}">
                                        <i class="bi bi-person" ></i>
                                    </a>
                                </li>
                            @else
                                <li><a href="/account">
                                        <i class="bi bi-person"></i>
                                    </a>
                                </li>
                            @endguest
                        </div>

                        <div class="col">
                            <li>
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="bi bi-search" ></i>
                                </a>
                            </li>
                        </div>

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header justify-content-center" style="height: 80px;">
                                <form action="{{ route('product.search') }}" method="GET" class="d-flex me-3" style="width: 100%;">
                                    <button class="border-0" type="submit"><i class="bi bi-search" style="font-size: 20px"></i></button>
                                    <input class="form-control form-control-lg ms-2 border-top-0 border-start-0 border-end-0 bg-white" style="width: 100%; border-bottom: 1px solid #ced4da; border-radius: 0;" type="search" name="type" placeholder="Search..." aria-label="Search">
                                </form>
                                <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="col">
                            <li class="checkout">
                                <a href="{{ url('cart') }}">
                                    <i class="bi bi-cart" ></i>
                                    <span id="checkout_items" class="checkout_items cart-count">0</span>
                                </a>
                            </li>
                        </div>
                    </div>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main class="">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="mt-5" style="height: 200px">
                    <hr>
                    <div class="container" id="footer">
                        <div class="row">
                            <div class="col-12 col-md-3 d-flex flex-column">
                                <h4>Our company</h4>
                                <a href="/about">About</a>
                            </div>
                            <div class="col-12 col-md-3 mt-3 mt-md-0 d-flex flex-column">
                                <h4>Shopping</h4>
                                <a href="">สินค้าใหม่</a>
                                <a href="/shop">สินค้าทั้งหมด</a>
                            </div>
                            <div class="col-12 col-md-3 mt-3 mt-md-0 d-flex flex-column">
                                <h4>Helps</h4>
                                <a href="/contact">ติดต่อเรา</a>
                                <a href="/terms-conditions">Terms & Conditions</a>
                            </div>
                            <div class="col-12 col-md-3 mt-3 mt-md-0 d-flex flex-column">
                                <div class="col-12">
                                    <h4 style="font-weight: 400">ช่องทางการชำระเงิน</h4>
                                    <div class="d-flex">
                                        <img src="{{asset('image/visa.svg')}}" width="50" alt="visa">
                                        <img src="{{asset('image/mastercard.svg')}}" width="50" alt="mastercard">
                                        <img src="{{asset('image/jcb.svg')}}" width="50" alt="jcb">
                                    </div>
                                    <div class="pt-2"><p>Secure by <img src="{{asset('image/omise-logo.jpeg')}}" width="70" alt="omise-logo"></p></div>
                                </div>
                                <div class="col-12">
                                    <h4>Follow us</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center"> Copyright &copy; 2022 Karat Bakery.</p>
                </div>
            </div>
        </div>
    </footer>


    @yield('script')

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>

</body>
</html>
