<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BeneficioController;
use App\Http\Controllers\Admin\HorarioController;
use App\Http\Controllers\Admin\PeliculasController;
use App\Http\Controllers\Admin\ComboController;  
use App\Http\Controllers\Admin\SalaController;
use App\Http\Controllers\Admin\EntradaController;
use App\Http\Controllers\Admin\UsuarioController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('beneficio', BeneficioController::class)->names('admin.Beneficio');
Route::resource('combo', ComboController::class)->names('admin.Combo');
Route::resource('horario', HorarioController::class)->names('admin.Horario');
Route::resource('sala', SalaController::class)->names('admin.Sala');
Route::resource('pelicula', PeliculasController::class)->names('admin.Peliculas');
Route::resource('entrada', EntradaController::class)->names('admin.Entrada');
Route::resource('user', UsuarioController::class)->names('admin.Usuario');

Route::resource('comentario', ComentarioController::class)->names('admin.Comentario');