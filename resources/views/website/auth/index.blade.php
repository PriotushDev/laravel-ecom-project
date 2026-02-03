@extends('website.master')

@section('title')
    Account Login
@endsection

@section('body')

    <section class="banner" style="background-image: url(assets/img/banner.jpg);">
        <div class="container">
            <div class="banner-stley">
                <h1>My Account</h1>
                <p>Stories, adventures, and general awesome</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    <form class="login-form">
                        <h3>Login</h3>
                        <p>If you have an account with us, please log in. </p>
                        <input type="text" name="Email" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                        <label>Forgot your password?</label>
                        <button class="theme-btn">
                  <span class="btn-wrap">
                    <span class="text-one">Sign In</span>
                    <span class="text-two">Sign In</span>
                  </span>
                        </button>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <form class="login-form create-account">
                        <h3>Create account</h3>
                        <p>If you have an account with us, please log in. </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Last Name">
                            </div>
                        </div>
                        <input type="text" name="Email" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                        <label>Forgot your password?</label>
                        <button class="theme-btn">
                  <span class="btn-wrap">
                    <span class="text-one">Register</span>
                    <span class="text-two">Register</span>
                  </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
