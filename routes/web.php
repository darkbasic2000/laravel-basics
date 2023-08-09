<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController::class, 'index'])->name('project.index');
Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/update/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::get('/search', [ProjectController::class, 'search'])->name('project.search');
Route::delete('/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');
