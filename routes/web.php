<?php

use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clubs', [ClubController::class,'index'])->name('clubs');

Route::get('/clubs/{club_id}', function () {
    return true;
});

Route::get('/finder', function () {
    return view('finder');
})->name('finder');