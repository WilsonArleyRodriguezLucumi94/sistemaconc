<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//index admin controller
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/crear_encuesta', [AdminController::class, 'crear_encuesta'])->name('crear_encuesta');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/store_encuesta', [AdminController::class, 'storeEncuesta'])->name('encuesta.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/encuestas', [AdminController::class, 'listarEncuestas'])->name('encuestas.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/encuestas/{id}/edit', [AdminController::class, 'editarEncuesta'])->name('encuesta.edit');
Route::middleware(['auth:sanctum', 'verified'])->delete('/admin/encuestas/{id}', [AdminController::class, 'eliminarEncuesta'])->name('encuesta.destroy');
Route::put('/encuestas/{id}', [AdminController::class, 'update'])->name('encuesta.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/crear_caracterizacion', [AdminController::class, 'crear_caracterizacion'])->name('crear_caracterizacion');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/listar_caracterizacion', [AdminController::class, 'listar_caracterizacion'])->name('listar_caracterizacion');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/crear_preguntas', [AdminController::class, 'crear_preguntas'])->name('crear_preguntas');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/listar_preguntas', [AdminController::class, 'listar_preguntas'])->name('listar_preguntas');
//caracterizacion

Route::get('/caracterizacion/crear', [AdminController::class, 'crear_caracterizacion'])->name('caracterizacion.create');
Route::post('/caracterizacion', [AdminController::class, 'storeCaracterizacion'])->name('caracterizacion.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/listarcaracterizacion', [AdminController::class, 'listarCaracterizacion'])->name('listarCaracterizacion');



//preguntas
Route::get('/pregunta/crear', [AdminController::class, 'crear_preguntas'])->name('pregunta.create');
Route::post('/pregunta', [AdminController::class, 'storePregunta'])->name('preguntas.store');


//caracterizacion uno

Route::get('/admin/caracterizacion_uno', [AdminController::class, 'caracterizacion_uno'])->name('admin.caracterizacion_uno');
Route::post('/admin/guardar-pregunta', [AdminController::class, 'guardarPregunta'])->name('admin.guardarPregunta');




Route::middleware(['auth:sanctum', 'verified'])->get('/admin/caracterizacion_uno/{id}/create', [AdminController::class, 'caracterizacion_uno'])->name('caracterizacion_uno.create');
//Route::middleware(['auth:sanctum', 'verified'])->get('/admin/encuestas/{id}/edit', [AdminController::class, 'editarEncuesta'])->name('encuesta.edit');
Route::post('/guardar-caracterizacion', [App\Http\Controllers\AdminController::class, 'guardarCaracterizacionUno'])->name('guardar.caracterizacion');
//caracterizacion 2
//Route::get('/admin/caracterizacion2', [AdminController::class, 'verCaracterizacion2'])->name('ver.caracterizacion2');
Route::post('/guardar-caracterizacion2', [AdminController::class, 'guardarCaracterizacion2'])->name('guardar.caracterizacion2');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/verCaracterizacion2/{id}/create', [AdminController::class, 'verCaracterizacion2'])->name('caracterizacion_dos.create');
//caracterizacion 3
Route::get('/admin/caracterizacion3/{id}/create', [AdminController::class, 'verCaracterizacion3'])->name('caracterizacion_tres.create');
Route::post('/guardar-caracterizacion3', [AdminController::class, 'guardarCaracterizacion3'])->name('guardar.caracterizacion3');

//caracterizacion 4
Route::get('/admin/aracterizacion4/{id}/create', [AdminController::class, 'verCaracterizacion4'])->name('caracterizacion_cuatro.create');
Route::post('/guardar-caracterizacion4', [AdminController::class, 'guardarCaracterizacion4'])->name('guardar.caracterizacion4');