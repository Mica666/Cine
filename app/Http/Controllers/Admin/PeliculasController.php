<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clasificacion;
use App\Models\Genero;
use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Support\Facades\Storage;

class PeliculasController extends Controller
{
   
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('admin.Peliculas.index', compact('peliculas'));
    }


    public function create()
    {
        $clasificacion = Clasificacion::pluck('nombre', 'id'); 
        $genero = Genero::pluck('nombre', 'id');
        return view('admin.Peliculas.create', compact('clasificacion', 'genero'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:peliculas',
            'sinopsis' => 'required',
            'director' => 'required',
            'reparto' => 'required',
            'duracion' => 'required',
            'trailer_url' => 'required'
        ]);

        $pelicula = Pelicula::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('image', $request->file('file'));
            $pelicula->image()->create([
            'url' => $url]);
        }

            return redirect()->route('admin.Peliculas.index', $pelicula)->with('creado', 'ok');
    }

    public function show(Pelicula $pelicula){
        
        return view('admin.Peliculas.show', [
            'pelicula'=>$pelicula ]);
        }
  
    public function edit(Pelicula $pelicula)
    {
        /* $this->authorize('author', $pelicula); */

        $clasificacion = Clasificacion::pluck('nombre', 'id'); 
        $genero = Genero::pluck('nombre', 'id');
        return view('admin.Peliculas.edit', compact('pelicula', 'clasificacion', 'genero'));
    }

  
    public function update(Request $request, Pelicula $pelicula)
    {
         $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:peliculas,slug,$pelicula->id",
            'sinopsis' => 'required',
            'director' => 'required',
            'reparto' => 'required',
            'duracion' => 'required',
            'trailer_url' => 'required'
        ]);

        $pelicula->update($request->all());

        if ($request->file('file')){
            $url = Storage::put('image', $request->file('file'));
            $pelicula->image()->update([
            'url' => $url]);
        }


            return redirect()->route('admin.Peliculas.index', $pelicula)->with('act', 'ok');
    }

   
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('admin.Peliculas.index')->with('eliminar', 'ok');
    }
}
