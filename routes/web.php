<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
// use App\Http\Controllers\StoreIndexTitleController;
use App\Http\Controllers\DeleteIndexTitleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexController::class)->name('index');
// Route::post('/store', StoreIndexTitleController::class)->name('store');
Route::delete('/delete/{indexTitle}', DeleteIndexTitleController::class)->name('delete');
