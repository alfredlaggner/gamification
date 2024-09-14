<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderCollectibleController;
use App\Http\Controllers\SellCollectibleController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AvailableCollectiblesController;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/available-collectibles', [AvailableCollectiblesController::class, 'index'])->name('available.collectibles');    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for ordering collectibles
    Route::get('/order-collectibles', [OrderCollectibleController::class, 'index'])->name('order.index');
    Route::get('/order-collectibles/create', [OrderCollectibleController::class, 'create'])->name('order.create');
    Route::post('/order-collectibles', [OrderCollectibleController::class, 'store'])->name('order.store');

    // Routes for selling collectibles
    Route::get('/sell-collectibles', [SellCollectibleController::class, 'index'])->name('sell.index');
    Route::get('/sell-collectibles/create', [SellCollectibleController::class, 'create'])->name('sell.create');
    Route::post('/sell-collectibles', [SellCollectibleController::class, 'store'])->name('sell.store');
    
    Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');

});

require __DIR__.'/auth.php';
