<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FizzyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/fizzies/{fizzy}', [FizzyController::class, 'show'])->name('fizzies.show');

Route::get('/fizzies/{fizzy}/edit', [FizzyController::class, 'edit'])->name('fizzies.edit');
Route::put('/fizzies/{fizzy}', [FizzyController::class, 'update'])->name('fizzies.update');

Route::post('/fizzies', [FizzyController::class, 'store'])->name('fizzies.store');

Route::delete('/fizzies/{fizzy}', [FizzyController::class, 'destroy'])->name('fizzies.destroy');

Route::get('/terms', function() {
    return view('terms');
});
