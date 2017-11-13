<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;

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
      return view('questions.add', compact('categories'));
   }
   public function store(Category $category)
   {
      // Question::create([
      //    'category_id' => request('category'),
      //    'text' => request('question')
      // ]);

      $this->validate(request(), [
         'text' => 'required|min:5',
         'category_id' => 'required'
      ]);
      $category->addQuestion(request('category_id', 'text'));

      return back();
   }

}
