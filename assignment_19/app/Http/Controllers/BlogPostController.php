<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        return view('pages.blog_post');
    }

    // public function show($id)
    // {
    //     $post = BlogPost::find($id);
    //     return response()->json($post);
    // }
    public function blog(){
       return BlogPost::get();

    }
}
