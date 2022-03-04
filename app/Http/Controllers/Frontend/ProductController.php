<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use Auth;

class ProductController extends Controller
{
    public function GetNewProduct()
    {
        $categorys = Category::all();
        $products = Product::all();
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.new.new', compact('categorys','products','newCart','sum'));
    }
    public function GetSaleProduct()
    {
        $categorys = Category::all();
        $products = Product::all();
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        return view('frontend.sale.sale', compact('categorys','products','newCart','sum'));
    }
    
}
