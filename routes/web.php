<?php

use App\Http\Controllers\DonetaskController;
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

Route::delete('/tasks/{task}',[TaskController::class,'destroy'])->name('tasks.destroy')->middleware('auth');

Route::get('/tasks/{task}',[TaskController::class,'show'])->name('tasks.show');

Route::post('/tasks/{task}/edit',[TaskController::class,'edit'])->name('tasks.edit')->middleware('auth');

Route::put('/tasks/{task}',[TaskController::class,'update'])->name('tasks.update')->middleware('auth');

Route::post('/tasks/{task}/complete',[TaskController::class,'complete'])->name('tasks.complete')->middleware('auth');

Route::delete('/donetasks/{task}',[DonetaskController::class,'destroy'])->name('donetasks.destroy')->middleware('auth');

Route::post('/donetasks/{task}',[DonetaskController::class,'show'])->name('donetasks.show')->middleware('auth');

Route::get('/donetasks',[DonetaskController::class,'index'])->name('donetasks.complete')->middleware('auth');

