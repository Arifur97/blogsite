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
}
