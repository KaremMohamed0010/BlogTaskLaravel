<?php

namespace App\Http\Controllers;

use App\Actions\ArticleDeleteAction;
use App\Actions\GetAllArticlesAction;
use App\Actions\GetArticleByIDAction;
use App\Actions\StoreArticleAction;
use App\Actions\UpdateArticleAction;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;

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
