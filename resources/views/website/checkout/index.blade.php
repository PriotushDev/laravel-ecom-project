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
            <form class="woocommerce-checkout-form">
                <div class="row">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".2s">
                        <div class="checkout-contact mt-5">
                            <h3>Delivery </h3>
                        </div>
                        <div class="nav tab-style-checkout flex-row nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class=" nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                Ship My Order<svg width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.9958 5.58374V5.54071C30.984 5.51079 30.9696 5.48202 30.9527 5.45466L30.9205 5.41163L30.8559 5.34171L30.8183 5.30944L30.7484 5.27717H30.7215L19.0396 0.501143C18.9102 0.448838 18.7655 0.448838 18.6362 0.501143L6.98117 5.19649H6.95428L6.88436 5.22876L6.84671 5.26103L6.78217 5.33095L6.7499 5.37398C6.73303 5.40134 6.71864 5.43012 6.70687 5.46004V5.50306C6.70123 5.5477 6.70123 5.59288 6.70687 5.63752V9.94025H0.537841C0.240818 9.94025 0 10.1811 0 10.4781C0 10.7751 0.240818 11.0159 0.537841 11.0159V11.0858H6.64233V12.9253H4.55013C4.25311 12.9253 4.01229 13.1661 4.01229 13.4631C4.01229 13.7601 4.25311 14.0009 4.55013 14.0009H6.64233V15.8404H1.68344C1.38642 15.8404 1.1456 16.0812 1.1456 16.3782C1.1456 16.6752 1.38642 16.916 1.68344 16.916H6.64233V19.1642C6.64341 19.3814 6.77498 19.5765 6.9758 19.659L18.6362 24.4996C18.6945 24.5227 18.7564 24.5354 18.819 24.5372C18.8817 24.5354 18.9436 24.5227 19.0019 24.4996L30.6623 19.659C30.8631 19.5765 30.9947 19.3814 30.9958 19.1642V5.7182C31.0014 5.67356 31.0014 5.62838 30.9958 5.58374ZM18.8352 1.59296L23.2562 3.36246L13.1986 7.61678L8.60007 5.70206L18.8352 1.59296ZM18.2812 23.2034L7.71802 18.8039V16.9107H9.95005C10.2471 16.9107 10.4879 16.6698 10.4879 16.3728C10.4879 16.0758 10.2471 15.835 9.95005 15.835H7.71802V13.9956H12.8275C13.1245 13.9956 13.3653 13.7547 13.3653 13.4577C13.3653 13.1607 13.1245 12.9199 12.8275 12.9199H7.71802V11.0858H8.7937C9.09072 11.0858 9.33154 10.845 9.33154 10.548C9.33154 10.251 9.09072 10.0102 8.7937 10.0102H7.71802V6.50345L11.8271 8.20302L18.2812 10.8922V23.2034ZM18.8406 9.98328L14.5916 8.20302L24.66 3.93257L29.0649 5.70744L22.6485 8.39665L18.8406 9.98328ZM19.373 23.2034V10.8922L22.4011 9.63368L29.9308 6.49269L29.9577 18.8039L19.373 23.2034Z" fill="#444444"/>
                                </svg>

                            </button>

                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="information">
                                    <h3>Information</h3>
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <input type="text" name="name" placeholder="Full Name">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" name="phone" placeholder="Phone Number">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" name="address" placeholder="Address">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="shipping-method">
                            <h3>Shipping method</h3>
                        </div>
                        <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">

                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">

                                    <label for="payment_method_cod">
                                        Onlline Payment<img src="{{asset('/')}}website/assets/img/card.png" alt="card"> </label>

                                </li>

                                <li class="wc_payment_method payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">

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
