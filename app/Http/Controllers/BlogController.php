<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function get_all_blogpost(){
        $posts = Post::latest()->with('user', 'category')->get();
        return response()->json([
            'posts' => $posts
        ], 200);
    }
}
