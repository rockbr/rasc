<?php

use App\Http\Controllers\Admin\TomadorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::prefix('admin')->group(function () {
    Route::get('/tomadores', [TomadorController::class, 'index'])->name('admin.tomador.index');
    Route::get('/tomadores/{id}', [TomadorController::class, 'show'])->name('admin.tomadores.show');
    Route::post('/tomadores', [TomadorController::class, 'store'])->name('admin.tomador.store');
    Route::put('/tomadores/{id}', [TomadorController::class, 'update'])->name('admin.tomador.update');
    Route::delete('/tomadores/{id}', [TomadorController::class, 'destroy'])->name('admin.tomador.destroy');
});

require __DIR__.'/auth.php';
