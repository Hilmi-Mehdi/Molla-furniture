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
                        <li class="breadcrumb-item"><a href=" {{route('index')}} ">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/loginbg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Register</a>
							    </li>
							</ul>
							<div class="tab-content">
							    <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
							    	<form method="post" autocomplete="on" action="{{ route('register.perform') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                        <div class="form-group">
							    			<label for="singin-email-2">Name *</label>
							    			<input type="text" class="form-control" id="name-2" name="name" required>
                                            @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                            @endif
							    		</div><!-- End .form-group -->

                                        <div class="form-group">
							    			<label for="singin-email-2">Username *</label>
							    			<input type="text" class="form-control" id="username-2" name="username" required>
                                            @if ($errors->has('username'))
                                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                            @endif
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-email-2">Email address *</label>
							    			<input type="text" class="form-control" id="email-2" name="email" required>
                                            @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                            @endif
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-password-2">Password *</label>
							    			<input type="password" class="form-control" id="password-2" name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-password-2">Password Confirmation *</label>
							    			<input type="password" class="form-control" id="password" name="password_confirmation" required>
                                            @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
							    		</div><!-- End .form-group -->

							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2">
			                					<span>Sign Up</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

							    		</div><!-- End .form-footer -->
							    	</form>

							    </div><!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
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