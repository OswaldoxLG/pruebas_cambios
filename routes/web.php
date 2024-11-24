<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/cliente/crear', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/cliente', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/cliente/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/cliente/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');