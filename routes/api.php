<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::resource('books', BookController::class)->except(['create', 'edit']);

    Route::resource('users', UserController::class)->except(['create', 'edit']);

    Route::resource('communications', CommunicationController::class)->except(['create', 'edit']);

    Route::resource('menus', MenuController::class)->except(['create', 'edit']);

    Route::resource('about-us', AboutUsController::class)->except(['create', 'edit']);

    Route::resource('sliders', SliderController::class)->except(['create', 'edit']);
});
