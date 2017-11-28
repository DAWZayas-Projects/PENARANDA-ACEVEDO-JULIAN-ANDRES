<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Category;

class QuestionsController extends Controller
{
   public function show()
   {
      $question = Category::first();
      $question->questions;
      return view('questions.show', compact('questions'));
   }

   public function addCategoryInQuestion()
   {
      $categories = Category::select('id', 'name')->get();
      return view('questions.create', compact('categories'));
   }

   public function create()
   {
       return view('questions.create');
   }

   public function store(Category $category)
   {
       $this->validate(request(), [
          'text' => 'required',
          'category' => 'required',
       ]);

       Question::create([
          'text' => request('text'),
          'category_id' => request('category_id'),
      ]);

      $question->save();

      return redirect('/');
   }

}
