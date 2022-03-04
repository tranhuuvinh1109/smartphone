<?php $totalPrice = 0; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <base href="{{asset('frontend')}}/">   
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cart | Lavoro</title>
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
								<li class="category3"><span>Shopping Cart</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- Shopping Table Container -->
		<div class="cart-area-start">
			<div class="container">
				<!-- Shopping Cart Table -->
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="cart-table">
								<thead>
									<tr>
										<th>Product</th>
										<th>Product name</th>
										<th>Unit Price</th>
										<th>Qty</th>
										<th>Subtotal</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php for($i=0;$i<$newCart->count();$i++){ 
											$totalPrice += $newCart[$i]->pro_price * $newCart[$i]->quantity;	
									?>
										<tr id="list-cart{{$newCart[$i]->pro_id}}">
											<td>
												<a href="{{asset('frontend/product/'.$newCart[$i]->pro_id)}}"><img src="../upload/admin/product/{{$newCart[$i]->pro_image}}" class="img-responsive" alt=""/></a>
											</td>
											<td>
												<h6>{{$newCart[$i]->pro_name}}</h6>
											</td>
											<td>
												<div class="cart-price">${{$newCart[$i]->pro_price}}</div>
											</td>
											<td>
												<form>
													<input type="text" name="quantity" placeholder="{{$newCart[$i]->quantity}}">
												</form>
											</td>
											<td>
												<div class="cart-subtotal">${{$newCart[$i]->pro_price * $newCart[$i]->quantity}}</div>
											</td>
											<td><a href="javascript:">Edit</a></td>
											<td><a class="remove deleteCart"  data-id="{{$newCart[$i]->pro_id}}" href="javascript:"><i class="fas fa-trash-alt"></i></a></td>
										</tr>
									<?php } ?>
									<tr>
										<td class="actions-crt" colspan="7">
											<div class="">
												<div class="col-md-4 col-sm-4 col-xs-4 align-left"><a class="cbtn" href="javascript:">Continue Shopping</a></div>
												<div class="col-md-4 col-sm-4 col-xs-4 align-center"><a class="cbtn" href="javascript:">UPDATE SHOPPING CART</a></div>
												<div class="col-md-4 col-sm-4 col-xs-4 align-right"><a class="cbtn" href="javascript:">CLEAR SHOPPING CART</a></div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Shopping Cart Table -->
				<!-- Shopping Coupon -->
				<div class="row">
					<div class="col-md-12 vendee-clue">
						<!-- Shopping Estimate -->
						<div class="shipping coupon">
							<h5>Estimate Shipping and Tax</h5>
							<p>Enter your destination to get a shipping estimate.</p>
							<form>
								<div class="shippingTitle"><p><span>*</span>Country</p></div>
								<div class="selectOption">
									<div class="selectParent">
										<select>
											<option value="">Please Select</option>
											<option value="1">Country 1</option>
											<option value="2">Country 2</option>
											<option value="1">Country 3</option>
											<option value="2">Country 4</option>
											<option value="1">Country 5</option>
											<option value="2">Country 6</option>
											<option value="1">Country 7</option>
											<option value="2">Country 8</option>
										</select>
									</div>
								</div>
								
								<div class="shippingTitle"><p>State/Province</p></div>
								<div class="selectOption">
									<div class="selectParent">
										<select>
											<option value="">Please Select</option>
											<option value="1">Region 1</option>
											<option value="2">Region 2</option>
											<option value="1">Region 3</option>
											<option value="2">Region 4</option>
											<option value="1">Region 5</option>
											<option value="2">Region 6</option>
											<option value="1">Region 7</option>
											<option value="2">Region 8</option>
										</select>
									</div>
								</div>
								
								<div class="shippingTitle"><p>Zip/Postal Code</p></div>
								<div class="selectOption">
									<input type="text">
								</div>
								<button type="submit">Get Quotes</button>
							</form>
						</div>
						<!-- Shopping Estimate -->
						<!-- Shopping Code -->
						<div class="shipping coupon hidden-sm">
							<div class=""><h5>Discount Codes</h5></div>
							<p>Enter your coupon code if you have one.</p>
							<form>
								<input type="text" class="coupon-input">
								<button class="pull-left" type="submit">APPLY COUPON</button>
							</form>
						</div>
						<!-- Shopping Code -->
						<!-- Shopping Totals -->
						<div class="shipping coupon cart-totals">
							<ul>
								<li class="cartSubT">Subtotal:    <span>${{$totalPrice}}</span></li>
								<li class="cartSubT">Grand total:    <span>${{$totalPrice}}</span></li>
							</ul>
							<a class="proceedbtn" href="javascript:">PROCEED TO CHECK OUT</a>
							<div class="multiCheckout">
								<a href="javascript:">Checkout with Multiple Addresses</a>
							</div>
						</div>
						<!-- Shopping Totals -->
					</div>
				</div>
				<!-- Shopping Coupon -->
			</div>	
		</div>
		<!-- Shopping Table Container -->
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
		</script>
		<script>
			$(document).ready(function() {
				$('.deleteCart').click(function(){
					$id = $(this).attr('data-id');
					if(confirm("Are you sure you want to delete?"))
      				{
						$.ajax({
							url: 'cart/delete/' + $id,
							type: 'GET',

						}).done(function(response) {
							console.log(response);
							$('.shopping-carts').empty();
							$('.shopping-carts').html(response);
							$('#list-cart'+$id).remove();
							alertify.success('Delete Product Successfully');
						})
					}
				})
			})
			
			
		</script>
    </body>
</html>