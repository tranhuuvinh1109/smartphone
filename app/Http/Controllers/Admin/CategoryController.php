<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostAddCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function GetCategory()
    {
        $cates = Category::paginate(5);
        return view('admin.category.category',compact('cates'));

    }
    public function AddCategory()
    {
        return view('admin.category.insert-category');

    }
    public function PostAddCategory(PostAddCategoryRequest $request)
    {
        $cate = new Category();
        $cate->category_name = $request->category_name;
        $cate->save();  
        return redirect()->intended('admin/cate')->with('success','Add Category Success');

    }
    public function EditCategory($category_id)
    {
        $category=DB::table('category')->where('category_id',$category_id)->get();
        // dd($category[0]->category_name);
        return view('admin.category.edit-category',compact('category'));
        
    }
    public function PostEditCategory(PostAddCategoryRequest $request,$category_id)
    {
        DB::table('category')->where('category_id',$category_id)
                            ->update(
                                ['category_name'=>$request->category_name]
                            );
        return redirect()->intended('admin/cate')->with('success','Edit Category Success');
        
    }
    public function DeleteCategory($category_id)
    {
        DB::table('category')->where('category_id','=',$category_id)->delete();
        return response()->json();
        
    }
}
