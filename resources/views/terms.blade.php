@extends('layouts.app')
@section('title')
    Karat Bakery
@endsection
@section('content')
    <section style="margin-top: 7rem;">
        <div class="container">
            <div>
                <h1 class="text-center">Terms & Conditions</h1>
                <div id="accordion">
                    <div class="card mt-3">
                        <div class="card-header">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                <h5>Collapsible Group Item #1</h5>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                                <img src="{{asset('image/privacy-policy-template.jpg')}}" class="mx-auto d-block img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection