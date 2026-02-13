<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest();

        if (request('keyword')) {
            $users->where('name', 'like', '%'.request('keyword').'%')
                ->orWhere('username', 'like', '%'.request('keyword').'%');
        }

        return view('dashboard.admin.index', ['users' => $users->paginate(10)->withQueryString()]);
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:5000',
        ]);

        $path = $request->file('avatar')->store('tmp/profile', 'public');

        return response()->json([
            'path' => $path,
        ]);
    }

    public function store(StoreAdminRequest $request)
    {
        $data = $request->validated();

        $photoPath = null;

        if ($data['avatar']) {

            $newPath = str_replace('tmp/', '', $data['avatar']);

            Storage::disk('public')->move(
                $data['avatar'],
                "img/$newPath"
            );

            $photoPath = Storage::url("img/$newPath");
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $photoPath,
        ]);

        return redirect('/dashboard/admin')->with(['success' => 'Admin berhasil ditambahkan']);
    }
}
