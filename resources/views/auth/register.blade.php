@extends('layouts.app')
@section('title')
    Create Account
@endsection

@section('content')
    <div class="container" id="register_page" style="margin-top: 9rem;">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6">
                <div class="wrap d-md-flex">
                    <div class="register-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="w-100 text-center">
                                <h3 class="pb-4">Create Account</h3>
                            </div>
                        </div>
                        <form action="{{ route('register') }}" method="POST" class="register-form ps-1 pe-1">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname"  placeholder="Firstname" required>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="lastname">Lastname</label>
                                <input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror" name="lastname"  placeholder="Lastname" required>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label class="label" for="password-confirm">Confirm Password</label>
                                <input type="password" id="password-confirm" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <div class="form-group w-50 ms-auto me-auto">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card mt-5">--}}
{{--                <div class="card-header h3 text-center">{{ __('Create Account') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>--}}

{{--                            <div class="col-md-5">--}}
{{--                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>--}}

{{--                                @error('firstname')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>--}}

{{--                            <div class="col-md-5">--}}
{{--                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>--}}

{{--                                @error('lastname')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>--}}

{{--                            <div class="col-md-5">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-5">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-5">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0  justify-content-center">--}}
{{--                            <div class="row col-md-3 col-6 ">--}}
{{--                                <button type="submit" class="btn btn-outline-primary">--}}
{{--                                    {{ __('Create') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
