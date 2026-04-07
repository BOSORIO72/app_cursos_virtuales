<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InscripcionController;

Route::resource('cursos', CursoController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('inscripciones', InscripcionController::class);

Route::get('/', fn() => redirect('/cursos'));
