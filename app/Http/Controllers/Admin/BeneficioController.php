<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficio;
use App\Models\Dia;
use Illuminate\Support\Facades\Storage;

class BeneficioController extends Controller
{
   
    public function index()
    {
        $beneficios = Beneficio::all();
        return view('admin.Beneficio.index', compact('beneficios'));
    }


    public function create()
    {
        $dia = Dia::pluck('dia', 'id');
        return view('admin.Beneficio.create', compact('dia'));
    }

    
    public function store(Request $request)
    {

     $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:beneficios',
            'descripcion' => 'required',
            'descuento' => 'required',
            'file' => 'required',
        ]); 

    $beneficio = Beneficio::create($request->all());

    if ($request->file('file')){
        $url = Storage::put('image', $request->file('file'));
        $beneficio->image()->create([
        'url' => $url]);
    }
      
     return redirect()->route('admin.Beneficio.index', $beneficio)->with('creado', 'ok');
    }

 
  
    public function edit(Beneficio $beneficio)
    {
        $dia = Dia::pluck('dia', 'id');
        /* $this->authorize('author', $beneficio); */
        return view('admin.Beneficio.edit', compact('beneficio', 'dia'));
    }

  
    public function update(Request $request, Beneficio $beneficio)
    {
         $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:beneficios,slug,$beneficio->id",
            'descripcion' => 'required',
            'descuento' => 'required',
            'file' => 'required'
        ]); 
        
        $beneficio->update($request->all());

        if ($request->file('file')){
            $url = Storage::put('image', $request->file('file'));
            $beneficio->image()->update([
            'url' => $url]);
        }

      
            return redirect()->route('admin.Beneficio.index', $beneficio)->with('act', 'ok');
    }

   
    public function destroy(Beneficio $beneficio)
    {
        $beneficio->delete();
        return redirect()->route('admin.Beneficio.index')->with('eliminar', 'ok');
    }
}
