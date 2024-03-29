<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Inertia\Inertia;
use Inertia\Response;

class LectureController extends Controller
{
    public function show(Lecture $lecture): Response
    {
        $lecture->loadMissing('quiz');
        return Inertia::render('Lecture/Show', compact('lecture'));
    }
}
