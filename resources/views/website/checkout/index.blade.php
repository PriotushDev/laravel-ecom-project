@extends('website.master')

@section('title')
    Checkout page
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
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="gap woocommerce-cart-section">
        <div class="container">
            <form class="woocommerce-checkout-form" action="{{ route('checkout.new.order') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".2s">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="information">
                                    <h3>Please complete your checkout information</h3>
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <input type="text" name="name" placeholder="Full Name">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="number" name="mobile" placeholder="Phone Number">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" name="delivery_address" placeholder="Delivery Address">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">

                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="online" data-order_button_text="">

                                    <label for="payment_method_cod">
                                        Onlline Payment<img src="{{asset('/')}}website/assets/img/card.png" alt="card"> </label>

                                </li>

                                <li class="wc_payment_method payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cash" data-order_button_text="">

                                    <label for="payment_method_cheque">
                                        Cash on Delivery  <img src="{{asset('/')}}website/assets/img/dollar.png" alt="dollar"></label>

                                </li>
                            </ul>
                            <button type="submit" class="button alt theme-btn" name="woocommerce_checkout_place_order" id="place_order">
                                <span class="btn-wrap">
                                  <span class="text-one">Placed Order</span>
                                  <span class="text-two">Placed Order</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1 wow fadeInUp" data-wow-delay=".4s">
                        <ul class="cart-items">
                            <li>
                                <div class="cart-items-img">
                                    <img src="{{asset('/')}}website/assets/img/category-img-1.jpg" alt="">
                                    <span>1</span>
                                </div>
                                <div>
                                    <a href="#">
                                        Tan-Luxe The Face Self-Tanning Drops
                                    </a>
                                    <span>$145.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="cart-items-img">
                                    <img src="{{asset('/')}}website/assets/img/category-img-2.jpg" alt="">
                                    <span>3</span>
                                </div>
                                <div>
                                    <a href="#">
                                        TStretch Denim with Distressed Accents
                                    </a>
                                    <span>$145.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="cart-items-img">
                                    <img src="{{asset('/')}}website/assets/img/category-img-3.jpg" alt="">
                                    <span>2</span>
                                </div>
                                <div>
                                    <a href="#">
                                        ModMuse Pleated Blazer
                                    </a>
                                    <span>$145.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="coupon-area">
                            <h3>Apply Coupon</h3>
                            <div class="coupon">
                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code">
                                <button type="submit" class="theme-btn">
                    <span class="btn-wrap">
                      <span class="text-one"> Apply </span>
                      <span class="text-two"> Apply </span>
                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="cart_totals">
                            <table class="shop_table_responsive">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal:</th>
                                    <td>
                                  <span class="woocommerce-Price-amount">
                                  <bdi>
                                      <span class="woocommerce-Price-currencySymbol">$</span>250.00
                                  </bdi>
                                  </span>
                                    </td>
                                </tr>
                                <tr class="Shipping">
                                    <th>Shipping:</th>
                                    <td>
                                  <span class="woocommerce-Price-amount amount">
                                      free
                                  </span>
                                    </td>
                                </tr>
                                <tr class="Total">
                                    <th>Total:</th>
                                    <td>
                                  <span class="woocommerce-Price-amount">
                                  <bdi>
                                      <span>$</span>250.00
                                  </bdi>
                                  </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
