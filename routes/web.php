<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[App\Http\Controllers\HomeController::class,'index1'])->name('home');
Route::get('/todo',[\App\Http\Controllers\TodoController::class,'index'])->name('todo');
Route::post('/todo',[\App\Http\Controllers\TodoController::class,'store'])->name('store.todo');
Route::get('todo/{id}',[\App\Http\Controllers\TodoController::class,'show'])->name('show');
Route::patch('todo/{id}',[\App\Http\Controllers\TodoController::class,'update'])->name('update.todo');
Route::delete('todo/{id}', [\App\Http\Controllers\TodoController::class, 'destroy'])->name('destroy.todo');
