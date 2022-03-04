<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use App\Cart;


class FrontendController extends Controller
{
    public function Home(){
        $categorys = Category::all();
        $products = Product::paginate(9);
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.home.index3', compact('categorys','products','newCart','sum'));
    }

    public function ProfileProduct($pro_id){
        $profile = DB::table('product')->where('pro_id',$pro_id)->get();
        $id_user = Auth::id();
        $rates = DB::table('comment')->join('user_shop', 'user_shop.id', '=', 'comment.id_user')->where('comment.id_product',$pro_id)->get();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        $stars = DB::table('comment')->where('id_product',$pro_id)->get();
        $number = 0;
        $j = 0;
        for($i=0;$i<$stars->count();$i++){ 
            $number += $stars[$i]->rate;
            $j++;
        }
        $k = 0;
        if($j==0){
            $k = 0;
        }else{
            $k =round($number /= $j);

        }
        return view('frontend.product.profile',compact('profile','rates','newCart','sum','k'));
    }

    public function PostComment(Request $request)
    {
        $rate = new Comment();
        $rate->id_user = $request->id_user;
        $rate->email_user = $request->email_user;
        $rate->id_product = $request->id_product;
        $rate->rate = $request->rating;
        $rate->content = $request->content;
        $rate->save();

        return back();
    }


    public function Logout(){
        Auth::logout();
        return redirect()->intended('frontend/login');
    }

    public function About(){
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.about.about-us',compact('newCart','sum'));
    }

    public function AddCart($id){
        $id_user = Auth::id();
        $newCart = null;
        $carts = DB::table('cart')->where('id_user',$id_user)->where('id_product',$id)->get();
        if($carts->count()>0){
            $quantity = $carts[0]->quantity + 1;
            $data = [
                'quantity' => $quantity,
            ];
            DB::table('cart')->where('id_user',$id_user)->where('id_product',$id)->update($data);
            
        }else{
            $data2 = [
                'id_user' => $id_user,
                'id_product'=> $id,
                'quantity' => 1,
            ];
            DB::table('cart')->insert($data2);
        }
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.home.cart',compact('newCart','sum'));
    }

    public function DeleteCart($id){
        $id_user = Auth::id();
        $carts = DB::table('cart')->where('id_user',$id_user)->where('id_product',$id)->get();
        DB::table('cart')->where('id_user',$id_user)->where('id_product',$id)->delete();

        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.home.cart',compact('newCart','sum'));
    }

    public function ListCart(){
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.cart.list-cart',compact('newCart','sum'));
    }

    public function UpdateCart(Request $request){
        dd($request->all());
    }


    public function Error(){
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.error.404',compact('newCart','sum'));
    }
}
