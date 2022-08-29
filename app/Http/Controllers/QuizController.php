<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Inertia\Inertia;
use Inertia\Response;

class QuizController extends Controller
{
    public function show(Quiz $quiz): Response
    {
        abort_if(!auth()->user(), 403);
        return Inertia::render('Quiz/Show', compact('quiz'));
    }
}
