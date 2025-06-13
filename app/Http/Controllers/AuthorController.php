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
            'title' => 'Authors',
            'authors' => Author::all()
            // 'posts' => Author::latest()->get(),
        ]);
    }
    public function showAuthor(Author $author)
    {
        return view('author', [
            'title' => $author->username,
            'posts' => $author->posts,
        ]);
    }
}
