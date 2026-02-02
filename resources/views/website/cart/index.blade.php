@extends('website.master')

@section('title')
    Cart Page
@endsection

@section('body')
    <section class="banner" style="background-image: url({{asset('/')}}website/assets/img/banner.jpg);">
        <div class="container">
            <div class="banner-stley">
                <h1>Cart</h1>
                <p>Your cart looks fabulous… just like you!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="gap">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                        <div style="overflow-x:auto;overflow-y: hidden;">
                            {{-- message print form cardController update method --}}
                            <p class="text-success text-center">{{session('message')}}</p>
                            <table class="shop_table table-responsive">
                                <thead>
                                <tr>
                                    <th class="product-name">Product Detail</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart_products as $cart_product)
                                <tr class="product">
                                    <td class="product-name">
                                        <img src="{{asset($cart_product->options->image)}}" alt="img">
                                        <div>
                                            <a href="#">{{$cart_product->name}}</a>
                                            <span>{{$cart_product->price}}</span>
                                            <div class="product-size">Size: Large</div>
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="wrap">
                                            <form action="{{ route('cart.update', $cart_product->rowId) }}" method="post">
                                                @csrf
                                                <div class="input-group">
                                                    <input class="count" name="qty" type="number" value="{{$cart_product->qty}}">
                                                    <input type="submit" class="btn btn-success btn-sm" value="Update">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-price">
                            <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">TK. </span>{{$cart_product->price * $cart_product->qty}}</bdi>
                            </span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s">
                        <div class="coupon-area">
                            <h3>Apply Coupon</h3>
                            <div class="coupon">
                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code">
                                <button type="submit" class="theme-btn">
                    <span class="btn-wrap">
                      <span class="text-one"> Apply coupon</span>
                      <span class="text-two"> Apply coupon</span>
                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".4s">
                        <div class="cart_totals">
                            <h4>Cart Totals</h4>
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
                            <div class="wc-proceed-to-checkout">
                                <a href="{{route('checkout.page')}}" class="theme-btn">
                        <span class="btn-wrap">
                          <span class="text-one"> checkout</span>
                          <span class="text-two"> checkout</span>
                        </span>
                                </a>
                                <a href="#" class="theme-btn shopping">
                        <span class="btn-wrap">
                          <span class="text-one"> Continue Shopping</span>
                          <span class="text-two"> Continue Shopping</span>
                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
