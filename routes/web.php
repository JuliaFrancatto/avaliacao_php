<?php

use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_professor', [ProfessorController::class, "formCriarProfessor"]);
Route::get('/lista_professores', [ProfessorController::class, "listar"]);
Route::post('/criar_professor', [ProfessorController::class, 'criar']);
Route::delete("/deletar_professor/{id}", [ProfessorController::class, 'deletar']);
Route::get("/editar_professor/{id}", [ProfessorController::class, 'formEditarProfessor']);
Route::put("/editar_professor/{id}", [ProfessorController::class, 'editar']);



Route::get('/cadastro_materia', [MateriaController::class, "formCriarMateria"]);
Route::get('/listar_materia', [MateriaController::class, "listar"]);
Route::post('/criar_materia', [MateriaController::class, 'criar']);
Route::delete("/deletar_materia/{id}", [MateriaController::class, 'deletar']);
Route::get("/editar_materia/{id}", [MateriaController::class, 'formEditarMateria']);
Route::put("/editar_materia/{id}", [MateriaController::class, 'editar']);



Route::get('/', [AppController::class, 'inicial']);