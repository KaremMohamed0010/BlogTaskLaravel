<?php

namespace App\Actions\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GetAllArticlesAction
{
    public function execute()
    {
        try {
            $articles = Article::paginate(10);
            return response()->json($articles);
        } catch (\Exception $e) {
            Log::error('Error retrieving articles: ' . $e->getMessage());

            return response()->json(['message' => 'An error occurred while retrieving articles'], 500);
        }
    }
}
