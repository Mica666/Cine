<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use App\Models\Combo;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $beneficios = Beneficio::all();
        $peliculas = Pelicula::all();
        $combos = Combo::all();
        return view('Inicio.index', compact('beneficios', 'peliculas', 'combos'));
    }
    public function show(Pelicula $pelicula){
        return view('Inicio.show', compact( 'pelicula'));
}
}
