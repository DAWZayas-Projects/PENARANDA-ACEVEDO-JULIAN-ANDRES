<?php

namespace App\Http\Controllers;

use App\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::where('state', 'accepted');
        return view('questions.index', compact('questions'));
    }

    public function showQuestion(Question $question)
    {
        return view('questions.show', compact('question'));
    }
}
