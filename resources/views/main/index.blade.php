<!DOCTYPE html>
<html lang="en">


<!-- molla/index-2.html  22 Nov 2019 09:55:32 GMT -->
@include('main.head')

<body>
    <div class="page-wrapper">

        @include('main.navbar')

        <main class="main">
            <div class="intro-section bg-lighter pt-5 pb-6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                                <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="{!! asset('assets/images/slider/slide1480w.jpg') !!}">
                                                <img src="{!! asset('assets/images/slider/slide1.jpg') !!}" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Topsale Collection</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">Living Room<br>Furniture</h1><!-- End .intro-title -->

                                            <a href=" {{ route('shop') }} " class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="{!! asset('assets/images/slider/slide2480w.jpg') !!}">
                                                <img src="{!! asset('assets/images/slider/slide2.jpg') !!}" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">News and Inspiration</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">New Arrivals</h1><!-- End .intro-title -->

                                            <a href="{{ route('shop') }}" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="{!! asset('assets/images/slider/slide3480w.jpg') !!}">
                                                <img src="{!! asset('assets/images/slider/slide3.jpg') !!}" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Outdoor Furniture</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">Outdoor Dining <br>Furniture</h1><!-- End .intro-title -->

                                            <a href="{{ route('categories', 4) }}" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->
                                </div><!-- End .intro-slider owl-carousel owl-simple -->
                                
                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display">
                                            <a href="#">
                                                <img src="{!! asset('assets/images/banners/home/intro/banner1.jpg') !!}" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-darkwhite"><a href="{{ route('categories', 7) }}">Clearence</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="{{ route('categories', 7) }}">Chairs & Chaises <br>Up to 40% off</a></h3><!-- End .banner-title -->
                                                <a href="{{ route('categories', 7) }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->

                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="{{ route('categories', 5) }}">
                                                <img src="{!! asset('assets/images/banners/home/intro/banner2.jpg') !!}" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-darkwhite"><a href="{{ route('categories', 5) }}">New in</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="{{ route('categories', 5) }}">Best Lighting <br>Collection</a></h3><!-- End .banner-title -->
                                                <a href="{{ route('categories', 5) }}" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->

                    <div class="mb-6"></div><!-- End .mb-6 -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                        <a href="https://barrel.pub/" target="blank" class="brand">
                            <img src="{!! asset('assets/images/brands/b1.png') !!}" alt="Brand Name">
                        </a>

                        <a href="https://www.something.com/" target="blank" class="brand">
                            <img src="{!! asset('assets/images/brands/b2.png') !!}" alt="Brand Name">
                        </a>

                        <a href="https://costabrava.org/" target="blank" class="brand">
                            <img src="{!! asset('assets/images/brands/b3.png') !!}" alt="Brand Name">
                        </a>

                        <a href="https://www.oceanic.eu/" target="blank" class="brand">
                            <img src="{!! asset('assets/images/brands/b4.png') !!}" alt="Brand Name">
                        </a>

                        <a href="https://www.fountain.fr/" target="blank" class="brand">
                            <img src="{!! asset('assets/images/brands/b5.png') !!}" alt="Brand Name">
                        </a>

                        <a href="https://www.blackbirds.com/" class="brand">
                            <img src="{!! asset('assets/images/brands/b6.png') !!}" alt="Brand Name">
                        </a>
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title-lg">Trendy Products</h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab" role="tab" aria-controls="trendy-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="trendy-fur-link" data-toggle="tab" href="#trendy-fur-tab" role="tab" aria-controls="trendy-fur-tab" aria-selected="true">Furniture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="trendy-light-link" data-toggle="tab" href="#trendy-light-tab" role="tab" aria-controls="trendy-light-tab" aria-selected="true">Lighting</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 5 || $product->category->CategoryID == 7)
                                <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                    @csrf
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="{{ route('product', $product->ProductID) }}">
                                            @if ($product->Images)
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                            @endif
                                        </a>
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{ $product->Price }}$
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </form>
                                @endif

                            @endforeach
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trendy-fur-tab" role="tabpanel" aria-labelledby="trendy-fur-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 7 )
                                <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                    @csrf
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="{{ route('product', $product->ProductID) }}">
                                            @if ($product->Images)
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                            @endif
                                        </a>
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{ $product->Price }}$
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </form>
                                @endif
                            @endforeach

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trendy-light-tab" role="tabpanel" aria-labelledby="trendy-light-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 5)
                                <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                    @csrf
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="{{ route('product', $product->ProductID) }}">
                                            @if ($product->Images)
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                            @endif
                                        </a>
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{ $product->Price }}$
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </form>
                                @endif
                            @endforeach
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

    		<div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4">Shop by Categories</h2><!-- End .title-lg text-center -->

        		<div class="row">
        			<div class="col-6 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="{{ route('categories', 4) }}">
                				<img src="{!! asset('assets/images/banners/home/banner1.jpg') !!}" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#">Outdoor</a></h3><!-- End .banner-title -->
                				<a href=" {{ route('categories', 4) }} " class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
        			<div class="col-6 col-lg-4 order-lg-last">
        				<div class="banner banner-display banner-link-anim">
                			<a href="{{ route('categories', 5) }}">
                				<img src="{!! asset('assets/images/banners/home/banner4.jpg') !!}" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="{{ route('categories', 5) }}">Lighting</a></h3><!-- End .banner-title -->
                				<a href="{{ route('categories', 5) }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
        			<div class="col-sm-12 col-lg-4 banners-sm">
                        <div class="row">
            				<div class="banner banner-display banner-link-anim col-lg-12 col-6">
                    			<a href="{{ route('categories', 7) }}">
                    				<img src="{!! asset('assets/images/banners/home/banner2.jpg') !!}" alt="Banner">
                    			</a>

                    			<div class="banner-content banner-content-center">
                    				<h3 class="banner-title text-white"><a href="{{ route('categories', 7) }}">Furniture and Design</a></h3><!-- End .banner-title -->
                    				<a href="{{ route('categories', 7) }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->

                			<div class="banner banner-display banner-link-anim col-lg-12 col-6">
                    			<a href="{{ route('categories', 1) }}">
                    				<img src="{!! asset('assets/images/banners/home/banner3.png') !!}" alt="Banner">
                    			</a>

                    			<div class="banner-content banner-content-center">
                    				<h3 class="banner-title text-white"><a href="#">Sofas & Sleeper sofas</a></h3><!-- End .banner-title -->
                    				<a href="{{ route('categories', 1) }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->
                        </div>
        			</div><!-- End .col-sm-6 col-lg-3 -->
        		</div><!-- End .row -->
    		</div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-6 -->

            
            <div class="container">
                <div class="heading heading-center mb-6">
                    <h2 class="title">Recent Arrivals</h2><!-- End .title -->

                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab" aria-controls="top-fur-tab" aria-selected="false">Sofas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab" aria-controls="top-decor-tab" aria-selected="false">Storage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab" aria-controls="top-light-tab" aria-selected="false">Beds</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 1 || $product->category->CategoryID == 2 || $product->category->CategoryID == 3)

                                <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 text-center">
                                    <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                        @csrf
                                    <figure class="product-media">
                                        <a href="{{ route('product', $product->ProductID) }}">
                                            @if ($product->Images)
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                            @endif
                                        </a>
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{ $product->Price }}$
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                    </div><!-- End .product-action -->
                                    </form>
                                </div><!-- End .product -->
                            
                                </div>

                                @endif
                            @endforeach
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                        <div class="row justify-content-center">
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 1)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-11 text-center">
                                        <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                            @csrf
                                        <figure class="product-media">
                                            <a href="{{ route('product', $product->ProductID) }}">
                                                @if ($product->Images)
                                                    <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                    <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                                @endif
                                            </a>
                                        </figure><!-- End .product-media -->
                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                {{ $product->Price }}$
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                        </div><!-- End .product-action -->
                                        </form>
                                    </div><!-- End .product -->
                                </div>
                                @endif
                            @endforeach
                            </div><!-- End .row -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                        <div class="row justify-content-center">
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 3)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-11 text-center">
                                        <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                            @csrf
                                        <figure class="product-media">
                                            <a href="{{ route('product', $product->ProductID) }}">
                                                @if ($product->Images)
                                                    <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                    <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                                @endif
                                            </a>
                                        </figure><!-- End .product-media -->
                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                {{ $product->Price }}$
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                        </div><!-- End .product-action -->
                                        </form>
                                    </div><!-- End .product -->
                                </div>
                                @endif
                            @endforeach
                            </div><!-- End .row -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                        <div class="row justify-content-center">
                            @foreach ($products as $product)
                                @if ($product->category->CategoryID == 2)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-11 text-center">
                                        <form action="{{route('cart.add', $product->ProductID)}}" method="POST">
                                            @csrf
                                        <figure class="product-media">
                                            <a href="{{ route('product', $product->ProductID) }}">
                                                @if ($product->Images)
                                                    <img src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                                    <img src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                                @endif
                                            </a>
                                        </figure><!-- End .product-media -->
                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                {{ $product->Price }}$
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                        </div><!-- End .product-action -->
                                        </form>
                                    </div><!-- End .product -->
                                </div>
                                @endif
                            @endforeach
                            </div><!-- End .row -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
                <div class="more-container text-center">
                    <a href=" {{ route('shop') }} " class="btn btn-outline-darker btn-more"><span>Load more products</span><i class="icon-long-arrow-down"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            <div class="container">
                <hr>
            	<div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                <p>Free shipping for orders over $50</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                <p>Free 100% money back guarantee</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                <p>Alway online feedback 24/7</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- End .row -->

                <div class="mb-2"></div><!-- End .mb-2 -->
            </div><!-- End .container -->
            <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-6.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-8">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">Sign Up & Get 10% Off</h3><!-- End .cta-title -->
                                    <p class="cta-desc text-white">Molla presents the best in interior design</p><!-- End .cta-desc -->
                                </div><!-- End .col -->

                                <div class="col-auto">
                                    <a href="login.html" class="btn btn-outline-white"><span>SIGN UP</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col-auto -->
                            </div><!-- End .row no-gutters -->
                        </div><!-- End .col-md-10 col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        </main><!-- End .main -->

        @include('main.footer')

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    @include('main.mobile')

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{!! asset('assets/images/popup/newsletter/logo.png') !!}" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{!! asset('assets/images/popup/newsletter/img1.jpg') !!}" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.hoverIntent.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset('assets/js/superfish.min.js') !!}"></script>
    <script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.magnific-popup.min.js') !!}"></script>
    <!-- Main JS File -->
    <script src="{!! asset('assets/js/main.js') !!}"></script>
</body>

<!-- molla/index-2.html  22 Nov 2019 09:55:42 GMT -->
</html>