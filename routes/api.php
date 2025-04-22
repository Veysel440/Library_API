<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/{id}', [BookController::class, 'show']);
    Route::post('/', [BookController::class, 'store']);
    Route::put('/{id}', [BookController::class, 'update']);
    Route::delete('/{id}', [BookController::class, 'destroy']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::prefix('communications')->group(function () {
    Route::get('/', [CommunicationController::class, 'index']);
    Route::get('/{id}', [CommunicationController::class, 'show']);
    Route::post('/', [CommunicationController::class, 'store']);
    Route::put('/{id}', [CommunicationController::class, 'update']);
    Route::delete('/{id}', [CommunicationController::class, 'destroy']);
});

Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index']);
    Route::get('/{id}', [MenuController::class, 'show']);
    Route::post('/', [MenuController::class, 'store']);
    Route::put('/{id}', [MenuController::class, 'update']);
    Route::delete('/{id}', [MenuController::class, 'destroy']);
});

Route::prefix('about-us')->group(function () {
    Route::get('/', [AboutUsController::class, 'index']);
    Route::get('/{id}', [AboutUsController::class, 'show']);
    Route::post('/', [AboutUsController::class, 'store']);
    Route::put('/{id}', [AboutUsController::class, 'update']);
    Route::delete('/{id}', [AboutUsController::class, 'destroy']);
});

Route::prefix('sliders')->group(function () {
    Route::get('/', [SliderController::class, 'index']);
    Route::get('/{id}', [SliderController::class, 'show']);
    Route::post('/', [SliderController::class, 'store']);
    Route::put('/{id}', [SliderController::class, 'update']);
    Route::delete('/{id}', [SliderController::class, 'destroy']);
});
