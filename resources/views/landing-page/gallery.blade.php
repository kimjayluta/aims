<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A business that is mainly located at Naga City, that supplies Agri-Industrial machineries and equipment to regions around the Philippines.">

	<!-- title -->
	<title>AIMS AGRI VENTURES, INC.</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="img/aims-agri-ventures-transparent.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>
	<!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-right">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo text-left">
							<a href="{{ secure_url('/') }}">
								<img src="img/aims-agri-ventures-transparent.png" alt="AIMS Logo" height="60px" width="60px">
								<span style="color: #ffffff; padding: 15px; font-size: 20px;"><b>AIMS AGRI VENTURES, INC.</b></span>
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li>
									<a href="{{ secure_url('/') }}">
										Home
									</a>
								</li>
								
								<li class="current-list-item">
									<a href="{{ secure_url('gallery') }}">
										Gallery
									</a>
								</li>

								<li>
									<a href="{{ secure_url('about') }}">
										About us
									</a>
								</li>

								<li>
									<a href="{{ secure_url('contact') }}">
										Contact us
									</a>
								</li>

								{{-- <li>
									<a href="{{ secure_url('login') }}">
										Login
									</a>
								</li> --}}
								
								<li>
									<div class="header-icons">
										{{-- <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> --}}
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Lorem ipsum dolor sit.</p>
						<h1>Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="product-filters">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".strawberry">Strawberry</li>
							<li data-filter=".berry">Berry</li>
							<li data-filter=".lemon">Lemon</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ secure_url('product') }}"><img src="../public/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="{{ secure_url('product') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Detials</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ secure_url('product') }}"><img src="../public/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="{{ secure_url('product') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Detials</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ secure_url('product') }}"><img src="../public/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="{{ secure_url('product') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Detials</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ secure_url('product') }}"><img src="../public/img/products/product-img-4.jpg" alt=""></a>
						</div>
						<h3>Avocado</h3>
						<p class="product-price"><span>Per Kg</span> 50$ </p>
						<a href="{{ secure_url('product') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Detials</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ secure_url('product') }}"><img src="../public/img/products/product-img-5.jpg" alt=""></a>
						</div>
						<h3>Green Apple</h3>
						<p class="product-price"><span>Per Kg</span> 45$ </p>
						<a href="{{ secure_url('product') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Detials</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ secure_url('product') }}"><img src="../public/img/products/product-img-6.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 80$ </p>
						<a href="{{ secure_url('product') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Detials</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->
	
	<!-- footer -->
	<div class="footer-area" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>A business that is mainly located at Naga City, that supplies Agri-Industrial machineries and equipment to regions around the Philippines.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Zone 7, San Rafael Cararayan, Naga City.</li>
							<li>aavi.staff@gmail.com</li>
							<li>09190074169</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					{{-- <div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div> --}}
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; {{ date('Y') }} - <a href="https://www.facebook.com/aimsagriventures/">AIMS Agri Ventures, Inc.</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="js/sticker.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>

</body>
</html>