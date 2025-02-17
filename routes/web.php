<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('todos' , [App\Http\Controllers\TodoController::class, 'index']);

//Route::resources(['users' => App\Http\Controllers\UserController::class,]);

Route::get('/',[StudentController::class,'index'])->name('students.index');
Route::get('/create',[StudentController::class,'create'])->name('students.create');
Route::post('/store',[StudentController::class,'store'])->name('students.store');
