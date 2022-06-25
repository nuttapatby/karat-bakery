@extends('layouts.app')

@section('content')

        <div class="container" id="login_page" style="margin-top: 9rem;">
{{--            <div class="row d-flex justify-content-center">--}}
{{--                <div class="col-12 col-md-10 col-lg-8">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col-md-10 col-lg-8">--}}
{{--                            <div class="mt-3 col-10">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Don't have an account?</p>
                                <a href="/register" class="btn btn-white btn-outline-white">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon social-icon-facebook d-flex align-items-center justify-content-center"><span class="bi bi-facebook" ></span></a>
                                        <a href="#" class="social-icon social-icon-google d-flex align-items-center justify-content-center"><span class="bi bi-google"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-end">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--    <div class="content">--}}
{{--        <div class="container" style="margin-top: 9rem">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <!-- <div class="col-md-6 order-md-2">--}}
{{--                  <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">--}}
{{--                </div> -->--}}
{{--                <div class="col-md-6 contents">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-block">--}}
{{--                                <div class="mb-4">--}}
{{--                                    <h3>Sign In to <strong>Colorlib</strong></h3>--}}
{{--                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>--}}
{{--                                </div>--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="form-group first">--}}
{{--                                        <label for="username">Username</label>--}}
{{--                                        <input type="text" class="form-control" id="username">--}}

{{--                                    </div>--}}
{{--                                    <div class="form-group last mb-4">--}}
{{--                                        <label for="password">Password</label>--}}
{{--                                        <input type="password" class="form-control" id="password">--}}

{{--                                    </div>--}}

{{--                                    <div class="d-flex mb-5 align-items-center">--}}
{{--                                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>--}}
{{--                                            <input type="checkbox" checked="checked"/>--}}
{{--                                            <div class="control__indicator"></div>--}}
{{--                                        </label>--}}
{{--                                        <span class="ms-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>--}}
{{--                                    </div>--}}

{{--                                    <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">--}}

{{--                                    <span class="d-block text-center my-4 text-muted"> or sign in with</span>--}}

{{--                                    <div class="social-login text-center">--}}
{{--                                        <a href="#" class="facebook">--}}
{{--                                            <span class="icon-facebook mr-3"></span>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="twitter">--}}
{{--                                            <span class="icon-twitter mr-3"></span>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="google">--}}
{{--                                            <span class="icon-google mr-3"></span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--<div class="container mt-5">--}}
{{--    <div class="row justify-content-center" >--}}
{{--        <div class="col-md-8" style="margin-top: 75px">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
