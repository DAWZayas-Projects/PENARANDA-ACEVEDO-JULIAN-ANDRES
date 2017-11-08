<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $questions = Question::approved()->get();

        return view('categories.category', compact('categories'));
    }
}
