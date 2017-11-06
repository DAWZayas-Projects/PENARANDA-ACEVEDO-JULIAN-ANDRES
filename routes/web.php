<?php
use App\Question;
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{question}', 'QuestionsController@showQuestion');
