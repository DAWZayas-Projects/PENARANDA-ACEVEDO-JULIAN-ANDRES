<?php

namespace App\Http\Controllers;

use App\Category;

class CategoriesController extends Controller
{
   public function index()
   {
      $categories = Category::All();
      return view('categories.category', compact('categories'));
   }
}
