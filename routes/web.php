<?php

use App\Actions\Auth\Login\ShowLogin;
use App\Actions\UI\Guest\DisplayHome;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::prefix('auth')->name('auth.')->group(
//    require __DIR__ . "/auth_old.php"
//);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('guest')->name('ui-marketing.')->group(function () {

    Route::prefix("auth")
        ->name("auth.")
        ->group(__DIR__ . "/auth.php");
    require __DIR__."/ui-marketing.php";
});


