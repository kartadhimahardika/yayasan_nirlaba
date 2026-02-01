<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::latest();

        return view('dashboard.bank.index', ['banks' => $banks->paginate(10)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:50',
            'number' => 'required|numeric|digits_between:8,30',
            'holder' => 'required|max:100'
        ], [
            'name.required' => 'Bidang :attribute harus diisi',
            'name.max' => ':attribute tidak boleh lebih dari :max karakter',
            'number.required' => "Bidang :attribute harus diisi",
            'number.digits_between' => ':attribute harus terdiri dari :min sampai :max digit',
            'holder.required' => "Bidang :attribute harus diisi",
            'holder.max' => ':attribute tidak boleh lebih dari :max karakter',
        ], [
            'name' => 'Nama Bank',
            'number' => 'Nomor Rekening',
            'holder' => 'Nama Pemilik'
        ])->validate();

        Bank::create([
            'name' => $request->name,
            'number' => $request->number,
            'holder' => $request->holder
        ]);

        return redirect('/dashboard/bank')->with(['success' => 'Nomor Rekening baru berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
