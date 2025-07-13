<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index']);
Route::get('/edit/{id}', [ClientController::class, 'editPage'])->name('edit');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [ClientController::class, 'new'])->name('new');

Route::put('/edit/{id}', [ClientController::class, 'update'])->name('sendEdit');

Route::delete('/{id}', [ClientController::class, 'destroy'])->name('destroy');
