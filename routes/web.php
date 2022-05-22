<?php

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

Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Register');
})->name('register');

Route::get('/quiz', function () {
    return Inertia::render('Quiz');
})->name('quiz');
