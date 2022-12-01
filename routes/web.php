<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');

#CURSOS
Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index')->name('cursos_index');
    Route::post('/curso', 'store')->name('cursos_store');
    Route::get('/cursos/create', 'create')->name('cursos_create');
    Route::get('/cursos/{curso}', 'show')->name('cursos_show');
    Route::put('/cursos/{curso}', 'update')->name('cursos_update');
    Route::delete('/cursos/{curso}', 'destroy')->name('cursos_destroy');
    Route::get('/cursos/{curso}/edit', 'edit')->name('cursos_edit');
});

#ARTICULOS
Route::controller(ArticulosController::class)->group( function () {
    Route::get('/articulos', 'index')->name('articulos_index');
    Route::post('/articulos', 'store')->name('articulos_store');
    Route::get('/articulos/create', 'create')->name('articulos_create');
    Route::get('/articulos/{articulo}', 'show')->name('articulos_show');
    Route::put('/articulos/{articulo}', 'update')->name('articulos_update');
    Route::delete('/articulos/{articulo}', 'destroy')->name('articulos_destroy');
    Route::get('/articulos/{articulo}/edit', 'edit')->name('articulos_edit');
});