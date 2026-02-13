<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->where('user_id', Auth::user()->id);

        if (request('keyword')) {
            $articles->where('title', 'like', '%'.request('keyword').'%');
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

    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:5000',
        ]);

        $path = $request->file('photo')->store('tmp/article', 'public');

        return response()->json([
            'path' => $path,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $data = $request->validated();

        $photoPath = null;

        if ($data['photo']) {

            $newPath = str_replace('tmp/', '', $data['photo']);

            Storage::disk('public')->move(
                $data['photo'],
                "img/$newPath"
            );

            $photoPath = Storage::url("img/$newPath");
        }

        Article::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'description' => $data['description'],
            'user_id' => Auth::user()->id,
            'photo' => $photoPath,
        ]);

        return redirect('/dashboard/articles')->with(['success' => 'Artikel baru berhasil ditambahkan']);
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
    public function edit(Article $article)
    {
        return view('dashboard.article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();

        $photoPath = null;

        if ($data['photo']) {

            if ($article->photo) {

                $oldPath = str_replace('/storage/', '', $article->photo);
                Storage::disk('public')->delete($oldPath);
            }

            $newPath = str_replace('tmp/', '', $data['photo']);

            Storage::disk('public')->move(
                $data['photo'],
                "img/$newPath"
            );

            $photoPath = Storage::url("img/$newPath");
        }

        $article->update([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'description' => $data['description'],
            'user_id' => Auth::user()->id,
            'photo' => $photoPath ?? $article->photo, // Jika tidak ada gambar baru, maka gunakan gambar lama

        ]);

        return redirect('/dashboard/articles')->with(['success' => 'Artikel berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article->photo) {
            $photoPath = public_path($article->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $article->delete();

        return redirect('/dashboard/articles')->with(['success' => 'Artikel berhasil dihapus']);
    }
}
