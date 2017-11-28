<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;

class CategoriesController extends Controller
{
   public function index()
   {
      $categories = Category::all();
      return view('categories.category', compact('categories'));
   }
   public function show()
   {
      $categories = Category::all();

      return view('categories.show', compact('categories'));
   }
}
