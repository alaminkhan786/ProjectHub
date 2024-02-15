<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/new-project', [App\Http\Controllers\ProjectController::class, 'new_project'])->name('new.project');
Route::post('/new-project', [App\Http\Controllers\ProjectController::class, 'store_project'])->name('store.project');
Route::get('/project-list', [App\Http\Controllers\ProjectController::class, 'project_list'])->name('project.list');
Route::get('/add-task/{id}', [App\Http\Controllers\TaskController::class, 'add_task'])->name('add.task');
Route::post('/add-task/{id}', [App\Http\Controllers\TaskController::class, 'store_task'])->name('store.task');