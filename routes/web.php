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

Route::get('/welcome', function () {
    return view('welcome', [
        "title" => "Welcome"
    ]);
});
Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
        "header_d1" => "Coba data dari routes",
        "img" => "kopi.jpg"
    ]);
});
Route::get('/posts', function () {
    $posts = [
        [
            "judul" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "penulis" => "Fawaz",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam deserunt praesentium asperiores accusamus delectus rerum sint nihil dolores minima distinctio ipsam itaque, iure architecto sunt. Nam reiciendis ipsam rem culpa praesentium, asperiores aut doloribus vitae adipisci sequi odio similique et officia ratione laborum iste reprehenderit distinctio accusantium nemo repellendus?"
        ],
        [
            "judul" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "penulis" => "Cinta",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam deserunt praesentium asperiores accusamus delectus rerum sint nihil dolores minima distinctio ipsam itaque, iure architecto sunt. Nam reiciendis ipsam rem culpa praesentium, asperiores aut doloribus vitae adipisci sequi odio similique et officia ratione laborum iste reprehenderit distinctio accusantium nemo repellendus?"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $posts
    ]);
});

// halaman single post
Route::get('post/{slug}', function ($slug) {
    $posts = [
        [
            "judul" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "penulis" => "Fawaz",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam deserunt praesentium asperiores accusamus delectus rerum sint nihil dolores minima distinctio ipsam itaque, iure architecto sunt. Nam reiciendis ipsam rem culpa praesentium, asperiores aut doloribus vitae adipisci sequi odio similique et officia ratione laborum iste reprehenderit distinctio accusantium nemo repellendus?"
        ],
        [
            "judul" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "penulis" => "Cinta",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam deserunt praesentium asperiores accusamus delectus rerum sint nihil dolores minima distinctio ipsam itaque, iure architecto sunt. Nam reiciendis ipsam rem culpa praesentium, asperiores aut doloribus vitae adipisci sequi odio similique et officia ratione laborum iste reprehenderit distinctio accusantium nemo repellendus?"
        ]
    ];
    $new_post = [];
    foreach ($posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('single_posts', [
        "title" => "Single Post Ini",
        "post" => $new_post
    ]);
});
