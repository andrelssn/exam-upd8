<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RepresentativesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index']);
Route::get('/edit/{id}', [ClientController::class, 'editPage'])->name('edit');

Route::get('/representatives/city', [RepresentativesController::class, 'representativesCity']);
Route::get('/representatives/client', [RepresentativesController::class, 'representativesClient']);
Route::get('/representatives/management', [RepresentativesController::class, 'representativesManagement']);
Route::get('/representatives/edit/{id}', [RepresentativesController::class, 'editPage'])->name('editRepresentative');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [ClientController::class, 'new'])->name('new');
Route::post('/representatives/management', [RepresentativesController::class, 'new'])->name('newRepresentative');

Route::put('/edit/{id}', [ClientController::class, 'update'])->name('sendEdit');
Route::put('/representatives/edit/{id}', [RepresentativesController::class, 'update'])->name('sendEditRepresentative');

Route::delete('/{id}', [ClientController::class, 'destroy'])->name('destroy');
Route::delete('/representatives/management/{id}', [RepresentativesController::class, 'destroy'])->name('destroyRepresentative');
