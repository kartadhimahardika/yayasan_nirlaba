<?php

namespace App\Http\Controllers\Home;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(9);

        return view('home.team', ['teams' => $teams]);
    }
}
