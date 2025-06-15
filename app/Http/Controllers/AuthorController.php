<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index()
    {
        return view('authors', [
            'title' => 'List Authors',
            'active' => 'posts',
            'authors' => Author::all()
            // 'posts' => Author::latest()->get(),
        ]);
    }
    public function showAuthor(Author $author)
    {
        return view('posts', [
            'title' => "Author By: $author->name",
            'active' => 'posts',
            'posts' => $author->posts,
        ]);
    }
}
