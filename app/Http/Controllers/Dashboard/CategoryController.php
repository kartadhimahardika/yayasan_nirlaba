<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest();

        if (request('keyword')) {
            $categories->where('name', 'like', '%'.request('keyword').'%');
        }

        return view('dashboard.category.index', ['categories' => $categories->paginate(10)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|unique:categories|min:4|max:50',
        ], [
            'name.required' => ':attribute ini wajib diisi',
            'name.unique' => ':attribute ini tidak boleh sama',
            'name.min' => ':attribute ini harus terdiri minimal 4 karakter',
            'name.max' => ':attribute ini maksimal terdiri dari 20 karakter',
        ], [
            'name' => 'Kategori',
        ])->validate();

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect('/dashboard/category')->with(['success' => 'Kategori baru berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        Validator::make($request->all(), [
            'name' => 'required|min:4|max:50|unique:categories,name,'.$category->id,
        ], [
            'name.required' => ':attribute ini wajib diisi',
            'name.unique' => ':attribute ini tidak boleh sama',
            'name.min' => ':attribute ini harus terdiri minimal 4 karakter',
            'name.max' => ':attribute ini maksimal terdiri dari 20 karakter',
        ], [
            'name' => 'Kategori',
        ])->validate();

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect('/dashboard/category')->with(['success' => 'Kategori berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/dashboard/category')->with(['success' => 'Kategori berhasil dihapus']);
    }
}
