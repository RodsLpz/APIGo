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
	
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(traveler/images/img_bg_3.jpeg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Your Smart Calendar</h1>	
							<p> A Daily Method for Deep Work in a Distracted World </p>
							
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Login Form</h3>
											<form method="POST" action="{{ route('login') }}">
                                                @csrf

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

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Login">
													</div>
												</div>
                                                
                                                <div class="row form-group">
													<div class="col-md-12">
														<!-- <a href="#"> Register </a> -->
                                                        <a  href="{{ route('register') }}" class="btn btn-primary btn-block" style="color:white;">Register</a>
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
			
		</div>
	</div>
<!-- 	
	<div class="gtco-cover gtco-cover-sm" style="background-image: url(traveler/images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Most Popular Destination</h1>
				</div>	
			</div>
		</div>
	</div>  -->
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Meeting Place Suggestions</h2>
					</div>
			</div>


	
		<div id="gtco-section">
			<div class="gtco-container">
			<div class="row">


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="traveler/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="traveler/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Siargao Island, Philippines	</h2>
							<p>Siargao, a teardrop-shaped small island located at the northeastern coast of Mindanao, is known as the Surfing Capital of the Philippines. </p>
							<p><span class="btn btn-primary">View</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="traveler/img_4.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="traveler/img_4.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Batanes, Philippines</h2>
							<p>One of the top beaches in the Philippines, is blessed with a long stretch of powdery white sand beach, crystal clear and azure waters,
							</p>
							<p><span class="btn btn-primary">View</span></p>
						</div>
					</a>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="traveler/img_2.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="traveler/img_2.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2> Hundred Island, Philippines</h2>
							<p>Known as the Home of the Winds,because of its calm and windy weather,has preserved its postcard-perfect scenery, 
							and the simple way of living.</p>
							<p><span class="btn btn-primary">View</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="traveler/img_3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="traveler/img_3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Boracay Island, Philippines</h2>
							<p>The Hundred Islands of Alaminos City is probably the most popular tourist spot in Pangasinan. It is a group of approximately 123 islands and islets scattered over Lingayen Gulf,
							believed to be formed more than two million years ago
							</p>
							<p><span class="btn btn-primary">View</span></p>
						</div>
					</a>
				</div>


			

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="traveler/img_5.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="traveler/img_5.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bohol, Philippines</h2>
							<p>The island of Bohol in the Philippines' central Visayas region runs at a slower pace, and it's a destination that showcases the country's natural beauty.
							One of the most unique natural wonders on the island is the Chocolate Hills in Carmen.</p>
							<p><span class="btn btn-primary">View</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="traveler/img_6.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="traveler/img_6.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Vigan, Philippines</h2>
							<p>The historical city of Vigan in the northern Philippines is one of the most charming towns to visit in the Luzon region.
							Its culture is a fusion of Chinese and Spanish influences originating from settlers to the area.</p>
							<p><span class="btn btn-primary">View</span></p>
						</div>
					</a>
				</div>

</div>

		</div>
	</div>
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <b>Lopez,Rodralyn & Cagampang, Julie.</b> Credits From <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					
					<p class="pull-right">
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
	<!-- </div> -->

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

