<?php
use App\Question;
Route::get('/', 'CategoriesController@index');
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');
