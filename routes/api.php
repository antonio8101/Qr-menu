<?php

use App\Http\Controllers\MenuAPI\MenuController;
use App\Http\Controllers\MenuAPI\ProductController;
use App\Http\Controllers\MenuAPI\SectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('menu/',[MenuController::class,'index']);

Route::middleware('auth:api')->post('menu/create',[MenuController::class,'create']);

Route::middleware('auth:api')->post('menu/update', [MenuController::class, 'update']);

Route::middleware('auth:api')->post('menu/delete', [MenuController::class, 'destroy']);

Route::middleware('auth:api')->post('section/create', [SectionController::class, 'create']);

Route::middleware('auth:api')->post('section/update', [SectionController::class, 'update']);

Route::middleware('auth:api')->post('section/delete', [SectionController::class, 'destroy']);

Route::middleware('auth:api')->post('product/create', [ProductController::class, 'create']);

Route::middleware('auth:api')->post('product/update', [ProductController::class, 'update']);

Route::middleware('auth:api')->post('product/delete', [ProductController::class, 'destroy']);
