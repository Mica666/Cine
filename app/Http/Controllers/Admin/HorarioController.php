<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Horario;
use App\Models\Pelicula;
use App\Models\Sala;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
   

    public function index()
    {
        $horarios = Horario::all();
        return view('admin.Horario.index',compact('horarios'));
    }

 
    public function create()
    {
        $pelicula = Pelicula::pluck('nombre', 'id');
        $horario = Horario::all();
        $sala = Sala::pluck('id');
        return view('admin.Horario.create',compact('horario', 'pelicula', 'sala'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'hora' => 'required',
            'fecha' => 'required',
        ]);

        $horario = Horario::create($request->all());
            return redirect()->route('admin.Horario.index', $horario)->with('creado', 'ok');
    }
    

  
    public function edit(Horario $horario)
    {
        $pelicula = Pelicula::pluck('nombre', 'id');
        $sala = Sala::pluck('id');
        return view('admin.Horario.edit',compact('horario', 'pelicula', 'sala'));
    }

    
    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'hora' => 'required',
            'fecha' => 'required',
        ]);

        $horario->update($request->all());
            return redirect()->route('admin.Horario.index', $horario)->with('act', 'ok');
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('admin.Horario.index')->with('eliminar', 'ok');
    }
}
