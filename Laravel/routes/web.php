<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrcamentoController;
use Illuminate\Support\Facades\Auth;
Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('orcamento.index-client');

Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamento.index');
Route::get('/orcamentos/criar', [OrcamentoController::class, 'create'])->name('orcamento.create');
Route::post('/orcamentos/store', [OrcamentoController::class, 'store'])->name('orcamento.store');
Route::get('/orcamentos/{id}/edit', [OrcamentoController::class, 'edit'])->name('orcamento.edit');
Route::put('/orcamentos/{id}', [OrcamentoController::class, 'update'])->name('orcamento.update');
Route::delete('/orcamentos/{id}', [OrcamentoController::class, 'destroy'])->name('orcamento.destroy'); 


Route::get('/orcamentos/relatorios', [OrcamentoController::class, 'createRelatorio'])->name('orcamento.createRelatorios');