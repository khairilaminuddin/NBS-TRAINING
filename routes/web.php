<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos' , [App\Http\Controllers\TodoController::class, 'index']);

Route::resources(['users' => App\Http\Controllers\UserController::class,]);
