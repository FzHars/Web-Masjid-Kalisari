<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::all(),
        ]);
    }

    public function singleCtg(Category $category)
    {
        return view('category', [
        'title' => "Categories",
        'posts' => $category->posts,
        'category' => $category->name
    ]);
    }
}
