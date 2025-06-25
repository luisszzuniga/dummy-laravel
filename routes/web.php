<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class);
Route::delete('/index-titles/{id}', [\App\Http\Controllers\DeleteIndexTitleController::class, '__invoke'])->name('index-titles.destroy');
