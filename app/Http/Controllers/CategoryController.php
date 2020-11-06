<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(Request $request){
        $this->validate($request, [
            'category_name' => 'required|min:2|max:50',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return  ['message' => 'inserted'];

    }

    public function all_category(){
        $categories = Category::all();
        return response()->json([
            'categories' => $categories
        ], 200);
    }
    public function delete_category($id){
        Category::find($id)->delete();
    }

    public function edit_category($id){
        $category = Category::find($id);
        return response()->json([
            'category'=>$category
        ],200);
    }

    public function update_category(Request $request, $id){
        $this->validate($request, [
            'category_name' => 'required|min:2|max:50',
        ]);
        
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->save();
    }
}
