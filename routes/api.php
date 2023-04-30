<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('posts', PostController::class);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
