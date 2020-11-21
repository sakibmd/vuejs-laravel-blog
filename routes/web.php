<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('public/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@all_posts');
// Route::get('/{anypath}', 'HomeController@index')->where('path', '.*');

Route::group(['middleware' => ['auth']], function () {
    //category
    Route::post('/add-category', 'CategoryController@add_category');
    Route::get('/category', 'CategoryController@all_category');
    Route::get('/category/{id}', 'CategoryController@delete_category');
    Route::get('/editcategory/{id}', 'CategoryController@edit_category');
    Route::post('/update-category/{id}', 'CategoryController@update_category');
    Route::get('/deletecategoryUsingCheckBox/{ids}', 'CategoryController@selected_category');

//dashboard
    Route::get('/totalUsers', 'HomeController@total_users');

//post
    Route::get('/posts', 'PostController@all_posts');
    Route::post('/savepost', 'PostController@save_post');
    Route::get('/deletepost/{id}', 'PostController@delete_post');
    Route::get('/post/{id}', 'PostController@edit_post');
    Route::post('/update/{id}', 'PostController@update_post');
    Route::get('/post-details/{id}', 'PostController@post_details');
});

Route::get('/blogposts', 'BlogController@get_all_blogpost');
Route::get('/singlepost/{id}', 'BlogController@get_post_by_id');
Route::get('/categories', 'BlogController@get_all_categories');
Route::get('/categorywisepost/{id}', 'BlogController@get_all_posts_by_cat_id');
Route::get('/search', 'BlogController@search_post');
Route::get('/latestpost', 'BlogController@latest_post');
