<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;



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

Route::get('/index', function () {
    return view('welcome');
});




Route::get('/list2',[CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
//Route::delete('/delete/{id}', [CategoryController::class, 'delete']);
Route::post('/cats/save', [CategoryController::class, 'save'])->name('categories.save');

Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/saveEdit/{id}', [CategoryController::class, 'saveEdit'])->name('categories.saveEdit');
//Route::get('/categories/{id}/articals',[ArticalController::class,'list'])->name('categories.articles.list');


Route::get('/articles',[ArticleController::class, 'Articlelist'])->name('articles.list');

Route::get('/createArticle',[ArticleController::class, 'createArticle'])->name('articles.create');
Route::post('/arts/save', [ArticleController::class, 'saveArticle'])->name('articles.save');
Route::delete('/deleteArticle/{id}', [ArticleController::class, 'deleteArticle'])->name('articles.delete');
Route::get('/showArticle/{id}', [ArticleController::class, 'showArticle'])->name('articles.show');
Route::get('/editArticle/{id}', [ArticleController::class, 'editArticle'])->name('articles.edit');
Route::post('/saveEditArticle/{id}', [ArticleController::class, 'saveEditArticle'])->name('articles.saveEditArticle');



