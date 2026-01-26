<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Program;
use App\Models\Article;
use App\Models\User;
use App\Models\Donation;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'jumlahKategori' => Category::count(),
            'jumlahProgram'  => Program::count(),
            'jumlahArtikel'  => Article::count(),
            'jumlahDonation' => Donation::count(),
            'jumlahAdmin'    => User::count(),
        ]);
    }
}
