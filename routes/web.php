<?php
use App\Question;
Route::get('/', function() {
   return view('index');
});
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');
