<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.blog.add-blog');
    }

    public function newBlog(Request $request){
        Blog::saveBlogInfo($request);
        return back();
    }
}
