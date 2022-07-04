<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoController;
use App\Http\Controllers\AccuielController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoadArticleController;

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

Route::get('/', [AccuielController::class, 'index']);

Route::get('/articles', [LoadArticleController::class, 'index']);

Route::resource('/createArticle', ArticleController::class);

Route::get('articleDetail/{id}', [ArticleController::class, 'show']);

Route::get('/tutoriels', [LoadArticleController::class, 'tutoriels']);

Route::resource('/createTuto', TutoController::class);

Route::get('tutoDetail/{id}', [TutoController::class, 'show']);

Route::resource('/signup', AuthController::class);


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'deconnexion']);

Route::get('/profil', [AuthController::class, 'showProfil']);

Route::get('/delete/{id}', [AuthController::class, 'destroy']);