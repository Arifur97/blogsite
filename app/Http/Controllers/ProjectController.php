<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('front.home.home',[
            'blogs' => Blog::where('status', 1)->get()
        ]);
    }

    public function blogDetails($id){
        $blog = Blog::find($id);
        $blog->ViewCounts = $blog->ViewCounts+1;
        $blog->save();

        return view('front.blog.blog-details',[
            'blog' => Blog::find($id)
        ]);
    }
}
