<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            // "posts" => Post::all()
            'posts' => Post::latest()->get(),
        ]);
    }

    public function showSingle(Post $post)
    {
        return view('single_posts', [
            'title' => 'Single Post Ini',
            'post' => $post,
        ]);
    }

    
}
