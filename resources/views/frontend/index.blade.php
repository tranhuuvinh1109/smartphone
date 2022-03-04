<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <base href="{{asset('frontend')}}/">   
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop</title>
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
		
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        
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
    </head>
    <body class="shop">
		<!-- header area start -->
		@include('frontend/layout/header')
		<!-- header area end -->
		<!-- category-banner area start -->
		<div class="category-banner" style="background: url(img/slider/slide-123.png)no-repeat;">
			<div class="cat-heading">
				
			</div>
		</div>
		<!-- category-banner area end -->
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
								<li class="category3"><span>Shop Grid</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- shop-with-sidebar Start -->
		<div class="shop-with-sidebar">
			<div class="container">
				<div class="row">
					<!-- left sidebar start -->
					<div class="col-md-3 col-sm-12 col-xs-12 text-left">
						<div class="topbar-left">
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
									<h2>Shop by</h2>
								</div>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Categories</h6>
								</div>
								<ul class="sidebar-tags">
                                @foreach($categorys as $item)
									<li><a href="#">{{$item->category_name}}</a></li>
                                @endforeach
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Availability</h6>
								</div>
								<ul>
									<li><a href="#">Not available</a><span> (1)</span></li>
									<li><a href="#">In stock</a><span> (2)</span></li>
								</ul>
							</aside>
							<aside class="topbarr-category sidebar-content">
								<div class="tpbr-title sidebar-title col-md-12 nopadding">
									<h6>Filter by price</h6>
								</div>
								<div class="tpbr-menu col-md-12 nopadding">
									<!-- shop-filter start -->
									<div class="price-bar">
										<div class="info_widget">
											<div class="price_filter">
												<div id="slider-range"></div>
												<div class="price_slider_amount">
													<input type="submit" class="filter-price" value="Filter"/>
													<div class="filter-ranger">
														<h6>Price:</h6>
														<input type="text" id="amount" name="price" placeholder="Add Your Price" />
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- shop-filter end -->
								</div>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Properties</h6>
								</div>
								<ul>
									<li><a href="#">Colorful Dress</a><span> (1)</span></li>
									<li><a href="#">Maxi Dress</a><span> (2)</span></li>
									<li><a href="#">Midi Dress</a><span> (2)</span></li>
									<li><a href="#">Short Dress</a><span> (2)</span></li>
									<li><a href="#">Short Sleeve</a><span> (2)</span></li>
								</ul>
							</aside>		
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
									<h2>Tags</h2>
								</div>
								<div class="exp-tags">
									<div class="tags">
										<a href="#">camera</a>
										<a href="#">mobile</a>
										<a href="#">electronic</a>
										<a href="#">destop</a>
										<a href="#">tablet</a>
										<a href="#">accessories</a>
										<a href="#">camcorder</a>
										<a href="#">laptop</a>
									</div>
								</div>
							</aside>
						</div>
					</div>
					<!-- left sidebar end -->
					<!-- right sidebar start -->
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- shop toolbar start -->
						<div class="shop-content-area">
							<div class="shop-toolbar">
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
									<form class="tree-most" method="get">
										<div class="orderby-wrapper">
											<label>Sort By</label>
											<select name="orderby" class="orderby">
												<option value="menu_order" selected="selected">Default sorting</option>
												<option value="popularity">Sort by popularity</option>
												<option value="rating">Sort by average rating</option>
												<option value="date">Sort by newness</option>
												<option value="price">Sort by price: low to high</option>
												<option value="price-desc">Sort by price: high to low</option>
											</select>
										</div>
									</form>
								</div>
								<div class="col-md-4 col-sm-4 none-xs text-center">
									<div class="limiter hidden-xs">
										<label>Show</label>
										<select>
											<option selected="selected" value="">9</option>
											<option value="">12</option>
											<option value="">24</option>
											<option value="">36</option>
										</select>
										per page        
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
									<div class="view-mode">
										<label>View on</label>
										<ul>
											<li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
											<li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- shop toolbar end -->
						<!-- product-row start -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="shop-grid-tab">
								<div class="row">
									<div class="shop-product-tab first-sale">
                                        @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="two-product">
                                                    <!-- single-product start -->
                                                    <div class="single-product">
														<?php if($product->pro_new == 1) { ?>
                                                        	<span class="sale-text">New</span>
														<?php } if($product->pro_discount > 0) { ?>
															<span class="sale-text">Sale</span>
														<?php } ?>
                                                        <div class="product-img">
                                                            <a href="{{asset('frontend/product/'.$product->pro_id)}}">
                                                                <img class="primary-image" src="../upload/admin/product/{{$product->pro_image}}" alt="" />
                                                                <img class="secondary-image" src="../upload/admin/product/{{$product->pro_image2}}" alt="" />
                                                            </a>
                                                            <div class="action-zoom">
                                                                <div class="add-to-cart">
                                                                    <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="action-buttons">
                                                                    <div class="add-to-links">
                                                                        <div class="add-to-wishlist">
                                                                            <a title="Add to Wishlist" href="javascript:" class="click-add"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                        <div class="compare-button">
																			<a class="ATC" href="javascript:" onclick="AddCart({{$product->pro_id}})" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                        </div>									
                                                                    </div>
                                                                    <div class="quickviewbtn">
                                                                        <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">${{($product->pro_price)*(100-$product->pro_discount)/100}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="{{asset('frontend/product/'.$product->pro_id)}}">{{$product->pro_name}}</a></h2>
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                </div>
                                            </div>
                                        @endforeach
									</div>
								</div>
								<!-- product-row end -->
							</div>
							<!-- list view -->
							<div class="tab-pane fade" id="shop-list-tab">
								<div class="list-view">
									<!-- single-product start -->
                                    @foreach ($products as $product)
									<div class="product-list-wrapper">
										<div class="single-product">								
											<div class="col-md-4 col-sm-4 col-xs-12">
												<?php if($product->pro_new == 1) { ?>
													<span class="sale-text">New</span>
												<?php } if($product->pro_discount > 0) { ?>
													<span class="sale-text">Sale</span>
												<?php } ?>
												<div class="product-img">
													<a href="{{asset('frontend/product/'.$product->pro_id)}}">
														<img class="primary-image" src="../upload/admin/product/{{$product->pro_image}}" alt="" />
														<img class="secondary-image" src="../upload/admin/product/{{$product->pro_image2}}" alt="" />
													</a>
												</div>								
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12">
												<div class="product-content">
													<h2 class="product-name"><a href="{{asset('frontend/product/'.$product->pro_id)}}">{{$product->pro_name}}</a></h2>
													<div class="rating-price">	
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star"></i></a>
														</div>
														<div class="price-boxes">
															<?php if($product->pro_discount > 0) { ?>
																<div class="cat-price">${{($product->pro_price)*(100-$product->pro_discount)/100}} <span class="old-price">${{$product->pro_price}}</span></div>
															<?php } else { ?>
																<div class="cat-price">${{$product->pro_price}}</div>
															<?php } ?>	
														</div>
													</div>
													<div class="product-desc">
														
													</div>
													<div class="actions-e">
														<div class="action-buttons">
															<div class="add-to-cart">
															<a class="ATC" href="javascript:" onclick="AddCart({{$product->pro_id}})" title="Add to Cart"><i class="icon-bag"></i></a>
															</div>
															<div class="add-to-links">
																<div class="add-to-wishlist">
																	<a data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																</div>
																<div class="compare-button">
																	<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																</div>									
															</div>
														</div>
													</div>										
												</div>									
											</div>
										</div>
									</div>
                                    @endforeach
									<!-- single-product end -->	
								</div>
							</div>
							<!-- shop toolbar start -->
							<div class="shop-content-bottom">
								<div class="shop-toolbar btn-tlbr">
									<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs nopadding-left text-left">
										<form class="tree-most" method="get">
											<div class="orderby-wrapper">
												<label>Sort By</label>
												<select name="orderby" class="orderby">
													<option value="menu_order" selected="selected">Default sorting</option>
													<option value="popularity">Sort by popularity</option>
													<option value="rating">Sort by average rating</option>
													<option value="date">Sort by newness</option>
													<option value="price">Sort by price: low to high</option>
													<option value="price-desc">Sort by price: high to low</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 text-center">
										<div class="pages">
											<label>Page:</label>
											<ul>
												{{$products->links()}}
											</ul>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
										<div class="view-mode">
											<label>View on</label>
											<ul>
												<li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
												<li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- shop toolbar end -->
						</div>
					</div>
					<!-- right sidebar end -->
				</div>
			</div>
		</div>
		<!-- shop-with-sidebar end -->
		<!-- Brand Logo Area Start -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="brand-carousel">
						<div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Brand Logo Area End -->
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
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
		
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
		
   		<!-- wow js
		============================================ -->       
        <script src="js/wow.js"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    url: 'add/' + $id,
                    type: 'GET',

                }).done(function(response) {
                    console.log(response);
                    $('.change_cart').empty();
                    $('.change_cart').html(response);
					$('span.cart-quantity').text($oldQuantity);
					alertify.success('Add To Cart Successfully');
                })
            }
			function DeleteCart($id)
            {
				$.ajax({
                    url: 'delete/' + $id,
                    type: 'GET',

                }).done(function(response) {
                    console.log(response);
                    $('.change_cart').empty();
                    $('.change_cart').html(response);
					alertify.success('Delete Product Successfully');
                })
            }
        </script>
		<script>
			$(document).ready(function(){
				$('a.deleteCart').click(function(){
					alert(12);
					$oldQuantity = parseInt($('span.cart-quantity').html());
					$temp = parseInt($(this).closest('.small-cart-detail').find('strong.fff').html());
					$oldQuantity -= $temp;
					$('span.cart-quantity').text($oldQuantity);
				})
			})
		</script>
    </body>
</html>