<?php

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
    Route::get('/cursos/{cruso}/edit', 'edit')->name('cursos_edit');
});

#ARTICULOS