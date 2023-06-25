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
    public function categoryPost($id)
    {
        $postCount = Post::where('category_id', $id)->count();
        return $postCount;
    }


    public function softDelete($id)
    {
        $softDelete = Post::findOrFail($id)->delete();
        if ($softDelete) {
            return "successfully soft deleted";
        } else {
            return "failed to softdelete";
        }
    }

    public function softData()
    {
        $softData = Post::onlyTrashed()->get();
        return $softData;
    }
}
