@extends('layouts.app')

{{-- set title --}}
@section('title', ' Home')

@section('content')



    <!-- ===============//banner section start here \\================= -->
    <section class="banner-section home-4" style="background-image: url(capadesu/assets/images/banner/bg-4.jpg);">
        <div class="container">
            <div class="banner-wrapper">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="banner-content">
                            <h1> <span class="theme-color-4">
                                    Pogogutat</span> NFT<span class="theme-color-4"> <br> </span> Projects
                            </h1>
                            <p>Digital Crypto Collectibles And Non-Fungible Tokens.
                                Buy, Sell, And Discover Exclusive Digital Assets.</p>
                            <div class="banner-btns d-flex flex-wrap">
                                <a data-blast="bgColor" href="coming-soon" class="default-btn move-top"><span>Explore</span>
                                </a>
                                <a href="signin.html" class="default-btn move-right"><span>Create</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="nft-slider-wrapper">
                            <div class="swiper banner-item-slider-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="nft-item home-4">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy"
                                                                        src="capadesu/assets/images/seller/pogogutat.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">PoGoGuTat</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="capadesu/assets/images/banner/01.gif"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul> -->
                                                    </div>
                                                    {{-- <div class="nft-content">
                                                        <h4><a href="item-details.html">Black Cat </a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span
                                                                    class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i
                                                                    class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nft-item home-4">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy"
                                                                        src="capadesu/assets/images/seller/pogogutat.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">PoGoGuTat</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="capadesu/assets/images/banner/06.jpg"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul> -->
                                                    </div>
                                                    {{-- <div class="nft-content">
                                                        <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span
                                                                    class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i
                                                                    class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="nft-item home-4">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy"
                                                                        src="capadesu/assets/images/seller/pogogutat.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">PoGoGuTat</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="capadesu/assets/images/banner/05.jpg"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul> -->
                                                    </div>
                                                    {{-- <div class="nft-content">
                                                        <h4><a href="item-details.html">Future Rocket</a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span
                                                                    class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i
                                                                    class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nft-item home-4">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div
                                                    class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy"
                                                                        src="capadesu/assets/images/seller/pogogutat.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">PoGoGuTat</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="capadesu/assets/images/banner/02.gif"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul> -->
                                                    </div>
                                                    {{-- <div class="nft-content">
                                                        <h4><a href="item-details.html">Silly C4T de</a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span
                                                                    class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i
                                                                    class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//banner section end here \\================= -->


    <!-- ===============//auction section start here \\================= -->
    {{-- <section class="auction-section padding-bottom">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Live Auctions</h3>
            </div>
            <div class="section-wrapper">
                <div class="auction-holder">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img src="capadesu/assets/images/seller/01.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="capadesu/assets/images/seller/01.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Jhon Doe</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="capadesu/assets/images/nft-item/04.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span
                                                        class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span
                                                        class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span
                                                        class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span
                                                        class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Walking On
                                                    Air</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img src="capadesu/assets/images/seller/01.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img src="capadesu/assets/images/seller/02.gif"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="capadesu/assets/images/seller/02.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci L.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="capadesu/assets/images/nft-item/03.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span
                                                        class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span
                                                        class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span
                                                        class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span
                                                        class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="capadesu/assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Rassel mrh</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="capadesu/assets/images/nft-item/04.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span
                                                        class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span
                                                        class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span
                                                        class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span
                                                        class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Futuristic cols</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    130</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img src="capadesu/assets/images/seller/04.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img src="capadesu/assets/images/seller/05.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="capadesu/assets/images/seller/04.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Blexa z</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="capadesu/assets/images/nft-item/05.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span
                                                        class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span
                                                        class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span
                                                        class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span
                                                        class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Space Crafts</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===============//auction section end here \\================= -->

    <!-- ===============//blog section start here \\================= -->
    <section class="blog-section pb-120">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Roadmap</h3>
            </div>
            <div class="section-wrapper">

                <div class="blog-wrapper">
                    <div class="row justify-content-center gx-4 gy-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="nft-item home-4 blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="capadesu/assets/images/nft-item/blog/02.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="detail-news">The Rise of the Non Fungible Tokens
                                                    (NFTs)</a> </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar" data-blast="color"></i></span>July
                                                    20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>Jhon doe
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//blog section end here \\================= -->

    <!-- ===============//Category section start here \\================= -->
    <section class="category-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Projects</h3>
            </div>
            <div class="section-wrapper">

                <div class="category-wrapper">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/petsypet1.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/petsypet2.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/petsypet3.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="/petsypet">Petsypet</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/foxyland1.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/foxyland2.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/foxyland3.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="/folyland-polygon">Foxyland Polygon </a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="coming-soon">Pogo Key </a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="coming-soon">Pogo Coin</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="coming-soon">Pogo Game</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="capadesu/assets/images/nft-item/category/comingsoon.jpg"
                                                        alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="coming-soon">Pogo App</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//Category section  end here \\================= -->


    <!-- ===============//Top Seller section start here \\================= -->
    {{-- <section class="topseller-section padding-bottom">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Members</h3>
            </div>
            <div class="section-wrapper">
                <div class="nft-sell-wrapper">
                    <div class="row justify-content-center gx-4 gy-3">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="capadesu/assets/images/nft-item/style-2/01.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img
                                                    src="capadesu/assets/images/seller/04.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">01</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">Gihan Fernindo</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/02.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/02.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">02</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">liao 5er</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/03.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/03.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">03</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">xox3 nindo</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/04.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/05.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">04</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">raxel mrh</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/05.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/02.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">05</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">lsr 33xr </a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/06.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/07.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">06</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">Gihan Fernindo</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/07.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/05.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">07</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">xihan f3rd</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4 style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="capadesu/assets/images/nft-item/style-2/08.jpg"
                                            alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="capadesu/assets/images/seller/04.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">08</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">Leo F3s </a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===============//Top Seller section end here \\================= -->


    <!-- ===============//Exclusive drops section start here \\================= -->
    {{-- <section class="ex-drop-section padding-bottom">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Exclusive Collections</h3>
            </div>
            <div class="section-wrapper">
                <div class="ex-drop-wrapper">
                    <div class="row justify-content-center gx-4 gy-3">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci Lucas</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/01.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/01.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/02.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Ecalo jers</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/02.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Mewao com de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    278</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/02.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/05.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Hola moc</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/03.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">pet mice rio</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    340</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Logicto pen</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/06.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Logical Impact </a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    330</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/07.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/09.png" alt="author-img"></a>
                                                    <h6><a href="author.html">unique lo</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/09.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Fly on high</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    355</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Monica bel</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/06.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">kiara rodri de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    60</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/08.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/11.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci L.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/04.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item home-4">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/07.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="capadesu/assets/images/seller/09.png" alt="author-img"></a>
                                                    <h6><a href="author.html">ptrax elm.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="capadesu/assets/images/nft-item/08.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Homies wall</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34
                                                        ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    930</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===============//Exclusive drops section end here \\================= -->


    <!-- ===============//blog section start here \\================= -->
    <section class="blog-section pb-120">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>News</h3>
            </div>
            <div class="section-wrapper">

                <div class="blog-wrapper">
                    <div class="row justify-content-center gx-4 gy-2">
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="capadesu/assets/images/nft-item/blog/02.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="detail-news">The Rise of the Non Fungible Tokens
                                                    (NFTs)</a> </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar" data-blast="color"></i></span>July
                                                    20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>Jhon doe
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="capadesu/assets/images/nft-item/blog/03.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="detail-news"> Top 5 Most Popular NFT Games in 2022</a>
                                            </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar" data-blast="color"></i></span>July
                                                    20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>Rassel H.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item home-4 blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="capadesu/assets/images/nft-item/blog/01.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="detail-news">Best NFT Selling Marketplace website</a>
                                            </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar" data-blast="color"></i></span>July
                                                    20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>Alex zym
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//blog section end here \\================= -->

    <!-- ===============//blog section start here \\================= -->
    <section class="blog-section pb-120">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Join the Community</h3>
            </div>
            <div class="section-wrapper">
                <div class="row g-3">
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="wallet-item home-4">
                            <div class="wallet-item-inner text-center">
                                <div class="wallet-thumb">
                                    <a href="https://opensea.io/collection/petsypet" target="_blank">
                                        <img src="capadesu/assets/images/sponsor/nft.png" alt="wallet-img">
                                    </a>
                                </div>
                                <div class="wallet-content">
                                    <h5><a href="https://opensea.io/collection/petsypet" target="_blank">Petsypet</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="wallet-item home-4">
                            <div class="wallet-item-inner text-center">
                                <div class="wallet-thumb">
                                    <a href="https://discord.com/invite/A3Kjrvu5Gm" target="_blank">
                                        <img src="capadesu/assets/images/sponsor/discord.png" alt="wallet-img">
                                    </a>
                                </div>
                                <div class="wallet-content">
                                    <h5><a href="https://discord.com/invite/A3Kjrvu5Gm" target="_blank">Discord</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="wallet-item home-4">
                            <div class="wallet-item-inner text-center">
                                <div class="wallet-thumb">
                                    <a href="https://twitter.com/PoGoGuTat" target="_blank">
                                        <img src="capadesu/assets/images/sponsor/twitter.png" alt="wallet-img">
                                    </a>
                                </div>
                                <div class="wallet-content">
                                    <h5><a href="https://twitter.com/PoGoGuTat" target="_blank">Twitter</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="wallet-item home-4">
                            <div class="wallet-item-inner text-center">
                                <div class="wallet-thumb">
                                    <a href="https://www.youtube.com/c/PoGoGuTat" target="_blank">
                                        <img src="capadesu/assets/images/sponsor/ytube.png" alt="wallet-img">
                                    </a>
                                </div>
                                <div class="wallet-content">
                                    <h5><a href="https://www.youtube.com/c/PoGoGuTat" target="_blank">Youtube</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="wallet-item home-4">
                            <div class="wallet-item-inner text-center">
                                <div class="wallet-thumb">
                                    <a href="https://www.instagram.com/pogogutat" target="_blank">
                                        <img src="capadesu/assets/images/sponsor/ig.png" alt="wallet-img">
                                    </a>
                                </div>
                                <div class="wallet-content">
                                    <h5><a href="https://www.instagram.com/pogogutat" target="_blank">Instagram</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="wallet-item home-4">
                            <div class="wallet-item-inner text-center">
                                <div class="wallet-thumb">
                                    <a href="https://opensea.io/collection/foxyland-polygon" target="_blank">
                                        <img src="capadesu/assets/images/sponsor/nft.png" alt="wallet-img">
                                    </a>
                                </div>
                                <div class="wallet-content">
                                    <h5><a href="https://opensea.io/collection/foxyland-polygon" target="_blank">Foxy
                                            Land</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//blog section end here \\================= -->

    <!-- ===============//sponsor section start here \\================= -->
    {{-- <section class="sponsor-section pb-120">
        <div class="container">
            <div class="section-header style-4">
                <div class="header-shape"><span></span></div>
                <h3>Join the Community</h3>
            </div>
            <div class="section-wrapper">
                <div class="sponsor-wrapper">
                    <div class="row align-items-center justify-content-center g-5">
                        <div class="col-lg-2 col-sm-3 col-4">
                            <a href="#" class="sponsor-img text-center"><img src="assets/images/sponsor/01.png"
                                    alt="sponsor-img"></a>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-4">
                            <a href="#" class="sponsor-img text-center"><img src="assets/images/sponsor/02.png"
                                    alt="sponsor-img"></a>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-4">
                            <a href="#" class="sponsor-img text-center"><img src="assets/images/sponsor/03.png"
                                    alt="sponsor-img"></a>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-4">
                            <a href="#" class="sponsor-img text-center"><img src="assets/images/sponsor/04.png"
                                    alt="sponsor-img"></a>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-4">
                            <a href="#" class="sponsor-img text-center"><img src="assets/images/sponsor/05.png"
                                    alt="sponsor-img"></a>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-4">
                            <a href="#" class="sponsor-img text-center"><img src="assets/images/sponsor/06.png"
                                    alt="sponsor-img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===============//sponsor section end here \\================= -->
@endsection

{{-- @push('after-style')
@endpush --}}
