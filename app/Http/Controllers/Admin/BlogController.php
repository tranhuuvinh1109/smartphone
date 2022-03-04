<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    public function getInsertBlog()
    {
        return view('admin.blog.insert-blog');
    }
    public function postInsertBlog(BlogRequest $request)
    {
        dd($request->all());
    }
    public function getBlog()
    {
        return view('admin.blog.blog');
    }
}
