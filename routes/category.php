<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;



Route::get('/list2',[CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
//Route::delete('/delete/{id}', [CategoryController::class, 'delete']);
Route::post('/cats/save', [CategoryController::class, 'save'])->name('categories.save');

Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/saveEdit/{id}', [CategoryController::class, 'saveEdit'])->name('categories.saveEdit');

require __DIR__.'/auth.php';