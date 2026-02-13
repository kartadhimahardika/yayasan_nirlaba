<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::latest();

        if (request('keyword')) {
            $donations->where('name', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.donation.index', ['donations' => $donations->paginate(10)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {

        return view('dashboard.donation.show', compact('donation'));
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
    public function update(Request $request, Donation $donation)
    {
        Validator::make($request->all(), [
            'status' => 'required',
        ], [
            'name' => 'status',
        ])->validate();

        $donation->update([
            'status' => $request->status,
        ]);

        return redirect('/dashboard/donation')->with(['success' => 'Donasi Berhasil di Verifikasi']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        if ($donation->photo) {
            $photoPath = public_path($donation->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        $donation->delete();

        return redirect('/dashboard/donation')->with(['success' => 'Data Donasi berhasil dihapus']);
    }
}
