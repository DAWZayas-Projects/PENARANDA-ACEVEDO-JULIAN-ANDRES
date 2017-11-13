<?php
use App\Question;

Route::get('/', 'CategoriesController@index');
Route::get('/questions/add', 'CategoriesController@addInNewQuestion');
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');
Route::post('/questions', 'QuestionsController@store');

// static pages
Route::get('/contact', function() {
   return view('statics.contact');
});
