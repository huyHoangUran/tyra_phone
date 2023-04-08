@extends('client.layouts.master')

@section('content')
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2> <span class="section-intro__style">Product</span></h2>
        </div>
        <div class="row">
            @foreach ($product as $pr)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="card-img" src="{{ $pr->image ? asset('storage/' . $pr->image) : '' }}"" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="ti-search"></i></button></li>
                                <li><button><i class="ti-shopping-cart"></i></button></li>
                                <li><button><i class="ti-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Accessorie</p>

                            <h4 class="card-product__title"><a href="single-product.html">{{ $pr->product_name }}</a>
                            </h4>
                            <p class="card-product__price">{{ number_format($pr->price, 0, ',', '.') . ' VNĐ' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    @endsection
