<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Donation\StoreDonationRequest;
use App\Models\Bank;
use App\Models\Donation;
use App\Services\FonnteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    public function index()
    {
        $banks = Bank::latest()->get();

        $donations = Donation::Terverifikasi()->latest()->paginate(6);

        return view('home.donation.index', [
            'banks' => $banks,
            'donations' => $donations,
        ]);
    }

    public function show(Donation $donation)
    {
        return view('home.donation.show', ['donation' => $donation]);
    }

    public function create()
    {
        $banks = Bank::latest()->get();
        return view('home.donation.confirm', compact('banks'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'proof' => 'required|image|max:5000',
        ]);

        $path = $request->file('proof')->store('tmp/donation', 'public');

        return response()->json([
            'path' => $path,
        ]);
    }

    public function store(StoreDonationRequest $request)
    {
        $data = $request->validated();

        $photoPath = null;

        if ($data['proof']) {

            $newPath = str_replace('tmp/', '', $data['proof']);

            Storage::disk('public')->move(
                $data['proof'],
                "img/$newPath"
            );

            $photoPath = Storage::url("img/$newPath");
        }

        $slug = Str::slug($data['name']) . '-' . Str::random(6);

        $donation = Donation::create([
            'slug' => $slug,
            'bank_id' => $data['bank_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'amount' => $data['amount'],
            'proof' => $photoPath,
            'message' => $data['message'],
        ]);

        $adminNumber = env('ADMIN_WHATSAPP');
        $message = "Ada donasi baru:\n" .
            "Nama Donatur: {$donation->name}\n" .
            "Nomor HP: {$donation->phone}\n" .
            "Jumlah Donasi: Rp {$donation->amount}\n" .
            "Pesan: {$donation->message}\n" .
            'Silakan cek dashboard untuk verifikasi.';

        FonnteService::sendWhatsApp($adminNumber, $message);

        return redirect('/donation')->with(['success' => 'Donasi Berhasil Dikonfirmasi']);
    }
}
