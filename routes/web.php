<?php

use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [usuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuario/crear', [usuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuario', [usuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuario/edit/{id}', [usuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuario/update/{id}', [usuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuario/delete/{id}', [usuarioController::class, 'destroy'])->name('usuarios.destroy');