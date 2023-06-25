<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function postData()
    {
        $postdata = Post::with('category')->get();
        return $postdata;
    }

}
