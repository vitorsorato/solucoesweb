<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrcamentoController;
use Illuminate\Support\Facades\Auth;
Auth::routes();


Route::get('/', [HomeController::class, 'indexClient'])->name('orcamento.index-client');


Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamento.index');
Route::get('/orcamentos/criar', [OrcamentoController::class, 'create'])->name('orcamento.create');






////////////////////////////////////////////////////////////////////////////////////////////////////////
use App\Http\Controllers\ClientController;

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');

Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


