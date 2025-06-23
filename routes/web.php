<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class);
Route::delete('/delete/{id}', \App\Http\Controllers\DeleteIndexTitleController::class);
