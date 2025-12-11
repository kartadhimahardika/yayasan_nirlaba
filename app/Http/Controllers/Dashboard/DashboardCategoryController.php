<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest();

        if (request('keyword')) {
            $categories->where('name', 'like', '%' . request('keyword') . '%');
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
            'name' => 'required|unique:category_programs|min:4|max:20'
        ], [
            'name.required' => ':attribute ini wajib diisi',
            'name.unique' => ':attribute ini tidak boleh sama',
            'name.min' => ':attribute ini harus terdiri minimal 4 karakter',
            'name.max' => ':attribute ini maksimal terdiri dari 20 karakter'
        ], [
            'name' => 'Kategori'
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
