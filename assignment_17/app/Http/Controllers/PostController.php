<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = DB::table('posts')
        //     ->select('excerpt', 'description')
        //     ->get();
        // return $posts;

        // $posts = DB::table('posts')
        //     ->where('id', 2)
        //     ->first();
        // return $posts->description;

        // $posts = DB::table('posts')
        //     ->where('id', 2)
        //     ->value('description');
        // return $posts;

        // $posts = DB::table('posts')
        //     ->pluck('title');

        // return $posts;


        // $posts = DB::table('posts')->insert([
        //     'title' => 'X',
        //     'slug' => 'X',
        //     'excerpt' => 'excerpt',
        //     'description' => 'description',
        //     'is_published' => true,
        //     'min_to_read' => 2,
        // ]);
        // return $posts;

        // $update = DB::table('posts')
        //     ->where('id',  2)
        //     ->update([
        //         'excerpt'     => 'Laravel 10',
        //         'description' => 'Laravel 10',
        //     ]);
        // return $update;

        $delete = DB::table('posts')
            ->where('id', 3)
            ->delete();
        return $delete;
    }
}
