<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $habits = [
        'PHP学習',
        '朝散歩',
        '筋トレ',
    ];

    return view('welcome', [
        'habits' => $habits,
    ]);
});

Route::get('/about', function () {
    return view('about');
});