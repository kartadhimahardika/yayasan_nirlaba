<?php

namespace App\Http\Controllers;

use App\Models\CategoryProgram;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(4);

        return view('programs', compact('programs'));
    }

    public function show(Program $program)
    {

        return view('program', compact('program'));
    }

    public function showCategory(CategoryProgram $categoryProgram)
    {

        return view('programs', [
            'programs' => $categoryProgram->programs()->paginate(2)
        ]);
    }
}
