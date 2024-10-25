<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/farmerfrgister', [UserController::class, 'formview'])->name('form.view');
Route::post('/farmerfrgister', [ProductController::class, 'add'])->name('form.submit'); // For handling form submission


// Route::get('/product/{id}', [ProductController::class, 'showProduct']);
Route::get('/product', [ProductController::class, 'showProduct']);
Route::get('/productadd', [ProductController::class, 'store']);

require __DIR__.'/auth.php';
