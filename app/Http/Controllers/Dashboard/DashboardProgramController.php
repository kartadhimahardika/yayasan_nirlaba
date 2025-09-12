<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DashboardProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::with('categoryProgram')->latest();

        if (request('keyword')) {
            $programs->where('title', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.program.programs', ['programs' => $programs->paginate(10)->withQueryString()]);
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

        // $request->validate([
        //     'title'                 => 'required|unique:programs',
        //     'category_program_id'   => 'required',
        //     'description'           => 'required'
        // ]);

        Validator::make($request->all(), [
            'title'                 => 'required|unique:programs',
            'category_program_id'   => 'required',
            'description'           => 'required'
        ], [
            'title.required'              => 'Field :attribute harus diisi',
            'category_program_id.required' => 'Field :attribute harus dipilih',
            'dedscription.required'     => 'Field :attribute harus diisi'
        ], [
            'title'                 => 'Judul',
            'category_program_id'   => 'Kategori',
            'description'           => 'Deskripsi'
        ])->validate();


        Program::create([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'category_program_id'   => $request->category_program_id,
            'description'           => $request->description,
        ]);

        return redirect('/dashboard/programs')->with(['success' => 'Program baru berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('dashboard.program.program', ['program' => $program]);
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
