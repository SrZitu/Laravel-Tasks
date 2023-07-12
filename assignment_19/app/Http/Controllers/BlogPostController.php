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
    public function blog()
    {
        return BlogPost::get();
    }

    public function show($id)
    {
       $post= BlogPost::with('comment')->findOrFail($id);
        return view('pages.blog_details',compact('post'));
    }


}
