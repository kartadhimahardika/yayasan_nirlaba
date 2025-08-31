<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(4);

        return view('articles', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article', compact('article'));
    }
}
