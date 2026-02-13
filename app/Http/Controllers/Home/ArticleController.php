<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->filter(request(['search', 'user']))->paginate(6);

        return view('home.articles', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('home.article', compact('article'));
    }
}
