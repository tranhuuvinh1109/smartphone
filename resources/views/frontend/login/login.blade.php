<!DOCTYPE html>
<html>
    <head>
        <base href="{{asset('frontend')}}/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
        @include('frontend/layout/header')
		<!-- header area end -->
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
								<li class="category3"><span>Login</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- account-details Area Start -->
		<div class="customer-login-area">
			<div class="container">
				<div class="row">
                    <div class="col-md-3 col-xs-12">

                    </div>
					<div class="col-md-6 col-xs-12">
						<div class="customer-login my-account">
							<form method="post" class="login">
                                @csrf
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                                        <h4>
                                            <i class="icon fa fa-check"></i>Thông báo!
                                        </h4>
                                        {{session('success')}}
                                    </div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                                        <h4>
                                            <i class="icon fa fa-check"></i>Thông báo!
                                        </h4>
                                        {{session('error')}}

                                    </div>
                                @endif
								<div class="form-fields">
									<h2>Login</h2>
									<p class="form-row form-row-wide">
										<label for="username">Email address <span class="required">*</span></label>
										<input type="text" class="input-text" name="email" id="username" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password">
									</p>
								</div>
								<div class="form-action">
									<p class="lost_password"> <a href="javascipt:">Lost your password?</a></p>
									<div class="actions-log">
										<input type="submit" class="button" name="login" value="Login">
									</div>
                                    <label for="rememberme" class="inline"> 
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
									
								</div>
                                <p>Don't Have an Account ?<a href="{{asset('frontend/register')}}" style="color:#f0bcb4;padding:0 10px;">Create an account</a></p>
							</form>
						</div>
					</div>
                    <div class="col-md-3 col-xs-12">

                    </div>
				</div>
			</div>
		</div>
		<!-- account-details Area end -->
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
		
		<!-- gmap js
		============================================ -->       
        <script src="js/gmap.js"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="js/main.js"></script>
    </body>
</html>