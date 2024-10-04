<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    //route untuk registre user
    Route::post('auth/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
    Route::post('auth/login', \App\Http\Controllers\Api\Auth\LoginController::class);

    //route yang hanya bisa diakses denagn token
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('auth/logout',\App\Http\Controllers\Api\Auth\LogoutController::class);
    });
});
