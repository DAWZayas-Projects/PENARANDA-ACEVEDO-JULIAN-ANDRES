<?php

// Homepage
Route::get('/', function() {
    return view('');
});

// Categories
Route::get('/categories/show', 'CategoriesController@show');

// Questions
Route::get('/questions/create', 'QuestionsController@create');
Route::get('/questions', 'QuestionsController@index');
Route::post('/questions', 'QuestionsController@store');


// static pages
Route::get('/contact', function() {
   return view('statics.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
