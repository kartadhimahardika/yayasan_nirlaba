<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::with('category')->latest();

        if (request('keyword')) {
            $programs->where('title', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.program.index', ['programs' => $programs->paginate(10)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title'                 => 'required|unique:programs|min:4|max:255',
            'category_id'   => 'required',
            'description'           => 'required|min:50'
        ], [
            'title.required'                => 'Field :attribute harus diisi',
            'category_id.required'  => 'Field :attribute harus dipilih',
            'description.required'          => 'Field :attribute harus diisi'
        ], [
            'title'                 => 'Judul',
            'category_id'   => 'Kategori',
            'description'           => 'Deskripsi'
        ])->validate();


        Program::create([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'category_id'   => $request->category_id,
            'description'           => $request->description,
        ]);

        return redirect('/dashboard/programs')->with(['success' => 'Program baru berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('dashboard.program.show', ['program' => $program]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('dashboard.program.edit', ['program' => $program]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        Validator::make($request->all(), [
            'title'         => 'required|min:4|max:255|unique:programs,title,' . $program->id,
            'category_id'   => 'required',
            'description'   => 'required'
        ], [
            'title.required'        => 'Field :attribute harus diisi',
            'category_id.required'  => 'Field :attribute harus dipilih',
            'description.required'  => 'Field :attribute harus diisi'
        ], [
            'title'                 => 'Judul',
            'category_id'   => 'Kategori',
            'description'           => 'Deskripsi'
        ])->validate();

        $program->update([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'category_id'   => $request->category_id,
            'description'           => $request->description,
        ]);

        return redirect('/dashboard/programs')->with(['success' => 'Program baru berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect('/dashboard/programs')->with(['success' => 'Program berhasil dihapus']);
    }
}
