<?php

namespace App\Actions\Article;

use App\Models\Article;
use Illuminate\Http\Request;


class GetArticleByIDAction
{
    public function execute($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        return response()->json($article);
    }
}
