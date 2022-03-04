<!DOCTYPE html>
<html>
    <head>
        <base href="{{asset('frontend')}}/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Profile</title>
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
								<li class="category3"><span>My account</span></li>
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
							<form method="post" class="login" enctype="multipart/form-data">
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
									<h2>My Profile</h2>
									<p class="form-row form-row-wide">
										<label for="username">UserName</label></label>
										<input type="text" class="input-text" name="username" id="username" value="{{Auth::user()->username}}">
									</p>
                                    <p class="form-row form-row-wide">
										<label for="email">Email address</label>
										<input type="text" class="input-text" name="email" id="email" value="{{Auth::user()->email}}">
									</p>
                                    <p class="form-row form-row-wide">
										<label for="phone">Phone</label>
										<input type="text" class="input-text" name="phone" id="phone" value="{{Auth::user()->phone}}">
									</p>
                                    <p class="form-row form-row-wide">
                                        <label for="country">Country</label>
										<div class="col-lg-12">
                                            <select class="form-control" id="country" name="country">
                                                
                                                <option>Select Country</option>
                                                
                                                @foreach ($countries as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == Auth::user()->country ? 'selected' : '' }}> {{ $item->name_country }}</option>
                                                @endforeach    
                                                
                                            </select>
                                        </div>
									</p>
                                    <p class="form-row form-row-wide">
                                        <label for="avatar">Avatar</label>
                                        <input type="file" class="input-text" name="avatar" id="avatar">
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <div class="col-lg-6">
                                            <img src="../upload/user/avatar/{{Auth::user()->avatar}}" id="img" alt="">
                                        </div>
                                    </p>
								</div>
								<div class="form-action">
									<div class="actions-log">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
                                    <div class="actions-log">
										<a href="{{asset('frontend/home')}}" class="btn">Back</a>
									</div>
									
								</div>
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
		
		<!-- JavaScript -->
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
        <script src="js/main.js"></script>
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