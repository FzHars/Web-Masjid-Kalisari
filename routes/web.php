<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
Route::get('/posts', [PostController::class, "index"]);

// halaman single post
Route::get('post/{post:slug}', [PostController::class, 'showSingle']);
