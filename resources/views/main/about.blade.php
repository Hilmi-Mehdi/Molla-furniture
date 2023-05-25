<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.html  22 Nov 2019 10:03:51 GMT -->
@include('main.head')

<body>
    <div class="page-wrapper">
        @include('main.navbar')

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/about.png')">
        			<h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <h2 class="title">Our Story</h2><!-- End .title -->
                            <p>Molla was founded on the belief that furniture shopping should be an enjoyable and rewarding experience. Established in 2023, we have spent years curating an extensive collection of high-quality furniture from renowned brands and talented artisans. Our team of experienced professionals is dedicated to providing you with the best selection, superior service, and expert guidance throughout your furnishing journey.</p>
                        </div><!-- End .col-lg-6 -->
                        
                        <div class="col-lg-6">
                            <h2 class="title">Our Philosophy</h2><!-- End .title -->
                            <p>We are committed to offering furniture that combines exquisite craftsmanship, timeless design, and unmatched comfort. Whether you're looking to furnish your living room, dining area, bedroom, or home office, we handpick each item in our inventory with careful attention to detail. From classic and traditional to modern and contemporary, our diverse range of styles ensures there's something to suit every taste and preference.</p>
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->

                <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <h2 class="title">Who We Are</h2><!-- End .title -->
                                <p class="lead text-primary mb-3">We are Molla, a premier furniture store dedicated to providing you with the finest furniture and exceptional customer service.</p><!-- End .lead text-primary -->
                                <p class="mb-2">Our team of passionate professionals is committed to helping you create stylish and inviting spaces that reflect your unique taste and lifestyle.</p>

                                <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                                    <span>CONTACT US</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-6 offset-lg-1">
                                <div class="about-images">
                                    <img src="assets/images/about/img1.jpg" alt="" class="about-img-front">
                                    <img src="assets/images/about/img2.jpg" alt="" class="about-img-back">
                                </div><!-- End .about-images -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-6 pb-6 -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="brands-text">
                                <h2 class="title">The world's premium furniture design brands in one destination.</h2><!-- End .title -->
                                <p>That's why we collaborate with trusted manufacturers who share our commitment to exceptional quality and durability.</p>
                            </div><!-- End .brands-text -->
                        </div><!-- End .col-lg-5 -->
                        <div class="col-lg-7">
                            <div class="brands-display">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-sm-4">
                                        <a href="https://barrel.pub/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b1.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://www.something.com/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b2.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://costabrava.org/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b3.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://www.oceanic.eu/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b4.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://www.fountain.fr/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b5.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://www.blackbirds.com/" class="brand">
                                            <img src="{!! asset('assets/images/brands/b6.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://costabrava.org/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b3.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://barrel.pub/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b1.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="https://www.something.com/" target="blank" class="brand">
                                            <img src="{!! asset('assets/images/brands/b2.png') !!}" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .brands-display -->
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->

                    <hr class="mt-4 mb-6">

                    <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="assets/images/team/member-1.jpg" alt="member photo">
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="assets/images/team/member-2.jpg" alt="member photo">
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="assets/images/team/member-3.jpg" alt="member photo">
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-2"></div><!-- End .mb-2 -->

            </div><!-- End .page-content -->
        </main><!-- End .main -->

    @include('main.footer')

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    @include('main.mobile')


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


<!-- molla/about.html  22 Nov 2019 10:03:54 GMT -->
</html>