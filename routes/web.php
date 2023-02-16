<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware;

Route::get('/', [HomeController::class, 'index']); 

Route::get('/cekstatus', [TaskController::class, 'cekstatus']); 
Route::get('/lapor', [TaskController::class, 'lapor']); 
Route::get('/kasus/check/{id}', [TaskController::class, 'check']); 
Route::get('/kasus', [TaskController::class, 'index'])->middleware('auth')->middleware('is_admin');; 
Route::get('/kasus/create', [TaskController::class, 'create']);  #->middleware('is_admin');
Route::get('/kasus/{id}', [TaskController::class, 'search']); #->middleware('auth')->middleware('is_admin');
Route::post('/kasus', [TaskController::class, 'store']); #->middleware('is_admin');

Route::get('/kasus/{id}/edit', [TaskController::class, 'edit'])->middleware('auth')->middleware('is_admin');
Route::patch('/kasus/{id}', [TaskController::class, 'update'])->middleware('auth')->middleware('is_admin'); 
Route::delete('/kasus/{id}', [TaskController::class, 'delete'])->middleware('auth')->middleware('is_admin'); 



// Route::patch('/kasus/{key}', function ($key) use ($tasklist) {
//     $tasklist[request()->key] = request()->task;
//     return $tasklist;
// });

// Route::delete('/kasus/{key}', function ($key) use ($tasklist) {
// 	unset($tasklist[$key]);
//     return $tasklist;
// });
