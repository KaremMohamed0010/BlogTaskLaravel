<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreArticleAction
{
    public function execute($request)
    {
        try {
            $user = Article::create([
                'title'     => $request->title,
                'content'     => $request->content,
            ]);
            return response()->json(['message' => 'Article created successfully']);
        } catch (\Exception $e) {
            Log::error('Error creating article: ' . $e->getMessage());

            return response()->json(['message' => 'An error occurred while creating the article'], 500);
        }
    }
}
