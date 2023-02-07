<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entrada;
use App\Models\Hora;
use App\Models\Horario;
use Illuminate\Http\Request;


class EntradaController extends Controller
{
   
    
    public function index()
    {
        $entradas = Entrada::all();
        return view('admin.Entrada.index', compact('entradas'));
    }

  
    public function create()
    {
        $horarios = Horario::all(); 
        return view('admin.Entrada.create', compact('horarios'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
           
        ]);

        $entrada = Entrada::create($request->all());
            return redirect()->route('admin.Entrada.index', $entrada)->with('info', 'Se creo con exito');
    }

   
  
    public function destroy(Entrada $entrada)
    {
        $entrada->delete();
        return redirect()->route('admin.Entrada.index')->with('info', 'Se elimino con exito');
    }
}
