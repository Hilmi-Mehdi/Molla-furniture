<!DOCTYPE html>
<html lang="en">


<!-- molla/index-2.html  22 Nov 2019 09:55:32 GMT -->
@include('main.head')

<body>
    <div class="page-wrapper">

        @include('main.navbar')

        <main class="main">
            
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">SHOP<span>Products</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                        <li class="breadcrumb-item active">{{ $categoryName }}</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row elements">
                        @foreach ($products as $product)
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">NEW</span>
                                <a href="{{ route('product', $product->ProductID) }}">
                                    @if ($product->Images)
                                        <img style="height:245.35px !important;width:275.35px !important;"src="{!! asset('storage/images/'. json_decode($product->Images)[0]) !!}" alt="Product image" class="product-image">
                                        <img height="245.35px" width="275.35px" src="{!! asset('storage/images/'. json_decode($product->Images)[1]) !!}" alt="Product image" class="product-image-hover">
                                    @endif
                                </a>
                                <div class="product-action-vertical">
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">{{ $product->Name }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{ $product->Price }}$
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                        @endforeach
                        
                    </div>
                </div>
            </div><!-- End .page-content -->

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