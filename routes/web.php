<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todolistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[todolistController::class,'index']);

Route::post('/save-todo',[todolistController::class,'saveTodo'])->name('saveTodo');

// Route::delete('/{todolist:id}',[todolistController::class,'destroy'])->name('destroy');


Route::get('delete/{id}',[todolistController::class,'delete']);
Route::get('edit/{id}',[todolistController::class,'delete']);






