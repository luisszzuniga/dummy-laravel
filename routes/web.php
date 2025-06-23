<?php

use App\Http\Controllers\DeleteIndexTitleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('welcome');

Route::delete('/index-title/{id}', DeleteIndexTitleController::class)->name('index-title.delete');
