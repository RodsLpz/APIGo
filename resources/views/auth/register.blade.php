<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="traveler/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="traveler/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="traveler/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="traveler/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="traveler/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="traveler/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="traveler/css/owl.carousel.min.css">
	<link rel="stylesheet" href="traveler/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="traveler/css/style.css">

	<!-- Modernizr JS -->
	<script src="traveler/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
<!-- 		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	 <div class="page-inner"> 
	 -->
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(traveler/images/img_bg_3.jpeg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The Philippines?</h1>	
						</div>

					<!-- Registration Form -->

						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
								
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Register Form</h3>
											<form method="POST" action="{{ route('register') }}">
                                                @csrf
										<!-- Name -->
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Name</label>
														<input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
												</div>
										<!-- Email -->
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Email</label>
														<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
												</div>

                                               
										<!--Password  -->
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Password</label>
														<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
												</div>
												
										<!-- Confirm Password -->
                                                <div class="form-group row">
													<div class="col-md-12">
														<label for="password-confirm">Confirm Password</label>
													    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                 </div>
											</div>
										</div>                                      
 
										<!-- Register Button -->
											
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Register">
														<a  href="login#" style="color:black;">Already have an Account?</a>
													</div>
												</div>

                                    	</div>										
									</form>									
								</div>
							

	<footer>
			<div>
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						 <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <b>Lopez,Rodralyn & Cagampang, Julie.</b> Credits From <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
				
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</footer>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="traveler/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="traveler/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="traveler/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="traveler/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="traveler/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="traveler/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="traveler/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="traveler/js/jquery.magnific-popup.min.js"></script>
	<script src="traveler/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="traveler/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="traveler/js/main.js"></script>

	</body>
</html>

