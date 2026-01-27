@extends('website.master')

@section('body')



    <section class="banner" style="background-image: url({{asset('/')}}website/assets/img/banner.jpg);">
        <div class="container">
            <div class="banner-stley">
                <h1>Our Products</h1>
                <p>Everything You Need to Know</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Shop</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="our-products-two gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="shop-filter-side">
                        <aside>
                            <div class="widget">
                                <h5 class="widget-title"> Availability</h5>
                                <div class="availability-filter">
                                    <label>
                                        <input type="checkbox" class="availability-checkbox">
                                        <span>In stock</span>
                                        <span class="count">14</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="availability-checkbox">
                                        <span>Out of stock</span>
                                        <span class="count">06</span>
                                    </label>
                                </div>
                            </div>
                            <div class="widget">
                                <h5>Price</h5>
                                <p>Highest price is $409.00</p>
                                <div class="price-filter">
                                    <div id="price-slider"></div>
                                    <div class="price-inputs">
                                        <div class="price-box">
                                            <span class="price-symbol">$</span>
                                            <span id="min-price">0</span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-symbol">$</span>
                                            <span id="max-price">578</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-color">
                                <h5>Color</h5>
                                <div class="legend">
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: black;"></div>Black</div>
                                        <div class="value">14</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: #fcb65c;"></div>Brown</div>
                                        <div class="value">06</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: #fef3c0;"></div>Light Beige</div>
                                        <div class="value">14</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: #e0e0e0;"></div>Grey</div>
                                        <div class="value">18</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: #a8752e;"></div>Chocolate</div>
                                        <div class="value">23</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: #ff5c5c;"></div>Red</div>
                                        <div class="value">43</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="label"><div class="dot" style="background-color: #a493ff;"></div>Blue</div>
                                        <div class="value">41</div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget ">
                                <h5>Category</h5>
                                <ul class="widget-category">
                                    <li><a href="#">Tops & Tees<span>14</span></a></li>
                                    <li><a href="#">Dresses & Jumpsuits<span>06</span></a></li>
                                    <li><a href="#">Bottoms<span>14</span></a></li>
                                    <li><a href="#">Outerwear & Jackets<span>18</span></a></li>
                                    <li><a href="#">Workwear<span>23</span></a></li>
                                    <li><a href="#">Co-ord Sets<span>23</span></a></li>
                                    <li><a href="#">Loungewear<span>41</span></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row g-4">
                        @foreach($products as $product)
                        <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="product-elevate">
                                <div class="product-elevate-style">
                                    <img src="{{asset('$product->image')}}website/assets/img/product-elevate-1.jpg" alt="img" height="330">
                                    <div class="product-content">
                                        <span>Add Size</span>
                                        <div class="btn-group product-size">
                                            <div>
                                                <input class="btn-check" id="btnradio101" type="radio" checked="" name="btnradio2">
                                                <label class="btn" for="btnradio101">xs</label>
                                            </div>
                                            <div>
                                                <input class="btn-check" id="btnradiol02" type="radio" checked="" name="btnradio2">
                                                <label class="btn" for="btnradiol02">s</label>
                                            </div>
                                            <div>
                                                <input class="btn-check" id="btnradiol03" type="radio" checked="" name="btnradio2">
                                                <label class="btn" for="btnradiol03">m</label>
                                            </div>
                                            <div>
                                                <input class="btn-check" id="btnradiol04" type="radio" checked="" name="btnradio2">
                                                <label class="btn" for="btnradiol04">l</label>
                                            </div>
                                            <div>
                                                <input class="btn-check" id="btnradiol05" type="radio" checked="" name="btnradio2">
                                                <label class="btn" for="btnradiol05">xl</label>
                                            </div>
                                        </div>
                                        <a href="#" class="theme-btn">
                      <span class="btn-wrap">
                        <span class="text-one">Add to Cart</span>
                        <span class="text-two">Add to Cart</span>
                      </span>
                                        </a>
                                    </div>
                                    <div class="wishlist">
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-elevate-bottom">
                                    <div>
                                        <h3><a href="{{route('website.product', ['id' => $product->id])}}">{{$product->name}}</a></h3>
                                        <span class="price">TK. {{$product->selling_price}}<del> TK. {{$product->regular_price}}</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <ul class="pagination mt-5">
                            <li><a class="page-btn disabled"><i class="fa-solid fa-angles-left"></i></a></li>
                            <li><a href="#" class="page-link">01</a></li>
                            <li><a href="#" class="page-link active">02</a></li>
                            <li><a href="#" class="page-link">03</a></li>
                            <li><span class="dots">......</span></li>
                            <li><a href="#" class="page-link">08</a></li>
                            <li><a class="page-btn"><i class="fa-solid fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
