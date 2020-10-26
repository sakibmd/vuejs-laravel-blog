<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all_posts(){
        $posts = Post::all();
        return $posts;
    }
}
