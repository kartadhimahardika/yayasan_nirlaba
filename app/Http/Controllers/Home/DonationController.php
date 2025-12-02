<?php

namespace App\Http\Controllers\Home;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::Terverifikasi()->latest()->paginate(6);

        return view('home.donation.index', ['donations' => $donations]);
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
