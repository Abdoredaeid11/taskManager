<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//  index page  for tasks
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');
Route::post('/tasks/store', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');


