<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->where('author_id', Auth::user()->id);

        if (request('keyword')) {
            $articles->where('title', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.article.index', ['articles' => $articles->paginate(10)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title'         => 'required|unique:articles|min:4|max:255',
            'description'   => 'required|min:20'
        ], [
            'title.required'        => 'Bidang :attribute harus diisi',
            'title.min'             => ':attribute minimal harus terdiri dari :min karakter',
            'title.max'             => ':attribute tidak boleh lebih dari :max karakter',
            'description.required'  => 'Bidang :attribute harus diisi',
            'description.min'       => ':attribute minimal harus terdiri dari :min karakter'
        ], [
            'title'         => 'Judul',
            'description'   => 'Deskripsi'
        ])->validate();

        Article::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'description' => $request->description,
            'author_id' => Auth::user()->id,
        ]);

        return redirect('/dashboard/articles')->with(['success' => 'Berita baru berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('dashboard.article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
