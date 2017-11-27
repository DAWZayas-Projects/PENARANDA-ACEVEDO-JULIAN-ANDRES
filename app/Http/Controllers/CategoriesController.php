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
   public function show($id)
   {
      $category = Category::find($id);
      return view('categories.show', compact('category'));
   }
}
