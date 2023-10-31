<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Juan Aditya",
        "email" => "juanaditya77@gmail.com",
        "image" => "juan.png"
    ]);
});




Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Juan",
            "blog" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti maxime, quibusdam quidem, non temporibus sint consequatur repellat assumenda laborum quasi explicabo officiis quis iusto? Odit doloremque aperiam neque nulla."
        ],
    ];
    return view('Posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});
