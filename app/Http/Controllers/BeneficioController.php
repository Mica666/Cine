<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use App\Models\Dia;
use Illuminate\Http\Request;

class BeneficioController extends Controller
{
    public function index(){
        $beneficios = Beneficio::all();
        $dias = Dia::all();
        return view('Beneficio.index', compact('beneficios', 'dias'));
    }
}
