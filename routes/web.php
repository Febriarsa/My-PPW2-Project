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

Route::get('/users', [userController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');

Route::get('/buku/search', [BukuController::class, 'search'])->name('buku.search');
