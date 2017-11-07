<?php
use App\Question;
Route::get('/', function() {
   return view('layout');
});
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');
