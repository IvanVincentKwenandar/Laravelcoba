<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('about', 
    [
        "title" => "About"
    ]);
});


Route::get('/artikel', function () {
    $blog_posts = [
        [
            "title" => "Aerial",
            "author" => "Suletta",
            "body" => "Rp. 260.000"
        ],
        [
            "title" => "Daribalde",
            "author" => "Jeturk",
            "body" => "Rp. 313.000"
        ],
        [
            "title" => "Pharact",
            "author" => "Genesis",
            "body" => "Rp. 313.000"
        ]
    ];

    return view('blog', 
    [
        "title" => "Blog",
        "postings" => $blog_posts
    ]);
});

