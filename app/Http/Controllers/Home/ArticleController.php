<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(4);

        return view('home.articles', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('home.article', compact('article'));
    }
}
