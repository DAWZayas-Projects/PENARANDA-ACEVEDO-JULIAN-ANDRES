<?php
use App\Question;

Route::get('/', 'CategoriesController@index');
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');

// static pages
Route::get('/contact', function() {
   return view('statics.contact');
});
