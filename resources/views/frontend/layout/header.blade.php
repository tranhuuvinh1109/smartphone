<!-- header area start -->
<header class="header-four">
    <div class="container">
        <div class="row">
            <!-- language division start -->
            <div class="col-md-4 text-left">
                <div class="top-detail">
                    <!-- language division start -->
                    <div class="disflow">
                        <div class="expand lang-all disflow">
                            <a href="javascript:"><img src="img/country/en.gif" alt="">English</a>
                            <ul class="restrain language">
                                <li><a href="javascript:"><img src="img/country/it.gif" alt="">Italiano</a></li>
                                <li><a href="javascript:"><img src="img/country/nl_nl.gif" alt="">Nederlands</a></li>
                                <li><a href="javascript:"><img src="img/country/de_de.gif" alt="">Deutsch</a></li>
                                <li><a href="javascript:"><img src="img/country/en.gif" alt="">English</a></li>
                            </ul>
                        </div>
                        <div class="expand lang-all disflow">
                            <a href="javascript:">$ USD</a>
                            <ul class="restrain language">
                                <li><a href="javascript:">€ Eur</a></li>
                                <li><a href="javascript:">$ USD</a></li>
                                <li><a href="javascript:">£ GBP</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- language division end -->
                </div>
                <!-- language division end -->
            </div>
            <!-- logo start -->
            <div class="col-md-4 text-center">
                <div class="top-logo">
                    <a href="{{asset('frontend/home')}}"><img src="img/logo.gif" alt="" /></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- top details area start -->
            <div class="col-md-4 text-right">
                <div class="top-detail dflt-src">
                    <!-- search divition start -->
                    <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="128" placeholder="Search product...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <!-- mainmenu area start -->
                <div class="col-md-6 nop-xs text-center">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li class="expand"><a href="{{asset('frontend/home')}}">Home</a>									
                                </li>
                                <li class="expand"><a href="{{asset('frontend/product/new')}}">New</a>
                                </li>
                                <li class="expand"><a href="{{asset('frontend/product/sale')}}">Sale</a>
                                </li>
                                <li class="expand"><a href="{{asset('frontend/error')}}">Pages</a>
                                    <ul class="restrain sub-menu">
                                        <li><a>Shop Grid</a></li>
                                        <li><a>Shop List</a></li>
                                        <li><a>Shopping cart</a></li>
                                        <li><a>Wishlist</a></li>
                                        <li><a href="{{asset('frontend/error')}}">404 Error</a></li>
                                    </ul>									
                                </li>
                                <li class="expand"><a href="{{asset('frontend/home/about')}}">About</a></li>
                                <li class="expand"><a href="{{asset('admin/home')}}" title="Chỉ có Manager mới được vào trang này">Manager Pages</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="row">
                        <div class="col-sm-12 mobile-menu-area">
                            <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                                <span class="mobile-menu-title">Menu</span>
                                <nav>
                                    <ul>
                                        <li><a href="{{asset('frontend/home')}}">Home</a>
                                        </li>
                                        <li><a>Pages</a>
                                            <ul>
                                                <li><a href="javascript:">Wishlist</a></li>
                                                <?php if (Auth::check()){ ?>
                                                    <li><a href="{{asset('frontend/logout')}}">Logout</a></li>
                                                <?php } else { ?>
                                                    <li><a href="{{asset('frontend/login')}}">Login</a></li>
                                                <?php } ?>
                                                <li><a href="{{asset('frontend/error')}}">404 Error</a></li>
                                            </ul>													
                                        </li>
                                        <li><a href="{{asset('frontend/product/new')}}">New</a>
                                        </li>
                                        <li><a href="{{asset('frontend/product/sale')}}">Sale</a>
                                        </li>
                                        <li><a href="{{asset('frontend/home/about')}}">About Us</a></li>
                                        <li><a href="{{asset('frontend/error')}}">Contact Us</a></li>
                                        <li><a href="{{asset('admin/home')}}" title="Chỉ có Manager mơí vào được trang này">Manager Pages</a></li>
                                    </ul>
                                </nav>
                            </div>						
                        </div>
                    </div>
                    <!-- mobile menu end -->
                </div>
                <!-- mainmenu area end -->
                <div class="col-md-6 text-right">
                    <div class="top-detail">
                        <!-- addcart top start -->
                        <div class="disflow crt-edt">
                            <div class="circle-shopping expand">
                                <div class="shopping-carts text-right">
                                    <div class="cart-toggler">
                                        <a href="javascript:"><i class="icon-bag"></i></a>
                                        <a href="javascript:">
                                            <?php if (Auth::check()){ ?>
                                                <span class="cart-quantity">{{$sum}}</span>
                                            <?php } else { ?>
                                                <span class="cart-quantity">0</span>
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="restrain small-cart-content">
                                        <div class="change_cart">
                                            <ul class="cart-list">
                                                <?php 
                                                    $totalPrice = 0;
                                                    if(Auth::check()){
                                                        for($i=0;$i<$newCart->count();$i++){ 
                                                            $totalPrice = $totalPrice + $newCart[$i]->quantity * $newCart[$i]->pro_price;
                                                ?>
                                                            <li>
                                                                <a class="sm-cart-product" href="{{asset('frontend/product/'.$newCart[$i]->pro_id)}}">
                                                                    <img src="../upload/admin/product/{{$newCart[$i]->pro_image}}" alt="">
                                                                </a>
                                                                <div class="small-cart-detail">
                                                                    <a class="remove deleteCart" onclick="DeleteCart({{$newCart[$i]->pro_id}})" data-id="{{$newCart[$i]->pro_id}}" href="javascript:"><i class="fa fa-times-circle"></i></a>
                                                                    <a href="javascript:" class="edit-btn"><img src="img/btn_edit.gif" alt="Edit Button" /></a>
                                                                    <a class="small-cart-name" href="{{asset('frontend/product/'.$newCart[$i]->pro_id)}}">{{$newCart[$i]->pro_name}}</a>
                                                                    <span class="quantitys"><strong class="fff">{{$newCart[$i]->quantity}}</strong>x<span>${{$newCart[$i]->pro_price}}</span></span>
                                                                </div>
                                                            </li>
                                                <?php }}else{ 
                                                ?>
                                                <li>
                                                    <img src="https://farm3t.com.vn/Content/images/empty-cart.png" alt="">
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <p class="total">Subtotal: <span class="amount">${{$totalPrice}}</span></p>
                                            <p class="buttons">
                                                <a href="{{asset('frontend/cart')}}" class="button">Checkout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- addcart top start -->
                        <div class="disflow">
                            <div class="expand dropps-menu">
                                <a >
                                    <?php if(Auth::check()){ ?>
                                        <i class="fas fa-user-check"></i>
                                    <?php } else { ?>
                                        <i class="fas fa-user-slash" title="Bạn chưa đăng nhập"></i>
                                    <?php } ?>
                                </a>
                                <ul class="restrain language">
                                    <li><a href="{{asset('frontend/profile')}}">My Account</a></li>
                                    <li><a href="javascript:">My Wishlist</a></li>
                                    <?php
                                        if(Auth::check()){
                                    ?>
                                    <li><a href="{{asset('frontend/logout')}}">Log Out</a></li>
                                    <?php }else{
                                    ?>    <li><a href="{{asset('frontend/login')}}">Log In</a></li>
                                    <?php }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->