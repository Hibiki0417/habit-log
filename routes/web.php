<?php

use Illuminate\Support\Facades\Route;
use App\Models\Habit;

Route::get('/', function () {
    $habits = Habit::all();

    return view('welcome', [
        'habits' => $habits,
    ]);
});

Route::get('/about', function () {
    return view('about');
});