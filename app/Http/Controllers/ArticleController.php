<?php

namespace App\Http\Controllers;

use App\Actions\Article\ArticleDeleteAction;
use App\Actions\Article\GetAllArticlesAction;
use App\Actions\Article\GetArticleByIDAction;
use App\Actions\Article\StoreArticleAction;
use App\Actions\Article\UpdateArticleAction;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    public function GetAllArticles(GetAllArticlesAction $GetAllArticlesAction)
    {
        return $GetAllArticlesAction->execute();
    }

    public function GetArticleByID(GetArticleByIDAction $GetArticleByIDAction, $id)
    {
        return $GetArticleByIDAction->execute($id);
    }

    public function CreateArticle(StoreArticleRequest $request, StoreArticleAction $StoreArticleAction)
    {
        return $StoreArticleAction->execute($request);
    }

    public function DeleteArticle(ArticleDeleteAction $ArticleDeleteAction, $id)
    {
        return $ArticleDeleteAction->execute($id);
    }

    public function UpdateArticle(UpdateArticleRequest $request, UpdateArticleAction $UpdateArticleAction, $id)
    {
        return $UpdateArticleAction->execute($request, $id);
    }
}
