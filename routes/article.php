<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;



//Route::get('/categories/{id}/articals',[ArticalController::class,'list'])->name('categories.articles.list');


Route::get('/articles',[ArticleController::class, 'Articlelist'])->name('articles.list')->middleware(['auth']);

Route::get('/createArticle',[ArticleController::class, 'createArticle'])->name('articles.create')->middleware(['is_admin' , 'birth_date']);
Route::post('/arts/save', [ArticleController::class, 'saveArticle'])->name('articles.save');
Route::delete('/deleteArticle/{id}', [ArticleController::class, 'deleteArticle'])->name('articles.delete');
Route::get('/showArticle/{id}', [ArticleController::class, 'showArticle'])->name('articles.show');
Route::get('/editArticle/{id}', [ArticleController::class, 'editArticle'])->name('articles.edit');
Route::post('/saveEditArticle/{id}', [ArticleController::class, 'saveEditArticle'])->name('articles.saveEditArticle');

Route::get('/template',[ArticleController::class, 'ArticleTable'])->name('dashboard.pages.data');


require __DIR__.'/auth.php';

