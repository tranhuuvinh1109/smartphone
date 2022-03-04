<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <base href="{{asset('frontend')}}/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.theme.css">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.transitions.css">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="fonts/font-icon.css">
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="css/animate.css">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="css/normalize.css">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="css/main.css">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="style.css">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="css/responsive.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>
		@include('frontend/layout/header')
		<!-- breadcrumbs area start -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="{{asset('frontend/home')}}">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>About</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- hello about start -->
		<div class="home-hello-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="f-title text-center">
							<h3 class="title text-uppercase">About Us</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="about-page-cntent">
							<h3>The standard lorem ipsum passage</h3>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
							<blockquote>
								<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
							</blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
						</div>
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12">
						<div class="img-element">
							<img src="img/CUP.jpg" alt="banner1">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- hello about end -->
		<!-- service about start -->
		<div class="our-services-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="f-title text-center">
							<h3 class="title text-headss">Our services</h3>
						</div>
					</div>
				</div><!-- End .row -->
				<div class="row text-center">
					<div class="our-services-inner">
						<div class="col-sm-4">
							<div class="single-service">
								<p><i class="fa fa-star"></i></p>
								<h4>Branding</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							</div><!-- End .single-service -->
						</div><!-- End .col-sm-4 -->
						<div class="col-sm-4">
							<div class="single-service">
								<p><i class="fa fa-heart"></i></p>
								<h4>Awesome Design</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							</div><!-- End .single-service -->
						</div><!-- End .col-sm-4 -->
						<div class="col-sm-4">
							<div class="single-service">
								<p><i class="fa fa-camera-retro"></i></p>
								<h4>Photography</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							</div><!-- End .single-service -->
						</div><!-- End .col-sm-4 -->
					</div>
					<div class="clearfix"></div>
					<div class="our-services-inner">
						<div class="col-sm-4">
							<div class="single-service">
								<p><i class="fa fa-cog"></i></p>
								<h4>Reponsive</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							</div><!-- End .single-service -->
						</div><!-- End .col-sm-4 -->
						<div class="col-sm-4">
							<div class="single-service">
								<p><i class="fa fa-eye"></i></p>
								<h4>Retina ready</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							</div><!-- End .single-service -->
						</div><!-- End .col-sm-4 -->
						<div class="col-sm-4">
							<div class="single-service">
								<p><i class="fa fa-comments-o"></i></p>
								<h4>Online Support</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							</div><!-- End .single-service -->
						</div><!-- End .col-sm-4 -->
					</div><!-- End .our-services-inner -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div>
		<!-- service about end -->
		<!-- meet about start -->
		<div class="home-our-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="f-title text-center">
							<h3 class="title text-uppercase">Meet the team</h3>
						</div>
					</div><!-- End .col-md-12 -->
				</div><!-- End .row -->
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="item-team text-center">
							<div class="team-info">
								<div class="team-img">
									<img src="img/avt.jpg" class="img-responsive" alt="team1" height="250" width="250">
									<div class="mask">
										<div class="mask-inner">
											<a href="https://www.facebook.com/vinhxautrai.1109/"><i class="fa fa-facebook"></i></a>
											<a><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
							</div>
							<h4>Tran Huu Vinh</h4>
							<h5>Developer</h5>
						</div><!-- End .item-team -->
					</div><!-- End .col-sm-3 -->
					<div class="col-md-3 col-sm-4">
						<div class="item-team text-center">
							<div class="team-info">
								<div class="team-img">
									<img src="img/avt.jpg" class="img-responsive" alt="team2" height="250" width="250">
									<div class="mask">
										<div class="mask-inner">
											<a href="javascript:"><i class="fa fa-facebook"></i></a>
											<a href="javascript:"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
							</div>
							<h4>Tran Huu Vinh</h4>
							<h5>Programmer</h5>
						</div><!-- End .item-team -->
					</div><!-- End .col-sm-3 -->
					<div class="col-md-3 col-sm-4">
						<div class="item-team text-center">
							<div class="team-info">
								<div class="team-img">
									<img src="img/avt.jpg" class="img-responsive" alt="team3" height="250" width="250">
									<div class="mask">
										<div class="mask-inner">
											<a href="javascript:"><i class="fa fa-facebook"></i></a>
											<a href="javascript:"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
							</div>
							<h4>Tran Huu Vinh</h4>
							<h5>Designer</h5>
						</div><!-- End .item-team -->
					</div><!-- End .col-sm-3 -->
					<div class="col-md-3 hidden-sm">
						<div class="item-team text-center">
							<div class="team-info">
								<div class="team-img">
									<img src="img/avt.jpg" class="img-responsive" alt="team4" height="250" width="250">
									<div class="mask">
										<div class="mask-inner">
											<a href="javascript:"><i class="fa fa-facebook"></i></a>
											<a href="javascript:"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
							</div>
							<h4>Tran Huu Vinh</h4>
							<h5>PHP Developer</h5>
						</div><!-- End .item-team -->
					</div><!-- End .col-sm-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div>
		<!-- meet about end -->
		<!-- FOOTER START -->
		@include('frontend/layout/footer')
		<!-- FOOTER END -->
		
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="js/bootstrap.min.js"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="js/owl.carousel.min.js"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="js/price-slider.js"></script>
		
		<!-- elevateZoom js 
		============================================ -->
		<script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="js/jquery.bxslider.min.js"></script>
		
		<!-- mobile menu js
		============================================ -->  
		<script src="js/jquery.meanmenu.js"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        
   		<!-- wow js
		============================================ -->       
        <script src="js/wow.js"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="js/main.js"></script>
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
		<script>
            function AddCart($id)
            {
                $oldQuantity = parseInt($('span.cart-quantity').html());
				$oldQuantity++;
                $.ajax({
                    url: 'cart/add/' + $id,
                    type: 'GET',

                }).done(function(response) {
                    console.log(response);
                    $('.shopping-carts').empty();
                    $('.shopping-carts').html(response);
					$('span.cart-quantity').text($oldQuantity);
					alertify.success('Add To Cart Successfully');
                })
            }
			function DeleteCart($id)
            {
				$.ajax({
                    url: 'cart/delete/' + $id,
                    type: 'GET',

                }).done(function(response) {
                    console.log(response);
                    $('.shopping-carts').empty();
                    $('.shopping-carts').html(response);
					alertify.success('Delete Product Successfully');
                })
            }
        </script>
    </body>
</html>