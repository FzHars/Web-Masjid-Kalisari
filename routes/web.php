<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        "title" => "Welcome",
        "active" => "welcome"
    ]);
});
Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
        'active' => 'dashboard',
        "header_d1" => "Coba data dari routes",
        "img" => "kopi.jpg"
    ]);
});
Route::get('/posts', [PostController::class, "index"]);

// halaman single post
Route::get('post/{post:slug}', [PostController::class, 'showSingle']);

Route::get('/categories', [CategoryController::class, 'index']);

// Route::get('/categories/{category:slug}', [CategoryController::class, 'singleCtg']);

Route::get('/authors', [AuthorController::class, 'index']);

// Route::get('/authors/{author:username}', [AuthorController::class, 'showAuthor']);
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name
//     ]);
// });
