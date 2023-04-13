@extends('client.layouts.master')
@section('content')
    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Shop Single</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel owl-loaded owl-drag">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1080px, 0px, 0px); transition: all 0s ease 0s; width: 2700px;">
                                <div class="owl-item cloned" style="width: 540px;">
                                    <div class="single-prd-item">
                                        <img class="img-fluid"
                                            src="{{ $product->image ? asset('storage/' . $product->image) : '' }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 540px;">
                                    <div class="single-prd-item">
                                        <img class="img-fluid"
                                            src="{{ $product->image ? asset('storage/' . $product->image) : '' }}">

                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 540px;">
                                    <div class="single-prd-item">
                                        <img class="img-fluid" src="{{ BASE_URLH }}img/category/s-p1.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $product->product_name }}</h3>
                        <h2>{{ number_format($product->price, 0, ',', '.') . ' VNĐ' }}</h2>
                        <ul class="list">
                            <li><a class="active" href="#"><span>Category</span> {{ $product->category->name }}</a>
                            </li>
                            <li><a href="#"><span>Availibility</span>
                                    {{ $product->quantity > 0 ? 'In Stock' : 'Out Stock' }}</a></li>
                        </ul>
                        <p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking
                            for
                            something that can make your interior look awesome, and at the same time give you the pleasant
                            warm feelingv
                            during the winter.</p>
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <button
                                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
                            <input type="text" name="qty" id="sst" size="2" maxlength="12" value="1"
                                title="Quantity:" class="input-text qty">
                            <button
                                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
                            <a class="button primary-btn" href="{{ route('add_to_cart', ['id' => $product->id]) }}">Add to
                                Cart</a>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
