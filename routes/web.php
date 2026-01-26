<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\TeamController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ArticleController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\ProgramController;
use App\Http\Controllers\Home\DonationController;
use App\Http\Controllers\Dashboard\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Dashboard\DashboardUserController;
use App\Http\Controllers\Dashboard\DashboardAdminController;
use App\Http\Controllers\Dashboard\DashboardArticleController;
use App\Http\Controllers\Dashboard\DashboardProgramController;
use App\Http\Controllers\Dashboard\DashboardCategoryController;
use App\Http\Controllers\Dashboard\DashboardDonationController;

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

    // Program
    Route::prefix('dashboard/programs')->group(function () {
        Route::get('/', [DashboardProgramController::class, 'index'])->name('dashboardPrograms');
        Route::post('/', [DashboardProgramController::class, 'store']);
        Route::get('/create', [DashboardProgramController::class, 'create']);
        Route::delete('/{program:slug}', [DashboardProgramController::class, 'destroy']);
        Route::get('/{program:slug}/edit', [DashboardProgramController::class, 'edit']);
        Route::patch('/{program:slug}', [DashboardProgramController::class, 'update']);
        Route::get('/{program:slug}', [DashboardProgramController::class, 'show']);
    });

    // Article
    Route::prefix('dashboard/articles')->group(function () {
        Route::get('/', [DashboardArticleController::class, 'index'])->name('dashboardArticle');
        Route::post('/', [DashboardArticleController::class, 'store']);
        Route::get('/create', [DashboardArticleController::class, 'create']);
        Route::delete('/{article:slug}', [DashboardArticleController::class, 'destroy']);
        Route::get('/{article:slug}/edit', [DashboardArticleController::class, 'edit']);
        Route::patch('/{article:slug}', [DashboardArticleController::class, 'update']);
        Route::get('/{article:slug}', [DashboardArticleController::class, 'show']);
    });

    // Admin
    Route::prefix('dashboard/admin')->group(function () {
        Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboardAdmin');
        Route::post('/', [DashboardAdminController::class, 'store']);
        Route::get('/create', [DashboardAdminController::class, 'create']);
    });

    // Category
    Route::prefix('dashboard/category')->group(function () {
        Route::get('/', [DashboardCategoryController::class, 'index'])->name('dashboardCategory');
        Route::post('/', [DashboardCategoryController::class, 'store']);
        Route::get('/create', [DashboardCategoryController::class, 'create']);
    });

    // Donasi
    Route::prefix('dashboard/donation')->group(function () {
        Route::get('/', [DashboardDonationController::class, 'index'])->name('dashboardDonation');
        Route::get('/{donation:slug}', [DashboardDonationController::class, 'show']);
    });
});

require __DIR__ . '/auth.php';
