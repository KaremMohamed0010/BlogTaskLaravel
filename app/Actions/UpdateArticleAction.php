<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UpdateArticleAction
{
    public function execute($request, $id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->update($request->all());

            return response()->json(['message' => 'Article updated successfully']);
        } catch (ModelNotFoundException $e) {
            Log::error('Article not found: ' . $e->getMessage());

            return response()->json(['message' => 'Article not found'], 404);
        } catch (\Exception $e) {
            Log::error('Error updating article: ' . $e->getMessage());

            return response()->json(['message' => 'An error occurred while updating the article'], 500);
        }
    }
}
