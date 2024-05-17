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
//Route::get('/crear_encuesta', [AdminController::class, 'crear_encuesta'])->name('crear_encuesta');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/crear_encuesta', [AdminController::class, 'crear_encuesta'])->name('crear_encuesta');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/store_encuesta', [AdminController::class, 'storeEncuesta'])->name('encuesta.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/encuestas', [AdminController::class, 'listarEncuestas'])->name('encuestas.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/encuestas/{id}/edit', [AdminController::class, 'editarEncuesta'])->name('encuesta.edit');
Route::middleware(['auth:sanctum', 'verified'])->delete('/admin/encuestas/{id}', [AdminController::class, 'eliminarEncuesta'])->name('encuesta.destroy');
Route::put('/encuestas/{id}', [AdminController::class, 'update'])->name('encuesta.update');
