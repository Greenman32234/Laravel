<?php

use App\Http\Controllers\MySampleResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('home', function () {
    return redirect()->back();

})->name('home');
Route::get('/task/create' , [PostController::class, 'task'])->name('task.create');
Route::post('/task', [PostController::class, 'post'])->name('task.post');
Route::resource('posts', MySampleResourceController::class);
