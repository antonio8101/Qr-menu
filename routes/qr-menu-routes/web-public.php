<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('qr-menu-templates.public'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
