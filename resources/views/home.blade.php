@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="container-fluid">
        <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image/banner1.jpg')}}" class="d-block w-100" alt="Dessert 1">
                    <div class="carousel-caption d-none d-sm-block d-block">
                        <h5 style="text-shadow: 0 0 2px">First slide label</h5>
                        <p style="text-shadow: 0 0 2px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, sapiente!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/banner2.jpg')}}" class="d-block w-100" alt="Dessert 2">
                    <div class="carousel-caption d-none d-sm-block">
                        <h5 style="text-shadow: 0 0 2px">Second slide label</h5>
                        <p style="text-shadow: 0 0 2px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, distinctio.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/banner3.jpg')}}" class="d-block w-100" alt="Dessert 3">
                    <div class="carousel-caption d-none d-sm-block">
                        <h5 style="text-shadow: 0 0 2px">Third slide label</h5>
                        <p style="text-shadow: 0 0 2px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, natus!</p>
                    </div>
                </div>
            </div>
            <botton class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </botton>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
@endsection
