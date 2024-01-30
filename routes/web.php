<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::post('/tasks/store',[TaskController::class,'store'])->name('tasks.store');

Route::delete('/tasks/{task}',[TaskController::class,'destroy'])->name('tasks.destroy');

Route::get('/tasks/{task}',[TaskController::class,'show'])->name('tasks.show');

Route::post('/tasks/{task}/edit',[TaskController::class,'edit'])->name('tasks.edit');

Route::put('/tasks/{task}',[TaskController::class,'update'])->name('tasks.update');


