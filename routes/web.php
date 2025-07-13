<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index']);

// Route::get('/', function () {
//     return view('consult');
// });

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [ClientController::class, 'new'])->name('new');

Route::delete('/{id}', [ClientController::class, 'destroy'])->name('destroy');
