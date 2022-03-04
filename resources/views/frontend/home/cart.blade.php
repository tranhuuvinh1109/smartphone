
<div class="shopping-carts text-right">
    <div class="cart-toggler">
        <a href="#"><i class="icon-bag"></i></a>
        <a href="">
            <?php if (Auth::check()){ ?>
                <span class="cart-quantity">{{$sum}}</span>
            <?php } else { ?>
                <span class="cart-quantity">0</span>
            <?php } ?>
        </a>
    </div>
    <div class="restrain small-cart-content">
        <div class="change_cart">
        @if(!empty($newCart))
            <ul class="cart-list">
                <?php 
                    $totalPrice = 0;
                    for($i=0;$i<$newCart->count();$i++){ 
                        $totalPrice += $newCart[$i]->pro_price * $newCart[$i]->quantity;
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
                <?php } ?>
            </ul>
            <p class="total">Subtotal: <span class="amount">${{$totalPrice}}</span></p>
            <p class="buttons">
                <a href="{{asset('frontend/cart')}}" class="button">Checkout</a>
            </p>
        @endif
        </div>
    </div>
</div>

