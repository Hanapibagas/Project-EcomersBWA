@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url({{ asset('app/images/bg-01.jpg') }});">
                <span class="login100-form-title-1">
                    Sign Up
                </span>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Name</span>
                    <input id="name" name="name" class="input100" type="text" name="username" placeholder="User Name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">EmailAddress</span>
                    <input id="email" name="email" class="input100" type="email" name="username" placeholder="Emaill address">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input id="password" name="password" class="input100" type="password" name="pass" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Confirm Password</span>
                    <input id="password-confirm" name="password_confirmation" class="input100" type="password" name="pass" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Regiter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
