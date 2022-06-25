<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Karat Bakery</title>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">--}}


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,500;1,100&display=swap" rel="stylesheet">


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
                        @guest
                            <div class="col">
                                <li><a href="{{ route('login') }}">
                                        <i class="bi bi-person" ></i>
                                    </a>
                                </li>
                            </div>
                        @endguest


                        <div class="col">
                            <li>
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="bi bi-search" ></i>
                                </a>
                            </li>
                        </div>

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header justify-content-center" style="height: 80px;">
                                <form class="d-flex me-3" style="width: 100%;">
                                    <button class="border-0" type="submit"><i class="bi bi-search" style="font-size: 20px"></i></button>
                                    <input class="form-control form-control-lg ms-2 border-top-0 border-start-0 border-end-0 bg-white" style="width: 100%; border-bottom: 1px solid #ced4da; border-radius: 0;" type="search" placeholder="Search" aria-label="Search">
                                </form>
                                <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="col">
                            <li class="checkout">
                                <a href="#">
                                    <i class="bi bi-cart" ></i>
                                    <span id="checkout_items" class="checkout_items">2</span>
                                </a>
                            </li>
                        </div>
                    </div>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
{{--    <nav class="navbar sticky-top navbar-expand-md navbar-nav navbar-dark pb-2 pt-2" style="box-shadow: 0 0 5px; background-color: #aa706a;">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <!-- LOGO -->--}}
{{--                <div class="col ps-5 pe-5 ">--}}
{{--                    <a class="navbar-brand h1 mb-0" style="font-size: 30px" href="/">LOGO</a>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasContent" aria-controls="#offcanvasContent" aria-disabled="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="offcanvas offcanvas-end" style="background-color: rgba(170,112,106,0.5)" tabindex="-1" id="offcanvasContent" aria-labelledby="offcanvasRightLabel">--}}
{{--                <div class="offcanvas-header">--}}
{{--                    <button type="button" class="btn-close text-reset ms-auto btn-lg btn-light bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="offcanvas-body">--}}
{{--                    <ul class="navbar-nav  ms-auto mb-lg-auto">--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link " href="#">About</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Contact</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                    <ul class="navbar-nav ms-3">--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a href="#" id="navbarDropdown" class="nav-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fas fa-search"></i>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                <form class="d-flex ms-3 me-3">--}}
{{--                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                                    <button class="btn btn-outline-dark" type="submit">--}}
{{--                                        <i class="fas fa-search"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}


{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a href="#" id="navbarDropdown" class="nav-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <i class="far fa-user"></i>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    @if (Route::has('login'))--}}
{{--                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                    @endif--}}
{{--                                    @if (Route::has('register'))--}}
{{--                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->firstname }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end " style="background-color: rgba(170,112,106,1)" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" style="color: #fff" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                         document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </nav>--}}

    <main class="">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="mt-5" style="height: 200px">
                    <hr>
                    <p class="text-center"> Copyright &copy; 2022 Karat Bakery.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="/js/main.js"></script>
    <script src="/asset('js/owl.carousel.min.js"></script>

</body>
</html>
