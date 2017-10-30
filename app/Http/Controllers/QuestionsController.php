<?php

namespace App\Http\Controllers;

use App\Question;

class QuestionsController extends Controller
{
   public function index()
   {
      $questions = Question::All();
      return view('questions.index', compact('questions'));
   }

   public function showQuestion($id)
   {
      $question = Question::find($id);
      return view('questions.show', compact('question'));
   }
}
