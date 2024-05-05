<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastro-alunos', [App\Http\Controllers\AlunoController::class, 'index'])->name('cadastro-alunos.index');

Route::get('/alunos/{id}', [App\Http\Controllers\AlunoController::class, 'getDadosAluno']);

Route::put('/alunos/{id}', [App\Http\Controllers\AlunoController::class, 'update']);


Route::get('/listagem-salas', function () {
    return view('listagem-salas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
