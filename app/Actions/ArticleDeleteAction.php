<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class ArticleDeleteAction
{
    public function execute($id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();
            return response()->json(['message' => 'Article deleted successfully']);
        } catch (ModelNotFoundException $e) {
            Log::error('Article not found: ' . $e->getMessage());
            return response()->json(['message' => 'Article not found'], 404);
        }
    }
}
