<?php

namespace App\Http\Controllers\Home;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\CategoryProgram;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(4);

        return view('home.programs', compact('programs'));
    }

    public function show(Program $program)
    {

        return view('home.program', compact('program'));
    }

    public function showCategory(CategoryProgram $categoryProgram)
    {

        return view('home.programs', [
            'programs' => $categoryProgram->programs()->paginate(2)
        ]);
    }
}
