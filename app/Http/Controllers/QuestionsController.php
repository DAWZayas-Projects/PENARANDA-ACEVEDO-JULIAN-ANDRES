<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;

class QuestionsController extends Controller
{
   public function show()
   {
     
   }

   public function store()
   {
      $this->validate(request(), [
         'category' => 'required',
         'question' => 'required'
      ]);
      Question::create([
         'category_id' => request('category'),
         'text' => request('question')
      ]);

      return redirect('/');
   }

}
