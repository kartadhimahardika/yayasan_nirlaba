<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticleController;
use App\Http\Controllers\Dashboard\BankController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DonationController as DashboardDonationController;
use App\Http\Controllers\Dashboard\ProgramController as DashboardProgramController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ArticleController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\DonationController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProgramController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/wellcome', function () {
    return view('welcome');
});

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{program:slug}', [ProgramController::class, 'show'])->name('programs.show');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
Route::post('/donation', [DonationController::class, 'store'])->name('donation.store');
Route::post('/donation/upload', [DonationController::class, 'upload'])->name('donation.upload');
Route::get('/donation/{donation:slug}', [DonationController::class, 'show'])->name('donation.show');
Route::get('/confirm', [DonationController::class, 'create'])->name('donation.confirm');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', IsAdmin::class])->name('dashboard');

Route::middleware(['auth', IsAdmin::class])->group(function () {
    // Dashboard
    // Route::get('/dashboard', function () {
    //     return view('dashboard.index');
    // })->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload', [ProfileController::class, 'upload'])->name('profile.upload');

    // Program
    Route::prefix('dashboard/programs')->group(function () {
        Route::get('/', [DashboardProgramController::class, 'index'])->name('dashboard.program');
        Route::post('/', [DashboardProgramController::class, 'store'])->name('program.store');
        Route::get('/create', [DashboardProgramController::class, 'create'])->name('dashboard.program.create');
        Route::post('/upload', [DashboardProgramController::class, 'upload'])->name('program.upload');
        Route::delete('/{program:slug}', [DashboardProgramController::class, 'destroy'])->name('program.destroy');
        Route::get('/{program:slug}/edit', [DashboardProgramController::class, 'edit'])->name('dashboard.program.edit');
        Route::patch('/{program:slug}', [DashboardProgramController::class, 'update']);
        Route::get('/{program:slug}', [DashboardProgramController::class, 'show'])->name('dashboard.program.show');
    });

    // Article
    Route::prefix('dashboard/articles')->group(function () {
        Route::get('/', [DashboardArticleController::class, 'index'])->name('dashboard.article');
        Route::post('/', [DashboardArticleController::class, 'store']);
        Route::get('/create', [DashboardArticleController::class, 'create'])->name('dashboard.article.create');
        Route::post('/upload', [DashboardArticleController::class, 'upload'])->name('article.upload');
        Route::delete('/{article:slug}', [DashboardArticleController::class, 'destroy'])->name('article.destroy');
        Route::get('/{article:slug}/edit', [DashboardArticleController::class, 'edit'])->name('dashboard.article.edit');
        Route::patch('/{article:slug}', [DashboardArticleController::class, 'update']);
        Route::get('/{article:slug}', [DashboardArticleController::class, 'show'])->name('dashboard.article.show');
    });

    // Admin
    Route::prefix('dashboard/admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard.admin');
        Route::post('/', [AdminController::class, 'store']);
        Route::get('/create', [AdminController::class, 'create'])->name('dashboard.admin.create');
        Route::post('/upload', [AdminController::class, 'upload'])->name('admin.upload');
    });

    // Category
    Route::prefix('dashboard/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('dashboard.category');
        Route::post('/', [CategoryController::class, 'store']);
        Route::get('/create', [CategoryController::class, 'create'])->name('dashboard.category.create');
        Route::delete('/{category:slug}', [CategoryController::class, 'destroy'])->name('dashboard.category.destroy');
        Route::get('/{category:slug}/edit', [CategoryController::class, 'edit'])->name('dashboard.category.edit');
        Route::patch('/{category:slug}', [CategoryController::class, 'update'])->name('dashboard.category.update');
    });

    // Donasi
    Route::prefix('dashboard/donation')->group(function () {
        Route::get('/', [DashboardDonationController::class, 'index'])->name('dashboard.donation');
        Route::get('/{donation:slug}', [DashboardDonationController::class, 'show'])->name('dashboard.donation.show');
        Route::delete('/{donation:slug}', [DashboardDonationController::class, 'destroy'])->name('dashboard.donation.destroy');
        Route::patch('/{donation:slug}', [DashboardDonationController::class, 'update'])->name('dashboard.donation.update');
    });

    // No. Rekening
    Route::prefix('dashboard/bank')->group(function () {
        Route::get('/', [BankController::class, 'index'])->name('dashboard.bank');
        Route::post('/', [BankController::class, 'store']);
        Route::get('/create', [BankController::class, 'create'])->name('dashboard.bank.create');
        Route::delete('/{bank:slug}', [BankController::class, 'destroy'])->name('dashboard.bank.destroy');
        Route::get('/{bank:slug}/edit', [BankController::class, 'edit'])->name('dashboard.bank.edit');
        Route::patch('{bank:slug}', [BankController::class, 'update'])->name('dashboard.bank.update');
    });
});

require __DIR__ . '/auth.php';
