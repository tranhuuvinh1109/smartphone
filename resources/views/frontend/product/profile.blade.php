<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <base href="{{asset('frontend')}}/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Product Details</title>
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
		
		<!-- meanmenu CSS
		============================================ -->		
        <link rel="stylesheet" href="css/meanmenu.min.css">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="fonts/font-icon.css">
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="css/animate.css">
        
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
	<style>
		/* rating */
		.rating-css div {
			color: #ffe400;
			font-size: 30px;
			font-family: sans-serif;
			font-weight: 800;
			text-align: center;
			text-transform: uppercase;
			padding: 20px 0;
		}
		.rating-css input {
			display: none;
		}
		.rating-css input + label {
			font-size: 60px;
			text-shadow: 1px 1px 0 #8f8420;
			cursor: pointer;
		}
		.rating-css input:checked + label ~ label {
			color: #b4afaf;
		}
		.rating-css label:active {
			transform: scale(0.8);
			transition: 0.3s ease;
		}
	</style>
    <body class="s-prodct">
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
								<li class="category3"><span>Product</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- product-details Area Start -->
		<div class="product-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="zoomWrapper">
							<div id="img-1" class="zoomWrapper single-zoom">
								<a href="javascript:">
									<img id="zoom1" src="../upload/admin/product/{{$profile[0]->pro_image}}" data-zoom-image="img/test.jpg" alt="big-1">
								</a>
							</div>
							<div class="single-zoom-thumb">
								<ul class="bxslider" id="gallery_01">
									<li>
										<a href="javascript:" class="elevatezoom-gallery_1 active" data-update="" data-image="img/product-details/big-1-1.jpg" data-zoom-image="img/product-details/ex-big-1-1.jpg"><img src="https://cf.shopee.vn/file/b107f2e6167adb250100ec4c8d028a57" alt="zo-th-1" /></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-1-2.jpg" data-zoom-image="img/product-details/ex-big-1-2.jpg"><img src="img/product-details/th-1-2.jpg" alt="zo-th-2"></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-1-3.jpg" data-zoom-image="img/product-details/ex-big-1-3.jpg"><img src="img/product-details/th-1-3.jpg" alt="ex-big-3" /></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-4.jpg" data-zoom-image="img/product-details/ex-big-4.jpg"><img src="img/product-details/th-4.jpg" alt="zo-th-4"></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-5.jpg" data-zoom-image="img/product-details/ex-big-5.jpg"><img src="img/product-details/th-5.jpg" alt="zo-th-5" /></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-6.jpg" data-zoom-image="img/product-details/ex-big-6.jpg"><img src="img/product-details/th-6.jpg" alt="ex-big-3" /></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-7.jpg" data-zoom-image="img/product-details/ex-big-7.jpg"><img src="img/product-details/th-7.jpg" alt="ex-big-3" /></a>
									</li>
									<li class="">
										<a href="javascript:" class="elevatezoom-gallery" data-image="img/product-details/big-8.jpg" data-zoom-image="img/product-details/ex-big-8.jpg"><img src="img/product-details/th-8.jpg" alt="ex-big-3" /></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<div class="product-list-wrapper">
							<div class="single-product">
								<div class="product-content">
									<h2 class="product-name"><a href="javascript:">{{$profile[0]->pro_name}}</a></h2>
									<div class="rating-price">	
										<div class="pro-rating">
											<?php for($i=0;$i<$k;$i++){ ?>
												<a href="javascript:"><i class="fa fa-star"></i></a>
											<?php } ?>
										</div>
										<div class="price-boxes">
											<?php if($profile[0]->pro_discount > 0) { ?>
												<div class="cat-price">${{($profile[0]->pro_price)*(100-$profile[0]->pro_discount)/100}} <span class="old-price">${{$profile[0]->pro_price}}</span></div>
											<?php } else { ?>
												<div class="cat-price">${{$profile[0]->pro_price}}</div>
											<?php } ?>	
										</div>
									</div>
									<div class="product-desc">
										<p>{{$profile[0]->pro_description}}</p>
									</div>
									<p class="availability in-stock">Availability: <span>In stock</span></p>
									<div class="actions-e">
										<div class="action-buttons-single">
											<div class="inputx-content">
												<label for="qty">Quantity:</label>
												<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
											</div>
											<div class="add-to-cart">
												<?php if(Auth::check()){ ?>
													<a class="ATC" href="javascript:" onclick="AddCart({{$profile[0]->pro_id}})" title="Add to Cart"><i class="icon-bag"></i></a>
												<?php }else{ ?>
													<a class="ATC" href="javascript:" onclick="AlertLogin()" title="Add to Cart"><i class="icon-bag"></i></a>
												<?php } ?>
											</div>
											<div class="add-to-links">
												<div class="add-to-wishlist">
													<a href="javascript:" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
												</div>
												<div class="compare-button">
													<a href="javascript:" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
												</div>									
											</div>
										</div>
									</div>
									<div class="singl-share">
                                        <a href="javascript:"><img src="img/single-share.png" alt=""></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="single-product-tab">
						  <!-- Nav tabs -->
						<ul class="details-tab">
							<li class="active"><a href="#messages" data-toggle="tab"> Review </a></li>
							<li class=""><a href="#home" data-toggle="tab">Description</a></li>
						</ul>
						  <!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane" id="home">
								<div class="product-tab-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
									<p>Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>	
								</div>
							</div>
							<div role="tabpanel" class="tab-pane active" id="messages">
								<div class="single-post-comments col-md-6 col-md-offset-3">
									<div class="comments-area">
										<h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
										<div class="comments-list">
											<ul>
												@foreach ($rates as $rate)
												<li>
													<div class="comments-details">
														<div class="comments-list-img">
															<img style="width:50px; height:50px;" src="../upload/user/avatar/{{$rate->avatar}}" alt="">
														</div>
														<div class="comments-content-wrap">
															<span>
																<b><a href="javascript:">{{$rate->email_user}}</a></b>
															</span>
															<p>{{$rate->content}}</p>
														</div>
													</div>
												</li>	
												@endforeach								
											</ul>
										</div>
									</div>
									<div class="comment-respond">
										<h3 class="comment-reply-title">Add a review</h3>
										<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
										<form action="" method="post">
											@csrf
											<div class="row">
												<?php if (Auth::check()){ ?>
													<input type="hidden" name="id_user" value="{{Auth::id()}}">
													<input type="hidden" name="email_user" value="{{Auth::user()->email}}">
													<input type="hidden" name="id_product" value="{{$profile[0]->pro_id}}">
												<?php }?>
												<div class="col-md-12">
													<p>Your Rating</p>
													<div class="pro-rating">
														<div class="rating-css">
															<div class="star-icon">
																<input type="radio" value="1" name="rating" checked id="rating1">
																<label for="rating1" class="fa fa-star"></label>
																<input type="radio" value="2" name="rating" id="rating2">
																<label for="rating2" class="fa fa-star"></label>
																<input type="radio" value="3" name="rating" id="rating3">
																<label for="rating3" class="fa fa-star"></label>
																<input type="radio" value="4" name="rating" id="rating4">
																<label for="rating4" class="fa fa-star"></label>
																<input type="radio" value="5" name="rating" id="rating5">
																<label for="rating5" class="fa fa-star"></label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 comment-form-comment">
													<p>Your Review</p>
													<textarea id="message" name="content" cols="30" rows="10"></textarea>
													<input type="submit" value="Submit">
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
		<!-- product-details Area end -->
		
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
		
		<!-- jquery.meanmenu js
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
			function AlertLogin(){
				alertify.error('Please login to add products to cart');
			}
        </script>
    </body>
</html>