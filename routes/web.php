<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama' =>'Ayoko Ruiz Bartolomeus '] );
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog');
});