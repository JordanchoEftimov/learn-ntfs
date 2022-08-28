<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// TODO: Delete this routes
Route::get('/', function () {
    return Inertia::render('Homepage');
})->name('homepage');

Route::get('/what-is-crypto', function () {
    return Inertia::render('WhatIsCrypto');
})->name('what_is_crypto');

Route::get('/what-is-nft', function () {
    return Inertia::render('WhatIsNFT');
})->name('what_is_nft');

Route::get('/nft-basics', function () {
    return Inertia::render('NFTBasics');
})->name('nft_basics');

Route::get('/how-to-buy-nft', function () {
    return Inertia::render('HowToBuyNFT');
})->name('how_to_buy_nft');

Route::get('/where-to-buy-nft', function () {
    return Inertia::render('WhereToBuyNFT');
})->name('where_to_buy_nft');

Route::get('/how-to-make-nft', function () {
    return Inertia::render('HowToMakeNFT');
})->name('how_to_make_nft');

Route::get('/quiz', function () {
    return Inertia::render('Quiz');
})->name('quiz');
