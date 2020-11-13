<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class BlogController extends Controller
{
    public function get_all_blogpost()
    {
        $posts = Post::latest()->with('user', 'category')->get();
        return response()->json([
            'posts' => $posts,
        ], 200);
    }

    public function get_post_by_id($id)
    {
        $post = Post::with('category', 'user')->where('id', $id)->first();
        return response()->json([
            'post' => $post,
        ], 200);
    }

    public function get_all_categories(){
        $categories = Category::all();
        return response()->json([
            'categories' => $categories,
        ], 200);

    }

    public function get_all_posts_by_cat_id($id){
        $posts = Post::with('category', 'user')->where('category_id', $id)->get();
        return response()->json([
            'posts' => $posts,
        ], 200);
    }
}
