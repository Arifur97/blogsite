<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'des', 'status'];

    public static function saveBlogInfo($request){
        $blog = new Blog();
        $blog->title    = $request->title;
        $blog->des      = $request->des;
        $blog->status   = $request->status;
        $blog->save();
    }
}
