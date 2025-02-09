<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('posts', ['title' => 'Blog', 'posts' => [
        [     
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author'=>'Ayoko Ruiz Bartolomeus',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
     Quam laboriosam distinctio rerum nostrum facere magni consequatur 
     commodi voluptates itaque sequi, officiis animi dignissimos doloremque asperiores, 
     corrupti maiores molestias magnam quibusdam.'
        ],
        [
             'id' => 2,
            'title' => 'Judul Artikel 2',
            'author'=>'Ayoko Ruiz Bartolomeus',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
     Quam laboriosam distinctio rerum nostrum facere magni consequatur 
     commodi voluptates itaque sequi, officiis animi dignissimos doloremque asperiores, 
     corrupti maiores molestias magnam quibusdam.'
        ],
    ]]);
});

Route::get('/posts/{id}', function($id){
    $posts=[
        [     
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author'=>'Ayoko Ruiz Bartolomeus',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
     Quam laboriosam distinctio rerum nostrum facere magni consequatur 
     commodi voluptates itaque sequi, officiis animi dignissimos doloremque asperiores, 
     corrupti maiores molestias magnam quibusdam.'
        ],
        [
             'id' => 2,
            'title' => 'Judul Artikel 2',
            'author'=>'Ayoko Ruiz Bartolomeus',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
     Quam laboriosam distinctio rerum nostrum facere magni consequatur 
     commodi voluptates itaque sequi, officiis animi dignissimos doloremque asperiores, 
     corrupti maiores molestias magnam quibusdam.'
        ],
    ];

    $post= Arr::first($posts, function($post) use($id){
        return $post['id'] == $id;
    });

          return view('post', ['title'=> 'SIngle Post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});