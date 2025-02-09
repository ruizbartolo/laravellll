<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' =>'Ayoko Ruiz Bartolomeus ', 'title' => 'About' ]);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){
   

    $post= Post::find($slug);

          return view('post', ['title'=> 'SIngle Post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});