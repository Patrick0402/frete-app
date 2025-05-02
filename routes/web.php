<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/frete', [FreteController::class, 'create'])->name('frete.create');
    Route::post('/frete', [FreteController::class, 'store'])->name('frete.store');
    Route::get('/fretes', [FreteController::class, 'index'])->name('frete.index');
    Route::get('/fretes/pdf', [FreteController::class, 'exportPdf'])->name('frete.pdf');
});

require __DIR__.'/auth.php';
