<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('app');

require __DIR__.'/web-auth.php';
