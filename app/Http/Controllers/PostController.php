<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function showSingle($slug)
    {
        return view('single_posts', [
        "title" => "Single Post Ini",
        "post" => Post::find($slug)
    ]);
    }
}
