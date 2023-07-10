<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('pages.blog_post',compact('posts'));
    }

    public function show($id)
    {
        $post = BlogPost::find($id);
        return response()->json($post);
    }
}
