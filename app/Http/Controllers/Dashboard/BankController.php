<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::latest();

        if (request('keyword')) {
            $banks->where('holder', 'like', '%'.request('keyword').'%');
        }

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
            'holder' => 'required|max:100',
        ], [
            'name.required' => 'Bidang :attribute harus diisi',
            'name.max' => ':attribute tidak boleh lebih dari :max karakter',
            'number.required' => 'Bidang :attribute harus diisi',
            'number.digits_between' => ':attribute harus terdiri dari :min sampai :max digit',
            'holder.required' => 'Bidang :attribute harus diisi',
            'holder.max' => ':attribute tidak boleh lebih dari :max karakter',
        ], [
            'name' => 'Nama Bank',
            'number' => 'Nomor Rekening',
            'holder' => 'Nama Pemilik',
        ])->validate();

        $baseSlug = Str::slug($request->name);
        $slug = $baseSlug;

        $counter = 1;
        while (Bank::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$counter++;
        }

        Bank::create([
            'name' => $request->name,
            'slug' => $slug,
            'number' => $request->number,
            'holder' => $request->holder,
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
    public function edit(Bank $bank)
    {
        return view('dashboard.bank.edit', ['bank' => $bank]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bank $bank)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:50',
            'number' => 'required|numeric|digits_between:8,30|unique:banks,number,'.$bank->id,
            'holder' => 'required|max:100',
        ], [
            'name.required' => 'Bidang :attribute harus diisi',
            'name.max' => ':attribute tidak boleh lebih dari :max karakter',
            'number.required' => 'Bidang :attribute harus diisi',
            'number.digits_between' => ':attribute harus terdiri dari :min sampai :max digit',
            'number.unique' => ':attribute sudah digunakan',
            'holder.required' => 'Bidang :attribute harus diisi',
            'holder.max' => ':attribute tidak boleh lebih dari :max karakter',
        ], [
            'name' => 'Nama Bank',
            'number' => 'Nomor Rekening',
            'holder' => 'Nama Pemilik',
        ])->validate();

        $slug = $bank->slug;
        // Kalau nama bank diedit->generate slug baru
        if ($request->name !== $bank->name) {

            $baseSlug = Str::slug($request->name);
            $slug = $baseSlug;

            $counter = 1;
            while (
                Bank::where('slug', $slug)
                    ->where('id', '!=', $bank->id) // ⬅️ penting
                    ->exists()
            ) {
                $slug = $baseSlug.'-'.$counter++;
            }
        }

        $bank->update([
            'name' => $request->name,
            'slug' => $slug,
            'number' => $request->number,
            'holder' => $request->holder,
        ]);

        return redirect('/dashboard/bank')
            ->with(['success' => 'Nomor Rekening berhasil diperbarui']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();

        return redirect('/dashboard/bank')->with(['success' => 'Nomor Rekening berhasil dihapus']);
    }
}
