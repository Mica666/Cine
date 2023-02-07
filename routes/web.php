<?php

use App\Http\Controllers\Admin\ComentarioController;
use App\Http\Controllers\Admin\EntradaController;
use App\Http\Controllers\Beneficiocontroller;
use App\Http\Controllers\Carteleracontroller;
use App\Http\Controllers\Combocontroller;
use App\Http\Controllers\ComentariooController;
use App\Http\Controllers\EntradaLController;
use App\Http\Controllers\Horariocontroller;
use App\Http\Controllers\InicioController;
use App\Http\Livewire\Ntrada;
use App\Models\Comentario;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('Inicio.index');
Route::get('Inicio/{pelicula}', [InicioController::class, 'show'])->name('Inicio.show');

Route::get('/Cartelera', [Carteleracontroller::class, 'index'])->name('Cartelera.index');
Route::get('Cartelera/{pelicula}', [Carteleracontroller::class, 'show'])->name('Cartelera.show');

Route::get('/Beneficio', [Beneficiocontroller::class, 'index'])->name('Beneficio.index');

Route::get('/Combo', [Combocontroller::class, 'index'])->name('Combo.index');

Route::get('/Horario', [Horariocontroller::class, 'index'])->name('Horario.index');


Route::get('/Comentario', [ComentariooController::class, 'index'])->name('Comentarioo.index');

Route::post('/Comentario', [ComentariooController::class, 'store'])->name('Comentarioo.store');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
