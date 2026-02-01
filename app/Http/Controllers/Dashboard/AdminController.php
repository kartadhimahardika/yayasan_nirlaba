<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest();

        if (request('keyword')) {
            $users->where('name', 'like', '%' . request('keyword') . '%')
                ->orWhere('username', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.admin.index', ['users' => $users->paginate(10)->withQueryString()]);
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|string|min:8'
        ], [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Panjang nama maksimal 255 karakter',
            'username.required' => 'Nama pengguna wajib diisi',
            'username.max' => 'Panjang nama pengguna maksimal 255 karakter',
            'username.unique' => 'Nama pengguna sudah digunakan',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal terdiri dari 8 karakter'
        ])->validate();

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/dashboard/admin')->with(['success' => 'Admin berhasil ditambahkan']);
    }
}
