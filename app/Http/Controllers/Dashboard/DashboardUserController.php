<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('dashboard.user.index', ['users' => $users]);
    }
}
