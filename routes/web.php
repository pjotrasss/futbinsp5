<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/clubs', function () {
    return view('clubs');
});

Route::get('/clubs/{club_id}', function () {
    return view('clubs');
});

Route::get('/finder', function () {
    return view('finder');
});