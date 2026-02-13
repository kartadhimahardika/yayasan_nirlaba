<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bank;
use App\Models\Category;
use App\Models\Donation;
use App\Models\Program;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'jumlahKategori' => Category::count(),
            'jumlahNoRekening' => Bank::count(),
            'jumlahProgram' => Program::count(),
            'jumlahArtikel' => Article::count(),
            'jumlahDonation' => Donation::count(),
            'jumlahAdmin' => User::count(),
        ]);
    }
}
