<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'Auth'], function () {
    Route::post('Register', [AuthController::class, 'Register']);
    Route::post('Login', [AuthController::class, 'Login']);
});


Route::group(['prefix' => 'Article'], function () {
    Route::get('GetAllArticles', [ArticleController::class, 'GetAllArticles']);
    Route::get('GetArticleByID/{id}', [ArticleController::class, 'GetArticleByID']);
});
Route::group(['middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'Article'], function () {
        Route::post('CreateArticle', [ArticleController::class, 'CreateArticle']);
        Route::post('UpdateArticle/{id}', [ArticleController::class, 'UpdateArticle']);
        Route::delete('DeleteArticle/{id}', [ArticleController::class, 'DeleteArticle']);
    });
});
