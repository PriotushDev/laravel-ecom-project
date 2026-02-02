@extends('website.master')

@section('title')
    Complete Order
@endsection

@section('body')
    <section class="banner" style="background-image: url({{asset('/')}}website/assets/img/banner.jpg);">
        <div class="container">
            <div class="banner-stley">
                <h1>Checkout</h1>
                <p>Your cart looks fabulous… just like you!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Complete Order</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="gap woocommerce-cart-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
