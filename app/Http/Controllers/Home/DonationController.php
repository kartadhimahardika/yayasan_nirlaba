<?php

namespace App\Http\Controllers\Home;

use App\Models\Bank;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function index()
    {
        $banks = Bank::latest()->get();

        $donations = Donation::Terverifikasi()->latest()->paginate(6);

        return view('home.donation.index', [
            'banks' => $banks,
            'donations' => $donations
        ]);
    }

    public function show(Donation $donation)
    {
        return view('home.donation.show', ['donation' => $donation]);
    }

    public function create()
    {
        return view('home.donation.confirm');
    }
}
