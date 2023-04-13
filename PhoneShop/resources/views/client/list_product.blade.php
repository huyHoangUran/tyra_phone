@extends('client.layouts.master')
@section('content')
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                <form action="#">
                                    <ul>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="men"
                                                name="brand"><label for="men">Men<span> (3600)</span></label></li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="women"
                                                name="brand"><label for="women">Women<span> (3600)</span></label></li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories"
                                                name="brand"><label for="accessories">Accessories<span>
                                                    (3600)</span></label></li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear"
                                                name="brand"><label for="footwear">Footwear<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem"
                                                name="brand"><label for="bayItem">Bay item<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics"
                                                name="brand"><label for="electronics">Electronics<span>
                                                    (3600)</span></label></li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="food"
                                                name="brand"><label for="food">Food<span> (3600)</span></label></li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-filter">
                        <div class="top-filter-head">Product Filters</div>
                        <div class="common-filter">
                            <div class="head">Brands</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple"
                                            name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus"
                                            name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee"
                                            name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax"
                                            name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung"
                                            name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">

                        </div>
                        <div class="common-filter">

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select style="display: none;">
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">Default sorting</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected focus">Default sorting</li>
                                    <li data-value="1" class="option">Default sorting</li>
                                    <li data-value="1" class="option">Default sorting</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sorting mr-auto">
                            <select style="display: none;">
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">Show 12</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">Show 12</li>
                                    <li data-value="1" class="option">Show 12</li>
                                    <li data-value="1" class="option">Show 12</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="input-group filter-bar-search">
                                <input type="text" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @foreach ($products as $pr)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center card-product">
                                        <div class="card-product__img">
                                            <img class="card-img"
                                                src="{{ $pr->image ? asset('storage/' . $pr->image) : '' }}"
                                                alt="">
                                            <ul class="card-product__imgOverlay">
                                                <li><button><i class="ti-search"></i></button></li>
                                                <li><button><i class="ti-shopping-cart"></i></button></li>
                                                <li><button><i class="ti-heart"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ $pr->category->name }}</p>
                                            <h4 class="card-product__title"><a
                                                    href="{{ route('detail_product', ['id' => $pr->id]) }}">{{ $pr->product_name }}</a>
                                            </h4>
                                            <p class="card-product__price">
                                                {{ number_format($pr->price, 0, ',', '.') . ' VNĐ' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
        </div>
    </section>
@endsection
