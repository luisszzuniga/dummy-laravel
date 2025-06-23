<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleteIndexTitleController;

Route::get('/', \App\Http\Controllers\IndexController::class);

Route::delete('/index-titles/{id}', [DeleteIndexTitleController::class, 'delete'])->name('index-titles.delete');
