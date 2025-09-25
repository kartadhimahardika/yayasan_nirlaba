<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index()
    {
        $users = User::latest();

        if (request('keyword')) {
            $users->where('name', 'like', '%' . request('keyword') . '%')
                ->orWhere('username', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.user.index', ['users' => $users->paginate(10)->withQueryString()]);
    }
}
