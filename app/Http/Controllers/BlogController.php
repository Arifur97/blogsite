<?php

namespace App\Http\Controllers;

use App\Blog;
use DB;
use Session;
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

    public function manageBlog(){
        $users = DB::table('blogs')
                ->join('users', 'blogs.user_id', '=', 'users.id')
                ->select('blogs.*', 'users.name')
                ->get();
        return view('admin.blog.manage-blog',[
            'blogs' => $users
        ]);
    }

    public function editBlog($id){
        Session::put('Postid', $id);
        return view('admin.blog.edit-blog',[
            'blog' => Blog::find($id)
        ]);
    }

    public function updateBlog(Request $request){
        Blog::updateBlogInfo($request);
        return back();
    }

    public function deleteBlog($id){
        $blog = Blog::find($id);
        unlink($blog->image);
        $blog->delete();
        return redirect('/manage-blog');
    }
}
