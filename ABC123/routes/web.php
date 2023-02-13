<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware;

Route::get('/', [HomeController::class, 'index']); 

Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth'); 
Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('is_admin');;  #->middleware('is_admin');
Route::get('/tasks/{id}', [TaskController::class, 'search'])->middleware('is_admin');; 
Route::post('/tasks', [TaskController::class, 'store'])->middleware('is_admin');; 

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->middleware('is_admin');; 
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->middleware('is_admin');; 
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->middleware('is_admin');; 



// Route::patch('/tasks/{key}', function ($key) use ($tasklist) {
//     $tasklist[request()->key] = request()->task;
//     return $tasklist;
// });

// Route::delete('/tasks/{key}', function ($key) use ($tasklist) {
// 	unset($tasklist[$key]);
//     return $tasklist;
// });
