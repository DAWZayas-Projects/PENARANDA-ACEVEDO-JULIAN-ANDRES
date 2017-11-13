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

   public function addInNewQuestion()
   {
      $categories = Category::select('id', 'name')->get();
      return view('questions.add', compact('categories'));
   }
}
