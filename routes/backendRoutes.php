
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProductController;








Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/addproduct',[ProductController::class,'formshow'])->name('addproduct');


Route::get('itemshow',[ProductController::class,'show'])->name('itemshow');


Route::get('editItem/{id}',[ProductController::class,'edit'])->name('editItem');



Route::post('insertmul',[ProductController::class,'insert'])->name('insertmul');


Route::get('itemStatusToggle/{id}',[ProductController::class,'itemStatusToggle'])->name('itemStatusToggle');


Route::get('dltitm/{id}',[ProductController::class,'dltitm'])->name('dltitm');


Route::post('updatesin/{id}',[ProductController::class,'updatesin'])->name('updatesin');

Route::get('addtogal/{id}',[ProductController::class,'addtogal'])->name('addtogal');



Route::get('dltgal/{id}',[ProductController::class,'dltgal'])->name('dltgal');

Route::post('insertgal/{id}',[ProductController::class,'insertgal'])->name('insertgal');









