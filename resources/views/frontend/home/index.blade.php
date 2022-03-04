<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <base href="{{asset('frontend')}}/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home </title>
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
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />
        
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
    <body class="home-four">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		@include('frontend/layout/header')
		<!-- header area end -->
		<!-- main area start -->
		<div class="main-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- category menu start -->
						<div class="left-category-menu">
							<div class="left-product-cat">
								<div class="category-heading">
									<h2>category</h2>
								</div>
								<!-- category-menu-list start -->
								<div class="category-menu-list" style="display: block;">
									<ul>
										@foreach($categorys as $item)
										<li><a href="shop-gird.html">{{$item->category_name}}<i class="fa fa-angle-right"></i></a>
											<!-- cat-left mega menu start -->
											<div class="cat-left-drop-menu big-ldrop">
												<div class="cat-left-drop-menu-left sub-drop">
													<a class="menu-item-heading" href="shop-gird.html">New</a>
													
													<a class="menu-item-heading" href="shop-gird.html">Smartphone</a>
													<ul>
														<li><a href="shop-gird.html">Flagship</a></li>
														<li><a href="shop-gird.html">Hotsale</a></li>
													</ul>	
												</div>
												<div class="cat-left-drop-menu-left sub-drop">
													<a class="menu-item-heading" href="shop-gird.html"><img src="img/block_menu.jpg" alt="" /></a>														
												</div>
											</div>
											<!-- cat-left mega menu end -->
										</li>
										@endforeach
										
									</ul>
								</div>
								<!-- category-menu-list end -->
							</div>
						</div>
						<!-- category menu end -->
						<!-- block category area start -->
						<div class="block-category side-area">
							<!-- featured block start -->
							<!-- block title start -->
							<div class="bar-title">
								<div class="bar-ping"><img src="img/bar-ping.png" alt="" /></div>
								<h2>Featureds</h2>
							</div>
							<!-- block title end -->
							<!-- block carousel start -->
							<div class="block-carousel">
								<div class="block-content">
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/left1.webp" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Xiaomi Pad 5</a></h3>
											<div class="cat-price">9790000</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/left2.webp" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">AirPods 2</a></h3>
											<div class="cat-price">$200.00 <span class="old-price">$211.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/left3.webp" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Redmi Watch 2 Lite</a></h3>
											<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/left5.webp" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Apple 20W Type-C </a></h3>
											<div class="cat-price">$25.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
								</div>
								<div class="block-content">
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Voluptas nulla</a></h3>
											<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Cras neque metus</a></h3>
											<div class="cat-price">$235.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-8.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Primis in faucibus</a></h3>
											<div class="cat-price">$205.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
											<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
								</div>
								<div class="block-content">
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-5.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
											<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-6.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Accumsan elit</a></h3>
											<div class="cat-price">$165.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Pellentesque habitant</a></h3>
											<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Donec non est</a></h3>
											<div class="cat-price">$560.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
								</div>
							</div>
							<!-- block carousel end -->
						</div>
						<!-- block category area end -->
						<!-- aboutthumb area start -->
						<div class="aboutthumb-area">
							<!-- block title start -->
							<div class="bar-title rox-title">
								<div class="bar-ping"><img src="img/bar-ping.png" alt="" /></div>
								<h2>About Us</h2>
							</div>
							<!-- block title end -->
							<div class="all-singlepost">
								<!-- single latestpost start -->
								<div class="single-post">
									<div class="about-thumb">
										<a href="#">
											<img src="img/about-us-img.jfif" alt="" />
										</a>
									</div>
									<div class="post-thumb-info">
										<div class="postexcerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.</p>
										</div>
									</div>
								</div>
								<!-- single latestpost end -->
							</div>
						</div>
						<!-- aboutthumb area end -->
						<!-- on sale area start -->
						<div class="onsale-area">
							<!-- block title start -->
							<div class="bar-title rox-title">
								<div class="bar-ping"><img src="img/bar-ping.png" alt="" /></div>
								<h2>On sales</h2>
							</div>
							<!-- block title end -->
							<div class="block-carousel">
									<div class="single-product ex-pro">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="../upload/admin/product/" alt="" />
												<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
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
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$200.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/products/product-5.jpg" alt="" />
											<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
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
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$300.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/products/product-9.jpg" alt="" />
											<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
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
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$270.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/products/product-13.jpg" alt="" />
											<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
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
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$340.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<span class="sale-text">Sale</span>
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/products/product-4.jpg" alt="" />
											<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
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
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$360.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>
						</div>
						<!-- on sale area end -->
						<!-- latestpost area start -->
						<div class="latest-post-area">
							<!-- block title start -->
							<div class="bar-title rox-title">
								<div class="bar-ping"><img src="img/bar-ping.png" alt="" /></div>
								<h2>Latest post</h2>
							</div>
							<!-- block title end -->
							<div class="row">
								<div class="all-singlepost">
									<div class="block-carousel">
										<!-- single latestpost start -->
										<div class="col-md-12">
											<div class="single-post">
												<div class="post-thumb">
													<a href="#">
														<img src="img/CUP.jpg" alt="" />
													</a>
												</div>
												<div class="post-thumb-info">
													<div class="post-time">
														<a href="#">Beauty</a>
														<span>/</span>
														<span>Post by</span>
														<span>BootExperts</span>
													</div>
													<div class="postexcerpt">
														<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas...</p>
														<a href="#" class="read-more">Read more</a>
													</div>
												</div>
											</div>
										</div>
										<!-- single latestpost end -->
										<!-- single latestpost start -->
										<div class="col-md-12">
											<div class="single-post">
												<div class="post-thumb">
													<a href="#">
														<img src="img/post/post-2.jpg" alt="" />
													</a>
												</div>
												<div class="post-thumb-info">
													<div class="post-time">
														<a href="#">Fashion</a>
														<span>/</span>
														<span>Post by</span>
														<span>BootExperts</span>
													</div>
													<div class="postexcerpt">
														<p>Fusce ac odio odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus...</p>
														<a href="#" class="read-more">Read more</a>
													</div>
												</div>
											</div>
										</div>
										<!-- single latestpost end -->
										<!-- single latestpost start -->
										<div class="col-md-12">
											<div class="single-post">
												<div class="post-thumb">
													<a href="#">
														<img src="img/post/post-3.jpg" alt="" />
													</a>
												</div>
												<div class="post-thumb-info">
													<div class="post-time">
														<a href="#">Brunch Network</a>
														<span>/</span>
														<span>Post by</span>
														<span>BootExperts</span>
													</div>
													<div class="postexcerpt">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
														<a href="#" class="read-more">Read more</a>
													</div>
												</div>
											</div>
										</div>
										<!-- single latestpost end -->
									</div>
								</div>
							</div>
						</div>
						<!-- latestpost area end -->
					</div>
					<div class="col-md-9">
						<!-- start home slider -->
						<div class="slider-area hm-1">
							 <!-- slider -->
							<div class="bend niceties preview-2">
								<div id="ensign-nivoslider-2" class="slides">	
									<img src="img/slider/slide_show2.webp" alt="" title="#slider-direction-1"  />
									<img src="img/slider/slide_show3.jpg" alt="" title="#slider-direction-2"  />
								</div>
								<!-- direction 1 -->
								<div id="slider-direction-1" class="t-cn slider-direction">
									<div class="slider-progress"></div>
								</div>
								<!-- direction 2 -->
								<div id="slider-direction-2" class="slider-direction">
									<div class="slider-progress"></div>	
								</div>
							</div>
							<!-- slider end-->
						</div>
						<!-- end home slider -->
						<!-- unit banner area start -->
						<div class="unit-banner-area">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="img/PR1.webp" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
								<div class="col-md-4 col-sm-4 hidden-xs">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="img/PR2.jpg" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="img/PR3.webp" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
							</div>
						</div>
						<!-- unit banner area end -->
						<!-- product section start -->
						<div class="our-product-area new-product">
							<div class="area-title">
								<h2>New products</h2>
							</div>
							<!-- our-product area start -->
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="featuresthree-curosel">
											<!-- single-product start -->
											@foreach ($products as $product)
											<?php if ($product->pro_new == 1){ ?>
											<div class="col-lg-12 col-md-12">
												<div class="single-product ex-pro">
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
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">${{$product->pro_price}}</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">{{$product->pro_name}}</a></h2>
													</div>
												</div>
											</div>
											<?php } ?>
										
											@endforeach
										</div>
									</div>	
								</div>
							</div>
							<!-- our-product area end -->
						</div>
						<!-- product section end -->
						<!-- banner-area start -->
						<div class="banner-area">
							<a href=""><img src="img/banner_show.webp" alt="" /></a>
						</div>
						<!-- banner-area end -->
						<!-- product section start -->
						<div class="our-product-area">
							<!-- area title start -->
							<div class="area-title">
								<h2>Our products</h2>
							</div>
							<!-- area title end -->
							<!-- our-product area start -->
							<div class="row">
								<div class="col-md-12">
									<div class="features-tab">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a></li>
											<li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
										</ul>
										<!-- Tab panes -->
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="home">
												<div class="row">
													<div class="featuresthree-curosel">
														@foreach ($products as $product)
														<?php if ($product->pro_new == 0){ ?>
															<div class="col-lg-12 col-md-12">
																<!-- single-product end -->
																<!-- single-product start -->
																<div class="single-product first-sale">
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
																						<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																					</div>
																					<div class="compare-button">
																						<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																					</div>									
																				</div>
																				<div class="quickviewbtn">
																					<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="price-box">
																			<span class="new-price">${{$product->pro_price}}</span>
																		</div>
																	</div>
																	<div class="product-content">
																		<h2 class="product-name"><a href="#">{{$product->pro_name}}</a></h2>
																	</div>
																</div>
																<!-- single-product end -->
															</div>
														<?php } ?>
														@endforeach
														<!-- single-product end -->
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="profile">
												<div class="row">
													<div class="featuresthree-curosel">
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$110.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$300.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec non est</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$200.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-13.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$250.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-8.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$370.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-10.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$170.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-13.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$450.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-2.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-3.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$300.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Consequences</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-4.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$350.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-6.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-7.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$250.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-9.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$180.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$310.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-5.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$450.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="img/products/product-7.jpg" alt="" />
																		<img class="secondary-image" src="img/products/product-8.jpg" alt="" />
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
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$178.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec non est</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>				
								</div>
							</div>
							<!-- our-product area end -->
						</div>
						<!-- product section end -->
						<!-- Brand Logo Area Start -->
						<div class="brand-area">
							<div class="banner-extension">
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
						<!-- Brand Logo Area End -->
					</div>
				</div>
			</div>
		</div>
		<!-- main area start -->
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
		
		<!-- Nivo slider js
		============================================ --> 		
		<script src="custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="custom-slider/home.js" type="text/javascript"></script>
        
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
    </body>
</html>