<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



require __DIR__.'/backendRoutes.php';
require __DIR__.'/frontendRoutes.php';





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
