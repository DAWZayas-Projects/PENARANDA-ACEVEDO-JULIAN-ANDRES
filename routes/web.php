<?php
Route::get('/', 'CategoriesController@index');
Route::get('/category/{id_category}', 'CategoriesController@show');
Route::get('/questions/add', 'QuestionsController@addCategoryInQuestion');
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');
Route::post('/questions', 'QuestionsController@store');

// static pages
Route::get('/contact', function() {
   return view('statics.contact');
});
