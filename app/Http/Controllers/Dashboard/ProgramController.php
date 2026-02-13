<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\StoreProgramRequest;
use App\Http\Requests\Program\UpdateProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::with('category')->latest();

        if (request('keyword')) {
            $programs->where('title', 'like', '%'.request('keyword').'%');
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

    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:5000',
        ]);

        $path = $request->file('photo')->store('tmp/program', 'public');

        return response()->json([
            'path' => $path,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramRequest $request)
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

        Program::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'photo' => $photoPath,
        ]);

        return redirect()->route('dashboard.program')
            ->with('success', 'Program baru berhasil ditambahkan');
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
    public function update(UpdateProgramRequest $request, Program $program)
    {
        $data = $request->validated();

        $photoPath = null;

        if ($data['photo']) {

            if ($program->photo) {

                $oldPath = str_replace('/storage/', '', $program->photo);
                Storage::disk('public')->delete($oldPath);
            }

            $newPath = str_replace('tmp/', '', $data['photo']);

            Storage::disk('public')->move(
                $data['photo'],
                "img/$newPath"
            );

            $photoPath = Storage::url("img/$newPath");
        }

        $program->update([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'photo' => $photoPath ?? $program->photo, // Jika tidak ada gambar baru, maka gunakan gambar lama
        ]);

        return redirect('/dashboard/programs')->with(['success' => 'Program baru berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        if ($program->photo) {
            $photoPath = public_path($program->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        $program->delete();

        return redirect('/dashboard/programs')->with(['success' => 'Program berhasil dihapus']);
    }
}
