<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function excerptDescription()
    {
        $posts = DB::table('posts')
            ->select('excerpt', 'description')
            ->get();
        return $posts;
    }

    public function distinctSelect()
    {
        $posts = DB::table('posts')->select('min_to_read')->distinct()->get();
        return $posts;
    }

    public function retriveFirst()
    {
        $posts = DB::table('posts')
            ->where('id', 2)
            ->first();
        return $posts->description;
    }


    public function description()
    {
        $posts = DB::table('posts')
            ->where('id', 2)
            ->value('description');
        return $posts;
    }

    public function title()
    {
        $posts = DB::table('posts')
            ->pluck('title');

        return $posts;
    }

    public function insertData()
    {

        $posts = DB::table('posts')->insert([
            'title' => 'X',
            'slug' => 'X',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2,
        ]);
        return $posts;
    }

    public function update()
    {
        $update = DB::table('posts')
            ->where('id',  2)
            ->update([
                'excerpt'     => 'Laravel 10',
                'description' => 'Laravel 10',
            ]);
        return $update;
    }

    public function delete()
    {
        $delete = DB::table('posts')
            ->where('id', 3)
            ->delete();
        return $delete;
    }

    public function minData()
    {
        $posts = DB::table('posts')->whereBetween('min_to_read', [1, 5])->get();
        return $posts;
    }

    public function incrementByOne()
    {
        $posts = DB::table('posts')
            ->where('id', 3)
            ->increment('min_to_read');
        return $posts;
    }
}
