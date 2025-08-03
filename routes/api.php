<?php

use App\Http\Controllers\API\AuthenticationController;
use App\Http\Controllers\PostController;

Route::post('register', [AuthenticationController::class, 'register']);
Route::post('login', [AuthenticationController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthenticationController::class, 'userInfo']);
    Route::post('logout', [AuthenticationController::class, 'logOut']);
    Route::apiResource('posts', PostController::class);
});