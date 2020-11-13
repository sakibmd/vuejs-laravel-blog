<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class PostController extends Controller
{
    public function all_posts(){
        $posts = Post::latest()->with('user', 'category')->get();
        return response()->json([
            'posts' => $posts
        ], 200);
    }

    public function save_post(Request $request){
        $this->validate($request,[
            'title'=>'required|min:2|max:50',
            'description'=>'required|min:10'
        ]);
        $strpos = strpos($request->photo,';');
        $sub = substr($request->photo,0,$strpos);
        $ex = explode('/',$sub)[1];
        $name = time().".".$ex;
        $img = Image::make($request->photo)->resize(800, 400);
        $upload_path = public_path()."/uploadimage/";
        $img->save($upload_path.$name);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::id();
        $post->photo = $name;
        $post->save();
    }

    public function delete_post($id){
        $post = Post::find($id);
        $image_path = public_path()."/uploadimage/";
        $image = $image_path. $post->photo;
        if(file_exists($image)){
            @unlink($image);
        }
        $post->delete();
    }

    public function edit_post($id){
        $post = Post::find($id);
        return response()->json([
            'post' => $post
        ], 200);
    }

    public function update_post(Request $request, $id){
        $post = Post::find($id);
        $this->validate($request,[
            'title'=>'required|min:2|max:50',
            'description'=>'required|min:2|max:1000'
        ]);


        if($request->photo!=$post->photo){
            $strpos = strpos($request->photo,';');
            $sub = substr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $name = time().".".$ex;
            $img = Image::make($request->photo)->resize(800, 400);
            $upload_path = public_path()."/uploadimage/";
            $img->save($upload_path.$name);
            $image = $upload_path. $post->photo;

            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $post->photo;
        }


        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->photo = $name;


        $post->save();
    }
}
