<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->filter(request(['search', 'category']))->paginate(6);

        return view('home.programs', compact('programs'));
    }

    public function show(Program $program)
    {

        return view('home.program', compact('program'));
    }
}
