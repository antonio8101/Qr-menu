<?php

use App\Http\Controllers\MenuAPI\MenuController;
use App\Http\Controllers\MenuAPI\ProductController;
use App\Http\Controllers\MenuAPI\SectionController;
use App\Models\Profile;
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

Route::middleware('auth:api')->get('menu/', [MenuController::class,'index']);

Route::middleware('auth:api')->get('menu/{menu_id}', [MenuController::class,'show']);

Route::middleware('auth:api')->post('menu/create', [MenuController::class,'create']);

Route::middleware('auth:api')->put('menu/update/{menu_id}', [MenuController::class, 'update']);

Route::middleware('auth:api')->delete('menu/delete/{menu_id}', [MenuController::class, 'destroy']);

Route::middleware('auth:api')->get('menu/{menu_id}/sections', [SectionController::class, 'index']);

Route::middleware('auth:api')->get('menu/{menu_id}/section/{section_id}', [SectionController::class, 'show']);

Route::middleware('auth:api')->post('menu/{menu_id}/section/create', [SectionController::class, 'create']);

Route::middleware('auth:api')->put('menu/{menu_id}/section/update/{section_id}', [SectionController::class, 'update']);

Route::middleware('auth:api')->delete('menu/{menu_id}/section/delete/{section_id}', [SectionController::class, 'destroy']);

Route::middleware('auth:api')->post('menu/{menu_id}/section/edit/{section_id}', [SectionController::class, 'edit']);

Route::middleware('auth:api')->get('menu/{menu_id}/section/{section_id}/products', [ProductController::class, 'index']);

Route::middleware('auth:api')->get('menu/{menu_id}/section/{section_id}/product/{product_id}', [ProductController::class, 'show']);

Route::middleware('auth:api')->post('menu/{menu_id}/section/{section_id}/product/create', [ProductController::class, 'create']);

Route::middleware('auth:api')->put('menu/{menu_id}/section/{section_id}/product/update/{product_id}', [ProductController::class, 'update']);

Route::middleware('auth:api')->delete('menu/{menu_id}/section/{section_id}/product/delete/{product_id}', [ProductController::class, 'destroy']);
