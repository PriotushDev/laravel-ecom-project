@extends('website.master')

@section('body')


    <section class="banner" style="background-image: url({{asset('/')}}website/assets/img/banner.jpg);">
        <div class="container">
            <div class="banner-stley">
                <h1>Product Details</h1>
                <p>Everything You Need to Know</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">shop</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="pd-gallery">
                        <ul class="pd-imgs">
                            <li class="li-pd-imgs nav-active">
                                <a href="JavaScript:void(0)">
                                    <img alt="img" src="{{asset($product->image)}}">
                                </a>
                            </li>
                            @foreach($product->otherImages as $otherImage)
                            <li class="li-pd-imgs">
                                <a href="JavaScript:void(0)">
                                    <img alt="img" src="{{asset($otherImage->image)}}">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="pd-main-img">
                            <img id="NZoomImg" alt="img" src="{{asset($product->image)}}" class="w-100">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="product-details-info">
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><span>(4.9)</span></li>
                        </ul>
                        <h2> {{$product->name}} </h2>
                        <span class="price"> TK. {{$product->selling_price}} </span>
                        <div class="key-points">
                            <span><i class="fa-solid fa-check"></i>Modern Look</span>
                            <span><i class="fa-solid fa-check"></i>High Quality Fabric</span>
                        </div>
                        <h4>Hurry up, only {{$product->stock_amount}} items left in stock.</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="btn-group product-size">
                            <span class="select-size"> Select Size:</span>
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
                        <div class="d-flex align-items-center flex-wrap color-filter">
                            <span class="color">Color:</span>
                            <div class="form-check"><input class="form-check-input" id="radioNoLabel01" type="radio"
                                                           value="#DA6C6C" checked="" name="radioNoLabel"><span
                                    style="background-color: #DA6C6C;"></span></div>
                            <div class="form-check"><input class="form-check-input" id="radioNoLabel02" type="radio"
                                                           value="#D5D5D5" checked="" name="radioNoLabel"><span style="background-color: #D5D5D5;"></span>
                            </div>
                            <div class="form-check"><input class="form-check-input" id="radioNoLabel03" type="radio"
                                                           value="#5CC39F" checked="" name="radioNoLabel"><span
                                    style="background-color: #5CC39F;"></span></div>
                            <div class="form-check"><input class="form-check-input" id="radioNoLabel04" type="radio"
                                                           value="#7391DC" checked="" name="radioNoLabel"><span
                                    style="background-color: #7391DC;"></span></div>
                            <div class="form-check"><input class="form-check-input" id="radioNoLabel05" type="radio"
                                                           value="#FF5E5E" checked="" name="radioNoLabel"><span
                                    style="background-color: #FF5E5E;"></span></div>
                            <div class="form-check">
                                <input class="form-check-input" id="radioNoLabel10" type="radio" value="#7BEF68" checked=""
                                       name="radioNoLabel"><span style="background-color: rgb(123, 239, 104);">

                  </span>
                            </div>
                        </div>
                        <div class="add-cart">
                            <div class="wrap">
                                <button type="button" class="sub">-</button>
                                <input class="count" type="text" value="1">
                                <button type="button" class="add">+</button>
                            </div>
                            <a href="{{route('view.cart')}}" class="theme-btn">
                <span class="btn-wrap">
                  <span class="text-one">Add to Cart</span>
                  <span class="text-two">Add to Cart</span>
                </span>
                            </a>
                        </div>
                        <div class="add-points">
                            <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i>Add to Compare</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>Add to Wishlist</a>
                        </div>
                        <ul class="shipping-return-information">
                            <li><i class="fa-solid fa-truck-fast"></i>Free International Shipping over $500</li>
                            <li><i class="fa-solid fa-rotate-left"></i>Free Returns Within 30 days</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gap no-top">
        <div class="container">
            <div class="nav tab-style-five flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab-5" data-bs-toggle="pill" data-bs-target="#v-pills-home-5"
                        type="button" role="tab" aria-controls="v-pills-home-5" aria-selected="true">
                    Description
                </button>
                <button class="nav-link" id="v-pills-profile-tab-5" data-bs-toggle="pill" data-bs-target="#v-pills-profile-5"
                        type="button" role="tab" aria-controls="v-pills-profile-5" aria-selected="false">Specifications</button>
                <button class="nav-link" id="v-pills-messages-tab-5" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages-5" type="button" role="tab" aria-controls="v-pills-messages-5"
                        aria-selected="false">Reviews <span>(04)</span></button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home-5" role="tabpanel" aria-labelledby="v-pills-home-tab-5">
                    <div class="row">
                        <div class="col">
                            <div class="description">
                                {!! $product->long_description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile-5" role="tabpanel" aria-labelledby="v-pills-profile-tab-5">
                    <ul class="specifications">
                        <li><h4>Brand:</h4> <span>Artisanhide</span></li>
                        <li><h4>Color:</h4> <span>Yellow</span></li>
                        <li><h4>Fabric:</h4> <span>Premium Leather</span></li>
                        <li><h4>Weight:</h4> <span>250 Gram</span></li>
                        <li><h4>Quality:</h4> <span>Premium Plus</span></li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="v-pills-messages-5" role="tabpanel" aria-labelledby="v-pills-messages-tab-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="review">
                                <h3>review</h3>
                            </div>
                            <ul class="review-comment">
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/comment-1.jpg" alt="image">
                                    <div class="review-comment-info">
                                        <div>
                                            <h4>Willimes Smith</h4>
                                            <span>Dec 7, 2025</span>
                                        </div>
                                        <p>Loving how these trends blend creativity with individuality! Upcycled patch fashion is such a vibe—it's fashion with a story and a purpose.</p>
                                        <ul class="star">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/comment-2.jpg" alt="image">
                                    <div class="review-comment-info">
                                        <div>
                                            <h4>Willimes Smith</h4>
                                            <span>Dec 7, 2025</span>
                                        </div>
                                        <p>Loving how these trends blend creativity with individuality! Upcycled patch fashion is such a vibe—it's fashion with a story and a purpose.</p>
                                        <ul class="star">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/customer-img-2.jpg" alt="image">
                                    <div class="review-comment-info">
                                        <div>
                                            <h4>Willimes Smith</h4>
                                            <span>Dec 7, 2025</span>
                                        </div>
                                        <p>Loving how these trends blend creativity with individuality! Upcycled patch fashion is such a vibe—it's fashion with a story and a purpose.</p>
                                        <ul class="star">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="pagination mt-2">
                                <li><a class="page-btn disabled"><i class="fa-solid fa-angles-left"></i></a></li>
                                <li><a href="#" class="page-link">01</a></li>
                                <li><a href="#" class="page-link active">02</a></li>
                                <li><a href="#" class="page-link">03</a></li>
                                <li><span class="dots">......</span></li>
                                <li><a href="#" class="page-link">08</a></li>
                                <li><a class="page-btn"><i class="fa-solid fa-angles-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="leave-review">
                                <h3>Leave a Review</h3>
                                <form action="#" method="POST" class="contact-form-items">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <textarea placeholder="Write a Review"></textarea>
                                            <input type="text" name="name" placeholder="Full Name">
                                            <input type="email" name="email" placeholder="Email Address">
                                            <div class="d-flex align-items-start g-4">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> Save my name, email in this browser for the next time I review.
                                                </label>
                                            </div>
                                            <div class="select-rating">
                                                <h4>Select Rating:</h4>
                                                <ul class="star">
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <button class="theme-btn">
                      <span class="btn-wrap">
                        <span class="text-one">Post Review</span>
                        <span class="text-two">Post Review</span>
                      </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
