<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// routes for guests (not authenticated users)
Route::middleware('guest')->group(function () {
    Route::get('/sign-up', [AuthController::class, 'show_sign_up'])->name('show_sign_up');
    Route::post('/sign-up', [AuthController::class, 'sign_up'])->name('sign_up');

    Route::get('/sign-in', [AuthController::class, 'show_sign_in'])->name('show_sign_in');
    Route::post('/sign-in', [AuthController::class, 'sign_in'])->name('sign_in');
});

// routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::post('/sign-out', [AuthController::class, 'sign_out'])->name('sign_out');
});

// public routes
Route::get('/', [HomeController::class, 'home'])->name('homepage');
Route::resource('lectures', LectureController::class)->only('show');
Route::resource('quizzes', QuizController::class)->only('show');
