<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class QuizController extends Controller
{
    public function show(Quiz $quiz): Response
    {
        abort_if(!auth()->user(), 403);
        $quiz->loadMissing('questions', 'questions.answers');
        return Inertia::render('Quiz/Show', compact('quiz'));
    }

    public function store_passed_quiz(Quiz $quiz): RedirectResponse
    {
        $user = auth()->user();
        $user->quizzes()->attach($quiz->id);
        return redirect()->back();
    }
}
