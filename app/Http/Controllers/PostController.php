<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) 
        {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if (request('author')) 
        {
            $author = Author::firstWhere('username', request('author'));
            $title = ' by '. $author->name;
        }
        return view('posts', [
            'title' => 'All Posts'. $title,
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
        ]);
    }

    public function showSingle(Post $post)
    {
        return view('single_posts', [
            'title' => 'Single Post Ini',
            'active' => 'posts',
            'post' => $post,
        ]);
    }
}
