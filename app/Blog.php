<?php

namespace App;

use Carbon\Carbon;
use Auth;
use Session;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'des', 'image', 'user_id', 'ViewCounts', 'status'];

    public static function saveBlogInfo($request){
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $location = 'blog_images/';
        $img = $location.$imageName;
        $blo = Blog::where('image', $img)->first();
        if ($blo) {
            $da = date('Y-m-d-H-i-s');
            $imageName = $da.$imageName;
        }
        $image->move($location, $imageName);

        $blog = new Blog();
        $blog->user_id      = Auth::user()->id;
        $blog->title        = $request->title;
        $blog->image        = $location.$imageName;
        $blog->des          = $request->des;
        $blog->ViewCounts   = 0;
        $blog->status       = $request->status;
        $blog->save();
    }

    public static function updateBlogInfo($request){
        $blog = Blog::find(Session::get('Postid'));
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $location = 'blog_images/';
        $img = $location.$imageName;
        $blo = Blog::where('image', $img)->first();
        if ($blo) {
            $da = date('Y-m-d-H-i-s');
            $imageName = $da.$imageName;
        }
        $image->move($location, $imageName);

//        $blog->user_id      = Auth::user()->id;
        $blog->title        = $request->title;
        $blog->image        = $location.$imageName;
        $blog->des          = $request->des;
        $blog->ViewCounts   = 0;
        $blog->status       = $request->status;
        $blog->save();
    }
}
