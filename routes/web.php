<?php

Route::get('/', function () {

   $questions = DB::table('questions')->get();

   return view('welcome', compact('questions'));

});
