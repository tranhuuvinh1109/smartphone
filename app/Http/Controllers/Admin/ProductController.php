<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function GetProduct(){
        $products = Product::paginate(3);
        return view('admin.product.product',compact('products'));
    }
    public function AddProduct(){
        $cates = Category::all();
        return view('admin.product.insert-product',compact('cates'));
    }
    public function PostAddProduct(PostProductRequest $request){
        $product = new Product();
        $data = $request->all();
        $image = $request->product_image;
        $image2 = $request->product_image_2;
        $data['product_image'] = $image->getClientOriginalName();
        // dd($data);
        if(!empty($image))
        {
            DB::table('product')->insert([
                'pro_cate'=>$request->product_cate,
                'pro_name' => $request->product_name,
                'pro_price' => $request->product_price,
                'pro_discount' => $request->product_discount,
                'pro_description' => $request->product_description,
                'pro_new'=>$request->product_new,
                'pro_image' => $data['product_image'],
                'pro_image2'=>$image2->getClientOriginalName()
            ]);
            $image->move('upload/admin/product',$image->getClientOriginalName());
            $image2->move('upload/admin/product',$image2->getClientOriginalName());
            return redirect()->intended('admin/product')->with('success','Add Product Successfully');
        }else
        {
            return redirect()->back()->withError('Add Product error');
        }
    }
    public function EditProduct($id){
        $pro = DB::table('product')->where('pro_id','=',$id)->get();
        $cates = Category::all();
        return view('admin.product.edit-product',compact('pro','cates'));
    }
    public function PostEditProduct(Request $request,$id){
        $data = $request->all();
        $image = $request->pro_image;
        $image2 = $request->pro_image_2;
        $data = [
            'pro_name'=>$request->pro_name,
            'pro_cate'=>$request->pro_cate,
            'pro_price'=>$request->pro_price,
            'pro_discount'=>$request->pro_discount,
            'pro_description'=>$request->pro_description,
            'pro_new'=>$request->product_new,
        ];
        if(!empty($image))
        {
            $data = [
                'pro_name'=>$request->pro_name,
                'pro_cate'=>$request->pro_cate,
                'pro_price'=>$request->pro_price,
                'pro_discount'=>$request->pro_discount,
                'pro_description'=>$request->pro_description,
                'pro_new'=>$request->product_new,
                'pro_image'=>$image->getClientOriginalName(),
            ];
            $image->move('upload/admin/product',$image->getClientOriginalName());
        }
        if(!empty($image2))
        {
            $data = [
                'pro_name'=>$request->pro_name,
                'pro_cate'=>$request->pro_cate,
                'pro_price'=>$request->pro_price,
                'pro_discount'=>$request->pro_discount,
                'pro_description'=>$request->pro_description,
                'pro_new'=>$request->product_new,
                'pro_image2'=>$image2->getClientOriginalName(),
            ];
            $image2->move('upload/admin/product',$image2->getClientOriginalName());
        }
        DB::table('product')->where('pro_id',$id)
                            ->update(
                                $data
                            );
        return redirect()->intended('admin/product')->with('success','Update product successfully');
    }
    public function DeleteProduct($pro_id){
        DB::table('product')->where('pro_id','=',$pro_id)->delete();
        return response()->json();
    }
}
