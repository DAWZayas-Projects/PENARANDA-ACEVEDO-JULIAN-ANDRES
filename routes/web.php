<?php
use App\Question;
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{id}', 'QuestionsController@showQuestion');
