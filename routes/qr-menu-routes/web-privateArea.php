<?php

use App\Http\Controllers\MenuAPI\MenuController;
use Illuminate\Support\Facades\Route;

$reactAppUri = ['profile','callback'];

Route::get('/', function () {
    return view('layouts.app');
})
     ->middleware(['auth', 'verified'])
     ->name('app');

Route::get('/{any}', function () {
    return view('layouts.app');
})->whereIn('any', $reactAppUri)
     ->middleware(['auth', 'verified'])
     ->name('app');

Route::get('/email', function (){
    return 'email-verified';
})->middleware(['auth', 'verified'])
     ->name('email.verification');


