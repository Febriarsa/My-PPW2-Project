<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('content.about', [
        "name" => "Feb",
        "email" => "febs@gmail.com"
    ]);
});

Route::get('/headerFooter', function () {
    return view('headerFooter', [
    ]);
});

Route::get('/dashboard', function () {
    return view('content.dashboard', [
    ]);
});

Route::get('/home', function () {
    return view('content.home', [
    ]);
});

Route::get('/posts', [PostController::class, 'index']);